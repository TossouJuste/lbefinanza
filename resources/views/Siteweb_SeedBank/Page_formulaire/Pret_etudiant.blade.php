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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/student1.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt étudiant</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de prêt étudiant</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Les prêts étudiants  sont un investissement dans votre avenir.</span>
        </p>
        
      </div>
      <div>
         <p>Un financement conçu spécialement pour aider les étudiants à poursuivre leurs études en couvrant les frais de scolarité, les livres, le logement et d'autres dépenses liées à l'éducation. Nous comprenons les défis financiers auxquels les étudiants sont confrontés et nous nous engageons à offrir des conditions de prêt avantageuses, telles que des taux d'intérêt compétitifs et des options de remboursement flexibles, pour faciliter 
          leur parcours académique et les aider à réaliser leurs aspirations éducatives.</p>
      </div>
      <a href="{{ route('form_loan_student')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire ma Demande </a>
      
      
  </div>    
  <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Avantage.</span>
        </p>
        
      </div>
      
      <div class="col-6 col-md-8">
          <ul class="list-inline m-0">
            <li class="py-2 border-top border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Accès simplifié à un financement pour vos études.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Flexibilité de remboursement pour alléger la charge financière.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Possibilité de se concentrer sur les études sans soucis financiers.
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
         <p>Etre majeur : le minimum légal pour obtenir un prêt étudiant est d’être âgé de 18 ans ;
          Avoir moins de 30 ans, en règle générale. Cela n’est cependant pas valable partout : certains établissement fixent une limite plus basse (25-28 ans), tandis que d’autres n’en fixent pas ;
          Etre étudiant bien sûr, c’est-à-dire être inscrit dans un établissement d’enseignement supérieur (université, école, classe préparatoire, lycée pour les BTS) et pouvoir le justifier par une carte d’étudiant.</p>

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

