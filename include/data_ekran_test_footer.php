 <!-- data_test_footer.html -->
<style>
/* Footer stili */
#portal-footer-wrapper {
    background-color: #f8f9fa;
    padding: 2rem 0;
    font-size: 0.9rem;
    border-top: 1px solid #dee2e6;
    color: #212529;
}

#portal-footer-wrapper a {
    color: #0d6efd;
    text-decoration: none;
}

#portal-footer-wrapper a:hover {
    text-decoration: underline;
}

#portal-footer-wrapper h5 {
    font-size: 1rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

#portal-footer-wrapper ul {
    padding-left: 0;
    list-style: none;
}

#portal-footer-wrapper .footer-contact a {
    margin: 0 0.25rem;
}

#portal-footer-wrapper .footer-text {
    font-size: 0.8rem;
    color: #6c757d;
    margin-top: 1rem;
}

#portal-footer-wrapper .row > .col {
    margin-bottom: 1rem;
}

/* Saturs, kas aizpilda lapu */
#main-content {
flex: 1; /* aizņem visu pieejamo vietu starp header (ja ir) un footer */
}
/* Konteiners aizņem visu pieejamo vietu starp header un footer */
#tab-content {
    font-size: 1.0rem; /* palielina visu teksta saturu zem tab */
    flex: 1;                  /* aizņem pieejamo augstumu */
    display: flex;            /* flex izkārtojums */
    justify-content: center;  /* horizontāli centrē saturu */
    align-items: center;      /* vertikāli centrē saturu */
    text-align: center;
    padding: 2rem;
    background-color: #f0f0f0; /* fona krāsa */
}

/* Teksta vai satura bloks centrēts un ierobežots platumā */
#tab-content > div[data-content] {
    max-width: 900px;   /* maksimālais saturs platums */
    width: 100%;        /* aizņem visu platumu līdz max-width */
    margin: 0 2rem;     /* atstatums no malām (baneru vieta) */
}

/* Pievieno line-height un font-size, lai garš teksts būtu salasāms */
#tab-content > div[data-content] p {
    line-height: 1.6;
    font-size: 1.1rem;
}

/* Responsīvais izkārtojums */
@media (max-width: 768px) {
    #portal-footer-wrapper .row.row-cols-lg-6 {
        row-gap: 1rem;
    }
    #tab-content > div[data-content] {
        margin: 0 1rem;
        font-size: 1rem;
    }
}
</style> 

        <!-- Kājene, kas satur informāciju par autortiesībām -->
            
            <footer id="portal-footer-wrapper" >
            <div class="container" id="portal-footer">
                <div class="doormat row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-3">
                            <div class="col">
                                <h5>Par Mums</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Kontakti</a></li>
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
                                        <li><a  href="#">Nekustamo īpašumu vērtētāji</a></li>
                                        <li><a  href="#">Ekspertīzes</a></li>
                                    </ul>
                            </div>
                            <div class="col">
                                <h5>LEJUPIELĀDES</h5>
                                    <ul class="list-unstyled">
                                        <li><a  href="#">Lejupielādes pārskats</a></li>
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
        <!-- Kontakti un info -->
        <div class="small text-center py-1 mt-3">
            @argentinvest SIA, Rīga, Latvija | <a href="tel:+37122423386">T +371 22423386</a> | <a href="mailto:buvprojektitames@gmail.com">buvprojektitames@gmail.com</a>
        </div>

        <!-- Analytics / cookies -->
        <div id="plone-analytics">
            <script type="text/javascript" charset="UTF-8" data-cs-lang="lv" src="//cdn.cookie-script.com/s/6d35987ea62500c84e2ff15badd3f815.js" defer ></script>
        </div>

        <!-- Autortiesības -->
        <p class="footer-text text-center mt-2">&copy; 2025 Datu bāze. Visas tiesības aizsargātas.</p>
    </div>
        </footer>
