# Portfolio — Sherryl TAURAATUA (version PHP)

Ton `index.html` a été transformé en `index.php`, découpé en plusieurs fichiers
pour que chaque partie du site soit séparée et facile à modifier.

## Arborescence

```
portfolio/
├── index.php              → page principale, assemble tout le reste
├── data/                   → le CONTENU du site (textes, listes...)
│   ├── config.php          → nom, titre, texte du hero
│   ├── navigation.php      → liens du menu latéral
│   ├── apropos.php         → texte "Qui suis-je", options SLAM/SISR, stats
│   ├── parcours.php        → frise pro / scolaire / engagement
│   ├── competences.php     → langages, outils, savoir-faire
│   ├── projets.php         → tes réalisations
│   ├── veille.php          → cartes du carrousel de veille techno
│   └── contact.php         → téléphone / email
├── includes/               → la STRUCTURE commune du site
│   ├── head.php             → <head>, polices, fond animé
│   ├── sidebar.php           → menu latéral
│   ├── modal.php              → fenêtre modale (exemples de code)
│   └── footer.php              → pied de page
├── sections/                → une section = une page du menu
│   ├── hero.php, apropos.php, parcours.php, competences.php,
│   └── projets.php, veille.php, contact.php
└── assets/
    ├── style.css            → ta feuille de style (repalette, voir plus bas)
    ├── script.js            → le JS externalisé (carrousel, modale, scroll)
    └── img/                 → mets ta photo ici (voir ci-dessous)
```

**Pour ajouter/modifier un projet, une date de parcours, une compétence...**
tu n'as qu'à éditer le fichier correspondant dans `data/`, sans toucher au HTML.

## Faire fonctionner le site

Un fichier `.php` ne s'ouvre pas en double-cliquant dessus (ça ouvrirait le
code source dans le navigateur) : il faut un serveur PHP pour l'interpréter.
Deux solutions simples :

**1. Avec PHP installé (le plus rapide pour tester)**
```bash
cd portfolio
php -S localhost:8000
```
puis ouvre http://localhost:8000 dans ton navigateur.

**2. Avec XAMPP / WAMP / MAMP (pratique pour un usage durable)**
Copie le dossier `portfolio/` dans le dossier `htdocs` (XAMPP/MAMP) ou `www`
(WAMP), démarre Apache, puis ouvre `http://localhost/portfolio/`.

## Ta photo

Le code attend une image à `assets/img/sherryl-tauraatua.jpg`. Dépose-la dans
ce dossier (ou change le chemin dans `data/config.php`, clé `photo`).

## Ce qui a changé côté design

Le style d'origine ("néon mauve/cyberpunk") a été assoupli pour un rendu plus
sobre et professionnel :
- palette recentrée sur un bleu indigo discret + touche turquoise, sur fond anthracite ;
- effets de lueur ("glow") très réduits, ombres plus douces ;
- polices remplacées par un trio plus neutre : Space Grotesk (titres), Inter
  (texte courant), JetBrains Mono (labels/code) ;
- coins légèrement arrondis au lieu d'angles vifs.

La mise en page, les animations et toutes les interactions (carrousel, menu,
modale de code) restent identiques à l'original.
