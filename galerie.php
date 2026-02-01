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
  <?php include 'Haut.php'; ?>

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
  
</body>
</html>
