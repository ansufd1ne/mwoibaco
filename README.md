mwoibaco-site/
│
├── index.html               → Page d'accueil
├── products.html            → Tous les planners/calendriers
├── product.html             → Fiche produit (modèle réutilisable avec JS)
├── about.html               → Page À propos
├── contact.html             → Page Contact
├── checkout.html            → Panier / Paiement
├── success.html             → Page après paiement
│
├── assets/                  → Tous les fichiers liés au design
│   ├── css/
│   │   └── style.css        → Feuille de style principale
│   ├── js/
│   │   ├── main.js          → JS général (navigation, interactivité)
│   │   ├── products.js      → Données produits + affichage dynamique
│   │   └── cart.js          → Gestion du panier
│   ├── img/
│   │   └── ...              → Logos, mockups des planners, icônes, etc.
│   └── fonts/
│       └── ...              → Polices personnalisées si besoin
│
├── downloads/               → Fichiers numériques à livrer après achat
│   └── ...                  → Accès restreint ou automatique après paiement
│
├── backend/                 → (optionnel) Code serveur pour Stripe
│   └── server.js (Node.js)  → Gestion de la session de paiement
│
└── README.md                → Notes de projet










SITE REMASTERRISÉ


mwoibaco-site/
│
├── index.php            → Page d'accueil
├── products.php         → Page Produits
├── product.php          → Fiche Produit
├── contact.php          → Page Contact
├── about.php            → Page À propos
├── cart.php             → Page Panier
│
├── menu.html            → Menu (inclus avec PHP)
├── footer.html          → Footer (inclus avec PHP)
│
├── assets/
│   ├── css/
│   │   └── style.css    → Feuille de style principale
│   ├── js/
│   │   └── main.js      → JavaScript pour les interactions
│   └── img/             → Images (hero, produits, icônes)
│
└── send_message.php     → Script PHP pour envoyer les messages de contact