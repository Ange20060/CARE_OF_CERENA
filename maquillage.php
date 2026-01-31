<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquillage| Care of Cerena</title>
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
                    },
                },
            },
        };
    </script>
</head>
<body class="bg-lightPink dark:bg-darkBg text-gray-800 dark:text-gray-100 antialiased transition-colors duration-300">
    <!-- header -->
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
    <!-- HERO MAQUILLAGE -->
     <section class="bg-gradient-to-r from-lightPink to--white dark:from-roseDark dark:to-darkBg">
        <div class="max-w-6xl mx-auto px-4 py-12 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Makeup Professionels</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Découvrez l'art du maquillage avec nos services professionnels. Que ce soit pour une occasion spéciale(mariage, soirée, photoshoot etc) ou pour sublimer votre beauté au quotidien, nous utilisons des produits de haute qualité et des techniques adaptées à votre style et à votre teint. Laissez-nous révéler la meilleure version de vous-même avec un maquillage qui met en valeur vos traits uniques.
                </p>
                <div class="flex gap-3">
                    <a href="contact.html" class="px-6 py-3 bg-roseAccent text-white rounded-md shadow">Reserver votre rendez-vous</a>
                    <a href="#services" class="px-6 py-3 border border-roseAccent text-roseAccent rounded-md hover:text-white transition">Voir les styles</a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="w-full h-64 bg-roseAccent/10 dark:bg-roseDark/30 rounded-2xl flex items-center justify-center overflow-hidden">
                    <img src="image/Maquillage.jpeg" alt="Maquillage professionnel" class="rounded-2xl w-full h-full object-cover object-center shadow-lg">
                </div>
            </div>
        </div>
     </section>

     <!-- Section Maquillage -->
      <section id="services" class="max-w-6xl mx-auto px-4 py-12">
        <h3 class="text-2xl font-semibold mb-6 text-roseDark dark:text-roseAccent">Nos prestations</h3>
        <div class="grid mb:grid-cols-3 gap-6">
            <article class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition">
                <h4 class="font-semibold mb-2">Maquillage Mariage</h4>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Pour le grand jour, un look élégant et durable.</p>
                <span class="text-sm font-medium text-roseAccent">Sur devis</span>
            </article>
            <article class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition">
                <h4 class="font-semibold mb-2">Maquillage soirée</h4>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Pour toute vos sorties, un maquillage glamour et raffiné</p>
                <span class="text-sm font-medium text-roseAccent">Dès 5000 XOF</span>
            </article>
            <article class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition">
                <h4 class="font-semibold mb-2">Maquillage Photoshoot</h4>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Adaptées aux séances photo professionnels ou personnelles</p>
                <span class="text-sm font-medium text-roseAccent">sur devis</span>
            </article>
        </div>
      </section>
      <!-- Galerie maquillage-->
       <section class="bg-white dark:bg-roseDark/10 py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-2xl font-semibold mb-6 text-roseDark dark:text-roseAccent">Galerie Maquillage</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ7NbLmWYuUOP2j-LgcyMEwc7zuIO41TpRIw&s" class="rounded-lg w-full h-44 object-cover" alt="">
                <img src="https://i.pinimg.com/564x/4a/63/7c/4a637c0549158295b8e3baebcc2687ad.jpg" class="rounded-lg w-full h-44 object-cover" alt="">
                <img src="https://storage.googleapis.com/bsiflexyprod/touche-make-up/images/service/4990397221765120.jpg" class="rounded-lg w-full h-44 object-cover" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLWmcXZQkTU-wcsDoqbDwB9yJl4zTYHho67rPB6dKW9BZmQfAIXwoFYOLyObiHXrAEPpY&usqp=CAU" class="rounded-lg w-full h-44 object-cover" alt="">
            </div>
        </div>
       </section>
        <!-- footer -->
        <footer class="bg-roseAccent dark:bg-roseDark text-white py-6 mt-12">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <p>&copy; 2024 Care of Cerena. Tous droits réservés.</p>
            </div>
        </footer>
        <!-- Script pour le menu mobile et le thème sombre -->
        <script>
            // Menu mobile
            document.getElementById('menubtn').addEventListener('click', () => {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });
            // Thème sombre
            const themeToggle = document.getElementById('themeToggle');
            const toogle = document.documentElement('themeToggle');
            themeToggle.addEventListener('click', () => {
               toogle.classList.toggle('dark');
                themeToggle.textContent = toogle.classList.contains('dark')?'🌙': '☀️';
            });
        </script>

</body>
</html>
