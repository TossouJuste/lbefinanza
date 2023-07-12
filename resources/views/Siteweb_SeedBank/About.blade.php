<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Seed Finance About us</title>
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
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

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
        <h3 class="display-3 font-weight-bold text-white">A propos</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">A propos</p>
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
                <span class="pr-2">Nos objectifs</span>
              </p>
              <h1 class="mb-4">Nous sommes Seed Finance</h1>
              <p>
                Notre objectif est d'apporter une aide significative à des millions de 
                personnes en situation de détresse en leur permettant d'obtenir des prêts 
                pour démarrer leurs projets, résoudre des situations difficiles et bénéficier de dons ou de subventions en fin d'année. Nous offrons également des services de gestion de portefeuille et d'assurance pour les aider à sécuriser leur avenir financier. Notre mission est de fournir des solutions financières adaptées à leurs besoins spécifiques et de les accompagner dans la réalisation de leurs objectifs. Nous sommes une équipe d'experts financiers expérimentés dévoués
                 à aider nos clients à réussir et à atteindre une situation financière stable.
              </p>
              <div class="row pt-2 pb-4">
                <div class="col-6 col-md-4">
                  <img class="img-fluid rounded" src="site_web/img/about.jpg" alt="" />
                </div>
                <div class="col-6 col-md-8">
                  <ul class="list-inline m-0">
                    <li class="py-2 border-top border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>Assurer l'accès au financement
                    </li>
                    <li class="py-2 border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>Fournir une assistance et un soutien complets
                    </li>
                    <li class="py-2 border-bottom">
                      <i class="fa fa-check text-primary mr-3"></i>garantir la sécurité financière de nos clients
                    </li>
                  </ul>
                </div>
              </div>
              <a href=" {{ route('Page_loan')}} " class="btn btn-primary mt-2 py-2 px-4">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-5">
     
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Nos Point Fort</span>
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
                <h4>Expertise financière </h4>
                <p class="m-0">
                  Seed Finance dispose d'une équipe d'experts financiers hautement qualifiés et expérimentés, capables de fournir des conseils et des solutions 
                  adaptés aux besoins financiers de leurs clients...
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
                <h4>Large gamme de services </h4>
                <p class="m-0">
                  Seed Finance propose une large gamme de services financiers, notamment des prêts, des investissements, 
                  des conseils en gestion de patrimoine et des services bancaires...
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
                <h4>Approche personnalisée</h4>
                <p class="m-0">
                  Seed Finance accorde une grande importance à la compréhension des besoins spécifiques de chaque client et propose
                   des solutions personnalisées pour les aider à atteindre leurs objectifs financiers...
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
                <h4>Taux compétitifs</h4>
                <p class="m-0">
                  Seed Finance s'efforce d'offrir des taux d'intérêt compétitifs sur ses produits et services 
                  financiers, permettant aux clients de bénéficier de conditions avantageuses....
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
                <h4>Service client de qualité </h4>
                <p class="m-0">
                  Seed Finance met l'accent sur la satisfaction de ses clients en offrant un service clientèle réactif, amical et professionnel. Ils sont
                   disponibles pour répondre aux questions et résoudre les préoccupations de leurs clients...
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
                <h4>Transparence</h4>
                <p class="m-0">
                  Seed Finance prône la transparence dans ses opérations financières. Ils s'engagent à fournir à leurs clients des informations
                   claires et précises sur leurs produits, leurs frais et leurs conditions...
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
            <span class="px-2">Notre galerie</span>
          </p>
          <h1 class="mb-4">La joie de nos clients</h1>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <li class="btn btn-outline-primary m-1 active" data-filter="*">
               Ils nous ont faire confiance
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
            <span class="px-2">Notre Equipe</span>
          </p>
          <h1 class="mb-4">Une equipe dédiée, une expérience inégalée.</h1>
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
            <i>Président/CEO </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/David Mitchell.jpg" alt="" />
              
            </div>
            <h4>David Mitchell</h4>
            <i>Directeur financier (CFO)</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Christopher Hayes.jpg" alt="" />
              
            </div>
            <h4>Christopher Hayes</h4>
            <i>Directeur des investissements </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Michael Reynolds.jpg" alt="" />
              
            </div>
            <h4>Michael Reynolds</h4>
            <i>Responsable marketing</i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Sarah Morgan.jpg" alt="" />
              
            </div>
            <h4>Sarah Morgan</h4>
            <i>Responsable des ressources humaines </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Emily Thompson.jpg" alt="" />
             
            </div>
            <h4>Emily Thompson</h4>
            <i>Responsable des risques </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Alexandre Gauthier.jpg" alt="" />
              
            </div>
            <h4>Alexandre Gauthier</h4>
            <i>Responsable des opérations </i>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="site_web/img/Louis Mercier.jpg" alt="" />
              
            
            
          </div>
          <h4>Huang Jing</h4>
          <i>Gestionnaire de portefeuille </i>
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
