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
            <div class="d-flex full-height p-v-20 flex-column ">
                <div class=" d-md-flex p-h-40">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-v-30">
                              
                            <p>
    Caro <span class="text-primary">{{ $nom }}</span>,

    Desideriamo ringraziarti per aver presentato una domanda di carta presso la nostra istituzione finanziaria. Abbiamo ricevuto correttamente la tua richiesta e apprezziamo il tuo interesse nei nostri servizi.

    Desideriamo informarti che la tua richiesta di carta è stata presa in considerazione ed è attualmente in fase di elaborazione. Per garantire la riservatezza e la sicurezza delle tue informazioni sensibili, ulteriori dettagli sensibili saranno trattati via e-mail o tramite la nostra chat bancaria. Il nostro team dedicato sta esaminando attentamente la tua richiesta per fornirti una risposta nel minor tempo possibile.

    Una volta valutata la tua domanda, riceverai una risposta via e-mail su <span class="text-primary">{{ $email }}</span> riguardo all'approvazione o al rifiuto della tua richiesta di carta. Se sono necessarie ulteriori informazioni, il nostro team ti contatterà per ottenerle.

    Comprendiamo l'importanza per te di ottenere una carta e ci impegniamo a offrirti un servizio di alta qualità e a trattare la tua richiesta con cura.

    Se hai domande o hai bisogno di ulteriori informazioni, non esitare a contattarci all'indirizzo e-mail <span class="text-primary">contact@finanzalbe.com</span> o telefonicamente al <span class="text-primary">+33 757 824 762</span>. Il nostro team è qui per assisterti.

    Ti ringraziamo per la tua pazienza e per la fiducia nella nostra istituzione finanziaria. Non vediamo l'ora di fornirti una risposta alla tua richiesta di carta nel più breve tempo possibile.

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