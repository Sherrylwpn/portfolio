// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + entry.target.id) {
          link.classList.add('active');
        }
      });
    }
  });
}, { threshold: 0.4 });

sections.forEach(s => observer.observe(s));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    e.preventDefault();
    const target = document.querySelector(a.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth' });
  });
});

// Fade-in sections
const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.section').forEach(s => fadeObserver.observe(s));

// Carrousel Veille Techno
const track = document.querySelector('.veille-track');
const cards = document.querySelectorAll('.veille-card');
const btnPrev = document.getElementById('veille-prev');
const btnNext = document.getElementById('veille-next');
const currentEl = document.getElementById('veille-current');
const totalEl = document.getElementById('veille-total');

let current = 0;
const total = cards.length;
totalEl.textContent = total;

function goTo(index) {
  current = index;
  track.style.transform = `translateX(-${current * 100}%)`;
  currentEl.textContent = current + 1;
  btnPrev.disabled = current === 0;
  btnNext.disabled = current === total - 1;
}

btnPrev.addEventListener('click', () => { if (current > 0) goTo(current - 1); });
btnNext.addEventListener('click', () => { if (current < total - 1) goTo(current + 1); });

goTo(0);

// Modal compétences
const modal = document.getElementById('skill-modal');
const modalText = document.getElementById('skill-modal-text');
const modalCaption = document.getElementById('skill-modal-caption');
const modalClose = document.querySelector('.skill-modal-close');
const modalBackdrop = document.querySelector('.skill-modal-backdrop');

document.querySelectorAll('.skill-tag.clickable').forEach(tag => {
  tag.addEventListener('click', () => {
    const titre = tag.getAttribute('data-titre');
    const texte = tag.getAttribute('data-texte');
    modalCaption.textContent = titre;
    const tmp = document.createElement("textarea");
    tmp.innerHTML = texte;
    modalText.textContent = tmp.value;
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
  });
});

function closeModal() {
  modal.classList.remove('open');
  document.body.style.overflow = '';
}

modalClose.addEventListener('click', closeModal);
modalBackdrop.addEventListener('click', closeModal);
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
