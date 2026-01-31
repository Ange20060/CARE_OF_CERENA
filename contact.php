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

<body class="bg-pink-50 text-gray-800 dark:bg-pink-900 dark:text-pink-50 transition-colors duration-500">

  <!-- Navbar -->
  <header class="bg-pink-200 dark:bg-pink-800 shadow-md">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold">Care of Cerena</h1>
      <nav class="space-x-6">
        <a href="index.html" class="hover:text-pink-500 dark:hover:text-pink-300">Accueil</a>
        <a href="index.html" class="hover:text-pink-500 dark:hover:text-pink-300">Services</a>
        <a href="galerie.html" class="hover:text-pink-500 dark:hover:text-pink-300">Galerie</a>
        <a href="ongle.html" class="hover:text-pink-500 dark:hover:text-pink-300">Tombola</a>
        <a href="contact.php" class="hover:text-pink-500 dark:hover:text-pink-300 font-semibold underline">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Section Hero -->
  <section class="text-center py-12 bg-gradient-to-b from-pink-100 to-white dark:from-pink-800 dark:to-pink-900">
    <h2 class="text-4xl font-bold mb-4">Contact & Réservation</h2>
    <p class="text-lg max-w-2xl mx-auto">
      Vous souhaitez réserver un soin, une manucure, un maquillage ou un nouage de foulard ?  
      Nous sommes ravis de vous accueillir avec douceur et professionnalisme.
    </p>
  </section>

  <!-- Formulaire de contact -->
  <main class="max-w-5xl mx-auto p-6 grid md:grid-cols-2 gap-8">
    
    <!-- Formulaire -->
    <form class="bg-white dark:bg-pink-800 rounded-lg shadow-md p-6 space-y-4" method="POST" action="">
      <h3 class="text-2xl font-semibold mb-4 text-center">Envoyez-nous un message 💌</h3>

      <?php if($success): ?>
        <div class="bg-green-100 text-green-800 p-3 rounded-md"><?= $success ?></div>
      <?php endif; ?>
      <?php if($error): ?>
        <div class="bg-red-100 text-red-800 p-3 rounded-md"><?= $error ?></div>
      <?php endif; ?>

      <div>
        <label class="block text-sm font-medium mb-1">Nom complet</label>
        <input name="nom" type="text" placeholder="Votre nom" class="w-full px-4 py-2 rounded-md border border-pink-300 dark:border-pink-600 bg-pink-50 dark:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400">
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Adresse e-mail</label>
        <input name="email" type="email" placeholder="exemple@email.com" class="w-full px-4 py-2 rounded-md border border-pink-300 dark:border-pink-600 bg-pink-50 dark:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400">
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Type de soin</label>
        <select name="sujet" class="w-full px-4 py-2 rounded-md border border-pink-300 dark:border-pink-600 bg-pink-50 dark:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400">
          <option value="Soins de visage">Soins du visage</option>
          <option value="Manucure">Manucure / Pédicure</option>
          <option value="Maquillage">Maquillage</option>
          <option value="Massage">Massage</option>
          <option value="Foulard">Nouage de foulard</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Message</label>
        <textarea name="message" rows="4" placeholder="Décrivez votre besoin..." class="w-full px-4 py-2 rounded-md border border-pink-300 dark:border-pink-600 bg-pink-50 dark:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
      </div>

      <button type="submit" class="w-full bg-pink-400 hover:bg-pink-500 text-white py-2 rounded-md font-medium dark:bg-pink-600 dark:hover:bg-pink-700 transition">
        Envoyer le message
      </button>
    </form>

    <!-- Infos & carte -->
    <div class="flex flex-col justify-center space-y-6">
      <div class="bg-pink-100 dark:bg-pink-800 rounded-lg p-6 shadow-md space-y-3">
        <h3 class="text-xl font-semibold mb-2">Nos coordonnées 📍</h3>
        <p><strong>Téléphone :</strong> <a href="tel:+22966777185" class="text-pink-500 dark:text-pink-300">+229 66 77 71 85</a></p>
        <p><strong>Email :</strong> <a href="mailto:careofcerena@gmail.com" class="text-pink-500 dark:text-pink-300">careofcerena@gmail.com</a></p>
        <p><strong>Adresse :</strong> Cotonou, Bénin</p>
        <p><strong>WhatsApp :</strong> <a href="https://Wa.me/66777185" target="_blank" class="text-pink-500 dark:text-pink-300">Chat direct</a></p>
      </div>

      <div>
        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=900&q=80" alt="Carte d’emplacement temporaire" class="rounded-lg shadow-md w-full h-64 object-cover">
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center py-6 bg-pink-200 dark:bg-pink-800">
    <p>&copy; 2025 Care of Cerena. Tous droits réservés.</p>
  </footer>

  <!-- Thème -->
  <!-- (désactivé car pas de bouton dans le HTML)
  <script>
    const themeToggle = document.getElementById("theme-toggle");
    themeToggle.addEventListener("click", () => {
      document.documentElement.classList.toggle("dark");
      localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
    });
    if (localStorage.getItem("theme") === "dark") {
      document.documentElement.classList.add("dark");
    }
  </script>
  -->
</body>
</html>