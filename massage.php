<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massage| Care of Cerena</title>
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
<body class="bg-pink-50 dark:bg-pink-900 text-gray-800 dark:text-pink-50 transition-colors duration-500">
    <!-- HEADER -->
    <?php include 'Haut.php'; ?>
    
    <!-- HERO -->
     <section class="relative text-center py-12 bg-gradient-to-b from-pink-100 to-white dark:from-pink-800 dark:to-pink-900">
        <h2 class="text-4xl font-bold mb-4">Massage & Détente</h2>
        <p class="text-lg max-w-2xl mx-auto">
            Offrez a votre corps un moment de pur relâchement. Nos massage allient douceur et techniques expertes pour raviver votreénergie et sublimer votre bien Bien-être.</p>
     </section>

     <!-- Contenu proncipal -->
      <main class="max-w-6xl mx-auto p-6 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="image/relaxant.jpeg" alt="Massage relaxant" class="rounded-lg shadow-sm">
        </div>
        <div>
            <h3 class="text-2xl font-semibold mb-3">Nos types de massages:</h3>
            <ul class="list-disc pl-5 space-y-2">
                <li>Massage relaxant aux huiles essentielles</li>
                <li>Massage du dos pour libérer les tensions </li>
                <li>Massage facial apaisant</li>
                <li>Massage complet revitalisant</li>
            </ul>
            <p class="mt-4">Chaque séance est personnalisés selon vos besoin. Nos produuits naturels et gestes précis favorisent la détente, l'éclat de la peau et la circulation.</p>
            <a href="contact.html" class="mt-6 inline-block bg-pink-400 hover:bg-pink-500 text-white px-5 py-2 rounded-md dark:bg-pink-600 dark:hover:bg-pink-700">Prendre rendez-vous</a>
        </div>
      </main>
      <!-- Section bienfait -->
      <section class="bg-pink-100 dark:bg-pink-800 py-10">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl font-semibold mb-4">Les biens fait du massage</h3>
            <p class="max-w-2xl mx-auto text-lg">
                Détente, apaisement, relâchement des muscles, et bin plus encore.
                Chez <strong>Care of Cerena</strong>, chaque massage est une expérience sensorielle qui nourrit à la fois le corps et l'esprit.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <div class="p-4 bg-white dark:bg-pink-700 rounded-lg shadow-md">
                    <img src="image/profonde.jpeg" alt="Relax" class="w-12 mx-auto mb-2">
                    <p>Relaxation profonde</p>
                </div>
                 <div class="p-4 bg-white dark:bg-pink-700 rounded-lg shadow-md">
                    <img src="image/circulation.jpeg" alt="circulation" class="w-12 mx-auto mb-2">
                    <p>Meilleure circulation</p>
                </div>
                    <div class="p-4 bg-white dark:bg-pink-700 rounded-lg shadow-md">
                    <img src="image/peau.jpeg" alt="Peau éclatante" class="w-12 mx-auto mb-2">
                    <p>Peau éclatante</p>
                </div>
                    <div class="p-4 bg-white dark:bg-pink-700 rounded-lg shadow-md">
                    <img src="image/mental.jpeg" alt="Bien-être mental" class="w-12 mx-auto mb-2">
                    <p>Bien-être mental</p>
                </div>
            </div>
        </div>
      </section>
      <!-- footer -->
       <footer class="text-center py-6 bg-pink-200 dark:bg-pink-800">
        <p>&copy; 2025 Care of Cerena. Tous droit réservés.</p>
       </footer>
       <!-- theme -->
        <script>
             const themeToggle = document.getElementById("themeToggle");
            themeToggle.addEventListener("click", () => {
                document.documentElement.classList.toggle("dark");
                localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
            });
            if(localStorage.getItem("theme") === "dark"){
                document.documentElement.classList.add("dark");
            }
        </script>
</body>
</html>
