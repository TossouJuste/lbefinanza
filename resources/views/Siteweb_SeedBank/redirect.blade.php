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
                              
                                
                                    Cher <span class="text-primary">{{ $nom }}</span>,

                                    Nous vous remercions d'avoir soumis votre demande de prêt. Nous avons bien reçu votre demande et nous sommes ravis de vous informer que nous avons entamé l'examen de votre dossier.

                                    Nos agents experts en demandes de prêt sont en train d'étudier attentivement les informations que vous avez fournies.
                                    Dans le but de garantir la confidentialité et la sécurité de vos informations sensibles, le reste des informations sensibles sera pris par e-mail ou via notre chat bancaire .
                                     Nous tenons à vous assurer que nous traitons votre demande avec la plus grande attention et que nous nous efforçons de vous fournir une réponse dans les plus brefs délais.

                                    Nous comprenons que l'obtention d'un prêt est une étape importante pour vous et nous nous engageons à vous tenir informé(e) tout au long du processus. Vous recevrez un e-mail sur <span class="text-primary">{{ $email }}</span> dans les prochaines 48 heures avec les détails de notre évaluation de votre demande de prêt personnel.

                                    Si vous avez des questions ou si vous avez besoin de plus d'informations, n'hésitez pas à nous contacter à l'adresse e-mail <span class="text-primary"> contact@seedfinance.com </span> par téléphone au <span class="text-primary">+33 757 824 762</span>. Notre équipe se fera un plaisir de vous aider.

                                    Nous vous remercions de votre patience et de votre confiance en notre institution financière. Nous faisons tout notre possible pour vous offrir un service de qualité et vous aider à réaliser vos projets financiers.
                                    <br>
                                    Cordialement,

                                    <span class="text-primary"><br>Equipe Seed Finance
                                        <br>
                                        
                                        Seed Finance</span> <br>
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