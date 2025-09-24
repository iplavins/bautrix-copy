<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bautrix - būvniecības un plānošanas projektu informācija un kalkulatori">
    <meta name="keywords" content="būvniecība, kalkulators, projektu grāmata, izmaksas, deklarācijas, būvprojekti">
    <meta name="robots" content="index, follow">


    <title>Datu bāze</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">


      <!-- Bootrstrap vajadzīgais CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Pievienojam Font Awesome ikonas -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Pievienojam lapas dizaina/ stila failu -->
    
    <link rel="stylesheet" href="data_baze_style.css" type="text/css">

    <!-- Lightbox CSS fails -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
    .error {
        border-color: red ;
        background-color: #ffe6e6;
    }
    .error-message {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
    .toggle-password {
       position: absolute;
        top: 70% ;
        right: 10px ;
        transform: translateY(-50%) ;
        padding: 0.25rem;  /* mazāks padding, lai acs nepāraug */
        height: 1.5rem;    /* noteikt konkrētu augstumu, lai sēžas pareizi */
        width: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index:2;/* lai pārklāj input malu */
        cursor: pointer;
      
        }

    .toggle-password i {
        line-height: normal;
        font-size: 1.25rem; /* vai fs-5 kā tev bija */
        
       
        }
    </style>
</head>
<body>
     <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm pill-nav-custom" id="pillNav2" role="tablist"> <!-- style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);"-->
            <li class="nav-item" role="presentation">
                <a class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">Sākums</a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab1" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Pieteikšanās datu bāzē</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Informatīvais izdevums</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab3" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Izmaksas ,kalkulatori</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab4" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Sludinājumi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab5" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Materiālu tirgotāji</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab6" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Profile5</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab7" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Profile6</button>
            </li>
            <li class="nav-item" role="presentation">
                <div class="nav-link rounded-5 d-flex gap-2 p-1 profile-buttons-container" role="tab" aria-selected="false" id="profile-tab8">
                    <button class="btn btn-primary activate rounded-5 small flex-fill ">LV</button>
                    <button class="btn btn-primary rounded-5 small flex-fill">EN</button>
                    <button class="btn btn-primary rounded-5 small flex-fill">DE</button>
                    <button class="btn btn-primary rounded-5 small flex-fill">RU</button>
                </div>
                <!--<button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</button>-->
            </li>
        </ul>
        <br>
            <div class="container mt-5">
                <div class="bg-info  p-4 rounded-4 shadow-sm" style="max-width: 600px; margin: auto;">
                    <h4 class="mb-4 text-center">Reģistrācija</h4>
                    
                    <ul class="nav nav-pills nav-justified mb-4" id="registrationTabs">
                    <li class="nav-item">
                        <button class="nav-link active" id="private-tab" data-bs-toggle="pill" data-bs-target="#private" type="button" role="tab">Privātpersona</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="company-tab" data-bs-toggle="pill" data-bs-target="#company" type="button" role="tab">Uzņēmums</button>
                    </li>
                    </ul>

                    <div class="tab-content">
                    <!-- Privātpersona -->
                    <div class="tab-pane fade show active" id="private" role="tabpanel">
                        <form action="register.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Vārds</label>
                            <input type="text" name="vards" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Uzvārds</label>
                            <input type="text" name="uzvards" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tālrunis</label>
                            <input type="tel" name="talrunis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-pasts</label>
                            <input type="email" name="epasts" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label">Parole</label>
                            <input type="password" id="password_private" name="parole" class="form-control pe-5" required>
                            <button type="button" class="btn btn-sm  border-0 bg-transparent toggle-password"
                                     data-target="password_private">
                                <i class="bi bi-eye fs-5"></i>
                            </button>
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label">Atkārtoti parole</label>
                            <input type="password" id="password_confirm_private" name="parole_apstipr"  class="form-control pe-5" required>
                             <button type="button" class="btn btn-sm  border-0 bg-transparent toggle-password"
                                     data-target="password_confirm_private">
                                <i class="bi bi-eye fs-5"></i>
                             </button>
                        </div> 
                        <div id="password_error_private" class="error-message" style="display: none;"  >Paroles nesakrīt!</div>
                        <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeTermsPrivate" name="piekritu" required>
                        <label class="form-check-label" for="agreeTermsPrivate">
                            Es piekrītu <a href="noteikumi.html" target="_blank">noteikumiem un privātuma politikai</a>
                        </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Reģistrēties</button>
                        </form>
                    </div>

                    <!-- Uzņēmums -->
                    <div class="tab-pane fade" id="company" role="tabpanel">
                        <form action="register.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Uzņēmuma nosaukums</label>
                            <input type="text" name="uznemuma_nosaukums" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reģistrācijas numurs</label>
                            <input type="text" name="registracijas_numurs" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kontaktpersona</label>
                            <input type="text" name="kontaktpersona" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tālrunis</label>
                            <input type="tel" name="talrunis" class="form-control" required>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">E-pasts</label>
                            <input type="email" name="epasts" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label">Parole</label>
                            <input type="password" id="password_company" name="parole"  class="form-control pe-5" required>
                              <button type="button" class="btn btn-sm  border-0 bg-transparent toggle-password"
                                    data-target="password_company">
                                <i class="bi bi-eye fs-5"></i>
                               </button>
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label">Atkārtoti parole</label>
                            <input type="password" id="password_confirm_company" name="parole_apstipr"  class="form-control pe-5" required>
                            <button type="button" class="btn btn-sm  border-0 bg-transparent toggle-password"
                                     data-target="password_confirm_company">
                                <i class="bi bi-eye fs-5"></i>
                             </button>
                        </div>
                        <div id="password_error_company" class="error-message" style="display: none;">Paroles nesakrīt!</div>
                        
                        <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeTermsCompany"  name="piekritu" required>
                        <label class="form-check-label" for="agreeTermsCompany">
                            Es piekrītu <a href="noteikumi.html" target="_blank">noteikumiem un privātuma politikai</a>
                        </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Reģistrēties</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
                <br>

            <!-- Kājene, kas satur informāciju par autortiesībām -->
            
            <footer id="portal-footer-wrapper">
            <div class="container" id="portal-footer">
                <div class="doormat row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6">
                            <div class="col">
                                <h5>Par Mums</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Kontakti</a></li>
                                        <li><a  href="#">Maršruta apraksts</a></li>
                                        <li><a  href="#">Bankas rekvizīti</a></li>
                                        <li><a  href="#">Jaunumi</a></li>
                                        <li><a  href="#">Printēt</a></li>
                                    </ul>
                            </div>
                            <div class="col">
                                <h5>RĪKI</h5>                                
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Ēku dzīves cikla novērtēsana , renovācijas un likvidēšanas izdevumi</a></li>
                                        <li><a  href="#">Amortizācijas un rentabilitātes kalkulators ( ARK )</a></li>
                                        <li><a  href="#">Ēku detaļu celtniecības kalkulators</a></li>
                                        <li><a  href="#">Tiešsaistes rīki</a></li>
                                        <li><a  href="#">Pasīvo konstrukciju mezgli</a></li>
                                        <!--<li><a  href="#">Klimaaktiv standarts būvniecībai un renovācijai-platforma</a></li>-->
                                    </ul>                                
                            </div>
                            <div class="col">
                                <h5>DEKLARĀCIJAS CENTRS</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Pieteikties</a></li>
                                        <li><a  href="#" rel="noopener" target="_blank">Reģistrēties</a></li>
                                        <li><a  href="#">Deklarācijas </a></li>
                                        <li><a  href="#">Faktu kastīte</a></li>
                                        <li><a  href="#">Šeit jūs atradīsiet bieži uzdotos jautājumus</a></li>
                                    </ul>
                            </div>
                            <div class="col">
                                <h5>PLATFORMAS</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">SIA „Latvijas standarts” (LVS)</a></li>
                                        <li><a  href="#">Būvniecības informācijas sistēma (BIS)</a></li>
                                        <li><a  href="#">Būvniecības projektu vienotā datu vide (baukor)</a></li>
                                        <li><a  href="#">Būvju vispārīgo prasību būvnormatīvs</a></li>
                                    </ul>
                            </div>
                            <div class="col">
                                <h5>Pakalpojumu platformas</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Uzņēmumu saraksts</a></li>
                                        <li><a  href="#">Ražotāju platformas</a></li>
                                        <li><a  href="#">Uzņēmuma prezentācijas </a> </li>
                                        <li><a  href="#">Būvuzņēmumu saraksts</a></li>
                                        <li><a  href="#">Projektētāju saraksts</a></li>
                                        <li><a  href="#">Nekustamo īpašumu aģentūras</a></li>
                                        <li><a  href="#">Nekustamo īpašumu vērtētāji</a></li>
                                        <li><a  href="#">Ekspertīzes</a></li>
                                    </ul>
                            </div>
                            <div class="col">
                                <h5>LEJUPIELĀDES</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Lejupielādes pārskats</a></li>
                                        <li><a  href="#">Raksturīgās vērtības</a></li>
                                        <li><a  href="#">Datu_baze mape</a></li>
                                        <li><a  href="#">Datu_baze logo</a></li>
                                        <li><a  href="#">Lietošanas pamācības</a></li>
                                        <li><a  href="#">Cenrādis</a></li>
                                        <li><a  href="#">Privātuma politika</a></li>
                                        <li><a  href="#" rel="noopener">Noteikumi un nosacījumi</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        <div class="small text-center py-1" id="#">@argentinvest SIA   Riga, Latvija  
            <a>T +371 22423386</a>   <a href="#">buvprojektitames@gmail.com</a>  
        </div>
        <div id="plone-analytics"> <script
        type="text/javascript"
        charset="UTF-8"
        data-cs-lang="lv"
        src="//cdn.cookie-script.com/s/dd8af4daa2e8206788cb1ab2e766404b.js">
        </script></div>
        <!-- Matomo -->
        <!-- Kājene -->

            <p class="footer-text"> 
                &copy; 2025 Datu bāze. Visas tiesības aizsargātas.</p>
        </footer>

      <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <!-- Bootstrap 5 JS bundlis (noņemts jQuery atkarību) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>   
    <script>
        document.querySelectorAll('.profile-buttons-container .btn').forEach(button => {
                button.addEventListener('click', () => {
                // Noņem aktīvo klasi no visām pogām
                    document.querySelectorAll('.profile-buttons-container .btn').forEach(btn => btn.classList.remove('active'));
                // Pievieno aktīvo klasi tikai uzklikšķinātajai pogai
                    button.classList.add('active');
                });
            });
    </script>
    <!-- Paroles salīdzināšanas skripts -->
    <script>
       document.addEventListener('DOMContentLoaded', function () {
                // ===== PRIVĀTPERSONAS FORMA =====
                const formPrivate = document.querySelector('#private form');
                if (formPrivate) {
                    const pwPrivate = document.getElementById('password_private');
                    const pwConfirmPrivate = document.getElementById('password_confirm_private');
                    const errorPrivate = document.getElementById('password_error_private');

                    formPrivate.addEventListener('submit', function (e) {
                        if (pwPrivate.value !== pwConfirmPrivate.value) {
                            errorPrivate.style.display = 'block';
                            pwConfirmPrivate.classList.add('is-invalid');
                            e.preventDefault(); // neļauj nosūtīt formu
                        } else {
                            errorPrivate.style.display = 'none';
                            pwConfirmPrivate.classList.remove('is-invalid');
                        }
                    });

                    pwConfirmPrivate.addEventListener('input', function () {
                        if (pwPrivate.value === pwConfirmPrivate.value) {
                            errorPrivate.style.display = 'none';
                            pwConfirmPrivate.classList.remove('is-invalid');
                        }
                    });
                }

                // ===== UZŅĒMUMA FORMA =====
                const formCompany = document.querySelector('#company form');
                if (formCompany) {
                    const pwCompany = document.getElementById('password_company');
                    const pwConfirmCompany = document.getElementById('password_confirm_company');
                    const errorCompany = document.getElementById('password_error_company');

                    formCompany.addEventListener('submit', function (e) {
                        if (pwCompany.value !== pwConfirmCompany.value) {
                            errorCompany.style.display = 'block';
                            pwConfirmCompany.classList.add('is-invalid');
                            e.preventDefault(); // neļauj nosūtīt formu
                        } else {
                            errorCompany.style.display = 'none';
                            pwConfirmCompany.classList.remove('is-invalid');
                        }
                    });

                    pwConfirmCompany.addEventListener('input', function () {
                        if (pwCompany.value === pwConfirmCompany.value) {
                            errorCompany.style.display = 'none';
                            pwConfirmCompany.classList.remove('is-invalid');
                        }
                    });
                }
            });
            </script>
            <script>
            // Acs ikonas funkcionalitāte
            document.querySelectorAll('.toggle-password').forEach(button => {
                button.addEventListener('click', function () {
                const targetId = this.dataset.target;
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
                });
            });
    </script>

</body>
</html>