<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins de visage| Care of Cerena </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Couleur personalisé -->
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

    <!-- HERO -->
    <section class="max-w-6xl mx-auto text-center px-4 py-12">
        <h2 class="text-4xl font-bold mb-4 text-roseDark dark:text-roseAccent">Soins du visage</h2>
            <p class="text-gray-700 dark:text-gray-300 md-8">
                Retrouvez un peau éclatante et ressourcée grâce à nos soins du visage adaptés à tous les types de peau.
                chaquesoin est réalisé avec des produits naturels et de haute qualité et des techniques professionels pour garantir les meilleurs résultats.
            </p>
            <div class="grid md:grid-cols-2 gap-6 mt-8">
                <!-- Carte 1 -->
                <div class="bg-white dark:bg-roseDark/20 rounded-lx shadow pb-4 hover:shadow-lg transition-colors">
                    <img src="image/hydratant.jpeg" alt="Soins hydratant" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="font-semibold mb-4 text-roseDark dark:text-roseAccent">Soin Hydratant</h3>
                    <p class="text-gray-600 text-roseDark dark:text-gray-300">Un soin profond pour hydrater et nourrir la peau, laissant un teint frais et lumineux.</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        <li>Nettoyage en profondeur</li>
                        <li>Exfoliation douce</li>
                        <li>Masque hydratant</li>
                        <li>Massage facial relaxant</li>
                    </ul>
                </div>
                <!-- Carte 2 -->
                <div class="bg-white dark:bg-roseDark/20 p-4 rounded-xl shadow hover:shadow-lg  transition">
                    <img src="image/anti-âge.jpeg" alt="soins anti-âge" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="font-semibold mb-4 text-roseDark dark:text-roseAccent">Soin Anti-Âge</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 ">Un soin ciblé pour réduire les signes de l'âge et revitaliser la peau.</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        <li>Nettoyage en profondeur</li>
                        <li>Exfoliation anti-âge</li>
                        <li>Masque raffermissant</li>
                        <li>Sérum anti-rides</li>
                    </ul>
                </div>
                <!-- Carte 3 -->
                <div class="bg-white dark:bg-roseDark/20 pb-4 rounded-xl shadow hover:shadow-lg transition">
                    <img src="image/purifiant.jpeg" alt="soin Purifiant" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="font-semibold mb-2 text-roseDark dark:text-roseAccent">Soin Purifiant</h3>
                    <p class=" text-sm text-gray-600 dark:text-gray-300">Un soin pour purifier la peau, éliminer les impuretés et prévenir les imperfections.</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        <li>Nettoyage en profondeur</li>
                        <li>Exfoliation purifiante</li>
                        <li>Masque à l'argile</li>
                        <li>Hydratation légère</li>
                    </ul>
                </div>
            </div>
            <!-- SECTION DETENTE -->
            <div class="mt-16 flex flex-col items-center gap-8 mb:flex-row">
                <img src="image/purifiant2.jpeg" alt="soin Purifiant" class="rounded-lg mb-4 w-full h-48 object-cover object-center">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-3 text-roseDark dark:text-roseAccent">Une expérience de purre détente et unique</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">Nos soins du visage sont conçus pour offrir une expérience de détente totale. Profitez d'un environnement apaisant, de massages relaxants et de produits de qualité supérieure pour revitaliser votre peau et votre esprit.</p>
                    <a href="contact.html" class="bg-roseAccent text-white px-6 py-3 rounded-md shadow hover:bg-roseDark transition">Réservez votre soin</a>
                </div>
            </div>
    </section>
    <!-- footer -->
     <footer class="bg-roseAccent dark:bg-roseDark text-white py-6">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; <span id="year"></span>Care of Cerena-- Beauté et Bien-être.</p>
        </div>
     </footer>
     <!-- Script pour le menu mobile et le thème sombre -->
        <script>
            // Année dynamique dans le footer
            document.getElementById('year').textContent = new Date().getFullYear();

            // Toggle menu mobile
            document.getElementById('menuBtn').addEventListener('click', () => {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });
            // Toggle thème clair/sombre
            const themeToggle = document.getElementById('themeToggle');
            const html = document.Element;
            themeToggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                toogle.textContent = html.classList.contains('dark')?'🌙': '☀️';
            });
        </script>
</body>
</html>
