
<?php ?>
<!DOCTYPE html>
<html lang="lv">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Datu portals</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/css/index.css">

</head>
<body>


<div class="tab-lang-wrapper d-flex align-items-center gap-3 bg-primary rounded-5 p-2 shadow-sm">
  <!-- Tabu saraksts -->
  <ul class="nav nav-pills nav-fill gap-2 small pill-nav-custom flex-grow-1" id="pillNav2" role="tablist">
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link active rounded-5 dropdown-toggle" id="home-tab2" data-tab="sakums"  type="button" role="tab" aria-selected="true">Sākums</button>
        <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Jaunākās ziņas un aktualitātes</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Bautrix platformas lietošanas pamācība</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative"  role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab1" data-tab="pieteiksana" type="button" role="tab" aria-selected="false">Tāmešana un rīki</button>
        <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Izmaksu katalogi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Kalkulatori</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Tāmes paraugi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Tipveida mezgli un to izmaksas</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Tāmēšanas pakalpojumi un  izmaksas</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="tamesanas_pamati" type="button">Tāme un projekta izmaksas  budžetam</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab2" data-tab="informativa" type="button" role="tab" aria-selected="false">Būvmateriālu un iekārtu tirgotāji</button>
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Celtniecības materiāli</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Apdares materiāli</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Inženiertīklu materiāli</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Iekārtas un mehānismi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Specializētie piegādātāji (nišas produkti)</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab3" data-tab="kalkulatori" type="button" role="tab" aria-selected="false">Materiālu katalogs/meklēšana</button>
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Metriāli</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Metriālu grupas</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Ražotājs</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Dīleris</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Cenu salīdzinājumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums6" type="button">Tirgus cenu tendences</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab4" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Mehānismi</button>
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Būvtehnika (ekskavatori, iekrāvēji, celtņi)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Ceļu būves tehnika</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Iekšdarbu mehānismi (lifti, pacēlāji, sastatnes)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Instrumenti</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Mehānismu serviss un remonts</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab5" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Labiekārtošanas darbi</button>
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Bruģēšana un segumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Dārzu un parku ierīkošana</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Žogi, vārti un nožogojumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Terases, lapenes, atpūtas zonas</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab6" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Ekvivalences noteikšana</button>
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Līdzvērtīgu materiālu atlase</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Alternatīvie risinājumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Tehnisko parametru salīdzināšana</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Sertifikātu atbilstība</button></li>
        </ul>
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab7" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Meistari/pakalpojumi</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Celtniecības darbi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Inženierkomunikācijas darbi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Projektēšanas pakalpojumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Apdares darbi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Dokumentāciju sagatavošanas, izstrāde</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums6" type="button">Specializētie darbi (metināšana, restaurācija u.c.)</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab8" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Arhitektiem/materiālu un risinājumu katalogs</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Materiālu ideju galerija</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">3D vizualizācijas un modeļi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Konstrukciju mezglu risinājumi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Ražotāju risinājumu katalogi</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Pielietojuma piemēri (fasādes, jumti, interjers, āra zonas)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums6" type="button">Lejupielādējami CAD/BIM faili</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums7" type="button">Materiālu salīdzinājums ar foto un tehniskajiem parametriem</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab9" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Vidējās tirgus cenas un uzraudzība</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Vidējās cenas pa materiālu grupām</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Vēsturisko cenu grafiki</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Cenu salīdzinājums pa reģioniem</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Cenu atbilstība iepirkumu specifikācijām</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Eksporta rīks atskaitēm (PDF, Excel)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums6" type="button">Integrācija ar ekvivalences noteikšanas moduli</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab10" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Servisa un uzturēšanas pakalpojumi</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Ventilācijas un apkures serviss</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Elektroiekārtu un tīklu apkope</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Ūdensapgādes un kanalizācijas uzturēšana</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Ugunsdrošības sistēmu apkope</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Periodiskās pārbaudes un apsekošana</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab11" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Datu bāze</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Piekļuve datu bāzei (reģistrācija / ielogošanās)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Materiālu saraksts (ar cenām)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Uzņēmumu saraksts (ar kontaktiem)</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Pakalpojumu saraksts (pēc kategorijām)</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab12" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Reģistrēties / Abonēt</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;">
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums0" type="button">Abonementa statuss / maksājumu pārvaldība</button></li> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Materiālu piedāvājumu ievietošana</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Dokumentācijas pievienošana</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Pakalpojumu un darba portfolio</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums5" type="button">Statistika</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums6" type="button">Klienta kabinets</button></li>
        </ul>       
    </li>
    <li class="nav-item dropdown position-relative" role="presentation">
      <button class="nav-link rounded-5 dropdown-toggle" id="profile-tab13" data-tab="sludinajumi" type="button" role="tab" aria-selected="false">Kontaktinformācija</button> 
      <ul class="dropdown-menu-custom list-unstyled position-absolute mt-1 bg-white rounded shadow-sm p-2" style="display: none;"> 
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums1" type="button">Bautrix komanda</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums2" type="button">Partneru programma</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums3" type="button">Reklāmas iespējas</button></li>
            <li><button class="dropdown-item-custom btn btn-link" data-tab="izdevums4" type="button">Tehniskais atbalsts</button></li>
        </ul>       
    </li>
    <!-- Pārējie tab elementi -->
  </ul>

  <!-- Valodu pogas -->
  <div class="profile-buttons-container d-flex gap-2">
    <button class="btn btn-primary lang-activate rounded-5 small " type="button">LV</button>
    <button class="btn btn-primary rounded-5 small " type="button">EN</button>
    <button class="btn btn-primary rounded-5 small " type="button">DE</button>
    <button class="btn btn-primary rounded-5 small " type="button">RU</button>
  </div>
