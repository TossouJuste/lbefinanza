<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Seed Finance About us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

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
    <div class="container-fluid  px-0 px-md-5 mb-5 " style="background-image: url('site_web/img/lg/assurance3.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
        <div class="row align-items-center px-3 " style="min-height: 400px">
          <div class="col-lg-6 text-center text-lg-left" style="margin-top:100px;">
           
            <h3 class="display-3 font-weight-bold text-primary font-opens" >
             Assurance  <span style="color: #F49122">Seed</span>
            </h3>
            
            <p class="mb-4 font-weight-bold " style="color:black;">
              La protection financière à portée de main. Dites bonjour à l'avenir en toute sérénité avec nos solutions 
              d'assurance sur mesure. Simplifiez-vous la vie, souscrivez dès maintenant
             
            </p>
         
          </div>
          <div class="col-lg-6 text-center text-lg-right rounded">
           
          </div>
        </div>
      </div>
      <!-- Header End -->
      <div class="container-fluid">
        <div class="container">
          <div class="align-items-center justify-content-center mb-2" style="height:5px;width:100px;background-color:#17A2B8; border-radius:3px;">

          </div>
  
          <p class="col-md-6" style="font-size: 16px; color:black;font-weight:bold;">Une bonne option d'assurance pour chaque situation !</p>
        </div>

        <div class="d-flex row justify-content-center align-items-center flex-wrap">

          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/assurance-voiture.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assurance voiture</p>
            <a class="mb-2 rounded btn btn-primary" href="#voiture">En savoir plus</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }} ">Souscrire </a>
          </div>
         
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/pret.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assurance crédit</p>
            <a class="mb-2 rounded btn btn-primary" href="#credit">En savoir plus</a>
            <a class="mb-2 rounded btn btn-primary" href=" {{route('assurances') }} ">Souscrire </a>
          </div>
 
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/assurance-habitation.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assurance habitation</p>
            <a class="mb-2 rounded btn btn-primary" href="#habitation">En savoir plus</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }}">Souscrire </a>
          </div>
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/croix.png" alt="" style="height: 60px;cusor:pointer;" class="mb-2">
            <p class="mb-2">Assurance maladie</p>
            <a class="mb-2 rounded btn btn-primary" href="#maladie">En savoir plus</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }}">Souscrire </a>
          </div>



        </div>

      </div>
      </div>

       <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/car.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assurance voiture</span>
            </p>
            <h3 class="mb-4 font-opens" id="voiture">Choisissez notre assurance auto pour une sécurité internationale </h3>
            <p>
              Quand il s'agit de protéger votre voiture, nous sommes le choix évident. Notre assurance
               voiture offre des avantages incomparables et une couverture étendue à l'international.
                Peu importe où vous allez, prenez la route en toute confiance, sachant que vous êtes 
                protégé par une assurance auto sur mesure, conçue spécialement pour répondre à vos besoins. 
                Nos experts en assurance sont là pour vous guider et vous offrir la tranquillité d'esprit que 
                vous méritez. Ne compromettez pas votre sécurité au volant,
               choisissez la meilleure protection pour votre véhicule et partez à l'aventure en toute sérénité
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4" >
                <img class="img-fluid rounded" src="site_web/img/lg/car1.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Assistance 24h/24
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Protection contre les sinistres
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Services multilingues
                  </li>
                </ul>
              </div>
            </div>
            <a href="{{route('assurances') }} " class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Souscrire</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/home1.jpeg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assurance habitation</span>
            </p>
            <h3 class="mb-4 font-opens" id="habitation">Choisissez notre assurance habitation : votre tranquillité assurée </h3>
            <p>
              "Optez pour notre assurance habitation et faites le bon choix pour votre tranquillité d'esprit. Bénéficiez d'avantages exclusifs et d'une couverture internationale complète. Profitez d'une assurance sur mesure pour protéger votre foyer où que vous soyez. Notre équipe est là pour vous accompagner et vous offrir la meilleure protection pour votre chez-vous.
              Prenez la route en toute confiance avec notre assurance habitation fiable et adaptée à vos besoins."   </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/home2.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Assistance 24h/24
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Protection contre les sinistres
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Services multilingues
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }}" class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Souscrire</a>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="/site_web/img/lg/maladie3.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assurance maladie</span>
            </p>
            <h3 class="mb-4 font-opens" id="maladie">Choisissez notre assurance habitation : votre tranquillité assurée </h3>
            <p>
              Optez pour notre assurance habitation et faites le bon choix pour votre tranquillité d'esprit. Bénéficiez d'avantages exclusifs et d'une couverture internationale complète. Profitez d'une assurance sur mesure pour protéger votre foyer où que vous soyez. Notre équipe est là pour vous accompagner et vous offrir la meilleure protection pour votre chez-vous.
              Prenez la route en toute confiance avec notre assurance habitation fiable et adaptée à vos besoins.  </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/maladie1.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Assistance 24h/24
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>A l'international
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Services multilingues
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }} " class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Souscrire</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/credit1.jpeg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assurance crédit</span>
            </p>
            <h3 class="mb-4 font-opens" id="credit">Assurance crédit internationale : votre sécurité garantie</h3>
            <p>
              Choisissez notre assurance crédit : une couverture internationale pour votre tranquillité d'esprit. Profitez d'avantages exclusifs et prenez la route en toute confiance avec notre assurance adaptée à vos besoins financiers. Protégez-vous contre les imprévus où que vous soyez dans le monde. Notre équipe est là pour vous guider et vous offrir la meilleure protection pour votre avenir financier. Ne laissez pas le hasard dicter votre destin,
               optez pour notre assurance crédit et préparez-vous à l'avenir en toute sérénité. </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/credit2.jpeg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Assistance 24h/24
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>A l'international
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Services multilingues
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }}"class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Souscrire</a>
          </div>
        </div>
      </div>
    </div>



      
  </body>

  <!-- Footer Start -->
  @include('Siteweb_SeedBank.pied_page')
  <!-- Footer End -->


</html>    
