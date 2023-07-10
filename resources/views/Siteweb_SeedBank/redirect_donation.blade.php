<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email Seed Finance</title>

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
            <div class="d-flex full-height p-v-20 flex-column justify-content-between">
                <div class=" d-md-flex p-h-40">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-v-30">
                              
                                <p>
                                    Cher <span class="text-primary">{{ $nom }} </span>,

                                    Nous tenons à vous remercier d'avoir soumis une demande de donation auprès de notre organisation. Votre générosité et votre engagement envers notre cause sont grandement appréciés.

                                    Nous avons bien reçu votre demande de donation et nous tenons à vous informer que votre demande est en cours d'examen. Notre équipe dédiée examine attentivement chaque demande de donation que nous recevons.

                                    Veuillez noter que nous recevons un grand nombre de demandes de donation et que notre processus de sélection peut prendre du temps. Nous évaluons chaque demande avec soin afin de maximiser l'impact de nos dons et de les attribuer de manière équitable.

                                    Nous tenons à vous assurer que nous étudions votre demande avec toute l'attention qu'elle mérite. Une fois que nous aurons examiné votre demande plus en détail, nous vous informerons par e-mail(<span class="text-primary"> {{ $email }} </span>) de la suite qui sera donnée à votre demande de donation.

                                    Si vous avez des questions ou si vous avez besoin de plus d'informations, n'hésitez pas à nous contacter à l'adresse e-mail <span class="text-primary"> contact@seedfinance.com </span> par téléphone au <span class="text-primary">+33 757 824 762</span>. Nous sommes là pour vous aider et vous fournir les informations dont vous avez besoin.

                                    Nous vous remercions sincèrement de votre intérêt pour notre cause et de votre soutien à notre organisation. Votre engagement fait une réelle différence dans la réalisation de nos projets et nous sommes reconnaissants de votre confiance.

                                    <br>Cordialement,

                                    <span class="text-primary"><br>Equipe Seed Finance
                                        <br>
                                        
                                        Seed Finance</span> <br>
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