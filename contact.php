<?php
include 'config.php';
$success = '';
$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $sujet = htmlspecialchars(trim($_POST['sujet'])); // ou $_POST['sujet'] si tu changes le nom du champ
    $message = htmlspecialchars(trim($_POST['message']));

    if(!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            try {
                $sql ="INSERT INTO `messages` (`id`, `nom`, `email`, `sujet`, `message`, `date_envoi`)  VALUES (:nom, :email, :sujet, :message)";
                $stmt = $con_id->prepare($sql);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':sujet', $sujet);
                $stmt->bindParam(':message', $message);
                if($stmt->execute()){
                    $success = "Message envoyé avec succès !";
                } else {
                    $error = "Erreur lors de l'envoi du message.";
                }
            } catch(Exception $e){
                $error = "Erreur lors de l'envoi du message : " . $e->getMessage();
            }
        } else{
            $error = "Adresse e-mail invalide.";
        }
    } else{
        $error = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr" class="transition-colors duration-500">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact – Care of Cerena</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lightPink: '#FCE4EC',
                        roseAccent: '#F48FB1',
                        roseDark: '#AD1457',
                        darkBg: '#2C0A24',
                    }
                }
            }
        }
  </script>
</head>

<body class="bg-lightPink dark:bg-darkBg text-gray-800 dark:text-gray-100 antialiased transition-colors duration-300">

  <!-- Navbar -->
  <header class="bg-white dark:bg-roseDark/20 backdrop-blur shadow-sm transition-colors">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-roseAccent dark:bg-roseDark text-white rounded-full flex items-center justify-center text-xl font-bold">
                <img src="image/Affiche .jpg" alt="Logo Care of Cerena" class="rounded-full w-12 h-12 object-cover">
            </div>
            <div>
                <h1 class="text-lg font-semibold">Care of Cerena </h1>
                <p class="text-sm text-gray-500 dark:text-gray-300">Soins de visage ¤ Onglerie ¤ Maquillage</p>
            </div>
        </div>
        <nav class="hidden md:flex gap-6 text-sm">
            <a href="index.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Services</a>
            <a href="soins.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Soins</a>
            <a href="ongle.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Onglerie</a>
            <a href="maquillage.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Makeup</a>
            <a href="massage.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Massage</a>
            <a href="foulard.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Nouage de foulard</a>
            <a href="contact.php" class="hover:text-roseAccent dark:hover:text-roseAccent">Contact</a>
        </nav>

        <!-- Bouton menu mobile -->
        <div class="md:hidden">
            <button id="menubtn" class="text-gray-600 dark:text-gray-200 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-white dark:bg-darkBg">
        <a href="index.php" class="block py-2">Services</a>
        <a href="soins.php" class="block py-2">Soins</a>
        <a href="ongle.php" class="block py-2">Onglerie</a>
        <a href="maquillage.php" class="block py-2">Makeup</a>
        <a href="massage.php" class="block py-2">Massage</a>
        <a href="foulard.php" class="block py-2">Nouage de foulard</a>
        <a href="galerie.php" class="block py-2">Galerie</a>
        <a href="contact.php" class="block py-2">Contact</a>
    </div>
  </header>

  <!-- Section Hero -->
  <section class="text-center py-12 bg-gradient-to-b from-lightPink to-white dark:from-roseDark dark:to-darkBg">
    <h2 class="text-4xl font-bold mb-4">Contact & Réservation</h2>
    <p class="text-lg max-w-2xl mx-auto">
      Vous souhaitez réserver un soin, une manucure, un maquillage ou un nouage de foulard ?
      Nous sommes ravis de vous accueillir avec douceur et professionnalisme.
    </p>
  </section>

  <!-- Formulaire de contact -->
  <main class="max-w-5xl mx-auto p-6 grid md:grid-cols-2 gap-8">

    <!-- Formulaire -->
    <form class="bg-white dark:bg-darkBg rounded-lg shadow-md p-6 space-y-4" method="POST" action="">
      <h3 class="text-2xl font-semibold mb-4 text-center">Envoyez-nous un message 💌</h3>

      <?php if($success): ?>
        <div class="bg-green-100 text-green-800 p-3 rounded-md"><?= $success ?></div>
      <?php endif; ?>
      <?php if($error): ?>
        <div class="bg-red-100 text-red-800 p-3 rounded-md"><?= $error ?></div>
      <?php endif; ?>

      <div>
        <label class="block text-sm font-medium mb-1">Nom complet</label>
        <input name="nom" type="text" placeholder="Votre nom" class="w-full px-4 py-2 rounded-md border border-roseAccent dark:border-roseDark bg-lightPink dark:bg-darkBg focus:outline-none focus:ring-2 focus:ring-roseAccent">
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Adresse e-mail</label>
        <input name="email" type="email" placeholder="exemple@email.com" class="w-full px-4 py-2 rounded-md border border-roseAccent dark:border-roseDark bg-lightPink dark:bg-darkBg focus:outline-none focus:ring-2 focus:ring-roseAccent">
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Type de soin</label>
        <select name="sujet" class="w-full px-4 py-2 rounded-md border border-roseAccent dark:border-roseDark bg-lightPink dark:bg-darkBg focus:outline-none focus:ring-2 focus:ring-roseAccent">
          <option value="Soins de visage">Soins du visage</option>
          <option value="Manucure">Manucure / Pédicure</option>
          <option value="Maquillage">Maquillage</option>
          <option value="Massage">Massage</option>
          <option value="Foulard">Nouage de foulard</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Message</label>
        <textarea name="message" rows="4" placeholder="Décrivez votre besoin..." class="w-full px-4 py-2 rounded-md border border-roseAccent dark:border-roseDark bg-lightPink dark:bg-darkBg focus:outline-none focus:ring-2 focus:ring-roseAccent"></textarea>
      </div>

      <button type="submit" class="w-full bg-roseAccent hover:bg-roseDark text-white py-2 rounded-md font-medium dark:bg-roseDark dark:hover:bg-roseAccent transition">
        Envoyer le message
      </button>
    </form>

    <!-- Infos & carte -->
    <div class="flex flex-col justify-center space-y-6">
      <div class="bg-lightPink dark:bg-darkBg rounded-lg p-6 shadow-md space-y-3">
        <h3 class="text-xl font-semibold mb-2">Nos coordonnées 📍</h3>
        <p><strong>Téléphone :</strong> <a href="tel:+22966777185" class="text-roseAccent dark:text-roseAccent">+229 66 77 71 85</a></p>
        <p><strong>Email :</strong> <a href="mailto:careofcerena@gmail.com" class="text-roseAccent dark:text-roseAccent">careofcerena@gmail.com</a></p>
        <p><strong>Adresse :</strong> Cotonou, Bénin</p>
        <p><strong>WhatsApp :</strong> <a href="https://Wa.me/66777185" target="_blank" class="text-roseAccent dark:text-roseAccent">Chat direct</a></p>
      </div>

      <div>
        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=900&q=80" alt="Carte d’emplacement temporaire" class="rounded-lg shadow-md w-full h-64 object-cover">
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-roseAccent dark:bg-roseDark text-white py-6">
    <div class="max-w-6xl mx-auto px-4 text-center"></div>
    <p>&copy; <span id="year"></span> Care of Cerena. Tous droits réservés.</p>
  </footer>
  <!-- Scripts -->
  <script>
    // Menu mobile
    document.getElementById('menubtn')
      .addEventListener('click', ()=>{
      const menu=document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    });
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
