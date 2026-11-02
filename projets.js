/* ==========================================================
   projets.js — Données des projets du portfolio
   ----------------------------------------------------------
   Pour modifier un projet, il suffit de changer son bloc ici.
   Pour en ajouter un, copie un bloc existant et colle-le
   à la suite (n'oublie pas la virgule entre deux blocs).

   Champs d'un projet :
   - id          : identifiant unique (sans espace)
   - titre       : titre affiché
   - type        : ligne de contexte sous le titre
   - resume      : phrase courte affichée dans la liste
   - description : tableau de paragraphes (pop-up)
   - technos     : tableau de technologies / mots-clés
   - lien        : { url, label } — optionnel, laisser "" pour masquer
   - images      : chemins de captures d'écran — optionnel, [] pour masquer
   - snippets    : extraits de code (voir ci-dessous) — [] pour masquer

   Un extrait de code :
   {
     label   : "Nom de l'onglet",
     fichier : "chemin/du/fichier.ext",
     langage : "php" | "javascript" | "java" | "dart" | "css" | "html" | "sql" | "python",
     code    : `ton code ici`
   }

   ATTENTION dans les extraits (entre les accents graves ` `) :
   - un accent grave ` dans ton code doit s'écrire \`
   - la séquence ${ dans ton code doit s'écrire \${
   - un antislash \ dans ton code doit s'écrire \\
   ========================================================== */

const PROJETS = [
  {
    id: "suivi-stagiaire",
    titre: "Suivi des stagiaires",
    type: "Application web — réalisée durant un stage",
    resume: "Application web permettant d'évaluer les stagiaires et de suivre leur progression.",
    description: [
      "Application web conçue et développée au cours d'un stage, destinée au suivi des stagiaires accueillis dans la structure.",
      "Elle permet aux encadrants de noter chaque stagiaire et de consulter l'évolution de ses résultats dans le temps, afin de centraliser un suivi jusque-là dispersé."
    ],
    technos: ["Développement web", "Stage"],
    lien: { url: "", label: "" },
    images: [],
    snippets: []
  },
  {
    id: "jeu-numerique",
    titre: "Jeu de la Semaine du numérique",
    type: "Jeu interactif — projet d'établissement",
    resume: "Jeu de questions sur la prévention et le bon usage des outils numériques.",
    description: [
      "Jeu de questions-réponses réalisé pour la Semaine du numérique, avec pour objectif de sensibiliser le public à la prévention des risques liés aux outils numériques.",
      "Le parcours est conçu pour être accessible à tous : questions courtes, retour immédiat sur chaque réponse et explication pédagogique."
    ],
    technos: ["Développement web", "Prévention"],
    lien: { url: "", label: "" },
    images: [],
    snippets: []
  },
  {
    id: "station-n",
    titre: "Projet Station N",
    type: "Contribution à un projet existant",
    resume: "Exploitation et affichage de l'évolution des immatriculations en Nouvelle-Calédonie.",
    description: [
      "Participation à un projet déjà existant portant sur les données d'immatriculation en Nouvelle-Calédonie et sur l'affichage de leur évolution.",
      "Ce projet m'a permis de m'intégrer à une base de code déjà en place, de comprendre le travail de l'équipe en amont et de contribuer à la présentation des données."
    ],
    technos: ["AngularJS", "Données"],
    lien: { url: "", label: "" },
    images: [],
    snippets: []
  },
  {
    id: "site-lycee",
    titre: "Site web du lycée",
    type: "Site no-code — Lycée Dick Ukeiwe",
    resume: "Site web réalisé avec une plateforme no-code, destiné à mon établissement.",
    description: [
      "Site web conçu pour le Lycée Dick Ukeiwe à l'aide d'une plateforme no-code.",
      "Le projet portait sur la structure de l'information, la navigation et la mise en page, afin de présenter l'établissement de façon claire à ses élèves, ses familles et ses partenaires."
    ],
    technos: ["No-code", "Conception de site"],
    lien: { url: "", label: "" },
    images: [],   // ex. ["images/lycee-accueil.png", "images/lycee-formations.png"]
    snippets: []  // pas de code sur un projet no-code : ajoute plutôt des captures d'écran
  },
  {
    id: "portfolio",
    titre: "Portfolio",
    type: "Site personnel",
    resume: "Le site que vous consultez : parcours, compétences, projets et veille technologique.",
    description: [
      "Site personnel présentant mon parcours, mes compétences, mes projets et ma veille technologique.",
      "Il est développé sans framework, en HTML, CSS et JavaScript : les projets sont décrits dans un fichier de données séparé et s'affichent dans une fenêtre de détail."
    ],
    technos: ["HTML", "CSS", "JavaScript"],
    lien: { url: "", label: "" },
    images: [],
    snippets: [
      {
        label: "Carrousel (JS)",
        fichier: "script.js — veille technologique",
        langage: "javascript",
        code: `function update() {
  const pv = perView();
  index = Math.min(Math.max(index, 0), maxIndex());
  const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
  const step = cards[0].getBoundingClientRect().width + gap;
  track.style.transform = 'translateX(' + (-index * step) + 'px)';

  const last = Math.min(index + pv, cards.length);
  fill.style.width = (last / cards.length * 100) + '%';

  prev.disabled = index === 0;
  next.disabled = index === maxIndex();
}`
      },
      {
        label: "Thème (CSS)",
        fichier: "style.css",
        langage: "css",
        code: `:root {
  --bg: #f7f3fd;
  --surface: #ffffff;
  --text: #33284a;
  --accent: #8a5cc8;
  --accent-2: #6b43a6;
  --font-title: "Syne", system-ui, sans-serif;
  --font-body: "DM Sans", system-ui, sans-serif;
}`
      }
    ]
  },
  {
    id: "projet-hotel",
    titre: "Projet Hôtel",
    type: "Plateforme de réservation",
    resume: "Site recensant les hôtels de Nouvelle-Calédonie, inspiré de Booking.com.",
    description: [
      "Site web regroupant l'ensemble des hôtels de la Nouvelle-Calédonie, inspiré du fonctionnement de Booking.com mais exclusivement dédié au territoire.",
      "Le projet couvre la modélisation des données (hôtels, chambres, réservations), l'affichage des offres et la consultation par les visiteurs."
    ],
    technos: ["PHP", "HTML", "Base de données"],
    lien: { url: "", label: "" },
    images: [],
    snippets: [
      {
        label: "Extrait 1",
        fichier: "nom-du-fichier.php",
        langage: "php",
        code: `try {
    $pdo = getDB();
    $hotels = $pdo->query("
        SELECT id, nom_hotel, adresse, province, proximite, photo,
               email, telephone, jardin, wifi_gratuit, piscine,
               vue_mer, activites, description_activites
        FROM formulaire_hotel
        ORDER BY id ASC
    ")->fetchAll();
} catch (PDOException $e) {
    $hotels = [];
    error_log($e->getMessage());
}`
      }
    ]
  },
  {
    id: "caillou-evasion",
    titre: "Caillou Évasion",
    type: "Application web touristique",
    resume: "Application regroupant les lieux emblématiques de la Nouvelle-Calédonie.",
    description: [
      "Application web recensant les lieux emblématiques de la Nouvelle-Calédonie pour aider les visiteurs et les résidents à préparer leurs sorties.",
      "Les lieux sont stockés dans une base de données et présentés de manière structurée afin d'être facilement consultables."
    ],
    technos: ["Java", "HTML", "Base de données"],
    lien: { url: "", label: "" },
    images: [],
    snippets: []
  }
];