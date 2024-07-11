<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Finanza LBE </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.icon" rel="icon" />

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
     <!-- Navbar Start-->
    @include('Siteweb_SeedBank.nav')
    <!-- Navbar End -->

    
    <!-- Header Start -->
    <div class="container-fluid  px-0 px-md-5 mb-5 " style="background-image: url('site_web/img/lg/assurance3.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
        <div class="row align-items-center px-3 " style="min-height: 400px">
          <div class="col-lg-6 text-center text-lg-left" style="margin-top:100px;">
           
            <h3 class="display-3 font-weight-bold text-primary font-opens" >
            assicurazione  <span style="color: #F49122">Seed</span>
            </h3>
            
            <p class="mb-4 font-weight-bold " style="color:black;">
            La protezione finanziaria al porto principale. Dites bonjour à l'avenir en toute sérénité con le nostre soluzioni 
              d'assurance sur mesure. Semplifica la vita, souscrivez dès maintenant
            </p>
         
          </div>
          <div class="col-lg-6 text-center text-lg-right rounded">
           
          </div>
        </div>
      </div>
      <!-- Header End -->
      <div class="container-fluid">
        <div class="container">
          <div class="align-items-center justify-content-center mb-2" style="height:5px;width:100px;background-color:#17A2B8; border-radius:3px;">

          </div>
  
          <p class="col-md-6" style="font-size: 16px; color:black;font-weight:bold;">Una buona opzione di assicurazione per ogni situazione!</p>
        </div>

        <div class="d-flex row justify-content-center align-items-center flex-wrap">

          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/assurance-voiture.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assicurazione auto</p>
            <a class="mb-2 rounded btn btn-primary" href="#voiture">Saperne di più</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }} ">Sottoscrivi </a>
          </div>
         
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/pret.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assicurazione del credito</p>
            <a class="mb-2 rounded btn btn-primary" href="#credit">Saperne di più</a>
            <a class="mb-2 rounded btn btn-primary" href=" {{route('assurances') }} ">Sottoscrivi </a>
          </div>
 
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/assurance-habitation.png" alt="" style="height: 60px;" class="mb-2">
            <p class="mb-2">Assicurazione sulla casa</p>
            <a class="mb-2 rounded btn btn-primary" href="#habitation">Saperne di più</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }}">Sottoscrivi </a>
          </div>
          <div class=" shadow p-4 text-center m-4" style="background-color: aliceblue">
            <img src="/site_web/img/lg/croix.png" alt="" style="height: 60px;cusor:pointer;" class="mb-2">
            <p class="mb-2">Assicurazione sanitaria</p>
            <a class="mb-2 rounded btn btn-primary" href="#maladie">Saperne di più</a>
            <a class="mb-2 rounded btn btn-primary" href="{{route('assurances') }}">Sottoscrivi </a>
          </div>



        </div>

      </div>
      </div>

       <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/car.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assicurazione auto</span>
            </p>
            <h3 class="mb-4 font-opens" id="voiture">Scegli la nostra assicurazione auto per la sicurezza internazionale </h3>
            <p>
            Quando si tratta di proteggere la tua auto, noi siamo la scelta più ovvia. La nostra assicurazione
               car offre vantaggi incomparabili e un'ampia copertura internazionale.
                Non importa dove stai andando, percorri la strada con sicurezza, sapendo che sei 
                protetta da un'assicurazione auto su misura, studiata appositamente per soddisfare le tue esigenze. 
                I nostri esperti assicurativi sono qui per guidarti e offrirti la massima tranquillità 
                tu meriti. Non compromettere la tua sicurezza durante la guida,
               scegli la migliore protezione per il tuo veicolo e parti all'avventura in tutta tranquillità
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4" >
                <img class="img-fluid rounded" src="site_web/img/lg/car1.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Supporto 24 ore su 24, 7 giorni su 7
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Protezione dalle perdite
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Servizi multilingue
                  </li>
                </ul>
              </div>
            </div>
            <a href="{{route('assurances') }} " class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">sottoscrivi</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/home1.jpeg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assicurazione sulla casa</span>
            </p>
            <h3 class="mb-4 font-opens" id="habitation">Scegli la nostra assicurazione casa: la tua tranquillità è garantita </h3>
            <p>
            "Opta per la nostra assicurazione casa e fai la scelta giusta per la tua tranquillità. Approfitta di vantaggi esclusivi e di una copertura internazionale completa. Approfitta di un'assicurazione su misura per proteggere la tua casa ovunque tu sia. Il nostro team è qui per supportarti e offrirti per te la migliore protezione per la tua casa.
              Mettiti in viaggio in tutta sicurezza con la nostra affidabile assicurazione sulla casa su misura per le tue esigenze." </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/home2.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Supporto 24 ore su 24, 7 giorni su 7
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Protezione dalle perdite
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Servizi multilingue
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }}" class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">sottoscrivi</a>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="/site_web/img/lg/maladie3.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assicurazione sanitaria</span>
            </p>
            <h3 class="mb-4 font-opens" id="maladie">Scegli la nostra assicurazione casa: la tua tranquillità è garantita </h3>
            <p>
            Opta per la nostra assicurazione casa e fai la scelta giusta per la tua tranquillità. Approfitta di vantaggi esclusivi e di una copertura internazionale completa. Approfitta di un'assicurazione su misura per proteggere la tua casa ovunque tu sia. Il nostro team è qui per supportarti e offrirti la migliore protezione per la tua casa.
              Mettiti in viaggio in tutta sicurezza con la nostra affidabile assicurazione sulla casa su misura per le tue esigenze.  </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/maladie1.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Supporto 24 ore su 24, 7 giorni su 7
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>A livello internazionale
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Servizi multilingue
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }} " class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Souscrire</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 mt-3 mb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="site_web/img/lg/credit1.jpeg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Assicurazione del credito</span>
            </p>
            <h3 class="mb-4 font-opens" id="credit">Assicurazione internazionale del credito: la vostra sicurezza garantita</h3>
            <p>
            Scegli la nostra assicurazione crediti: coperture internazionali per la tua tranquillità. Approfitta di vantaggi esclusivi e mettiti in viaggio in tutta sicurezza con la nostra assicurazione su misura per le tue esigenze finanziarie. Proteggiti dagli imprevisti ovunque tu sia nel mondo. Il nostro team è qui per guidarti e offrirti la migliore protezione per il tuo futuro finanziario. Non lasciare che il caso detti il ​​tuo destino,
               optate per la nostra assicurazione crediti e preparatevi al futuro in tutta tranquillità. </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/lg/credit2.jpeg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Supporto 24 ore su 24, 7 giorni su 7
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>A livello internazionale
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Servizi multilingue
                  </li>
                </ul>
              </div>
            </div>
            <a href=" {{route('assurances') }}"class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">Sottoscrivi</a>
          </div>
        </div>
      </div>
    </div>



      
  </body>

  <!-- Footer Start -->
  @include('Siteweb_SeedBank.pied_page')
  <!-- Footer End -->


</html>    
