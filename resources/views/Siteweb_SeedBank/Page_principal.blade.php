<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Finanza LBE </title>
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
    <link href="/site_web/css/style.css" rel="stylesheet" />
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
             <span class="one_text one_first " style="color: #249DD5"> <span style="color: #F49122">LBE </span> FINANZA <span style="color:  #F49122">!</span> </span>
            

          </div>
          
          <p class="text-white mb-4">
          La tua banca specializzata in prestiti bancari, assicurazioni, risparmi, bonifici, investimenti in criptovalute...
 una banca al tuo fianco, pensata per soddisfare le tue esigenze quotidiane.
           
          </p>
          <a href="{{ route('auth.register')}}" class="btn mt-1 py-3 px-4 rounded" style="background-color: #F49122;color:white;">Apertura di un conto</a>
        </div>
        
      </div>
    </div>
    <!-- Header End -->

    <!-- Facilities Start -->
  
 
    
    <div class="container-fluid">
      
     
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class=" d-none d-md-flex d-sm-flex font-weight-bold text-white mb-2">
          <span class="one_text one_first " style=" font-size:22px;"> <span style="color: #F49122"> La Banca </span> </span> |
          <span class="one_text second_text" style="color: #249DD5;font-size:22px;">  Europeo </span>
  
       </div>
       <div class=" d-md-none d-sm-none  display-3 font-weight-bold text-white mb-2">
        <span class="one_text one_first " style=" font-size:14px;"> <span style="color: #F49122"> La Banca </span> </span>
        <span class="one_text second_text" style="color: #249DD5;font-size:14px;"> | Europeo </span>

     </div>
      
       
     
 

      </div>
      <div class="container-fluid mt-2">
      
   
   
       </div>
        <div class="align-items-center justify-content-center mb-2" style="height:5px;width:100px;background-color:#17A2B8; border-radius:3px;">
  
          </div>
  
          <p class="" style="font-size: 16px; color:black;font-weight:bold;">UNA CARTA PENSATA PER TE<span style=""> <img src="site_web/img/lg/coeur.png" alt=""></span></span></p>
  
        </div>
         
        <div class="d-flex align-items-center justify-content-center" style="background-color: aliceblue;padding:40px;">
  
          <div class="row">

            
           <div class="col-md-6">
            <img src="site_web/img/lg/carte2.png" alt="" class="img-fluid"  >
          </div>
  
            <div class=" col-md-6 flex-column  justify-content-center">
              <div class="d-flex  ">
                
              <p>
              Apro un conto facilmente e soprattutto (sia detto)
 velocemente, per beneficiare velocemente di tutti i vantaggi della mia carta Visa Internazionale:</p>
              </div>
              <div class="d-flex justify-content-start">
               <div style="margin-left: 3px;">
                <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;">
               </div>
               <p >Pagamenti semplici e veloci 
                </p>
              </div>
             <div class="d-flex ">
              <div><img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
              <p>0 tasse all'estero</p>
             </div>
             <div class="d-flex ">
             <div> <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
              <p>Garanzie e assistenza anche a livello internazionale</p>
             </div>
             <div class="d-flex ">
              <div> <img src="site_web/img/lg/check.svg" alt="" style="width:20px;heigth:20px;"></div>
               <p>Configurare la scheda a piacimento </p>
              </div>
        
        <p class="d-none d-md-flex d-sm-flex">LBE Finanza propone 3 offerte di conto bancario con carta Visa, di cui due gratuite. La gestione è interamente a distanza, tramite internet o applicazioni mobili. La banca online si dichiara da oltre dieci anni 'la banca meno cara ».
        </p><a href="/carte"> Per saperne di più </a>
           </div> 
           
        </div> 
      </div>    

      <div class="container-fluid align-items-center justify-content-center  mt-5 mb-5">
        
        <p class="section-title px-5">
          <span class="px-2 col-md-6 ">Bitcoin: Il futuro bancario rivoluzionario.
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
                Assicurate la vostra tranquillità finanziaria cogliendo oggi stesso un'opportunità di investimento con Seed Bank. La nostra piattaforma vi offre un reddito mensile sicuro, generando un rendimento eccezionale del 17% sul vostro investimento. In questo modo potrete consolidare il vostro patrimonio beneficiando allo stesso tempo di una carta di prelievo speciale che semplificherà le vostre transazioni finanziarie. Affidatevi a Seed Bank per accompagnarvi verso un futuro finanziario prospero e sereno. Il nostro team di esperti è a vostra disposizione per fornirvi un supporto personalizzato durante tutto il vostro percorso di investimento. <span><a href="/investment planning"></a></span>
                  
                </p>
                <p class="d-md-none d-sm-none">
    Proteggete il vostro futuro finanziario investendo oggi stesso con Seed Bank. 
    Beneficiate di un reddito mensile garantito del 17% sul vostro investimento, 
    approfittando di una carta di prelievo speciale per facilitare le vostre transazioni.
    <span> 
        <a href="/investment planning">Per saperne di più</a> 
    </span>
