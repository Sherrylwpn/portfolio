  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-inner">
      <div class="profile-block">
        <div class="photo-wrapper">
          <img src="<?= htmlspecialchars($config['photo']) ?>" alt="<?= htmlspecialchars($config['prenom'].' '.$config['nom']) ?>" class="sidebar-photo">
          <div class="photo-ring"></div>
        </div>
        <div class="profile-info">
          <span class="profile-name"><?= htmlspecialchars($config['nom']) ?></span>
          <span class="profile-name accent"><?= htmlspecialchars($config['prenom']) ?></span>
          <span class="profile-badge"><?= htmlspecialchars($config['filiere']) ?></span>
        </div>
      </div>

      <nav>
        <ul>
          <?php foreach ($navigation as $i => $lien): ?>
          <li>
            <a href="#<?= htmlspecialchars($lien['id']) ?>" class="nav-link">
              <span class="nav-icon"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
              <span><?= htmlspecialchars($lien['label']) ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>

    </div>
  </aside>
