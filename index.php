<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mwoibaco - Planners Numériques</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Section d'en-tête -->
<?php include 'menu.html'; ?>

    <!-- Section principale d'introduction du site -->
    <section class="hero-section ">
        <div class="hero-container">
            <div class="hero-text">
                <h1>
                    Organise ta vie avec des
                    <span class="highlight">planners digitals</span> <!-- Mettez en avant le mot "planners digitals" -->
                </h1>
    
                <!-- Phrase d'accroche -->
                 <p>
                    Des planners et calendriers numériques beaux et fonctionnels conçus pour booster ta productivité et simplifier ton organisation.
                 </p>
    
                <!-- Bouton d'appel à l'action -->
                 <div class="hero-button">
                    <a href="products.php" class="btn btn-primary">Voir les planners</a>
                    <a href="about.php" class="btn btn-secondary">En savoir plus</a>
                 </div>
            </div>
    
            <!-- Image illustrant un planners -->
             <div class="hero-image">
                <img src="https://images.pexels.com/photos/6197116/pexels-photo-6197116.jpeg" 
                    alt="Planners numérique sur tablette">
             </div>
        </div>
        
    </section>

    <!-- Section de présentation des bénéfices -->
     <section class="features-section ">
        <div class="container">

           <!-- Titre de section -->
            <div class="section-title">
                <h2>Pourquoi choisir un planner numérique ?</h2>
                <p>Découvrez les avantages de passer au numérique pour mieux organiser vos journées.</p>
            </div> 

            <!-- Grille des carte -->
             <div class="features-grid">

                <!-- Carte 1 -->
                <div class="features-card">
                    <div class="features-icon"><i class="fas fa-clock"></i></div>
                    <h3>Gagnez du temps</h3>
                    <p>Plus besoin de réécrire vos plannings : modifiez tout en quelques clics et concentrez-vous sur l’essentiel.</p>
                </div>

                <!-- Carte 2 -->
                <div class="features-card">
                    <div class="features-icon"><i class="fas fa-download"></i></div>
                    <h3>Accès instantané</h3>
                    <p>Téléchargez une fois, utilisez à vie. Accédez à vos planners où que vous soyez.</p>
                </div>

                <!-- Carte 3 -->
                <div class="features-card">
                    <div class="features-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Numérique & imprimable</h3>
                    <p>Utilisable sur tablette (ex. GoodNotes) ou imprimable si vous préférez le papier.</p>
                </div>

                <!-- Carte 4 -->
                <div class="features-card">
                    <div class="features-icon"><i class="fas fa-recycle"></i></div>
                    <h3>Éco-responsable</h3>
                    <p>Réduisez votre consommation de papier sans renoncer à votre organisation.</p>
                </div>
             </div>
        </div>
     </section>




    <!-- Section de présentation de la page produit -->
    <section class="products-section">
        <div class="section-title">
            <h2>Nos planners numériques</h2>
            <p>Explore notre collection de planners numériques conçus avec soin pour chaque besoin.</p>
        </div>

        <!-- Grille des produits -->
         <div class="products-grid">

            <!-- Produit 1 -->
             <div class="products-card">
                <div class="products-image">
                    <img src="assets/img/product1.jpg" alt="Planner hebdomadaire">
                    <span class="badge">Best-seller</span>
                </div>
                <div class="products-info">
                    <h3>Planner Hebdomadaire</h3>
                    <p class="price">12,99 €</p>
                    <a href="product.php" class="btn btn-primary">Voir en détail</a>
                </div>
             </div>

            <!-- Produit 2 -->
            <div class="products-card">
                <div class="products-image">
                    <img src="assets/img/product2.jpg" alt="Planner mensuel">
                </div>
                <div class="products-info">
                    <h3>Planner Mensuel</h3>
                    <p class="price">9,99 €</p>
                    <a href="product.php" class="btn btn-primary">Voir en détail</a>
                </div>
             </div>

             <!-- Produit 3 -->
            <div class="products-card">
                <div class="products-image">
                    <img src="assets/img/product3.jpg" alt="Planner étudiant">
                </div>
                <div class="products-info">
                    <h3>Planner Étudiant</h3>
                    <p class="price">11,99 €</p>
                    <a href="product.php" class="btn btn-primary">Voir en détail</a>
                </div>
             </div>

             <!-- Produit 4 -->
            <div class="products-card">
                <div class="products-image">
                    <img src="assets/img/product4.jpg" alt="Planner quotidien">
                </div>
                <div class="products-info">
                    <h3>Planner Quotidien</h3>
                    <p class="price">10,49 €</p>
                    <a href="product.php" class="btn btn-primary">Voir en détail</a>
                </div>
             </div>

         </div>
    </section>

    <!-- Section de présentation des avis client -->
     <section class="testimonial-section full-screen">
        <div class="container">

            <!-- Titre de section -->
             <div class="section-title">
                <h2>Ce que disent nos clients</h2>
                <p>Rejoignez des centaines de clients satisfaits qui ont transformé leur quotidien avec nos planners.</p>
             </div>

            <!-- Catre des avis -->
             <div class="testimonial-card">
                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                <p class="testimonial-text">
                    “Depuis que j’utilise le planner Mwoibaco, je me sens beaucoup plus organisé. C’est simple, beau et hyper pratique.”
                </p>
                <div class="testimonial-author">
                    <img src="assets/img/avatar1.jpg" alt="Photo de l'auteur">
                    <div>
                        <strong>Fatima L.</strong><br>
                        Étudiante en droit
                    </div>
                </div>
             </div>
        </div>
     </section>

     <!-- Section de présentation des blog/article -->
      <section class="blog section">
        <div class="container">

            <!-- Titre de section -->
             <div class="section-title">
                <h2>Conseils d’organisation</h2>
                <p>Découvre des stratégies et des astuces pour optimiser ta productivité et ton efficacité.</p>
             </div>

            <!-- Grille des articles -->
             <div class="blog-grid">

                <!-- Article 1 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="assets/img/blog1.jpg" alt="Titre de l'article 1">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">12 mars 2025</span>
                        <h3>5 routines pour bien commencer la journnée</h3>
                        <p>Des conseils simples et pratiques pour démarrer ta journée avec énergie et clarté.</p>
                        <a href="blog/article1.php" class="read-more">Lire plus →</a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="assets/img/blog2.jpg" alt="Titre de l'article 2">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">3 mars 2025</span>
                        <h3>Comment planifier sa semaine efficacement</h3>
                        <p>Une méthode simple et durable pour structurer tes semaines et atteindre tes objectifs.</p>
                        <a href="blog/article2.php" class="read-more">Lire plus →</a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="assets/img/blog3.jpg" alt="Titre de l'article 2">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">25 février 2025</span>
                        <h3>Les erreurs à éviter en organisation personnelle</h3>
                        <p>Découvre les pièges classiques qui freinent ta productivité et comment les éviter.</p>
                        <a href="blog/article3.php" class="read-more">Lire plus →</a>
                    </div>
                </div>

             </div>
        </div>
      </section>

    <!-- Section de présentation de la newsletter -->
     <section class="newsletter-section">
        <div class="container">
            <div class="newslleter-card">
                <div class="newsletter-icon"><i class="fas fa-envelope"></i></div>
                <h2>Reste organisé(e) & inspiré(e)</h2>
                <p>Inscris-toi à notre newsletter pour recevoir des conseils, des réductions exclusives et nos nouveautés.</p>
                <form  onsubmit="submitForm(event)" class="newsletter-form" id="newsletter-form">
                    <input type="email" name="email" placeholder="Ton adresse e-mail" required>
                    <button type="submit">S'inscrire</button>
                </form>

                <!-- Zone où le message de confirmation s'affichera -->
                <div id="confirmation-message" style="display: none; margin-top: 1rem; color: white;"></div>
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

        function submitForm(event) {
            event.preventDefault(); // Empêche le rechargement de la page
        
            const form = document.getElementById('newsletter-form');
            const formData = new FormData(form);
            const email = formData.get('email');
            const confirmationMessage = document.getElementById('confirmation-message');
        
            // URL de ton script Google Apps
            const scriptURL = "https://script.google.com/macros/s/AKfycbxXOediN4lJSPuzFzQuxtQAcAb1FUtuEWbEOiv5xMgRGi7ombxg0Y3qrFHhYt3MAIO4SQ/exec";
        
            // Envoyer l'email via Fetch API
            fetch(scriptURL, {
                method: "POST",
                body: new URLSearchParams({ email: email })
            })
            .then(response => {
                confirmationMessage.textContent = "Merci pour votre inscription !";
                confirmationMessage.style.display = "block";
                form.reset();
            })
            .catch(error => {
                confirmationMessage.textContent = "Erreur lors de l'inscription. Réessayez.";
                confirmationMessage.style.display = "block";
                confirmationMessage.style.color = "red";
            });
        }

        
     </script>
</body>
</html>