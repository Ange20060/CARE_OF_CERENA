<?php

/* Tombola d'ongle */
// Dossier contenant les images
$dossier = "onglem/";
$allFiles = glob($dossier . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
if ($allFiles === false) $allFiles = [];

shuffle($allFiles);
$selectedImages = array_slice($allFiles, 0, 6);

// Compléter avec un placeholder inline si nécessaire
while (count($selectedImages) < 6) {
    $selectedImages[] = 'data:image/svg+xml;utf8,' . rawurlencode(
        '<svg xmlns="http://www.w3.org/2000/svg" width="800" height="600"><rect fill="#f8f0f4" width="100%" height="100%"/><text x="50%" y="50%" font-family="Verdana" font-size="28" fill="#ad1457" text-anchor="middle" alignment-baseline="central">Aucune image</text></svg>'
    );
}

$jsonImages = json_encode($selectedImages);
?>
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
      /* Cases agrandies et responsive */
      .cases-grid { gap: 1.25rem; }
      .case {
        position: relative;
        overflow: hidden;
        border-radius: 0.75rem;
        border: 2px solid #AD1457;
        background: #fff;
        cursor: pointer;
        height: 340px;            /* taille par défaut - grande */
        display: flex;
        align-items: center;
        justify-content: center;
      }
      /* plus grandes sur grand écran */
      @media(min-width: 1024px) {
        .case { height: 420px; } /* écran large */
      }
      .case img {
        width: 100%;
        height: 100%;
        object-fit: cover;       /* remplissage sans déformation */
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
      .case.revealed .overlay { opacity: 0; pointer-events: none; }
    </style>
</head>
<body class="bg-lightPink dark:bg-darkBg text-gray-800 dark:text-gray-100 antialiased transition-colors duration-300 min-h-screen">
    <?php include 'Haut.php'; ?>

    <section class="max-w-6xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold mb-6 text-roseDark dark:text-roseAccent">Modèle de PO au hasard</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8">
            Glissez le curseur pour révéler votre modèle d'ongle 🎉💅
        </p>

        <!-- grille : 1 colonne mobile, 2 tablette, 3 desktop -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 cases-grid mb-8" id="casesGrid">
            <?php foreach ($selectedImages as $i => $img): ?>
                <div class="case" data-index="<?= $i+1 ?>">
                    <img src="<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8') ?>" alt="modèle <?= $i+1 ?>"
                         onerror="this.src='data:image/svg+xml;utf8,<?= rawurlencode('<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;800&quot; height=&quot;600&quot;><rect fill=&quot;#f8f0f4&quot; width=&quot;100%&quot; height=&quot;100%&quot;/><text x=&quot;50%&quot; y=&quot;50%&quot; font-family=&quot;Verdana&quot; font-size=&quot;28&quot; fill=&quot;#ad1457&quot; text-anchor=&quot;middle&quot; alignment-baseline=&quot;central&quot;>Aucune image</text></svg>') ?>">
                    <div class="overlay"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-4 mb-6">
            <div class="w-full md:w-1/2">
                <label for="scratchSlider" class="block mb-2 font-medium text-roseDark dark:text-roseAccent">🧤 Glisse pour gratter :</label>
                <input type="range" id="scratchSlider" min="0" max="100" value="0" class="w-full accent-roseAccent">
            </div>
            <div class="w-full md:w-1/3">
                <label for="caseNumber" class="block mb-2 font-medium text-roseDark dark:text-roseAccent">Choisis un numéro (1 à 6) :</label>
                <select id="caseNumber" class="w-full rounded-lg border-2 border-roseDark px-3 py-2 text-roseDark dark:text-roseAccent bg-white dark:bg-darkBg">
                    <?php for ($n=1;$n<=6;$n++): ?>
                        <option value="<?= $n ?>"><?= $n ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <button id="revealBtn" class="bg-roseAccent hover:bg-roseDark text-white font-bold py-3 px-6 rounded-lg shadow transition">✨ Révéler la case choisie</button>
            <button id="randomBtn" class="bg-roseDark hover:bg-roseAccent text-white font-bold py-3 px-6 rounded-lg shadow transition">🎲 Choisir aléatoirement</button>
        </div>
    </section>

    <script>
      const imagesPuzzle = <?= $jsonImages ?>;
      const slider = document.getElementById('scratchSlider');
      const cases = document.querySelectorAll('.case');
      const revealBtn = document.getElementById('revealBtn');
      const randomBtn = document.getElementById('randomBtn');
      const caseNumber = document.getElementById('caseNumber');

      slider.addEventListener('input', () => {
        const value = slider.value;
        const index = parseInt(caseNumber.value) - 1;
        cases.forEach((box, i) => {
          const overlay = box.querySelector('.overlay');
          if (!overlay) return;
          overlay.style.opacity = (i === index) ? (1 - (value / 100)) : 1;
        });
      });

      revealBtn.addEventListener('click', () => {
        const index = parseInt(caseNumber.value) - 1;
        cases.forEach((box, i) => {
          const ov = box.querySelector('.overlay');
          if (i === index) {
            box.classList.add('revealed');
            if (ov) ov.style.opacity = 0;
          } else {
            box.classList.remove('revealed');
            if (ov) ov.style.opacity = 1;
          }
        });
        slider.value = 100;
      });

      randomBtn.addEventListener('click', () => {
        const randomIndex = Math.floor(Math.random() * cases.length);
        caseNumber.value = randomIndex + 1;
        cases.forEach((box, i) => {
          const ov = box.querySelector('.overlay');
          if (i === randomIndex) {
            box.classList.add('revealed');
            if (ov) ov.style.opacity = 0;
          } else {
            box.classList.remove('revealed');
            if (ov) ov.style.opacity = 1;
          }
        });
        slider.value = 100;
      });

      caseNumber.addEventListener('change', () => {
        slider.value = 0;
        cases.forEach((box) => {
          box.classList.remove('revealed');
          const ov = box.querySelector('.overlay');
          if (ov) ov.style.opacity = 1;
        });
      });
    </script>
</body>
</html>
