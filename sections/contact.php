<?php
// Icônes SVG pour les coordonnées de contact
$contact_icones = [
    'telephone' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 5.55 5.55l.96-.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>',
    'email'     => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
];
?>
    <!-- CONTACT -->
    <section id="contact" class="section contact-section">
      <div class="section-label">Contact</div>
      <h2 class="section-title">Mes coordonnées</h2>

      <p class="contact-intro">
        Voici mes coordonnées professionnelles.
      </p>

      <div class="contact-cards static-contacts">
        <?php foreach ($contact as $coord): ?>
        <div class="contact-card static">
          <div class="contact-icon">
            <?= $contact_icones[$coord['type']] ?? '' ?>
          </div>
          <div>
            <span class="contact-label"><?= htmlspecialchars($coord['label']) ?></span>
            <span class="contact-value"><?= htmlspecialchars($coord['valeur']) ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