</p>

                
</div>
<a href="/investment planning" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 55px; text-align: left;">Fare una richiesta</a>
</div>

          </div>   
           
        </div> 
        
      </div>

      <div class="mt-3">
        <marquee behavior="" direction="" ><Span class="font-weight-bold text-black-500">Come posso aiutarti ?</Span></marquee>
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
                <h4 style="text-align: start;">Prestito Energia-Bio</h4>
<p class="m-0" style="text-align: start;">
    Un prestito personale senza spese di apertura dossier, appositamente pensato per finanziare i vostri lavori finalizzati al risparmio energetico. Approfittate dell'assistenza personalizzata dei nostri consulenti per realizzare il vostro progetto.
</p>

                <a href="{{ route('loan_personal')}}" class="btn btn-primary px-4 mr-2 rounded"style="margin-top: 55px;text-align:left;">Per saperne di più</a>
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
                
                <h4>E se preparassimo insieme la tua pensione?</h4>
    <p class="m-0">
        Anticipiamo insieme questa nuova fase della vita aiutandoti a costituire un supplemento di reddito. I nostri consulenti, esperti di risparmio,
        sono qui per accompagnarti e aiutarti a pianificare meglio la tua pensione in base alla tua situazione.
    </p>
    <a href="{{ route('Page_contact')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 25px;">Ora</a>
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
                
                <h4>I tuoi figli sono assicurati per il prossimo anno scolastico?</h4>
<p class="m-0">
    Preoccupiamoci del futuro dei tuoi figli. 
    Scegli ora l'Assicurazione Scolastica Seed 
    per garantire la loro protezione a scuola e al di fuori. 
    Offri loro una tranquillità totale grazie alla nostra assicurazione appositamente progettata per il loro benessere.
</p>
<a href="{{ route('Page_contact')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 5px;">Ora</a>

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
                
                <h4>Apertura di un conto</h4>
<p class="m-0">
    Non perdere un altro minuto!
    Apri il tuo conto bancario presso Seed Finance ora stesso e 
    approfitta di un bonus speciale riservato esclusivamente ai nuovi clienti.
    Non lasciarti sfuggire questa opportunità di godere di vantaggi esclusivi 
    unendoti alla nostra banca.
</p>
<a href="{{ route('auth.register.view')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 60px;">Ora</a>

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
               
                <h4>Pianificazione degli investimenti</h4>
<p class="m-0">
    Non esitate a contattarci per qualsiasi domanda o necessità riguardante la pianificazione degli investimenti. Siamo orgogliosi di essere tra i migliori nel nostro settore e siamo qui per offrirvi la nostra esperienza.
    Affidatevi al nostro team per aiutarvi a raggiungere i vostri obiettivi finanziari.
</p>
<a href="{{ route('Page_investmentPlanning')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 15px;">Ora</a>

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
                
                <h4>Richiesta di carta</h4>
<p class="m-0">
    Pratica, gratuita e ideale per i pagamenti quotidiani, ordinate ora le vostre carte SeedFinance. Godetevi un'esperienza di pagamento senza stress con le nostre carte, accettate ovunque.
    Semplificate le vostre transazioni con SeedFinance.
</p>
<a href="{{ route('Page_carte')}}" class="btn btn-primary px-4 mr-2 rounded" style="margin-top: 60px;">Ora</a>

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
    <span class="pr-2">Perché sceglierci</span>
