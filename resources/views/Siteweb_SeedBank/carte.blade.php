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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/carte1.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Carte</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Carte Bancaire</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
   
    <div class="text-center pb-2">

      <p class="section-title px-5">
        <span class="px-2"> Bénéficiez des cartes bancaires</span>
      </p>
      <p>Visa Classic, Visa Premier, Visa Infinite : découvrez celle qui vous conviendra le mieux selon vos besoins.</p>
      <div class="container-fluid pt-5">
        <div class="container">
          
          <div class="row">
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="site_web/img/v1.gif" alt="" />
                <div class="card-body text-center">
                  <h4 class="card-title">Visa Classic</h4>
                  <h4 class="text-center ">0€/an</h4>
                  <p class="card-text">
                    Commandez dès aujourd'hui votre 
                    carte Visa Classic chez Seed Finance et profitez de tous ses avantages !
                  </p>
                </div>
                
                <a href="{{ route('get_carte')}}" class="btn btn-primary px-4 mx-auto mb-4">Demander</a>
              </div>
            </div>
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="site_web/img/visa2.gif" alt="" />
                <div class="card-body text-center">
                  <h4 class="card-title">Visa Premier</h4>
                  <h4 class="text-center ">0€/an</h4>
                  <p class="card-text">
                    Commandez dès aujourd'hui votre carte Visa Premier chez Seed Finance et bénéficiez d'un accès exclusif à des
                    avantages et privilèges réservés aux titulaires de cette carte haut de gamme. </p>
                </div>
                
                <a href="{{ route('get_carte')}}" class="btn btn-primary px-4 mx-auto mb-4">Demander</a>
              </div>
            </div>
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="site_web/img/visa3.gif" alt="" />
                <div class="card-body text-center">
                  <h4 class="card-title">Visa Infinite</h4>
                  <h4 class="text-center ">240€/an</h4>
                  <p class="card-text">
                    Commandez dès aujourd'hui votre carte Visa Infinite chez Seed Finance et découvrez un monde d'avantages exceptionnels, de services exclusifs et de privilèges 
                    haut de gamme pour une expérience de voyage et de shopping inégalée.  </p>
                </div>
                
                <a href="{{ route('get_carte')}}" class="btn btn-primary px-4 mx-auto mb-4">Demander</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid pt-5">
      <div class="text-center pb-2">

        <p class="section-title px-5">
          <span class="px-2"> Comment obtenir une carte ?</span>
        </p>
        <p>Pour obtenir une carte bancaire Brink Finance, vous devez au préalable ouvrir un compte courant Brink Finance. Il est gratuit, et sa carte bancaire aussi.</p>
      </div>   
      
      <div class="container">
        
        <div class="row">
          <div class="col-lg-3 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <div class="d-flex justify-content-center">
                <img class="card-img-top mb-2" src="site_web/img/formulaire.png" alt="" style="width:100px;height:100px;margin-bottom:15px;margin-top:15px;"  />
            

              </div>
                <div class="card-body text-center">
                <h4 class="card-title">Remplissez le formulaire</h4>
               
                <p class="card-text">
                  Simple et rapide, quelques minutes suffisent pour remplir le formulaire.    </p>
              </div>
              
             
            </div>
          </div>
          <div class="col-lg-3 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <div class="d-flex justify-content-center">
                <img class="card-img-top mb-2" src="site_web/img/folders.png" alt="" style="width:100px;height:100px;margin-bottom:15px;margin-top:15px;"  />
            

              </div>
              <div class="card-body text-center">
                <h4 class="card-title">Transmettez votre dossier</h4>
           
                <p class="card-text">
                  Téléchargez vos pièces justificatives pour l'étude de dossier. </p>
              </div>
              
            
            </div>
          </div>
          <div class="col-lg-3 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <div class="d-flex justify-content-center">
                <img class="card-img-top mb-2" src="site_web/img/signed.jpg" alt="" style="width:100px;height:100px;margin-bottom:15px;margin-top:15px;"  />
            

              </div>
              <div class="card-body text-center">
                <h4 class="card-title">Signez votre demande</h4>
             
                <p class="card-text">
                  Signez votre contrat après avoir remplir le formulaire de demande.  </p>
              </div>
              
          
            </div>
          </div>
          <div class="col-lg-3 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
               <div class="d-flex justify-content-center">
                <img class="card-img-top mb-2" src="site_web/img/debut.png" alt="" style="width:100px;height:100px;margin-bottom:15px;margin-top:15px;"  />
            

              </div>
              <div class="card-body text-center">
                <h4 class="card-title">Activez votre compte</h4>
             
                <p class="card-text">
                  Effectuez votre premier versement et recevez votre carte Visa gratuite. </p>
              </div>
              
         
            </div>
          </div>
        </div>
       
      </div>
      </div>
    </div>
  </div>
  <div class="text-center pb-2">

    <p class="section-title px-5">
      <span class="px-2"> Services et avantages</span>
    </p>
    <p>Découvrez les services et avantages liés aux cartes bancaires Seed Finance</p>
  </div> 
  <div class="container">
        
    <div class="row">

      <div class="col-lg-3 mb-5"> 
        <h4>Retrait</h4>

        <p>En zone euro : gratuit
          Retraits dans les banques partenaires partout dans le monde : gratuits
          
          Retrait à l’étranger
          Hors zone euro, vous pourrez également retirer sans frais chez nos banques partenaires, présentes dans une cinquantaine de pays.
          
          Retrait à l’étranger
          Hors zone euro, vous pourrez également retirer sans frais chez nos banques partenaires, présentes dans une cinquantaine de pays.</p>
      </div>
      <div class="col-lg-4 mb-5"> 
        <h4>Paiement</h4>

        <p>Sans contact
          Grâce au paiement sans contact, vos achats du quotidien n’ont jamais été aussi rapides ! Le montant est inférieur à 30 euros ? Plus besoin de saisir votre code confidentiel, vous n’avez qu’à apposer votre carte sur le terminal de paiement compatible durant quelques secondes.
          
          Retrait à l’étranger
          Effectuez vos achats en ligne l’esprit tranquille avec le système de sécurisation gratuit « Verified by Visa ». C’est simple ! Pour valider une transaction, un code vous est envoyé par SMS. Vous voilà protégé à tout moment contre l’utilisation frauduleuse de votre carte bancaire.</p>
      </div>
      <div class="col-lg-4 mb-5"> 
        <h4>Conditions de revenu</h4>

        <p>Grâce au paiement sans contact, vos achats du quotidien n’ont jamais été aussi rapides ! Le montant est inférieur à 30 euros ? Plus besoin de saisir votre code confidentiel, vous n’avez qu’à apposer votre carte sur le terminal de paiement compatible durant quelques secondes.</p>
      </div>
      

    </div>
  </div>    
 
  

    <!-- Contact Start -->
   
    <!-- Contact End -->

    <!-- Footer Start -->
    @include('Siteweb_SeedBank.pied_page')
    <!-- Footer End -->

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

