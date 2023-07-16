<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>
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
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/contact.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Contact</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contactez nous</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Entrez en Contact</span>
          </p>
          <h1 class="mb-4">Contactez-nous pour toute question ou demande</h1>
        </div>
         
      
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form method="POST" id="step-form" class="step-form"action="{{ route('contacts')}}">
                @csrf
                @method('post')
                @if ($errors->any())
                <div class="alert alert-danger">
                    <p class="p-2 bg-red-100 mb-2">Merci de bien vouloir examiner le formulaire afin de détecter et de corriger toute éventuelle erreur.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
               
              
              
                <div class="form-group col-lg-6">
                    <label for="nom">Nom </label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
            
                
        
              <div class="form-group col-lg-6">
                    <label for="email">Email </label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
    
              
        
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Sujet"
                    required="required"
                    data-validation-required-message="Sujet"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    name="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Entrez votre message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
        
        
        
              
        
               
            
               
            
                <button type="submit" class="btn btn-primary rounded">Envoyer la demande</button>
            </form>
            </div>
          </div>
          <div class="col-lg-5 mb-5">
            <p>
              Pour toutes vos questions et préoccupations,
               n'hésitez pas à entrer en contact avec Seed Finance. Notre équipe est là pour vous aider et vous fournir les réponses dont vous avez besoin.
               Contactez-nous dès maintenant et découvrez notre engagement envers votre satisfaction.
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>123 Street, New York, USA</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>contact@seedfinance.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Telephone</h5>
                <p>+33 757 824 762</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Overture</h5>
                <strong>Lundi - Samedi:</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

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

