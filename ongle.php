<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombola d’Ongles</title>
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
    <style>
      .case {
        position: relative;
        overflow: hidden;
        border-radius: 0.75rem;
        border: 2px solid #AD1457;
        background: #fff;
        cursor: pointer;
      }
      .case img {
        width: 100%;
        display: block;
      }
      .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #ffd6e7, #ff9fc9);
        transition: opacity 0.3s;
        opacity: 1;
        z-index: 2;
      }
      .case.revealed .overlay {
        opacity: 0;
      }
    </style>
</head>
<body class="bg-lightPink dark:bg-darkBg text-gray-800 dark:text-gray-100 antialiased transition-colors duration-300 min-h-screen">
    <!-- Header -->
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

            <!-- Bouton mode clair/sombre
            <button id="themeToggle" class="ml-4 text-roseAccent dark:text-roseAccent text-2xl">🌓</button>-->

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
    <section class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold mb-6 text-roseDark dark:text-roseAccent">Modèle de PO au hasard</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8">
            Bienvenue à la tombola d’ongles ! Grattez les cases pour révéler le modèle d’ongles que le destin a choisi pour vous. Bonne chance !
            Glissez le curseur pour révéler votre modèle d'ongle  🎉💅
        </p>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-8">
            <!-- 6 cases à gratter -->
            <div class="case shadow-lg"><img src="image/1.jpg" alt="Modèle 1"><div class="overlay"></div></div>
            <div class="case shadow-lg"><img src="image/2.jpg" alt="Modèle 2"><div class="overlay"></div></div>
            <div class="case shadow-lg"><img src="image/3.jpg" alt="Modèle 3"><div class="overlay"></div></div>
            <div class="case shadow-lg"><img src="image/4.jpg" alt="Modèle 4"><div class="overlay"></div></div>
            <div class="case shadow-lg"><img src="image/5.jpg" alt="Modèle 5"><div class="overlay"></div></div>
            <div class="case shadow-lg"><img src="image/6.jpg" alt="Modèle 6"><div class="overlay"></div></div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-4 mb-6">
            <div class="w-full md:w-1/2">
                <label for="scratchSlider" class="block mb-2 font-medium text-roseDark dark:text-roseAccent">🧤 Glisse pour gratter :</label>
                <input type="range" id="scratchSlider" min="0" max="100" value="0" class="w-full accent-roseAccent">
            </div>
            <div class="w-full md:w-1/3">
                <label for="caseNumber" class="block mb-2 font-medium text-roseDark dark:text-roseAccent">Choisis un numéro (1 à 6) :</label>
                <select id="caseNumber" class="w-full rounded-lg border-2 border-roseDark px-3 py-2 text-roseDark dark:text-roseAccent bg-white dark:bg-darkBg">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <button id="revealBtn" class="bg-roseAccent hover:bg-roseDark text-white font-bold py-3 px-6 rounded-lg shadow transition">✨ Révéler la case choisie</button>
            <button id="randomBtn" class="bg-roseDark hover:bg-roseAccent text-white font-bold py-3 px-6 rounded-lg shadow transition">🎲 Choisir aléatoirement</button>
        </div>
    </section>
    <script>
      // Menu mobile
      const menuBtn = document.getElementById('menubtn');
      if (menuBtn) {
        menuBtn.addEventListener('click', () => {
          const menu = document.getElementById('mobileMenu');
          menu.classList.toggle('hidden');
        });
      }

      // Tombola JS
      const slider = document.getElementById('scratchSlider');
      const cases = document.querySelectorAll('.case');
      const revealBtn = document.getElementById('revealBtn');
      const randomBtn = document.getElementById('randomBtn');
      const caseNumber = document.getElementById('caseNumber');

      // Gratter uniquement la case sélectionnée avec le slider
      slider.addEventListener('input', () => {
        const value = slider.value;
        const index = parseInt(caseNumber.value) - 1;
        cases.forEach((box, i) => {
          const overlay = box.querySelector('.overlay');
          if (i === index) {
            overlay.style.opacity = 1 - (value / 100);
          } else {
            overlay.style.opacity = 1;
          }
        });
      });

      // Révéler une case choisie (bouton)
      revealBtn.addEventListener('click', () => {
        const index = parseInt(caseNumber.value) - 1;
        cases.forEach((box, i) => {
          if (i === index) {
            box.classList.add('revealed');
            box.querySelector('.overlay').style.opacity = 0;
          } else {
            box.classList.remove('revealed');
            box.querySelector('.overlay').style.opacity = 1;
          }
        });
        slider.value = 100;
      });

      // Choisir une case aléatoirement
      randomBtn.addEventListener('click', () => {
        const randomIndex = Math.floor(Math.random() * 6);
        cases.forEach((box, i) => {
          if (i === randomIndex) {
            box.classList.add('revealed');
            box.querySelector('.overlay').style.opacity = 0;
          } else {
            box.classList.remove('revealed');
            box.querySelector('.overlay').style.opacity = 1;
          }
        });
        caseNumber.value = randomIndex + 1;
        slider.value = 100;
        alert(`🎉 Le hasard a choisi le modèle ${randomIndex + 1}!`);
      });

      // Remettre le slider et overlays quand on change de numéro
      caseNumber.addEventListener('change', () => {
        slider.value = 0;
        cases.forEach((box, i) => {
          box.classList.remove('revealed');
          box.querySelector('.overlay').style.opacity = 1;
        });
      });
    </script>
</body>
</html>