</div>
<!-- Centrālais saturs ar baneriem -->
<div id="tab-content">
    <!-- Kreisais baneris -->
    <div class="left-banner">
        <?php include __DIR__ . "/../include/left-banner.php"; ?>
    </div>

    <!-- Galvenais saturs -->
    <div class="main-content">
        <div data-content="sakums"><?php include  __DIR__ . "/../include/sakuma-content.html"; ?></div>
        <div data-content="pieteiksana" style="display:none;">Šeit ir Pieteikšanās datu bāzē saturs.</div>
        <div data-content="informativa" style="display:none;">Šeit ir Informatīvā izdevuma saturs.</div>
        <div data-content="kalkulatori" style="display:none;">Šeit ir Izmaksu un kalkulatoru saturs.</div>
        <div data-content="sludinajumi" style="display:none;">Šeit ir Sludinājumu saturs.</div>
        <div data-content="materialu-tirgotaji" style="display:none;">Šeit ir Materiālu tirgotāju saturs.</div>
        <div data-content="tamesanas_pamati" style="display:none;"><?php include "tamesanas_pamati.html"; ?></div>
        <div data-content="izdevums1" style="display:none;">Šeit ir Informatīvā izdevuma 1. izdevums.</div>
        <div data-content="izdevums2" style="display:none;">Šeit ir Informatīvā izdevuma 2. izdevums.</div>
        <div data-content="izdevums3" style="display:none;">Šeit ir Informatīvā izdevuma 3. izdevums.</div>
        <div data-content="izdevums4" style="display:none;">Šeit ir Informatīvā izdevuma 4. izdevums.</div>
        <div data-content="izdevums5" style="display:none;">Šeit ir Informatīvā izdevuma 5. izdevums.</div>
        <div data-content="izdevums6" style="display:none;">Šeit ir Informatīvā izdevuma 6. izdevums.</div>
        <div data-content="izdevums7" style="display:none;">Šeit ir Informatīvā izdevuma 7. izdevums.</div>

    </div>

    <!-- Labais baneris -->
    <div class="right-banner">
        <?php include __DIR__ . "/../include/right-banner.php"; ?>
    </div>
</div>
    <?php include __DIR__ . "/../include/data_ekran_test_footer.php"; ?>
    <!--  Script tiek piesaistīts failam -->
