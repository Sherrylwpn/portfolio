/* ==========================================================
   script.js — Comportement du portfolio
   (navigation, liste des projets, pop-up de détail, carrousel)
   Les données des projets sont dans projets.js
   ========================================================== */

/* ---------- Apparition des sections au défilement ---------- */
(function () {
  const fade = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.08 });
  document.querySelectorAll('.section').forEach(sec => fade.observe(sec));
})();

/* ---------- Navigation : lien actif au défilement ---------- */
(function () {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      navLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === '#' + entry.target.id);
      });
    });
  }, { rootMargin: '-35% 0px -60% 0px', threshold: 0 });

  sections.forEach(s => observer.observe(s));

  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    });
  });
})();

/* ---------- Projets : cartes + pop-up ---------- */
(function () {
  if (typeof PROJETS === 'undefined') return;

  const list = document.getElementById('projectList');
  const modal = document.getElementById('projectModal');
  const modalType = document.getElementById('modalType');
  const modalTitle = document.getElementById('modalTitle');
  const modalBody = document.getElementById('modalBody');
  const closeBtn = document.getElementById('modalClose');
  let lastTrigger = null;

  const countEl = document.getElementById('countProjets');
  if (countEl) countEl.textContent = PROJETS.length;

  /** Petit utilitaire : crée un élément avec classe et texte (le texte est toujours échappé). */
  function el(tag, className, text) {
    const node = document.createElement(tag);
    if (className) node.className = className;
    if (text !== undefined) node.textContent = text;
    return node;
  }

  /* --- Petits rectangles de projets --- */
  PROJETS.forEach((p, i) => {
    const tile = el('button', 'project-tile');
    tile.type = 'button';
    tile.setAttribute('aria-haspopup', 'dialog');
    tile.append(
      el('span', 'tile-num', String(i + 1).padStart(2, '0')),
      el('span', 'tile-name', p.titre),
      el('span', 'tile-arrow', '+')
    );
    tile.setAttribute('aria-label', 'Voir le détail du projet ' + p.titre);
    tile.addEventListener('click', () => openProject(p, tile));
    list.append(tile);
  });

  /* --- Extraits de code --- */
  function buildCodeBlock(snippets) {
    const wrap = el('section', 'modal-section');
    wrap.append(el('h4', 'modal-h', 'Extraits de code'));

    const tabs = el('div', 'code-tabs');
    tabs.setAttribute('role', 'tablist');
    const box = el('div', 'code-box');
    const bar = el('div', 'code-bar');
    const fileName = el('span', 'code-file');
    const copy = el('button', 'code-copy', 'Copier');
    copy.type = 'button';
    bar.append(fileName, copy);
    const pre = el('pre');
    const code = el('code');
    pre.append(code);
    box.append(bar, pre);

    let current = snippets[0];

    function show(s, tabBtn) {
      current = s;
      fileName.textContent = s.fichier || '';
      code.className = 'language-' + (s.langage || 'plaintext');
      code.removeAttribute('data-highlighted');
      code.textContent = s.code;
      if (window.hljs && s.langage && s.langage !== 'plaintext') {
        try { window.hljs.highlightElement(code); } catch (e) { /* le code reste lisible sans coloration */ }
      }
      tabs.querySelectorAll('button').forEach(b => b.setAttribute('aria-selected', String(b === tabBtn)));
      copy.textContent = 'Copier';
    }

    snippets.forEach((s, i) => {
      const b = el('button', 'code-tab', s.label || 'Extrait ' + (i + 1));
      b.type = 'button';
      b.setAttribute('role', 'tab');
      b.addEventListener('click', () => show(s, b));
      tabs.append(b);
    });
    if (snippets.length > 1) wrap.append(tabs);
    wrap.append(box);

    copy.addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(current.code);
        copy.textContent = 'Copié';
      } catch (e) {
        copy.textContent = 'Échec';
      }
      setTimeout(() => { copy.textContent = 'Copier'; }, 1800);
    });

    show(snippets[0], tabs.querySelector('button'));
    return wrap;
  }

  /* --- Ouverture du pop-up --- */
  function openProject(p, trigger) {
    lastTrigger = trigger;
    modalType.textContent = p.type || '';
    modalTitle.textContent = p.titre;
    modalBody.replaceChildren();

    const intro = el('section', 'modal-section');
    intro.append(el('h4', 'modal-h', 'Présentation'));
    p.description.forEach(par => intro.append(el('p', null, par)));
    modalBody.append(intro);

    if (p.technos && p.technos.length) {
      const s = el('section', 'modal-section');
      s.append(el('h4', 'modal-h', 'Technologies et domaines'));
      const tags = el('div', 'skill-tags');
      p.technos.forEach(t => tags.append(el('span', 'skill-tag main', t)));
      s.append(tags);
      modalBody.append(s);
    }

    if (p.lien && p.lien.url) {
      const s = el('section', 'modal-section');
      const a = el('a', 'btn-ghost', p.lien.label || 'Voir le projet');
      a.href = p.lien.url;
      a.target = '_blank';
      a.rel = 'noopener noreferrer';
      s.append(a);
      modalBody.append(s);
    }

    if (p.images && p.images.length) {
      const s = el('section', 'modal-section');
      s.append(el('h4', 'modal-h', 'Captures d\u2019écran'));
      const grid = el('div', 'shots');
      p.images.forEach(src => {
        const img = el('img');
        img.src = src;
        img.alt = 'Capture d\u2019écran du projet ' + p.titre;
        img.loading = 'lazy';
        grid.append(img);
      });
      s.append(grid);
      modalBody.append(s);
    }

    if (p.snippets && p.snippets.length) modalBody.append(buildCodeBlock(p.snippets));

    modalBody.scrollTop = 0;
    document.body.classList.add('modal-open');
    modal.showModal();
  }

  /* --- Fermeture --- */
  closeBtn.addEventListener('click', () => modal.close());
  modal.addEventListener('click', e => { if (e.target === modal) modal.close(); }); // clic sur le fond
  modal.addEventListener('close', () => {
    document.body.classList.remove('modal-open');
    if (lastTrigger) lastTrigger.focus();
  });
})();

