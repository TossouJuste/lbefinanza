<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Donation</title>
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
      <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/donation.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
          style="min-height: 500px"
        >
          <h3 class="display-3 font-weight-bold text-white">Donation</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Accueil</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Participer a nos  dons de fin d'année </p>
          </div>
        </div>
      </div>
    <!-- Header End -->
    
		<!-- start banner Area -->
		
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center" >
              <div class="text-center pb-2">

                <p class="section-title px-5">
                  <span class="px-2">Formulaire de demande</span>
                </p>
                
              </div>
							<div class="banner-content col-lg-12 col-md-12">
								
                <p>
                  Nous vous invitons à participer à nos dons de fin d'année et à vous joindre à notre effort collectif pour apporter un soutien et une aide précieuse à ceux qui en ont le plus besoin. En cette période festive, où la générosité et la solidarité occupent une place centrale, nous avons l'opportunité de faire une réelle différence dans la vie des personnes vulnérables et des communautés qui traversent des difficultés.

                  En contribuant à nos dons de fin d'année, vous avez la possibilité d'avoir un impact significatif en permettant la réalisation de projets sociaux, l'assistance aux familles dans le besoin, la fourniture de repas chauds et de vêtements aux sans-abri, l'accès à l'éducation pour les enfants défavorisés, et bien d'autres actions porteuses de solidarité.

                  Votre participation est essentielle pour créer un effet d'entraînement et inspirer d'autres personnes à se joindre à cette cause noble. Ensemble, nous pouvons faire la différence et créer un monde plus juste, plus équitable et plus bienveillant. 
                </p>
                <div class="text-center pb-2">
                  <p class="section-title px-5">
                    <span class="px-2">Démarche a suivre</span>
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="row d-flex ">
              <div class="col-lg-12 contact-left">
                <div class="single-info">
                  
                  <p>
                    Pour bénéficier de notre don de fin d'année, veuillez suivre les étapes suivantes :
    
                        <br>1. Remplissez le formulaire de demande disponible sur notre site web. Assurez-vous de fournir toutes les informations requises avec précision.
                            
                            <br>2. Un agent de notre équipe se chargera de traiter votre demande. Pour protéger vos informations sensibles, vous pouvez choisir de les transmettre par mail sécurisé ou via notre système sécurisé de communication avec la banque.
                            
                            <br>3. L'agent en charge de votre demande examinera attentivement vos informations et évaluera votre éligibilité pour bénéficier du don. Si des informations supplémentaires sont nécessaires, vous serez contacté par l'agent pour les fournir.
                            
                            <br>4. Une fois votre demande approuvée, vous serez informé des prochaines étapes. Cela peut inclure la confirmation de votre don et la procédure pour recevoir les fonds.
                            
                            <br>Nous mettons tout en œuvre pour assurer la sécurité de vos informations et garantir la confidentialité de votre demande. Si vous avez des préoccupations concernant la transmission des informations sensibles, n'hésitez pas à contacter notre équipe de support client pour obtenir des clarifications supplémentaires.
                            
                            Nous vous remercions de votre intérêt pour notre don de fin d'année et nous nous engageons à vous accompagner tout au long du processus pour que votre demande soit traitée de manière transparente et sécurisée.
                  </p>
                </div>
					
							</div>
						</div>
				</div>

        
          
			<!-- End banner Area -->
      <section class="donate-area relative section-gap  col-lg-12 " id="donate">
				
				<div class="container justify-content-center col-lg-12">
					
							
						<div class="col-lg-12">
              <div class="text-center pb-2">

                <p class="section-title px-5">
                  <span class="px-2">Formulaire de demande</span>
                </p>
                
              </div>
							<form class="booking-form" id="myForm" action="donate.php">
								 	<div class="row">
								 		<div class="col-lg-6 d-flex flex-column" style="margin-top:15px;">
							 				<select name="type" class="app-select form-control" required>
												<option data-display="Nos differents type de don">Nos differents type de don</option>
												<option value="1">Dons financiers </option>
												<option value="2">Dons en natures </option>
												<option value="3">Dons de compétences </option>
											</select>
								 		</div>
							 			<div class="col-lg-6 d-flex flex-column" style="margin-top:15px;">
											<input name="fname" placeholder="Votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
										</div>
                    <div class="col-lg-6 d-flex flex-column" style="margin-top:15px;">
											<input name="pname" placeholder="Votre prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
										</div>
										<div class="col-lg-6 d-flex flex-column" style="margin-top:15px;">
											<input name="email" placeholder="votre email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control mt-20" required="" type="email">
										</div>
                    <div class="col-lg-6 d-flex flex-column" style="margin-top:15px;">
											<input name="tel" placeholder="Numero de telephone" class="form-control mt-20" required="" type="telephone">
										</div>
										

                    <a href="" class="btn btn-primary px-4 mr-2 rounded" style="margin-top:15px;">Demander</a>
       

										
									</div>
					  		</form>
					  		
						</div>
					
				</div>
			</section>
      

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

