    <!-- HERO -->
    <section id="accueil" class="section hero-section">
      <div class="hero-tag"><?= htmlspecialchars($config['hero']['tag']) ?></div>
      <h1 class="hero-title">
        <?php foreach ($config['hero']['titre'] as $i => $ligne): ?>
        <span class="line<?= $i === 1 ? ' accent-text' : '' ?>"><?= htmlspecialchars($ligne) ?></span>
        <?php endforeach; ?>
      </h1>
      <p class="hero-sub"><?= htmlspecialchars($config['hero']['sous_titre']) ?></p>
      <div class="hero-cta">
        <a href="#projets" class="btn-primary">Voir mes projets</a>
        <a href="#contact" class="btn-ghost">Me contacter</a>
      </div>
      <div class="hero-scroll">
        <span>Défiler</span>
        <div class="scroll-line"></div>
      </div>
    </section>
