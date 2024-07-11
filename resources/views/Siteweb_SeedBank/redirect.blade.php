<!DOCTYPE html>
<html lang="it">

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
    Caro <span class="text-primary">{{ $nom }}</span>,

    Grazie per aver inviato la tua richiesta di prestito. Abbiamo ricevuto correttamente la tua richiesta e siamo lieti di informarti che abbiamo avviato l'esame del tuo dossier.

    I nostri esperti in richieste di prestito stanno attualmente esaminando attentamente le informazioni che hai fornito.
    Per garantire la riservatezza e la sicurezza delle tue informazioni sensibili, ulteriori informazioni saranno trattate via e-mail o tramite la nostra chat bancaria.

    Desideriamo assicurarti che stiamo gestendo la tua richiesta con la massima attenzione e ci impegniamo a fornirti una risposta nel minor tempo possibile.

    Comprendiamo che ottenere un prestito è un passo importante per te e ci impegniamo a tenerti aggiornato lungo tutto il processo. Riceverai un'e-mail su <span class="text-primary">{{ $email }}</span> entro le prossime 48 ore con i dettagli della nostra valutazione della tua richiesta di prestito personale.

    Se hai domande o hai bisogno di ulteriori informazioni, non esitare a contattarci all'indirizzo e-mail <span class="text-primary">contact@finanzalbe.com</span> o telefonicamente al <span class="text-primary">+33 757 824 762</span>. Il nostro team sarà lieto di assisterti.

    Ti ringraziamo per la tua pazienza e per la fiducia nella nostra istituzione finanziaria. Stiamo facendo del nostro meglio per offrirti un servizio di qualità e aiutarti a realizzare i tuoi progetti finanziari.
    <br>
    Cordiali saluti,

    <span class="text-primary"><br>Team Finanza LBE
        <br>
        
        Finanza LBE</span> <br>
    <div class="flex flex-row flex-wrap">
        <a href="{{ route('Page_principal')}}" class="btn btn-primary btn-tone mt-2">Torna Indietro</a>
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