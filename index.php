<?php
/**
 * Portfolio de Sherryl TAURAATUA — BTS SIO SLAM
 * Point d'entrée : charge les données, puis assemble les includes/sections.
 * Chaque partie du site (contenu, présentation) est séparée en fichiers dédiés
 * pour faciliter la maintenance : /data (contenu), /includes (structure),
 * /sections (blocs de page), /assets (CSS/JS).
 */

declare(strict_types=1);

// --- Chargement des données ---
$config      = require __DIR__ . '/data/config.php';
$navigation  = require __DIR__ . '/data/navigation.php';
$apropos     = require __DIR__ . '/data/apropos.php';
$parcours    = require __DIR__ . '/data/parcours.php';
$competences = require __DIR__ . '/data/competences.php';
$projets     = require __DIR__ . '/data/projets.php';
$veille      = require __DIR__ . '/data/veille.php';
$contact     = require __DIR__ . '/data/contact.php';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/sidebar.php';
?>

  <!-- MAIN -->
  <main>
    <?php
    require __DIR__ . '/sections/hero.php';
    require __DIR__ . '/sections/apropos.php';
    require __DIR__ . '/sections/parcours.php';
    require __DIR__ . '/sections/competences.php';
    require __DIR__ . '/sections/projets.php';
    require __DIR__ . '/sections/veille.php';
    require __DIR__ . '/sections/contact.php';
    require __DIR__ . '/includes/footer.php';
    ?>
  </main>

  <?php require __DIR__ . '/includes/modal.php'; ?>

  <script src="assets/script.js"></script>
</body>
</html>
