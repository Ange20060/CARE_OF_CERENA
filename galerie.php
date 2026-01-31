<!DOCTYPE html>
<html lang="fr" class="transition-colors duration-500">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galerie – Care of Cerena</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 text-gray-800 dark:bg-pink-900 dark:text-pink-50 transition-colors duration-500">

  <!-- Navbar -->
  <header class="bg-pink-200 dark:bg-pink-800 shadow-md">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold">Care of Cerena</h1>
      <nav class="space-x-6">
        <a href="index.html" class="hover:text-pink-500 dark:hover:text-pink-300">Accueil</a>
        <a href="services.html" class="hover:text-pink-500 dark:hover:text-pink-300">Services</a>
        <a href="galerie.html" class="hover:text-pink-500 dark:hover:text-pink-300 font-semibold underline">Galerie</a>
        <a href="tombola.html" class="hover:text-pink-500 dark:hover:text-pink-300">Tombola</a>
        <a href="contact.html" class="hover:text-pink-500 dark:hover:text-pink-300">Contact</a>
      </nav>
      <!--  <button id="theme-toggle" class="bg-pink-300 dark:bg-pink-700 px-3 py-1 rounded-md">
        🌞 / 🌙
      </button>-->
    </div>
  </header>

  <!-- Hero -->
  <section class="text-center py-12 bg-gradient-to-b from-pink-100 to-white dark:from-pink-800 dark:to-pink-900">
    <h2 class="text-4xl font-bold mb-4">Galerie de Beauté</h2>
    <p class="text-lg max-w-2xl mx-auto">
      Découvrez en images la passion et la délicatesse de nos soins, maquillages et créations.
    </p>
  </section>

  <!-- Galerie -->
  <main class="max-w-6xl mx-auto p-6 space-y-12">

    <!-- Soins du visage -->
    <section>
      <h3 class="text-2xl font-semibold text-pink-600 dark:text-pink-300 mb-4">Soins du visage 🌺</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/hydratant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/purifiant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/purifiant2.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Onglerie -->
    <section>
      <h3 class="text-2xl font-semibold text-pink-600 dark:text-pink-300 mb-4">Onglerie 💅</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/2.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/1.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/6.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Maquillage -->
    <section>
      <h3 class="text-2xl font-semibold text-pink-600 dark:text-pink-300 mb-4">Maquillage 💄</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/Maquillage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ7NbLmWYuUOP2j-LgcyMEwc7zuIO41TpRIw&s" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://storage.googleapis.com/bsiflexyprod/touche-make-up/images/service/4990397221765120.jpg" class="rounded-lg w-full h-44 object-cover" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Massage -->
    <section>
      <h3 class="text-2xl font-semibold text-pink-600 dark:text-pink-300 mb-4">Massage 💆‍♀</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/massage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/relaxant.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrrI0Tw5mkYouvNMiCY2kwySCdyJbhrzHuUA&s" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

    <!-- Nouage de foulard -->
    <section>
      <h3 class="text-2xl font-semibold text-pink-600 dark:text-pink-300 mb-4">Nouage de foulard (Tabla) 🧕</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="image/foulard.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="https://i.pinimg.com/236x/95/d2/bc/95d2bc72c80da098b60437c81f0d5f2d.jpg" class="rounded-lg shadow-md object-cover h-64 w-full">
        <img src="image/nouage.jpeg" class="rounded-lg shadow-md object-cover h-64 w-full">
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="text-center py-6 bg-pink-200 dark:bg-pink-800">
    <p>&copy; 2025 Care of Cerena. Tous droits réservés.</p>
  </footer>

  <!-- Thème -->
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

</body>
</html>