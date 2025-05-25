<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="navbar-logo">
                <a href="index.html"><i class="fas fa-book"></i> Mwoibaco</a>
            </div>
            <nav class="navbar-menu">
                <div class="menu-toggle" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="navbar-links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="products.html">Planners</a></li>
                    <li><a href="blog.html">Blogs</a></li>
                    <li><a href="about.html">À propos</a></li>
                    <li><a href="contact.html ">Contact</a></li>
                    <li class="navbar-cart">
                        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section fiche produit -->
     <section class="product-detail">
        <div class="container">
            <div class="product-grid">
                <!-- Image du produit 1 -->
                 <div class="product-image">
                    <img src="assets/img/product1.jpg" alt="Planner hebdomadaire">
                 </div>

                 <!-- Détails du produit 1 -->
                 <div class="product-info">
                    <h1>Planner Hebdomadaire</h1>
                    <p class="price">12,99 €</p>
                    <p class="description">
                        Organise ta semaine de manière efficace avec ce planner hebdomadaire. Planifie tes tâches, fixe tes objectifs et reste productif.
                    </p>
                    <ul class="product-features">
                        <li>✅ Format numérique (PDF)</li>
                        <li>✅ Utilisable sur tablette (GoodNotes, Notability)</li>
                        <li>✅ Imprimable en haute qualité</li>
                        <li>✅ Design minimaliste et élégant</li>
                    </ul>

                    <!-- Bouton d'achat -->
                     <div class="product-buttons">
                        <a href="#" class="btn btn-primary">Ajouter au Panier</a>
                        <a href="products.html" class="btn btn-secondary">Retour aux Produits</a>
                     </div>
                 </div>
            </div>
        </div>
     </section>

     <?php include 'footer.html'; ?>

     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionner les éléments nécessaires
            const menuToggle = document.querySelector('.menu-toggle');
            const navbarLinks = document.querySelector('.navbar-links');
            
            // Ajouter un événement click au bouton du menu burger
            if (menuToggle && navbarLinks) {
                menuToggle.addEventListener('click', function() {
                    // Basculer la classe 'active' pour afficher/masquer le menu
                    navbarLinks.classList.toggle('active');
                    
                    // Optionnel: Changer l'icône du menu burger (selon l'icône utilisée)
                    // Par exemple, si vous utilisez des icônes Font Awesome:
                    // if (this.innerHTML === '<i class="fas fa-bars"></i>') {
                    //    this.innerHTML = '<i class="fas fa-times"></i>';
                    // } else {
                    //    this.innerHTML = '<i class="fas fa-bars"></i>';
                    // }
                });
                
                // Fermer le menu quand on clique sur un lien (optionnel)
                const links = navbarLinks.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', function() {
                        navbarLinks.classList.remove('active');
                        // Rétablir également l'icône si nécessaire
                    });
                });
            }
        });

     </script>

    
</body>
</html>