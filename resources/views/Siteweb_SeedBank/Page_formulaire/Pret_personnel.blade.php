<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/personnel.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt personnel</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de prêt personnel</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Idéal pour une grosse dépense ponctuelle</span>
          </p>
          
        </div>
        <div>
            <p>Chez Seed Finance, nous proposons un prêt personnel polyvalent pour répondre à vos différents besoins financiers. Que ce soit pour faire face à des dépenses imprévues, réaliser un voyage de rêve, effectuer des rénovations dans votre maison ou financer tout autre projet personnel, notre prêt personnel est conçu pour vous offrir la flexibilité nécessaire.

                Avec notre prêt personnel, vous pouvez emprunter un montant déterminé et le rembourser selon des modalités convenues. Nous proposons des taux d'intérêt compétitifs et des conditions de remboursement flexibles, adaptées à votre situation financière. Notre processus de demande est simple et rapide, vous permettant d'obtenir les fonds dont vous avez besoin dans les meilleurs délais.
                
                Nous comprenons que chaque emprunteur a des besoins uniques, c'est pourquoi nous travaillons en étroite collaboration avec vous pour trouver la meilleure solution de prêt personnel qui répond à vos attentes. Notre équipe de professionnels expérimentés est là pour vous guider tout au long du processus et répondre à toutes vos questions.
                
                Lorsque vous choisissez un prêt personnel chez Seed Finance, vous bénéficiez d'un service personnalisé, d'une transparence totale et d'une assistance dédiée pour vous aider à atteindre vos objectifs financiers. Faite votre dès aujourd'hui pour en savoir plus sur notre offre de prêt personnel et obtenir une solution sur mesure pour vos besoins.</p>
        </div>
        <a href="{{ route('form_loan_personal')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire Demande </a>
        
        
    </div>    
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Avec des taux d'intérêt avantageux.</span>
          </p>
          
        </div>
        
        <div class="col-6 col-md-8">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Taux d'intérêt fixe à partir de 3,6 %
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Recevez votre argent sous forme de somme forfaitaire
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Des mensualités fixes
              </li>
            </ul>
          </div>
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

