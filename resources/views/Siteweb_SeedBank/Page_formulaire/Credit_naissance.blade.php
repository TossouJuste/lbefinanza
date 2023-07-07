<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>KidKinder - Kindergarten Website Template</title>
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
    <!-- Navbar Start -->
    @include('Siteweb_SeedBank.nav')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/naissance.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt crédit naissance</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de crédit naissance</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Le bonheur frappe a votre porte</span>
        </p>
        
      </div>
      <div>
         <p>Crédit spécial naissance chez Seed Finance : Un financement conçu pour accompagner les futurs parents dans les dépenses liées à l'arrivée d'un bébé. Bénéficiez de conditions avantageuses pour financer l'achat de matériel de puériculture, les frais médicaux, les vêtements et autres besoins pour votre nouveau-né. Nous comprenons l'importance de cette étape de vie et nous sommes là pour vous soutenir 
          financièrement dans cette belle aventure de la parentalité.</p>
      </div>
      <a href="{{ route('form_loan_birth')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire ma Demande </a>
      
      
  </div>    
  <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Avantage</span>
        </p>
        
      </div>
      
      <div class="col-6 col-md-8">
          <ul class="list-inline m-0">
            <li class="py-2 border-top border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Financement rapide pour préparer l'arrivée de votre bébé.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Taux d'intérêt compétitifs pour un crédit abordable
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Flexibilité de remboursement pour s'adapter à vos besoins financiers.
            </li>
          </ul>
        </div>
      </div>
  </div>  
  <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Conditions</span>
        </p>
        
      </div>
      <div>
         <p> Confirmation de grossesse ou certificat médical de naissance.
          Capacité de remboursement démontrée par des revenus stables.
          Évaluation favorable du risque de crédit par Seed Finance.</p>
      </div>
  </div>  

   

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
    <script src="js/main.js"></script>
  </body>
</html>

