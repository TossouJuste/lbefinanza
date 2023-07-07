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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/sick.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt maladie</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de prêt maladie</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Solution idéale pour couvrir les frais d'hospitalisation et se rétablir.</span>
          </p>
          
        </div>
        <div>
            <p>Faites face aux dépenses médicales imprévues avec notre prêt maladie. Nous comprenons que des problèmes de santé peuvent survenir à tout moment, et qu'ils peuvent être accompagnés de coûts financiers considérables. C'est pourquoi nous avons créé notre prêt maladie pour vous offrir un soutien financier dans ces moments difficiles.

                Que ce soit pour couvrir les frais médicaux, les traitements spécialisés, les médicaments essentiels ou les frais liés à une hospitalisation, notre prêt maladie est spécialement conçu pour vous aider à faire face à ces dépenses imprévues. Nous comprenons que votre santé est votre priorité, et nous voulons vous soulager du fardeau financier qui peut accompagner ces situations.
                
                Notre prêt maladie vous offre une solution de financement rapide et accessible. Vous pouvez emprunter un montant adapté à vos besoins spécifiques et rembourser le prêt selon des modalités flexibles. Nous proposons des taux d'intérêt compétitifs et des conditions de remboursement qui s'ajustent à votre situation financière.
                
                Lorsque vous choisissez notre prêt maladie, vous pouvez compter sur notre expertise et notre engagement à vous fournir un service de qualité. Nous traitons votre demande avec rapidité et discrétion, afin de vous offrir une assistance financière dans les moments où vous en avez le plus besoin.
                
                Nous comprenons que faire face à des problèmes de santé peut être stressant, et nous sommes là pour vous accompagner et vous soutenir. Notre objectif est de vous apporter la tranquillité d'esprit et l'assistance financière nécessaire pour faire face à ces situations de santé imprévues. Vous pouvez compter sur notre équipe dévouée pour vous guider à chaque étape du processus de demande de prêt maladie.
                
                N'hésitez pas à nous contacter dès maintenant pour en savoir plus sur notre prêt maladie et obtenir l'aide financière dont vous avez besoin pour faire face à vos dépenses médicales. Nous sommes là pour vous soutenir dans votre parcours de guérison et vous offrir une solution financière adaptée à vos besoins médicaux.</p>
        </div>
        <a href="{{ route('form_loan_sick')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire Demande </a>
        
        
    </div>    
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">la flexibilité de notre prêt maladie.</span>
          </p>
          
        </div>
        
        <div class="col-6 col-md-8">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Rapide
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Tranquillité d'esprit
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Flexible
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

