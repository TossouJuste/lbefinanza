<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email LBE Finanza</title>

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
                    <img src="/site_web/img/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-v-30">
                              
                                <div class="flex ">
                                    <h2 class="font-bold text-2xl">Verifica la tua email</h2>
                                    <img src="assets/images/logo/envelope-solid.svg" class="w-8 h-8 ml-2" style="width: 16px; height:16px; margin-left:2px;" alt="">
                                </div>
                                <p class="lead m-b-30 text-lg">È stata inviata un'e-mail a <span class="text-blue-600">{{ $email}}</span></p>

                                <h4 class=" text-xl mb-6">
                                Controlla il tuo indirizzo email, inclusa la cartella spam, in modo da poter continuare ad attivare il tuo account.</h4>  <div class="flex flex-row flex-wrap">
                                <form action="/envoie-mail" method="post">
                                    @csrf
                                    <input type="hidden" required name="email" value="{{$email}}">
                                    <button type="submit" class="btn btn-primary btn-tone mr-2 mt-2">Rinvia l'e-mail</button>
                                </form>
                                
                                <a href="/login" class="btn btn-primary btn-tone mt-2">Torna al login</a>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 m-l-auto d-none d-md-block">
                            <img class="img-fluid" src="assets/images/others/error-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-blogoetween">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Privacy</a>
                        </li>
                    </ul>
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