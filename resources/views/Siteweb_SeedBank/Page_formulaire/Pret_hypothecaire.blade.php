<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>KidKinder - Kindergarten Website Template</title>
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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/hy-4.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt hypothécaire</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de prêt hypothécaire</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">crédit hypothécaire à destination immobilière.</span>
          </p>
          
        </div>
        <div>
            <p>Nous sommes fiers de proposer un prêt hypothécaire qui vous permet d'acquérir un logement ou de refinancer votre prêt immobilier existant. Voici plus de détails sur les conditions et les avantages de notre prêt hypothécaire :

                Conditions :
                - Montant empruntable élevé : Vous pouvez bénéficier d'un montant substantiel pour financer l'achat de votre maison ou effectuer le refinancement de votre prêt immobilier existant. Le montant dépendra de la valeur de votre propriété et de votre capacité de remboursement.
                
                - Taux d'intérêt compétitif : Nous vous offrons des taux d'intérêt compétitifs pour rendre votre prêt hypothécaire plus abordable. Notre objectif est de vous aider à réaliser vos projets immobiliers tout en minimisant les coûts financiers.
                
                - Durée de remboursement flexible : Nous comprenons que chaque emprunteur a des besoins différents. C'est pourquoi nous vous proposons des durées de remboursement flexibles, adaptées à votre situation financière et à votre capacité de remboursement. Vous pouvez choisir une durée plus courte pour rembourser votre prêt plus rapidement ou une durée plus longue pour réduire vos paiements mensuels.
                
                Avantages :
                - Possibilité d'acquérir une propriété : Notre prêt hypothécaire vous offre la possibilité d'acheter votre maison de rêve. Il vous permet de concrétiser vos projets immobiliers et de devenir propriétaire, tout en bénéficiant d'un financement sécurisé.
                
                - Refinancement avantageux : Si vous avez déjà un prêt immobilier, notre prêt hypothécaire vous offre la possibilité de refinancer votre prêt existant. Vous pouvez ainsi bénéficier de taux d'intérêt plus avantageux, réduire vos paiements mensuels ou libérer des liquidités en fonction de la valeur nette de votre propriété.
                
                - Accompagnement personnalisé : Chez Seed Finance, nous mettons un point d'honneur à vous offrir un accompagnement personnalisé tout au long du processus. Nos experts en prêt hypothécaire sont là pour répondre à vos questions, évaluer votre situation et vous guider dans le choix de la meilleure option de financement.
                
                Nous sommes là pour vous aider à concrétiser vos projets immobiliers avec notre prêt hypothécaire. Faite votre demande dès aujourd'hui pour en savoir plus sur les conditions , les avantages de notre offre et obtenir l'aide financière dont vous avez besoin .</p>
        </div>
        <a href="{{ route('form_loan_mortgage')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire ma Demande </a>
        
        
    </div>    
    <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Votre pret hypothecaire au meilleur taux!.</span>
          </p>
          
        </div>
        
        <div class="col-6 col-md-8">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Emprunter juqu'à 125% du prix d'achat d'un bien immobilier chez Seed Finance
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Bénéficier d’un avantage fiscal non négligeable
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Flexible
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
            <p>Pour pouvoir faire une demande de prêt hypothécaire en Belgique, vous devez remplir quelques conditions de base : 

                Etre majeur au moment de la signature du contrat ;
                
                Etre solvable, autrement dit, pouvoir montrer une capacité de remboursement suffisante ; 
                Ne pas être fiché à la Centrale des Crédits de la Banque Nationale de Belgique ou, au minimum, être indiqué comme régularisé.
                Les garanties requises pour un prêt hypothécaire
                Pret hypothecaireSouscrire à un prêt hypothécaire n’est pas un acte qu’on réalise à la légère, çela demande de la réflexion, de la discussion et des conseils personnalisés. En effet, vous êtes lié pendant de nombreuses années à l’organisme bancaire 
                et vous vous engagez à rembourser des mensualités régulières tout au long de la durée de l’emprunt. 
                
                Ces mêmes organismes vont donc demander des garanties en s’assurant de votre capacité de remboursement et de votre solvabilité avant de vous octroyer un crédit hypothécaire par divers biais :
                
                L’hypothèque : en cas de non remboursement du crédit hypothécaire, la banque peut vendre le bien immobilier afin de se rembourser en totalité ou en partie.
                 
                Vos revenus & charges : en règle générale (sauf cas spécifiques), on peut compter que les charges ne peuvent dépasser entre 33% et 65% du montant total des revenus (en fonction de l’organisme de crédit et du profil du candidat).
                 
                La souscription à une assurance solde restant dû : si vous décédez, la compagnie d’assurance remboursera le montant du prêt hypothécaire restant. Cette assurance n’est en principe pas obligatoire mais certaines banques l’exigent afin de garantir le remboursement de la dette en cas de décès. Elle est fortement conseillée.</p>

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

