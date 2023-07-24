<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SeedBank </title>
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
    <style>
      .one_text
      {
        position: relative;
      }
      .second_text::before
      {
        content:"";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #fff;
        border-left: 2px solid #17A2B8;
        animation: animate 9s steps(12) infinite; 
      }

      @keyframes animate 
      {
        40%,60%
        {
          left: 100%;
        }
        100%
        {
          left: 0;
        }
      }
      
          
    .carousel {
      overflow: hidden;
      width: 100%;
      height: 300px;
    }

    .carousel-slide {
      display: flex;
      width: 300%;
    }

    .carousel-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Optional: Add styles for navigation buttons */
    .carousel-prev,
    .carousel-next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      padding: 10px;
    }

    .carousel-prev {
      left: 0;
    }

    .carousel-next {
      right: 0;
    }
    </style>
    

  </head>

  <body>
    <!--nav-->
    @include('Siteweb_SeedBank.nav')
    

    <!-- Header Start -->
    <div class="container-fluid  px-0 px-md-5 mb-5 bg-images taille bg-primary">
      <div class="row align-items-center px-3 ">
        <div class="col-lg-6 text-center text-lg-left" style="margin-top:100px;">
         
          <div class="display-3 font-weight-bold text-white">
             <span class="one_text one_first " style="color: #249DD5"> <span style="color: #F49122">Seed </span> Finance <span style="color:  #F49122">!</span> </span>
            

          </div>
          
          <p class="text-white mb-4">
            Votre banque spécialisée dans les crédits bancaires, assurance, épargne, transferts, investissements en crypto-monnaies... 
            une banque présente à vos côtés, pensée pour répondre à vos besoins au quotidien.
           
          </p>
          <a href="{{ route('Page_about')}}" class="btn mt-1 py-3 px-4 rounded" style="background-color: #F49122;color:white;">En savoir plus </a>
        </div>
        
      </div>
    </div>
    <!-- Header End -->

    <!-- Facilities Start -->
  
 
    
    <div class="container-fluid">
      
     
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class=" d-none d-md-flex d-sm-flex font-weight-bold text-white mb-2">
          <span class="one_text one_first " style=" font-size:22px;"> <span style="color: #F49122">Seed </span> </span>
          <span class="one_text second_text" style="color: #249DD5;font-size:22px;">Bank votre partenaire fidèle <img src="site_web/img/lg/calin-virtuel.png" alt=""></span>
  
       </div>
       <div class=" d-md-none d-sm-none  display-3 font-weight-bold text-white mb-2">
        <span class="one_text one_first " style=" font-size:14px;"> <span style="color: #F49122">Seed </span> </span>
        <span class="one_text second_text" style="color: #249DD5;font-size:14px;">Bank votre partenaire fidèle <img src="site_web/img/lg/calin-virtuel.png" alt=""></span>

     </div>
      <div class="align-items-center justify-content-center mb-2" style="height:5px;width:100px;background-color:#17A2B8; border-radius:3px;">

        </div>

        <p class="" style="font-size: 16px; color:black;font-weight:bold;">Avec l'appli, découvrez vos comptes bancaires <span><img src="site_web/img/lg/calin-virtuel.png" alt=""></span> comme vous ne les avez jamais vus !</p>

      </div>
       
      <div class="d-flex align-items-center justify-content-center" style="background-color: aliceblue;padding:40px;">

      
        <div class="row">

          <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="site_web/img/lg/mobile.gif" alt="" class="img-fluid" style="height:300px;">
          </div>

          <div class=" col-md-6 flex-column d-none d-md-flex d-sm-flex">
            <div class="d-flex ">
              <div>  <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
            <p>Catégorisation automatique des opérations pour une meilleure gestion de votre budget.</p>
            </div>
            <div class="d-flex justify-content-start">
             <div style="margin-left: 3px;">
              <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;">
             </div>
             <p >Modification des plafonds de paiements et retrait, en fonction de vos besoins.</p>
            </div>
           <div class="d-flex ">
            <div><img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
            <p>Affichage en temps réel de vos opérations, pour tout suivre à la seconde près.</p>
           </div>
           <div class="d-flex ">
           <div> <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
            <p>Gestion au quotidien de votre budget, pour plus de sérénité.</p>
           </div>
         </div>  



        </div>

      </div>
      <div class="container-fluid mt-2">
      
     
        <div class="d-flex flex-column align-items-center justify-content-center">
          <div class=" d-none d-md-flex d-sm-flex font-weight-bold text-white mb-2">
            <span class="one_text one_first " style=" font-size:22px;"> <span style="color: #F49122">Découvrez vos  </span> </span>
            <span class="one_text second_text" style="color: #249DD5;font-size:22px;"> <span style="font-size:1px;margin-left:3px;"> °</span> cartes bancaires Seed <img src="site_web/img/lg/coeur.png" alt=""></span>
    
         </div>
         <div class=" d-md-none d-sm-none  display-3 font-weight-bold text-white mb-2">
          <span class="one_text one_first " style=" font-size:14px;"> <<span style="color: #F49122">Découvrez vos  </span> </span>
          <span class="one_text second_text" style="color: #249DD5;font-size:14px;"> <span style="font-size:1px;margin-left:2px;">°</span> cartes bancaires Seed </span>
  
       </div>
        <div class="align-items-center justify-content-center mb-2" style="height:5px;width:100px;background-color:#17A2B8; border-radius:3px;">
  
          </div>
  
          <p class="" style="font-size: 16px; color:black;font-weight:bold;">UNE CARTE PENSÉE POUR VOUS <span style=""> <img src="site_web/img/lg/coeur.png" alt=""></span></span></p>
  
        </div>
         
        <div class="d-flex align-items-center justify-content-center" style="background-color: aliceblue;padding:40px;">
  
          <div class="row">

            
           <div class="">
            <img src="site_web/img/lg/carte2.png" alt="" class="img-fluid"  >
          </div>
  
            <div class=" col-md-6 flex-column  justify-content-center">
              <div class="d-flex  ">
                
              <p>
                J'ouvre un compte facilement et surtout (qu'on se le dise) 
                rapidement, pour profiter vite de tous les avantages de ma carte Visa Internationale :</p>
              </div>
              <div class="d-flex justify-content-start">
               <div style="margin-left: 3px;">
                <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;">
               </div>
               <p >Paiements simples et rapides 
                </p>
              </div>
             <div class="d-flex ">
              <div><img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
              <p>0 frais à l'étranger</p>
             </div>
             <div class="d-flex ">
             <div> <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
              <p>Garanties et assistances même à l'international</p>
             </div>
             <div class="d-flex ">
              <div> <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
               <p>Paramétrage de la carte à volonté </p>
              </div>
              <p>SeedBank offre une prime de bienvenue allant jusqu'à 110 euros à ses nouveaux clients pour l'ouverture d'un <a href="/register">compte bancaire en ligne</a></p>
        <p class="d-none d-md-flex d-sm-flex">SeedBank propose 3 offres de compte bancaire avec carte Visa, dont deux gratuites. La gestion se fait entièrement à distance, par internet ou applications sur mobile. La banque en ligne se revendique depuis plus d'une dizaine d'années être la « banque la moins chère ».
        </p><a href="/carte"> En savoir plus </a>
           </div> 
           
        </div> 
      </div>    

      <div class="container-fluid align-items-center justify-content-center  mt-5 mb-5">
        
        <p class="section-title px-5">
          <span class="px-2 col-md-6 "> Bitcoin: L'avenir bancaire révolutionnaire.
          </span>
        </p>
        <div class="d-flex align-items-center justify-content-center" style="background-color: aliceblue;padding:40px;">
  
          <div class="row">

            
           <div class=" col-md-6">
              <img src="site_web/img/lg/btc2.jpg" alt="" class="img-fluid d-md-none d-sm-none" style=""  >
              <img src="site_web/img/lg/btc2.jpg" alt="" class="img-fluid d-none d-md-flex d-sm-flex" style="height:300px;" >
           </div>
  
            <div class=" col-md-6 flex-column  justify-content-center">
              <div class="d-flex flex-column ">
                
                <p class="d-none d-md-flex d-sm-flex">
                  Assurez votre tranquillité financière en saisissant dès aujourd'hui une opportunité d'investissement chez Seed Bank. Notre plateforme vous propose un revenu mensuel sécurisé, générant un rendement exceptionnel de 17% sur votre investissement. Vous pourrez ainsi consolider votre patrimoine tout 
                  en bénéficiant d'une carte de retrait spéciale qui simplifiera vos transactions financières. 
                  Faites confiance à Seed Bank pour vous accompagner vers un avenir financier prospère et serein. 
                  Notre équipe d'experts se tient à votre disposition pour vous fournir un accompagnement personnalisé 
                  tout au long de votre parcours d'investissement. <span><a href="/investment planning"></a></span>
                  
                </p>
                <p class=" d-md-none d-sm-none">Protégez votre avenir financier en investissant dès aujourd'hui chez Seed Bank. Bénéficiez d'un revenu mensuel garanti de 17% sur votre investissement, 
                  tout en profitant d'une carte de retrait spéciale pour faciliter vos transactions.<span> <a href="/investment planning">En savoir plus</a> </span>
                </p>
                
              </div>
              <a href="/investment planning" class="btn btn-primary px-4 mr-2 rounded"style="margin-top: 55px;text-align:left;">Faire une demande</a>
            </div> 
          </div>   
           
        </div> 
        
      </div>

      <div class="mt-3">
        <marquee behavior="" direction="" ><Span class="font-weight-bold text-black-500">Que pouvons-nous faire pour vous ?</Span></marquee>
      </div>

    </div>

    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 pb-1 d-none d-md-flex d-sm-flex">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
              ></i>
              <div cla>

                <div class="text-center">
                  <img src="../site_web/img/bio.png" alt="" style="width:60px;height:60px;margin-bottom:15px; " >
             

                </div>
                <h4 style="text-align: start;">Prêt Energie-Bio</h4>
                <p class="m-0" style="text-align: start;">
                    un prêt personnel sans frais de dossier conçu spécialement pour
                     financer vos travaux visant à économiser l'énergie. Bénéficiez de l'accompagnement personnalisé de nos conseillers pour concrétiser votre projet.
                </p>
                <a href="{{ route('loan_personal')}}" class="btn btn-primary px-4 mr-2 rounded"style="margin-top: 55px;text-align:left;">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="">
                <div class="text-center">
                  <img src="../site_web/img/loan.png" alt="" style="width:40px;height:40px;margin-bottom:15px;" c>
               
                </div>
                
                <h4>Et si on préparait votre retraite ensemble ?</h4>
                <p class="m-0">
                    
                     Anticipons ensemble cette nouvelle étape de vie en vous aidant à constituer un complément de revenus. Nos conseillers, spécialistes de l'épargne, 
                     sont là pour vous accompagner et vous aider à mieux planifier votre retraite en fonction de votre situation.
                </p>
                <a href="{{ route('Page_contact')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 25px;">Maintenant</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="">
                <div class="text-center">
                  <img src="../site_web/img/assurance.png" alt="" style="width:40px;height:40px;margin-bottom:15px;" c>
               
                </div>
                
                <h4>Vos enfants sont-ils assurés pour la prochaine rentrée ?</h4>
                <p class="m-0">
                    Préoccupons-nous de l'avenir de vos enfants. 
                    Faites le choix dès maintenant de l'Assurance Scolaire Seed 
                    pour assurer leur protection à l'école et en dehors.
                     Offrez-leur une tranquillité d'esprit totale grâce à notre assurance spécialement conçue pour leur bien-être.
                </p>
                <a href="{{ route('Page_contact')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 5px;">Maintenant</a>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="">
                <div class="text-center">
                  <img src="../site_web/img/accounting.png" alt="" style="width:40px;height:40px;margin-bottom:15px;" >
               
                </div>
                
                <h4>Ouverture de compte</h4>
                <p class="m-0">
                    Ne perdez pas une minute de plus !
                     Ouvrez votre compte bancaire chez Seed Finance dès maintenant et 
                     profitez d'un bonus spécial réservé uniquement aux nouveaux clients.
                      Ne manquez pas cette occasion de bénéficier d'avantages exclusifs en 
                      rejoignant notre banque.
                </p>
                <a href="{{ route('auth.register.view')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 60px;">Maintenant</a>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="">
                <div class="text-center">
                  <img src="../site_web/img/earning.png" alt="" style="width:40px;height:40px;margin-bottom:15px;">
               
                </div>
               
                <h4>Planification d'investissement</h4>
                <p class="m-0">
                    N'hésitez pas à nous contacter pour toute question ou besoin en matière de planification d'investissement. Nous sommes fiers d'être parmi les meilleurs dans notre domaine et nous sommes là pour vous offrir notre expertise. 
                    Faites confiance à notre équipe pour vous aider à atteindre vos objectifs financiers.
                </p>
                <a href="{{ route('Page_investmentPlanning')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 15px;">Maintenant</a>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1 d-none d-md-flex d-sm-flex">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="">
                <div class="text-center">
                  <img src="../site_web/img/cc.png" alt="" style="width:40px;height:40px;margin-bottom:15px;">
               
                </div>
                
                <h4>Demande de carte</h4>
                <p class="m-0">
                    Pratique, gratuite et idéale pour les paiements du quotidien, commandez dès maintenant vos cartes SeedFinance. Profitez d'une expérience de paiement sans tracas avec nos cartes, acceptées partout.
                     Simplifiez vos transactions avec SeedFinance.
                </p>
                  <a href="{{route('Page_carte')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 60px;">Maintenant</a>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facilities Start -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/meet.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Pourquoi nous choisir</span>
            </p>
            <h1 class="mb-4">Quelques raisons pour lesquelles les gens nous choisissent !</h1>
            <p>
                Chez SeedFinance, nous mettons un point d'honneur à protéger vos finances.
                 Nous vous offrons des offres exceptionnellement compétitives sur le marché, 
                 vous permettant ainsi de bénéficier de conditions avantageuses pour vos 
                 emprunts financiers. Nous comprenons l'importance de la disponibilité des fonds,
                  et nous nous engageons à vous offrir des solutions rapides et efficaces qui 
                  peuvent véritablement changer votre vie financière. Faites confiance à 
                  SeedFinance pour vous accompagner vers un avenir financier plus prometteur.
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/dd.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>87% Satisfaction de la clientèle
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Équipement moderne, sécurité, protection des données.
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Équipe dédiée, expérience inégalée.
                  </li>
                </ul>
              </div>
            </div>
            <a href="{{ route('Page_about')}}" class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Class Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Nos clients</span>
          </p>
          <h1 class="mb-4">Heureux, ils nous ont recommandés et ont décidé de témoigner, Seed Finance les remercie à nouveau.</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/13.jpg" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">Donation de fin d'année </h4>
                <p class="card-text">
                    Les bénéficiaires de nos dons de fin d'année sont comblés et ont choisi de témoigner en notre faveur. Leur bonheur et leur reconnaissance sont
                     une véritable source de satisfaction pour nous.
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Monsieur</strong>
                  </div>
                  <div class="col-6 py-1">David Parker </div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Madame</strong>
                  </div>
                  <div class="col-6 py-1">Emily Johnson</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Année</strong>
                  </div>
                  <div class="col-6 py-1">2021-2022</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Montant</strong>
                  </div>
                  <div class="col-6 py-1">9700 $</div>
                </div>
              </div>
              <a href="{{route('Page_donation')}}" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Participer</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/act11.jpg" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">Accord d'emprunts</h4>
                <p class="card-text">
                    Heureux d'avoir bénéficié d'un emprunt pour ouvrir leur magasin de chaussures, ils ont décidé de témoigner en notre faveur. Leur 
                    succès entrepreneurial est un témoignage gratifiant de notre soutien financier.
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Monsieur</strong>
                  </div>
                  <div class="col-6 py-1">Christopher Davis</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Madame</strong>
                  </div>
                  <div class="col-6 py-1">Ava Taylor</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Année</strong>
                  </div>
                  <div class="col-6 py-1">2022-2023</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Montant</strong>
                  </div>
                  <div class="col-6 py-1">45000 $</div>
                </div>
              </div>
              <a href="{{route('loan_entrepreneur')}}" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Je faire ma demande</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/act13.jpg" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title">Prêt personnel</h4>
                <p class="card-text">
                    Heureux d'avoir bénéficié d'un prêt personnel 
                    pour ouvrir leur restaurant, lui et sa femme ont été
                     reconnaissants de l'aide apportée lors des différentes démarches. 
                     Ils ont généreusement décidé de témoigner en notre faveur, soulignant ainsi l'impact positif 
                    de notre soutien financier dans la réalisation de leur projet entrepreneurial.
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Monsieur</strong>
                  </div>
                  <div class="col-6 py-1">Kim Min-jun</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Madame</strong>
                  </div>
                  <div class="col-6 py-1">Park Ji-hye</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Année</strong>
                  </div>
                  <div class="col-6 py-1">2023-2024</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Montant</strong>
                  </div>
                  <div class="col-6 py-1">60000 $</div>
                </div>
              </div>
              <a href="{{ route('loan_personal')}}" class="btn rounded  px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Je faire ma demande</a>
            </div>
          </div>
        </div>
      </div>
   </div>
    
     <div class="container">
        <div class="d-flex flex-wrap">

          <div>
            <h3>Nous travaillons avec les meilleurs partenaires</h3>
            <p class="">
              En tant qu'allié au sommet de l'industrie, 
              Seed Bank s'engage à vous offrir le meilleur. 
              vos ambitions prendront 
              racine et s'épanouiront comme jamais auparavant. 
              Grâce à notre expertise avant-gardiste et à notre dévouement, 
              nous sommes prêts à vous accompagner dans la réalisation de vos projets les plus audacieux.
              Ensemble, nous ferons fructifier votre succès et cultiverons un avenir florissant.

            </p>
          </div>
          <div class="d-flex flex-row flex-wrap align-items-center justify-content-center">
            
            <div class="mt-2 mb-2" ><img src="site_web/img/lg/bankamerica.png" alt="" class="img-fluid" style="height:60px;"></div>
            
            <div class="mt-2 mb-2 ml-2 mr-2" ><img src="site_web/img/lg/orangebank.png"  alt=""  class="img-fluid" style="height:60px;"></div>
            <div class="mt-2 mb-2" ><img src="site_web/img/lg/hellobank.png" alt="" class="img-fluid" style="height:60px;"></div>
            <div class="mt-2 mb-2" ><img src="site_web/img/lg/bank.png" alt="" class="img-fluid" style="height:60px;"></div>
          
          </div>

        </div>
     </div>
    </div>
  </div>

    
    <!-- Class End -->

  

    <!--footer-->
    <div style="width: 100%;">
    @include('Siteweb_SeedBank.pied_page')
   </div>

    

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
