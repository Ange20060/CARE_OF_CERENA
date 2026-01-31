<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foulard | Care of Cerena</title>
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
    <!-- HEADER -->
     <header class="bg-white dark:bg-roseDark/20 backdrop-blur shadow-sm transition-colors">
       <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-roseAccent dark:bg-roseDark text-white rounded-full flex items-center justify-center text-xl font-bold">
                    <img src="image/Affiche .jpg" alt="" class="rounded-full w-12 h-12 object-cover">
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
    <!-- hero section -->
     <section class="relative text-center py-12 bg-gradient-to-b from-lightPink to-white dark:from-roseDark dark:to-darkBg">
        <h2 class="text-4xl font-bold mb-4 text-roseDark dark:text-roseAccent">L'Art du nouage de foulard (Tabla)</h2>
        <p class="text-lg max-w-2xl mx-auto text-gray-700 dark:text-gray-300">
            Le foulard, également connu sous le nom de tabla, est une couronne d'élégance et d'identité qui peut transformer une tenue ordinaire en une déclaration de style. Chez <strong>Care of Cerena</strong>, nous sublimons chaque femme avec des nouages raffinés et adaptés à chaque occasion. Nous vous proposons aussi des formations de nouage de foulard professionnels et raffinés pour vous aider à maîtriser l'art du nouage et à exprimer votre personnalité à travers cet accessoire chic.
        </p>
     </section>

      <!-- Contenu principal -->
       <main class="max-w-6xl mx-auto p-6 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="image/nouage.jpeg" alt="Nouage de foulard" class="rounded-lg shadow-md">
        </div>

        <div>
            <h3 class="text-2xl font-semibold mb-3 text-roseDark dark:text-roseAccent">Styles de nouage proposés :</h3>
            <ul class="list-disc pl-5 space-y-2 text-gray-800 dark:text-gray-100">
                <li><strong>Classique Élégant :</strong> Un nouage intemporel qui convient à toutes les occasions, du quotidien aux événements formels.</li>
                <li><strong>Moderne Chic :</strong> Des styles contemporains qui ajoutent une touche de sophistication à votre look.</li>
                <li><strong>Boho Décontracté :</strong> Des nouages décontractés et bohèmes pour un style estival et libre.</li>
                <li><strong>Style royal :</strong> Des nouages élaborés pour les mariages, fêtes et autres événements mémorables.</li>
            </ul>
            <p class="mt-4 text-gray-700 dark:text-gray-300">
                Que ce soit pour un évènement spécial ou pour ajouter une touche de glamour à votre quotidien, nos experts en nouage de foulard sont là pour vous guider et créer des looks qui reflètent votre style unique. Que vous cherchiez à apprendre les bases du nouage de foulard ou à perfectionner vos compétences, nos formations sont conçues pour vous guider à chaque étape. Rejoignez-nous pour découvrir l'art du nouage de foulard et laissez votre style s'exprimer avec élégance et confiance.
            </p>
            <a href="contact.html" class="mt-6 inline-block bg-roseAccent hover:bg-roseDark text-white px-5 py-2 rounded-md dark:bg-roseDark dark:hover:bg-roseAccent transition">Réservez une séance</a>
        </div>
       </main>
       <!-- Section galerie -->
        <section class="bg-lightPink dark:bg-roseDark/30 py-10">
            <div class="max-w-6xl mx-auto text-center">
                <h3 class="text-3xl font-semibold mb-4 text-roseDark dark:text-roseAccent">Inspiration de Styles</h3>
                <p class="max-w-2xl mx-auto text-lg mb-8 text-gray-700 dark:text-gray-300">
                    Chaque nouage exprime une émotion, une humeur, une beauté unique.
                    Découvrez quelques inspirations de styles de foulards réalisés par nos artistes.
                </p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <img src="https://i.pinimg.com/236x/95/d2/bc/95d2bc72c80da098b60437c81f0d5f2d.jpg" alt="Foulard Élégant" class="rounded-lg shadow-md hover:scale-105 transition">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDbJbnscz9DUAmzDk6PFt219n_iV6aSY7o7M_b-rk0NL9ExBevWCAipoDa2nOyHgQTow0&usqp=CAU" alt="Foulard Élégant" class="rounded-lg shadow-md hover:scale-105 transition">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBxyh3XPu2Je6iuI2_CrY5AZUyF6Cv9PzvtIT_7hfLQeIyR7snOspiXRdb6NhVQ-A7uZk&usqp=CAU" alt="Foulard Élégant" class="rounded-lg shadow-md hover:scale-105 transition">
                </div>
            </div>
        </section>
         <!-- Footer -->
            <footer class="text-center bg-roseAccent dark:bg-roseDark text-white py-6 mt-12">
                <p>&copy; 2024 Care of Cerena. Tous droits réservés.</p>
            </footer>
    <script>
        // Toggle menu mobile  
        const themeToggle = document.getElementById('themeToggle');
        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        });
        if (localStorage.getItem('theme') === 'dark'){
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>