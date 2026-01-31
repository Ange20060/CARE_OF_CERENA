<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care of Cerena </title>
    <!-- tailwind via Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Personalisation des couleurs -->
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
                <!-- Correction : une seule div pour le logo rond -->
                <div class="w-12 h-12 bg-roseAccent dark:bg-roseDark text-white rounded-full flex items-center justify-center text-xl font-bold overflow-hidden">
                    <img src="image/Affiche .jpg" alt="Logo Care of Cerena" class="rounded-full w-12 h-12 object-cover">
                </div>
                <div>
                    <h1 class="text-lg font-semibold">Care of Cerena </h1>
                    <p class="text-sm text-gray-500 dark:text-gray-300">Soins de visage ¤ Onglerie ¤ Maquillage</p>
                </div>
            </div>
            <nav class="hidden md:flex gap-6 text-sm">
                <a href="index.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Services</a>
                <a href="soins.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Soins</a>
                <a href="ongle.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Onglerie</a>
                <a href="maquillage.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Makeup</a>
                <a href="massage.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Massage</a>
                <a href="foulard.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Nouage de foulard</a>
                <a href="contact.html" class="hover:text-roseAccent dark:hover:text-roseAccent">Contact</a>
            </nav>

            <!-- Bouton mode clair/sombre 
            <button id="themeToggle" class="ml-4 text-roseAccent dark:text-roseAccent text-2xl">🌓</button>-->

            <div class="md:hidden">
                <button id="menubtn" class="text-gray-600 dark:text-gray-200">¤</button>
            </div>
       </div>

       <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-white dark:bg-darkBg">
            <a href="index.html" class="block py-2">Services</a>
            <a href="soins.html" class="block py-2">Soins</a>
            <a href="ongle.html" class="block py-2">Onglerie</a>
            <a href="maquillage.html" class="block py-2">Makeup</a>
            <a href="massage.html" class="block py-2">Massage</a>
            <a href="foulard.html" class="block py-2">Nouage de foulard</a>
            <a href="galerie.html" class="block py-2">Galerie</a>
            <a href="contact.html" class="block py-2">Contact</a>
       </div>
    </header>
    <!-- HERO -->
     <section class="bg-gradient-to-r from-lightPink to-white dark:from-roseDark dark:to-darkBg">
        <div class="max-w-6xl mx-auto px-4 py-12 lg:py-20 grid lg:grid-cols-2 gap-8 items-center">
            <div> 
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Beauté & Détente</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Chez <strong>Care of Cerena</strong>, nous sublimons votre beauté naturelle avec des soins personnalisés et une attention particulière à chaque détail. Que ce soit pour un soin du visage, une manucure, un maquillage ou un massage relaxant, notre équipe dévouée est là pour vous offrir une expérience inoubliable et une relaxation unique.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="contact.html" class="px-6 py-3 bg-roseAccent text-white rounded-md shadow">Prendre rendez-vous</a>
                    <a href="galerie.html" class="px-6 py-3 border border-roseAccent text-roseAccent rounded-md hover:bg-roseAccent hover:text-white transition">Voir nos réalisations</a>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="image/salon.jpeg" class="rounded-2xl shadow-lg w-full h-96 object-cover" alt="image du salon">
            </div>
        </div>
     </section>
     <!-- Services -->
        <section id="services" class="max-w-6xl mx-auto px-4 py-12">
            <h3 class="text-2xl font-semibold mb-6 text-roseDark dark:text-roseAccent">Nos services</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="soins.html" class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition block">
                    <img src="image/soins_du_visage.jpeg" class="rounded-lg mb-3 w-full h-40 object-cover" alt="Soins du visage">
                    <h4 class="font-semibold mb-2">Soins du visage</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Hydratation, Nettoyage, Masques et soins anti-âge personnalisés.</p>
                </a>
                <a href="ongle.html" class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition block">
                    <img src="image/onglerie.jpeg" class="rounded-lg mb-3 w-full h-40 object-cover" alt="Onglerie">
                    <h4 class="font-semibold mb-2">Onglerie</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Manucure, Pédicure, Nail art et pose de vernis semi-permanent.</p>
                </a>
                <a href="maquillage.html" class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition block">
                    <img src="image/Maquillage.jpeg" class="rounded-lg mb-3 w-full h-40 object-cover" alt="Maquillage">
                    <h4 class="font-semibold mb-2">Maquillage</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Maquillage pour toutes les occasions, naturel ou glamour </p>
                </a>
                <a href="massage.html" class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition block">
                    <img src="image/massage.jpeg" class="rounded-lg mb-3 w-full h-40 object-cover" alt="Massage">
                    <h4 class="font-semibold mb-2">Massage</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Massage relaxant, thérapeutique et aromathérapie pour une détente totale.</p>
                </a>
                <a href="foulard.html" class="p-6 border border-roseAccent/30 rounded-lg hover:shadow-lg transition block">
                    <img src="image/foulard.jpeg" class="rounded-lg mb-3 w-full h-40 object-cover" alt="Nouage de foulard">
                    <h4 class="font-semibold mb-2">Nouage de foulard</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Atelier de nouage de foulard pour sublimer votre style.</p>
                </a>
            </div>
        </section>
       
        <!-- Footer -->
        <footer class="bg-roseAccent dark:bg-roseDark text-white py-6">
            <div class="max-w-6xl mx-auto px-4 text-center"></div>
            <p>&copy; <span id="year"></span> Care of Cerena. Tous droits réservés.</p>
        </footer>
        <!-- Scripts -->
        <script>
            // Mode clair/sombre
            const themeToggle = document.getElementById('themeToggle');
            const html = document.documentElement;
            themeToggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                themeToggle.textContent = html.classList.contains('dark') ? '☀️' : '🌙';
                document.body.classList.toggle('dark');
            });
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