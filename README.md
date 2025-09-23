 bautrix
Portala faili
bautrix/                           # Projekta sakne (nav publiska)
├─ public/                         # Publiskā DocumentRoot mape
│  ├─ index.php                     # Sākuma lapa
│  ├─ about.php                     # Info lapa
│  ├─ materials.php                 # Materiālu sadaļa
│  ├─ estimates.php                 # Tāmes sadaļa
│  ├─ masters.php                   # Meistaru sadaļa
│  ├─ assets/                       # Statiskie faili (CSS, JS, attēli)
│  │  ├─ css/
│  │  │  ├─ style.css               # Galvenais stils
│  │  │  ├─ materials.css           # Materiālu sadaļas stils
│  │  │  └─ estimates.css           # Tāmes sadaļas stils
│  │  ├─ js/
│  │  │  ├─ app.js                  # Galvenā loģika (navigācija, UI)
│  │  │  ├─ materials.js            # Interaktivitāte materiālu sadaļā
│  │  │  └─ estimates.js            # Tāmes kalkulatora skripti
│  │  ├─ img/                       # Attēli (logo, ikonas)
│  │  └─ uploads/                   # Lietotāju augšupielādētie faili (ar filtriem)
│  └─ .htaccess                      # Drošība + Friendly URL
│
├─ include/                         # Šabloni (atkārtoti HTML fragmenti)
│  ├─ header.php                     # <head> + navigācija
│  ├─ footer.php                     # Lapas kājene
│  ├─ menu.php                       # Galvenais menu
│  └─ functions.php                  # Palīgfunkcijas (formatDate(), sanitizeInput())
│
├─ config/                           # Konfigurācijas (ārpus DocumentRoot)
│  ├─ config.php                     # Pamatkonfigurācija (DB, sesijas, laika josla)
│  ├─ database.php                   # DB pieslēguma dati (host, user, pass, name)
│  ├─ app.php                        # Lietotnes konstantes (BASE_URL, SECRET_KEY)
│  └─ routes.php                     # Friendly URLs
│
├─ core/                             # Sistēmas loģika
│  ├─ classes/                       # OOP klases (User.php, Material.php, Estimate.php)
│  ├─ controllers/                   # Kontrolieri (lietotāja pieprasījumu apstrāde)
│  ├─ models/                        # Modeļi (DB vaicājumi, CRUD)
│  └─ helpers/                       # Palīgskripti (validācija, datuma formāti, utt.)
│
├─ database/                          # Datu bāze
│  ├─ schema.sql                     # Galvenā DB shēma (tabulas)
│  ├─ seed.sql                       # Sākotnējie dati (testa materiāli, cenas)
│  └─ migrations/                    # Migrācijas (DB izmaiņas pa soļiem)
│
├─ documents/                         # Dokumenti (ne publiski pieejami)
│  ├─ epd/                            # Environmental Product Declarations
│  ├─ certificates/                   # Sertifikāti (CE, ISO, LEED, BREEAM u.c.)
│  ├─ guides/                         # Rokasgrāmatas, tehniskā dokumentācija
│  └─ uploads/                        # Lietotāju augšupielādētie dokumenti
│
├─ storage/                           # Sistēmas dati
│  ├─ cache/                          # Kešatmiņas faili
│  ├─ logs/                           # Kļūdu un piekļuves logi
│  └─ tmp/                            # Pagaidu faili
│
├─ vendor/                            # Composer bibliotēkas (ja vajadzēs)
└─ README.md                           # Projekta dokumentācija