/* ---------- Carrousel de veille technologique ---------- */
(function () {
  const root = document.getElementById('veilleCarousel');
  if (!root) return;
  const track = root.querySelector('.veille-track');
  const viewport = root.querySelector('.veille-viewport');
  const cards = Array.from(track.children);
  const prev = root.querySelector('[data-dir="prev"]');
  const next = root.querySelector('[data-dir="next"]');
  const counter = root.querySelector('.veille-counter');
  const fill = root.querySelector('.veille-bar-fill');
  const pad = n => String(n).padStart(2, '0');
  let index = 0;

  const perView = () => parseInt(getComputedStyle(root).getPropertyValue('--per-view'), 10) || 1;
  const maxIndex = () => Math.max(0, cards.length - perView());

  function update() {
    const pv = perView();
    index = Math.min(Math.max(index, 0), maxIndex());
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    const step = cards[0].getBoundingClientRect().width + gap;
    track.style.transform = 'translateX(' + (-index * step) + 'px)';

    const last = Math.min(index + pv, cards.length);
    counter.textContent = (pv > 1 ? pad(index + 1) + '–' + pad(last) : pad(index + 1)) + ' / ' + pad(cards.length);
    fill.style.width = (last / cards.length * 100) + '%';

    prev.disabled = index === 0;
    next.disabled = index === maxIndex();
  }

  prev.addEventListener('click', () => { index--; update(); });
  next.addEventListener('click', () => { index++; update(); });

  root.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft') { index--; update(); }
    if (e.key === 'ArrowRight') { index++; update(); }
  });

  let startX = null;
  viewport.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
  viewport.addEventListener('touchend', e => {
    if (startX === null) return;
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) { index += dx < 0 ? 1 : -1; update(); }
    startX = null;
  });

  window.addEventListener('resize', update);
  window.addEventListener('load', update);
  update();
})();