</p>
<h1 class="mb-4">Alcuni motivi per cui le persone ci scelgono!</h1>
<p>
    Da SeedFinance, ci impegniamo a proteggere le vostre finanze.
    Offriamo offerte eccezionalmente competitive sul mercato,
    consentendovi di beneficiare di condizioni vantaggiose per i vostri prestiti finanziari.
    Comprendiamo l'importanza della disponibilità dei fondi,
    e ci impegniamo a fornirvi soluzioni rapide ed efficienti
    che possono davvero cambiare la vostra situazione finanziaria.
    Affidatevi a SeedFinance per accompagnarvi verso un futuro finanziario più promettente.
</p>

            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="site_web/img/dd.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
    <i class="fa fa-check text-primary mr-3"></i>87% Soddisfazione della clientela
</li>
<li class="py-2 border-bottom">
    <i class="fa fa-check text-primary mr-3"></i>Attrezzatura moderna, sicurezza, protezione dei dati.
</li>
<li class="py-2 border-bottom">
    <i class="fa fa-check text-primary mr-3"></i>Team dedicato, esperienza senza pari.
</li>

                </ul>
              </div>
            </div>
            <a href="{{ route('Page_about')}}" class="btn mt-2 py-2 px-4 rounded" style="background-color: #F49122;color:white;">"Per saperne di più"</a>
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
          <h1 class="mb-4">Sono felici di averci raccomandato e hanno deciso di testimoniare, Seed Finance li ringrazia nuovamente.</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/13.jpg" alt="" />
              <div class="card-body text-center">
              <h4 class="card-title">Donazione di fine anno</h4>
<p class="card-text">
    I beneficiari delle nostre donazioni di fine anno sono felici e hanno scelto di testimoniare a nostro favore. La loro felicità e riconoscenza sono una fonte di vera soddisfazione per noi.
</p>

              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signore</strong>
                  </div>
                  <div class="col-6 py-1">David Parker </div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signora</strong>
                  </div>
                  <div class="col-6 py-1">Emily Johnson</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Anno</strong>
                  </div>
                  <div class="col-6 py-1">2021-2022</div>
                </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>In aumento</strong>
                  </div>
                  <div class="col-6 py-1">9700 $</div>
                </div>
              </div>
              <a href="{{route('Page_donation')}}" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Partecipare</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/act11.jpg" alt="" />
              <div class="card-body text-center">
              <h4 class="card-title">Accordo di prestito</h4>
<p class="card-text">
    Felici di aver beneficiato di un prestito per aprire il loro negozio di scarpe, hanno deciso di testimoniare a nostro favore. Il loro successo imprenditoriale è una testimonianza gratificante del nostro sostegno finanziario.
</p>

              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signore</strong>
                  </div>
                  <div class="col-6 py-1">Christopher Davis</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signora</strong>
                  </div>
                  <div class="col-6 py-1">Ava Taylor</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Anno</strong>
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
              <a href="{{route('loan_entrepreneur')}}" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Faccio la mia richiesta</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="site_web/img/act13.jpg" alt="" />
              <div class="card-body text-center">
              <h4 class="card-title">Prestito personale</h4>
<p class="card-text">
    Felici di aver beneficiato di un prestito personale per aprire il loro ristorante, lui e sua moglie sono stati grati per l'aiuto ricevuto durante le varie fasi. Hanno generosamente deciso di testimoniare a nostro favore, sottolineando così l'impatto positivo del nostro sostegno finanziario nella realizzazione del loro progetto imprenditoriale.
</p>

              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signore</strong>
                  </div>
                  <div class="col-6 py-1">Kim Min-jun</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Signora</strong>
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
              <a href="{{ route('loan_personal')}}" class="btn rounded  px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Faccio la mia richiesta</a>
            </div>
          </div>
        </div>
      </div>
   </div>
    
     <div class="container">
        <div class="d-flex flex-wrap">

        <div>
    <h3>Lavoriamo con i migliori partner</h3>
    <p>
        Come alleato leader nel settore, Seed Bank si impegna a offrirti il meglio. Le tue ambizioni prenderanno radici e fioriranno come mai prima d'ora. Grazie alla nostra expertise all'avanguardia e al nostro impegno, siamo pronti ad accompagnarti nella realizzazione dei tuoi progetti più audaci. Insieme, faremo prosperare il tuo successo e coltiveremo un futuro fiorente.
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
