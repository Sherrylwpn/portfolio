<?php
// Icônes SVG associées à chaque colonne du parcours (clé => balisage)
$parcours_icones = [
    'pro' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>',
    'scolaire' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
    'engagement' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
];
?>
    <!-- PARCOURS -->
    <section id="parcours" class="section">
      <div class="section-label">Parcours</div>
      <h2 class="section-title">Mon historique</h2>
      <div class="timeline-grid">

        <?php foreach ($parcours as $colonne): ?>
        <div class="timeline-col">
          <div class="timeline-col-title">
            <?= $parcours_icones[$colonne['icone']] ?? '' ?>
            <?= htmlspecialchars($colonne['titre']) ?>
          </div>
          <div class="timeline">
            <?php foreach ($colonne['items'] as $item): ?>
            <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-content">
                <span class="timeline-date"><?= htmlspecialchars($item['date']) ?></span>
                <strong><?= htmlspecialchars($item['titre']) ?></strong>
                <span><?= htmlspecialchars($item['sous']) ?></span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>
