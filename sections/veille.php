    <!-- VEILLE TECHNO -->
    <section id="veille" class="section">
      <div class="section-label">Veille technologique</div>
      <h2 class="section-title">Les tendances UI/UX modernes</h2>

      <div class="veille-carousel">
        <div class="veille-track">
          <?php foreach ($veille as $carte): ?>
          <div class="veille-card">
            <span class="veille-date"><?= htmlspecialchars($carte['date']) ?></span>
            <h3><?= htmlspecialchars($carte['titre']) ?></h3>
            <p><?= htmlspecialchars($carte['texte']) ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="veille-controls">
          <button class="veille-btn" id="veille-prev" aria-label="Précédent">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"><polyline points="15 18 9 12 15 6"/></svg>
          </button>
          <span class="veille-counter"><span id="veille-current">1</span> / <span id="veille-total"><?= count($veille) ?></span></span>
          <button class="veille-btn" id="veille-next" aria-label="Suivant">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"><polyline points="9 18 15 12 9 6"/></svg>
          </button>
        </div>
      </div>
    </section>
