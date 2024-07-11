<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>LBE Finanza About us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="site_web/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="site_web/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start-->
    @include('Siteweb_SeedBank.nav')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/apropos.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Chi siamo</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Chi siamo</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

      <!-- About Start -->
      <div class="container-fluid py-5">
        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-lg-7">
              <p class="section-title pr-5">
                <span class="pr-2">I nostri obiettivi</span>
              </p>
              <h1 class="mb-4">Siamo LBE Finanza</h1>
              <p>
              Il nostro obiettivo è quello di fornire un aiuto significativo a milioni di persone in difficoltà, consentendo loro di ottenere prestiti per avviare i loro progetti, risolvere situazioni difficili e beneficiare di donazioni o sovvenzioni alla fine dell'anno. Offriamo anche servizi di gestione del portafoglio e assicurativi per aiutarli a garantire il loro futuro finanziario. La nostra missione è fornire soluzioni finanziarie adatte alle loro specifiche esigenze e accompagnarli nel raggiungimento dei loro obiettivi. Siamo un team di esperti finanziari dedicati ad aiutare i nostri clienti a raggiungere il successo e ottenere una situazione finanziaria stabile.
              </p>
              <div class="row pt-2 pb-4">
                <div class="col-6 col-md-4">
                  <img class="img-fluid rounded" src="site_web/img/about.jpg" alt="" />
                </div>
                <div class="col-6 col-md-8">
                  <ul class="list-inline m-0">
                    <li class="py-2 border-top border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>Garantire l'accesso al finanziamento
                    </li>
                    <li class="py-2 border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>Fornire assistenza e supporto completi
                    </li>
                    <li class="py-2 border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>Garantire la sicurezza finanziaria dei nostri clienti
                    </li>
                  </ul>
                </div>
              </div>
              <a href=" {{ route('Page_loan')}} " class="btn btn-primary mt-2 py-2 px-4">Per saperne di più</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-5">
     
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">I nostri punti di forza</span>
          </p>
         
        </div> 
    </div>


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Competenza finanziaria</h4>
                <p class="m-0">
                  LBE Finanza Dispone di un team di esperti finanziari altamente qualificati ed esperti, in grado di fornire consulenze e soluzioni adatte alle esigenze finanziarie dei loro clienti...
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Ampia gamma di servizi </h4>
                <p class="m-0">
                LBE Finanza propone un'ampia gamma di servizi finanziari, tra cui prestiti, investimenti, consulenza nella gestione patrimoniale e servizi bancari...
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>Approccio personalizzato</h4>
                <p class="m-0">
                LBE Finanza attribuisce grande importanza alla comprensione delle esigenze specifiche di ogni cliente e propone soluzioni personalizzate per aiutarli a raggiungere i loro obiettivi finanziari...
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
    <h4>Tassi competitivi</h4>
    <p class="m-0">
        LBE Finanza si impegna a offrire tassi di interesse competitivi sui suoi prodotti e servizi finanziari, permettendo ai clienti di beneficiare di condizioni vantaggiose...
    </p>
</div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
    <h4>Servizio clienti di qualità</h4>
    <p class="m-0">
        LBE Finanza pone l'accento sulla soddisfazione dei propri clienti offrendo un servizio clienti reattivo, amichevole e professionale. Sono disponibili per rispondere alle domande e risolvere le preoccupazioni dei loro clienti...
    </p>
</div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
    <h4>Trasparenza</h4>
    <p class="m-0">
        LBE Finanza promuove la trasparenza nelle sue operazioni finanziarie. Si impegna a fornire ai propri clienti informazioni chiare e precise sui loro prodotti, costi e condizioni...
    </p>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facilities Start -->
     <!-- Gallery Start -->
     <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">"La nostra galleria"</span>
          </p>
          <h1 class="mb-4">"La gioia dei nostri clienti"</h1>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <li class="btn btn-outline-primary m-1 active" data-filter="*">
              "Ils ci hanno fidato."
              </li>
             
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-1.jpg" alt="" />
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-2.jpg" alt="" />
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-3.jpg" alt="" />
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-4.jpg" alt="" />
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-5.jpg" alt="" />
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="site_web/img/portfolio-6.jpg" alt="" />
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery End -->



      <!-- Team Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Il nostro Team</span>
          </p>
          <h1 class="mb-4">Un team dedicato, un'esperienza senza pari.</h1>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Brian W.Jones.jpg" alt="" />
             
            </div>
            <h4>Brian W.Jones</h4>
            <i>Presidente/Amministratore</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/David Mitchell.jpg" alt="" />
              
            </div>
            <h4>David Mitchell</h4>
            <i>Direttore Finanziario (CFO)</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Christopher Hayes.jpg" alt="" />
              
            </div>
            <h4>Christopher Hayes</h4>
            <i>Direttore degli investimenti </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Michael Reynolds.jpg" alt="" />
              
            </div>
            <h4>Michael Reynolds</h4>
            <i>Responsabile Marketing</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Sarah Morgan.jpg" alt="" />
              
            </div>
            <h4>Sarah Morgan</h4>
            <i>Responsabile Risorse Umane </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Emily Thompson.jpg" alt="" />
             
            </div>
            <h4>Emily Thompson</h4>
            <i>Responsabile del rischio </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Alexandre Gauthier.jpg" alt="" />
              
            </div>
            <h4>Alexandre Gauthier</h4>
            <i>Responsabile delle operazioni </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Louis Mercier.jpg" alt="" />
              
            
            
          </div>
          <h4>Huang Jing</h4>
          <i>Gestore di portafoglio </i>
        </div>
      </div>
    </div>
  </div>
    <!-- Team End -->


    

    <!-- Footer Start -->
    @include('Siteweb_SeedBank.pied_page')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="site_web/js/main.js"></script>
  </body>
</html>
