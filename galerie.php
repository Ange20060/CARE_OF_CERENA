<!DOCTYPE html>
<html lang="fr" class="transition-colors duration-500">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galerie – Care of Cerena</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">☰</path>
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

  <!-- Hero -->
  <section class="text-center py-12 bg-gradient-to-b from-lightPink to-white dark:from-roseDark dark:to-darkBg">
    <h2 class="text-4xl font-bold mb-4">Galerie de Beauté</h2>
    <p class="text-lg max-w-2xl mx-auto">
      Découvrez en images la passion et la délicatesse de nos soins, maquillages et créations.
    </p>
  </section>

  <!-- Galerie -->
  <main class="max-w-6xl mx-auto p-6 space-y-12">

    <!-- Soins du visage -->
    <section>
      <h3 class="text-2xl font-semibold text-roseDark dark:text-roseAccent mb-4">Soins du visage 🌺</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/hydratant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/purifiant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/purifiant2.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Onglerie -->
    <section>
      <h3 class="text-2xl font-semibold text-roseDark dark:text-roseAccent mb-4">Onglerie 💅</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/2.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/1.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/6.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Maquillage -->
    <section>
      <h3 class="text-2xl font-semibold text-roseDark dark:text-roseAccent mb-4">Maquillage 💄</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/Maquillage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ7NbLmWYuUOP2j-LgcyMEwc7zuIO41TpRIw&s" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://storage.googleapis.com/bsiflexyprod/touche-make-up/images/service/4990397221765120.jpg" class="rounded-lg w-full h-44 object-cover" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Massage -->
    <section>
      <h3 class="text-2xl font-semibold text-roseDark dark:text-roseAccent mb-4">Massage 💆‍♀</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/massage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/relaxant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrrI0Tw5mkYouvNMiCY2kwySCdyJbhrzHuUA&s" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Nouage de foulard -->
    <section>
      <h3 class="text-2xl font-semibold text-roseDark dark:text-roseAccent mb-4">Nouage de foulard (Tabla) 🧕</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/foulard.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://i.pinimg.com/236x/95/d2/bc/95d2bc72c80da098b60437c81f0d5f2d.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/nouage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

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
