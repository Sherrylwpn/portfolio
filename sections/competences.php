<?php
// Icônes SVG pour les compétences "savoir-faire" sans logo externe
$soft_icones = [
    'algo' => '<svg class="skill-logo-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>',
    'bdd'  => '<svg class="skill-logo-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>',
    'doc'  => '<svg class="skill-logo-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
];

$devicon_base = 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/';
?>
    <!-- COMPÉTENCES -->
    <section id="competences" class="section">
      <div class="section-label">Compétences</div>
      <h2 class="section-title">Stack technique</h2>
      <div class="skills-grid">

        <?php foreach ($competences as $groupe): ?>
        <div class="skill-group">
          <div class="skill-group-title"><?= htmlspecialchars($groupe['titre']) ?></div>
          <div class="skill-tags skill-tags-icons">
            <?php foreach ($groupe['items'] as $item):
                $clickable = !empty($item['exemple']);
                $classes = 'skill-tag skill-icon-tag';
                if (($item['type'] ?? '') === 'soft') { $classes .= ' soft'; }
                else { $classes .= ' main'; }
                if ($clickable) { $classes .= ' clickable'; }
            ?>
            <span
              class="<?= $classes ?>"
              <?php if ($clickable): ?>
              data-titre="<?= htmlspecialchars($item['nom']) ?>"
              data-texte="<?= htmlspecialchars($item['exemple']) ?>"
              <?php endif; ?>
            >
              <?php if (!empty($item['icone'])): ?>
                <?= $soft_icones[$item['icone']] ?? '' ?>
              <?php elseif (!empty($item['logo'])): ?>
                <img src="<?= htmlspecialchars($devicon_base.$item['logo']) ?>" alt="<?= htmlspecialchars($item['nom']) ?>" class="skill-logo<?= !empty($item['invert']) ? ' skill-logo-invert' : '' ?>">
              <?php endif; ?>
              <span><?= htmlspecialchars($item['nom']) ?></span>
            </span>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>
