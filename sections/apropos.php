    <!-- À PROPOS -->
    <section id="apropos" class="section">
      <div class="section-label">À propos</div>
      <h2 class="section-title">Qui suis-je ?</h2>
      <div class="about-grid">
        <div class="about-text">
          <?php foreach ($apropos['intro'] as $paragraphe): ?>
          <p><?= $paragraphe /* contient volontairement des balises <strong> */ ?></p>
          <?php endforeach; ?>

          <div class="option-cards">
            <?php foreach ($apropos['options'] as $option): ?>
            <div class="option-card<?= $option['actif'] ? ' active' : '' ?>">
              <div class="option-dot<?= $option['nom'] === 'SISR' ? ' sisr' : '' ?>"></div>
              <div>
                <strong><?= htmlspecialchars($option['nom']) ?></strong>
                <span><?= htmlspecialchars($option['desc']) ?></span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="about-stats">
          <?php foreach ($apropos['stats'] as $stat): ?>
          <div class="stat-card">
            <span class="stat-num"><?= (int) $stat['valeur'] ?></span>
            <span class="stat-label"><?= htmlspecialchars($stat['label']) ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
