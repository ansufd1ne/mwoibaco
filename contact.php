<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Contact</title>
</head>
<body>
    <?php include 'menu.html'; ?>

        <!-- Contact -->
    <section class="contact-section">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>Une question, une remarque ? Remplis ce formulaire ou écris-nous directement.</p>

            <div class="contact-grid">
                <!-- Formulaire de contact -->
                 <form  id="form" action="send_message.php" method="post" class="contact-form">
                    <input type="text" name="name" placeholder="Votre nom" required>
                    <input type="email" name="email" placeholder="Votre email" required>
                    <input type="text" name="subject" placeholder="Objet" required>
                    <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Envoyer</button>
                 </form>

                <!-- Informations de contact -->
                 <div class="contact-info">
                    <h3>Informations</h3>
                    <p><strong>Email :</strong>ansufdine.company@gmail.com</p>
                    <p><strong>Adresse :</strong>Annecy, France</p>

                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                 </div>
            </div>
        </div>
    </section>
            
    <?php include 'footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
  // Fonction pour envoyer le formulaire
emailjs.init('K6ciJxto7nn7uRCng'); // Ton User ID EmailJS

const btn = document.getElementById('btn-submit');

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

  btn.innerText = 'Envoie en cours...';

  const serviceID = 'service_52jatnb'; // Remplace par ton vrai Service ID
  const templateID = 'template_ccu7j39'; // Remplace par ton vrai Template ID

  emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.innerText = 'Envoyer';
      alert('Message envoyé avec succès !');
      document.getElementById('form').reset(); // Réinitialiser le formulaire
    }, (err) => {
      btn.innerText = 'Envoyer';
      alert('Erreur lors de l\'envoi. Veuillez réessayer.');
      console.error('Erreur EmailJS :', JSON.stringify(err));
    });
});
</script>
    
</body>
</html>