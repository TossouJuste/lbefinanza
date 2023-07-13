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
            <div class="d-flex full-height p-v-20 flex-column">
                <div class=" d-md-flex p-h-40">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-v-30">
                              
                              <p>


                                Cher <span class="text-primary">{{ $nom }} </span>,

                                Merci d'avoir soumis une demande de gestion de portefeuille à Seed Finance. Nous vous remercions de l'intérêt que vous portez à nos services.
                                
                                Nous tenons à vous informer que nous avons bien reçu votre demande et nous l'examinons attentivement. Notre équipe dédiée à la gestion de portefeuille évalue les informations que vous avez fournies afin de répondre au mieux à vos besoins financiers.
                                Dans le but de garantir la confidentialité et la sécurité de vos informations sensibles, le reste des informations sensibles sera pris par e-mail ou via notre chat bancaire .
                                
                                Nous comprenons l'importance d'une réponse rapide et nous vous contacterons sur votre e-mail <span class="text-primary">{{$email}}</span> dans les plus brefs délais pour discuter de votre demande de gestion de portefeuille. Nous sommes impatients de vous offrir notre expertise et de vous aider à atteindre vos objectifs financiers.
                                
                                Si vous avez des questions ou si vous avez besoin de plus d'informations, n'hésitez pas à nous contacter à l'adresse e-mail <span class="text-primary"> contact@seedfinance.com </span> par téléphone au <span class="text-primary">+33 757 824 762</span>. Notre équipe est là pour vous aider.
                                
                                <br>
                                    Cordialement,

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