<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email Finanza LBE</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column">
                <div class=" d-md-flex p-h-40">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-v-30">
                              
                            <p>
    Caro <span class="text-primary">{{ $nom }} </span>,

    Grazie per aver presentato una richiesta di gestione del portafoglio presso finanza lbe. Apprezziamo il tuo interesse nei nostri servizi.

    Desideriamo informarti che abbiamo ricevuto correttamente la tua richiesta e la stiamo esaminando attentamente. Il nostro team dedicato alla gestione del portafoglio sta valutando le informazioni che hai fornito per soddisfare al meglio le tue esigenze finanziarie.

    Per garantire la riservatezza e la sicurezza delle tue informazioni sensibili, ulteriori dettagli sensibili saranno trattati via e-mail o tramite la nostra chat bancaria.

    Comprendiamo l'importanza di una risposta tempestiva e ti contatteremo al tuo indirizzo e-mail <span class="text-primary">{{$email}}</span> al più presto per discutere della tua richiesta di gestione del portafoglio. Siamo ansiosi di mettere a tua disposizione la nostra esperienza e di aiutarti a raggiungere i tuoi obiettivi finanziari.

    Se hai domande o hai bisogno di ulteriori informazioni, non esitare a contattarci all'indirizzo e-mail <span class="text-primary">contact@finanzalbe.com</span> o telefonicamente al <span class="text-primary">+33 757 824 762</span>. Il nostro team è qui per assisterti.

    Cordiali saluti,

    <span class="text-primary"><br>Team Finanza LBE
        <br>
        
        Finanza LBE</span> <br>
</p>

                              
                               <div class="flex flex-row flex-wrap">
                            
                                <a href="{{ route('Page_principal')}}" class="btn btn-primary btn-tone mt-2">Retour </a>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 m-l-auto d-none d-md-block">
                            <img class="img-fluid" src="assets/images/others/error-1.png" alt="">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>