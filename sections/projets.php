    <!-- PROJETS -->
    <section id="projets" class="section">
      <div class="section-label">Projets</div>
      <h2 class="section-title">Réalisations</h2>
      <div class="projects-grid">

        <?php foreach ($projets as $i => $projet): ?>
        <div class="project-card">
          <div class="project-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
          <div class="project-body">
            <div class="project-tags">
              <?php foreach ($projet['tags'] as $tag): ?>
              <span><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
            <h3><?= htmlspecialchars($projet['titre']) ?></h3>
            <p><?= htmlspecialchars($projet['desc']) ?></p>
          </div>
          <div class="project-footer">
            <span class="project-status active"><?= htmlspecialchars($projet['statut']) ?></span>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>
