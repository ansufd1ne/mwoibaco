<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Planners</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="navbar-logo">
                <a href="index.php"><i class="fas fa-book"></i> Mwoibaco</a>
            </div>
            <nav class="navbar-menu">
                <div class="menu-toggle" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="navbar-links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="products.php">Planners</a></li>
                    <li><a href="blog.php">Blogs</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="navbar-cart">
                        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Section produits -->
     <section class="products-section">
        <div class="container">
            <h2>Nos Planners</h2>
            <p>Découvrez notre collection de planners conçus pour chaque besoin.</p>

            <div class="products-grid">
                <!-- Product 1 -->
                 <div class="products-card">
                    <img src="assets/img/product1.jpg" alt="Planners hebdomadaire">
                    <div class="products-info">
                        <h3>Planner Hebdomadaire</h3>
                        <p class="price">12,99 €</p>
                        <a href="product.php" class="btn btn-primary">Voir Détail</a>
                    </div>
                 </div>

                <!-- Product 3 -->
                <div class="products-card">
                    <img src="assets/img/product2.jpg" alt="Planners mensuel">
                    <div class="products-info">
                        <h3>Planner Mensuel</h3>
                        <p class="price">9,99 €</p>
                        <a href="product.php" class="btn btn-primary">Voir Détail</a>
                    </div>
                 </div>

                 <!-- Product 3 -->
                <div class="products-card">
                    <img src="assets/img/product3.jpg" alt="Planners étudiant">
                    <div class="products-info">
                        <h3>Planner Étudiant</h3>
                        <p class="price">11,99 €</p>
                        <a href="product.php" class="btn btn-primary">Voir Détail</a>
                    </div>
                 </div>

                 <!-- Product 4 -->
                <div class="products-card">
                    <img src="assets/img/product4.jpg" alt="Planners quotidient">
                    <div class="products-info">
                        <h3>Planner Quotidient</h3>
                        <p class="price">10,99 €</p>
                        <a href="product.php" class="btn btn-primary">Voir Détail</a>
                    </div>
                 </div>
            </div>
        </div>
     </section>

     <?php include 'footer.html'; ?>

     <script >
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