<script>

    // Noklusētā valoda (vai no localStorage, ja pieejama)
    let selectedLang = localStorage.getItem('selectedLang') || 'LV';

    // Valodu pogas
    const langButtons = document.querySelectorAll('.profile-buttons-container button');

    // Atjauno valodu pogu stāvokli (aktivē tikai izvēlēto)
    function updateLanguageButtons() {
    langButtons.forEach(btn => {
        if (btn.textContent.trim() === selectedLang) {
        btn.classList.add('lang-active');
        } else {
        btn.classList.remove('lang-active');
        }
    });
    }


    // Uzklikšķinot uz valodas pogas
    langButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            selectedLang = btn.textContent.trim();
            localStorage.setItem('selectedLang', selectedLang); // saglabā pārlūkā
            updateLanguageButtons();


            console.log('Izvēlētā valoda:', selectedLang);
            // Šeit vari ielikt valodas maiņas funkciju
        });
    });

    // TAB pārslēgšana
    const tabButtons = document.querySelectorAll('.nav-link[data-tab]');
    const tabContents = document.querySelectorAll('#tab-content [data-content]');

    tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        // Noņem active visiem tab pogām
        tabButtons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
        });

        // Piešķir active klikātajam
        btn.classList.add('active');
        btn.setAttribute('aria-selected', 'true');

        const target = btn.getAttribute('data-tab');

        // Rāda tikai atbilstošo saturu
        tabContents.forEach(c => {
        c.style.display = (c.getAttribute('data-content') === target) ? 'block' : 'none';
        });

        // Atjauno valodas pogu stāvokli (saglabā aktīvo)
        updateLanguageButtons();
        });
    });
    // Dropdown hover loģika
        document.addEventListener('DOMContentLoaded', () => {
            updateLanguageButtons(); // Parāda pareizo aktīvo valodu uzreiz
        // Atrodam visus dropdownus
            document.querySelectorAll('.nav-item.dropdown').forEach(dropdown => {
            const dropdownToggle = dropdown.querySelector('.nav-link');
            const dropdownMenu = dropdown.querySelector('.dropdown-menu-custom');

            // Toggle dropdown on click
            dropdownToggle.addEventListener('click', (e) => {
                e.stopPropagation(); // neļauj uzreiz aizvērt
                const isOpen = dropdownMenu.style.display === 'block';
                closeAllDropdowns();
                dropdownMenu.style.display = isOpen ? 'none' : 'block';
            });
        });
        // Aizver dropdown, ja klikšķina ārpusē
        document.addEventListener('click', () => {
            closeAllDropdowns();
        });

        function closeAllDropdowns() {
            document.querySelectorAll('.dropdown-menu-custom').forEach(menu => {
            menu.style.display = 'none';
            });
        }

        // Uzklikšķinot uz dropdown apakšpunktiem
        document.querySelectorAll('.dropdown-item-custom').forEach(btn => {
            btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-tab');

            document.querySelectorAll('.nav-link[data-tab]').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });

            document.querySelectorAll('#tab-content [data-content]').forEach(c => {
                c.style.display = 'none';
            });

            const contentDiv = document.querySelector(`[data-content="${target}"]`);
            if (contentDiv) {
                contentDiv.style.display = 'block';
            }

            updateLanguageButtons();
            closeAllDropdowns(); // aizver dropdown pēc izvēles
            });
        });
    });

  // automātiski visiem (uz ielādi un loga izmēra maiņu)

        function adjustMainContentHeight() {
        const left = document.querySelector('.left-banner');
        const right = document.querySelector('.right-banner');
        const main = document.querySelectorAll('.main-content'); // visi main-content
        
        const maxHeight = Math.max(
            left ? left.offsetHeight : 0,
            right ? right.offsetHeight : 0
        );

        main.forEach(mc => {
            mc.style.minHeight = maxHeight + 'px';
        });
        }

// Palaist uzreiz un loga izmēra maiņā
window.addEventListener('load', adjustMainContentHeight);
window.addEventListener('resize', adjustMainContentHeight);
  </script>
  <!--<script> src="tabs_test3.js"></script>-->
  <!--<script> src="tabs_handler_test_atlasitajs.js"></script>-->
    </body>
</html>
