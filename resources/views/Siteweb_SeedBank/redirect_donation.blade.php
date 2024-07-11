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

    Desideriamo ringraziarti per aver presentato una domanda di donazione presso la nostra organizzazione. La tua generosità e il tuo impegno verso la nostra causa sono molto apprezzati.

    Abbiamo ricevuto correttamente la tua domanda di donazione e desideriamo informarti che la tua richiesta è attualmente in fase di esame. Il nostro team dedicato esamina attentamente ogni richiesta di donazione che riceviamo.

    Ti preghiamo di considerare che riceviamo un elevato numero di domande di donazione e il nostro processo di selezione potrebbe richiedere del tempo. Valutiamo ogni domanda con cura per massimizzare l'impatto dei nostri doni e assegnarli in modo equo.

    Vogliamo assicurarti che stiamo esaminando la tua domanda con tutta l'attenzione che merita. Una volta esaminata più dettagliatamente la tua richiesta, ti informeremo tramite e-mail (<span class="text-primary">{{ $email }}</span>) sui prossimi passi relativi alla tua domanda di donazione.

    Se hai domande o hai bisogno di ulteriori informazioni, non esitare a contattarci via e-mail all'indirizzo <span class="text-primary">contact@finanzalbe.com</span> o telefonicamente al <span class="text-primary">+33 757 824 762</span>. Siamo qui per aiutarti e fornirti tutte le informazioni di cui hai bisogno.

    Ti ringraziamo sinceramente per il tuo interesse verso la nostra causa e per il tuo sostegno alla nostra organizzazione. Il tuo impegno fa una vera differenza nel realizzare i nostri progetti e siamo grati della tua fiducia.

    <br>Cordiali saluti,

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