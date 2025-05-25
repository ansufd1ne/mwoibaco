<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog | Mwoibaco</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <?php include 'menu.html'; ?>
    
    <!-- Section Blog -->
     <section class="blog-section">
        <div class="container">
            <div class="section-title">
                <h2>Conseil d'organisation</h2>
                <p>
                Découvre nos meilleurs articles pour booster ta productivité et rester organisé(e) au quotidien.
                </p>
            </div>

            <div class="blog-grid">
                <!--Article 1-->
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
    <?php include 'footer.html'; ?>
</body>
</html>