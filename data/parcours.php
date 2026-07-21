<?php
/**
 * Frise chronologique du parcours : une colonne par catégorie.
 * 'icone' fait référence à une clé définie dans sections/parcours.php.
 */

return [
    [
        'titre'  => 'Professionnel',
        'icone'  => 'pro',
        'items'  => [
            ['date' => 'Oct. 2025', 'titre' => 'Direction du Numérique et de la Modernisation', 'sous' => 'Stage en entreprise'],
            ['date' => 'Nov. 2023', 'titre' => 'Syndicat Mixte des Transports Interurbains',      'sous' => 'Stage en entreprise'],
            ['date' => 'Oct. 2021', 'titre' => 'Station Mobil',                                   'sous' => 'Stage en entreprise'],
        ],
    ],
    [
        'titre'  => 'Scolaire',
        'icone'  => 'scolaire',
        'items'  => [
            ['date' => '2025-2026', 'titre' => 'BTS SIO SLAM',            'sous' => 'Diplôme en cours'],
            ['date' => '2024',      'titre' => 'Bac STMG SIG',            'sous' => 'Diplôme obtenu'],
            ['date' => '2021',      'titre' => 'Brevet des Collèges',     'sous' => 'Diplôme obtenu'],
        ],
    ],
    [
        'titre'  => 'Engagement',
        'icone'  => 'engagement',
        'items'  => [
            ['date' => 'Oct. 2023', 'titre' => 'Cadet de la Gendarmerie', 'sous' => 'Formation civique & disciplinaire'],
        ],
    ],
];
