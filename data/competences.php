<?php
/**
 * Stack technique. Chaque compétence "langage" peut avoir un exemple de code
 * affiché en modale (clé 'exemple'), sinon elle reste un simple tag.
 */

return [
    [
        'titre' => 'Langages',
        'items' => [
            [
                'nom' => 'Python', 'logo' => 'python/python-original.svg',
                'exemple' => "nom = input(\"Entrez votre nom : \")\nage = int(input(\"Entrez votre âge : \"))\n\ndef verifier_majorite(age):\n    if age >= 18:\n        return \"majeur\"\n    else:\n        return \"mineur\"\n\nresultat = verifier_majorite(age)\n\nprint(nom, \"est\", resultat)",
            ],
            [
                'nom' => 'MySQL', 'logo' => 'mysql/mysql-original.svg',
                'exemple' => "SELECT c.nom_client,\n       COUNT(cmd.id_commande) AS nombre_commandes,\n       SUM(cmd.montant) AS total_achats\nFROM clients c\nJOIN commandes cmd\n    ON c.id_client = cmd.id_client\nWHERE cmd.statut = 'Livrée'\nAND cmd.montant > 100\nGROUP BY c.nom_client\nORDER BY total_achats DESC;",
            ],
            [
                'nom' => 'Java', 'logo' => 'java/java-original.svg',
                'exemple' => "public class Bonjour {\n    public static void main(String[] args) {\n        String nom = \"Alice\";\n\n        if (nom != null) {\n            System.out.println(\"Bonjour \" + nom + \" !\");\n        }\n    }\n}",
            ],
            [
                'nom' => 'AngularJS', 'logo' => 'angularjs/angularjs-original.svg',
            ],
            [
                'nom' => 'HTML', 'logo' => 'html5/html5-original.svg',
                'exemple' => "<div class=\"veille-card\">\n    <span class=\"veille-date\">Janv. 2025</span>\n    <h3>Interfaces minimalistes et accessibles</h3>\n    <p>\n        En début 2025, les tendances UI/UX misent sur des interfaces plus simples, lisibles et inclusives.\n    </p>\n</div>",
            ],
            [
                'nom' => 'CSS', 'logo' => 'css3/css3-original.svg',
                'exemple' => ".veille-date {\n    display: inline-block;\n    font-family: 'JetBrains Mono', monospace;\n    font-size: 0.65em;\n    color: var(--mauve);\n    margin-bottom: 1.2em;\n    font-weight: 700;\n    letter-spacing: .12em;\n    text-transform: uppercase;\n    background: var(--mauve-pale);\n    border: 1px solid rgba(124,63,160,0.25);\n    padding: 0.2em 0.7em;\n}",
            ],
            [
                'nom' => 'PHP', 'logo' => 'php/php-original.svg',
            ],
        ],
    ],
    [
        'titre' => 'Outils & Environnements',
        'items' => [
            ['nom' => 'VS Code',       'logo' => 'vscode/vscode-original.svg'],
            ['nom' => 'GitHub',        'logo' => 'github/github-original.svg', 'invert' => true],
            ['nom' => 'VirtualBox',    'logo' => 'linux/linux-original.svg'],
            ['nom' => 'IntelliJ IDEA', 'logo' => 'intellij/intellij-original.svg'],
        ],
    ],
    [
        'titre' => 'Savoir-faire',
        'items' => [
            ['nom' => 'Algorithmique',      'type' => 'soft', 'icone' => 'algo'],
            ['nom' => 'Base de données',    'type' => 'soft', 'icone' => 'bdd'],
            ['nom' => 'Versionning Git',    'type' => 'soft', 'logo' => 'git/git-original.svg'],
            ['nom' => 'Documentation',      'type' => 'soft', 'icone' => 'doc'],
        ],
    ],
];
