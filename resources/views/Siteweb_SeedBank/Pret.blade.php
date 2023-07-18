<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

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
    <!-- Navbar Start -->
    @include('Siteweb_SeedBank.nav')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/loan5.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Accord d'emprunt</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de financement</p>
        </div>
      </div>
    </div>
  
    <!-- Header End -->
    <!-- Store Start -->
    <div class="container-xxl py-2">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Nos différents types de financements</span>
          </p>
          <h1 class="mb-1">Alors qu'attendez vous ? </h1>
        </div>
          
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded" style="">
                    <img src="../site_web/img/give-money.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                    <div class="p-4">
                          
                          <h4 class="mb-3">Prêt personnel</h4>
                          <p style="text-align: start;">Un prêt polyvalent qui peut être utilisé pour divers besoins personnels
                             tels que les dépenses imprévues, les voyages, les rénovations, etc.</p>
                          
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_personal')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                          <a href="{{ route('form_loan_personal')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                      <img class="img-fluid" src="../site_web/img/mortgage.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                      <div class="p-4">
                          
                          <h4 class="mb-3">Prêt hypothécaire</h4>
                          <p style="text-align: start;"> Un prêt sécurisé par une propriété immobilière, généralement utilisé pour 
                            l'achat d'une maison ou le refinancement d'une hypothèque existante</p>
                          
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_mortgage')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                          <a href="{{ route('form_loan_mortgage')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                      <img class="img-fluid" src="../site_web/img/scholarship.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                      <div class="p-4">
                          
                          <h4 class="mb-3">Prêt étudiant</h4>
                          <p style="text-align: start;">Un prêt destiné à soutenir les étudiants dans le financement de leurs études,
                             couvrant les frais de scolarité, les livres et autres dépenses liées à l'éducation</p>
                         
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_student')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails</a>
                          <a href="{{ route('form_loan_student')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
          </div>
          

            <div class="row g-4" >
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 50px;" >
                    <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                      <img src="../site_web/img/car-loan.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                      <div class="p-4">
                            
                            <h4 class="mb-3">Prêt automobile </h4>
                            <p style="text-align: start;"> Un prêt conçu pour financer l'achat d'un véhicule neuf ou d'occasion.</p>
                            
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('car-loan')}}" class="btn btn-primary rounded py-2 px-4 m-2">Plus de détails </a>
                            <a href="{{ route('form_car-loan')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 50px;">
                    <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                        <img class="img-fluid" src="../site_web/img/coin-stack.png" alt=""style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                        <div class="p-4">
                            
                            <h4 class="mb-3">Prêt commercial</h4>
                            <p style="text-align: start;"> Un prêt destiné aux entreprises
                              pour financer leurs activités, leur croissance ou leurs investissements.</p>
                            
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('commercial_loan')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                            <a href="{{ route('form_commercial_loan')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"style="margin-top: 50px;">
                    <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                        <img class="img-fluid" src="../site_web/img/debt-consolidation.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                        <div class="p-4">
                            
                            <h4 class="mb-3">Prêt de consolidation de dettes</h4>
                            <p style="text-align: start;">Un prêt permettant de regrouper plusieurs dettes en une seule, simplifiant 
                              ainsi les remboursements et potentiellement réduire les frais d'intérêts.</p>
                          
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('debt_consolidation_loan')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                            <a href="{{ route('form_debt_consolidation_loan')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                        </div>
                    </div>
                 </div>
         
            </div>
   
            <div class="row g-4" >
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                    <img src="../site_web/img/entrepreneur.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                    <div class="p-4">
                          
                          <h4 class="mb-3">Prêt entreprise </h4>
                          <p style="text-align: start;"> Obtenez un financement adapté aux besoins de votre entreprise grâce à
                            notre prêt entreprise. Que ce soit pour l'expansion, l'achat d'équipement, 
                            le refinancement de dettes ou tout autre besoin de financement commercial, nous sommes là pour vous aider à réaliser vos projets.</p>
                          
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_entreprise')}}" class="btn btn-primary rounded py-2 px-4 m-2">Plus de détails </a>
                          <a href="{{ route('form_loan_entreprise')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                      <img class="img-fluid" src="../site_web/img/sick.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                      <div class="p-4">
                          
                          <h4 class="mb-3">Prêt maladie</h4>
                          <p style="text-align: start;"> Faites face aux dépenses médicales imprévues avec notre prêt maladie. Que ce soit pour couvrir les frais médicaux, les traitements spécialisés, les médicaments ou les frais liés à une hospitalisation, notre prêt maladie vous offre un soutien 
                            financier pour faire face aux situations de santé difficiles.</p>
                          
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_sick')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                          <a href="{{ route('form_loan_sick')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 50px;">
                  <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                      <img class="img-fluid" src="../site_web/img/entrepreneur.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                      <div class="p-4">
                          
                          <h4 class="mb-3">Prêt entrepreneur</h4>
                          <p style="text-align: start;"> Si vous êtes un entrepreneur cherchant à lancer ou développer votre entreprise, notre prêt entrepreneur est conçu spécialement pour vous. Obtenez les fonds nécessaires pour démarrer ou faire croître votre entreprise, investir dans de nouveaux équipements,
                            embaucher du personnel ou développer de nouvelles opportunités d'affaires.</p>
                        
                      </div>
                      <div class="store-overlay">
                          <a href="{{ route('loan_entrepreneur')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                          <a href="{{ route('form_loan_entrepreneur')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                      </div>
                  </div>
              </div>
            </div>  
          <div class="row g-4" style="margin-top: 50px;">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 50px;">
                <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                  <img src="../site_web/img/mariage.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                  <div class="p-4">
                        
                        <h4 class="mb-3">Credit mariage</h4>
                        <p style="text-align: start;"> Financer votre mariage n'a jamais été aussi facile avec notre crédit mariage sur mesure. Obtenez les fonds nécessaires
                          pour réaliser le mariage de vos rêves et créez des souvenirs inoubliables.</p>
                        
                    </div>
                    <div class="store-overlay">
                        <a href="{{ route('loan_mariage')}}" class="btn btn-primary rounded py-2 px-4 m-2">Plus de détails </a>
                        <a href="{{ route('form_loan_mariage')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 50px;">
                <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                    <img class="img-fluid" src="../site_web/img/naissance.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                    <div class="p-4">
                        
                        <h4 class="mb-3">Credit naissance</h4>
                        <p style="text-align: start;"> Préparez l'arrivée de votre bébé en toute sérénité avec notre crédit naissance personnalisé. Obtenez les fonds nécessaires pour couvrir les dépenses liées à la venue de votre enfant et assurez-vous
                          un départ heureux dans cette nouvelle étape de votre vie de famille.</p>
                        
                    </div>
                    <div class="store-overlay">
                        <a href="{{ route('loan_birth')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                        <a href="{{ route('form_loan_birth')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 50px;">
                <div class="store-item position-relative text-center bg-light shadow-sm border-top rounded">
                    <img class="img-fluid" src="../site_web/img/travel.png" alt="" style="width:40px;height:40px;margin-bottom:10px;margin-top:15px;">
                    <div class="p-4">
                        
                        <h4 class="mb-3">Credit special voyage</h4>
                        <p style="text-align: start;">Réservez votre voyage de rêve dès maintenant grâce à notre crédit spécial voyage. Profitez de taux avantageux et obtenez les fonds nécessaires pour explorer de nouveaux horizons, créer des souvenirs
                          inoubliables et vivre des expériences uniques à travers le monde.</p>
                      
                    </div>
                    <div class="store-overlay">
                        <a href="{{ route('loan_travel')}}" class="btn btn-primary  rounded py-2 px-4 m-2">Plus de détails </a>
                        <a href="{{ route('form_loan_travel')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire une Demande </a>
                    </div>
                </div>
            </div>
          
        </div>
      
     
  </div>
</div>
    

      </div>
  </div>
  <!-- Store End -->
   <!-- Gallery Start -->
   <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Seed Finance ,le credit pour tous.</span>
        </p>
        <h1 class="mb-4">Ils se sont confiés à nous.</h1>
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
            <img class="img-fluid w-100" src="site_web/img/clients-1.jpg" alt="" />
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="site_web/img/clients-2.jpg" alt="" />
           
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="site_web/img/clients-3.jpg" alt="" />
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="site_web/img/clients-4.jpg" alt="" />
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="site_web/img/clients-5.jpg" alt="" />
           
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="site_web/img/clients-6.jpg" alt="" />
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery End -->
  

    

    <!-- Footer Start -->
   
    <!-- Footer End -->
    @include('Siteweb_SeedBank.pied_page')
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
   
  </body>
</html>

