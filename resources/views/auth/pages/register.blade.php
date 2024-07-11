<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrati LBE Finanza</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/sign-up.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/assets/js/sign-up.js"></script>

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column justify-content-between">
                <div class="d-flex justify-content-between align-items-center p-h-40">
                    <a href="/"><img src="site_web/img/logo.png" alt=""></a>
                    <a href="javascript:void(0);" class="me-1" data-toggle="modal" data-target="#quick-view">
                        <i class="fas fa-language" style="font-size: 30px"></i>
                    </a>
                    
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="/assets/images/others/sign-up-2.png" alt="">
                        </div>
                        <div class="m-l-auto col-md-5">
                            <div class="card">

                                <div class="card-body">

                                    <h2 class="m-t-20">iscrizione</h2>
                                    <p class="m-b-30">Si prega di compilare il modulo sottostante per registrarsi</p>
                                    <form id="step-form" class="step-form" enctype="multipart/form-data" onsubmit="return validateForm(event)"
                                        method="post" action="{{ route('auth.register') }}">
                                        @csrf
                                        @method('post')

                                        {{-- @error('password')
                                    <p class="p-2 bg-red-100 mb-2">Si prega di rivedere il modulo di registrazione per rilevare e correggere eventuali errori.</p>
                                    @enderror --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                        <div class="step step-form">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="nom">COGNOME</label>
                                                <input type="text" class="form-control" id="nom" required
                                                    name="nom" placeholder="Il tuo cognome" value={{ old('nom') }}>
                                                @error('nom')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="prenom">NOME</label>
                                                <input type="text" class="form-control" id="prenom" required
                                                    name="prenom" placeholder="Il tuo nome" value={{ old('prenom') }}>
                                                @error('prenom')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="email">EMAIL</label>
                                                <input type="email" class="form-control" id="email" required
                                                    name="email" placeholder="la tua email" value={{ old('email') }}>
                                                @error('email')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="telephone">NUMERO DI TELEFONO</label>
                                                <input type="tel" class="form-control" id="telephone" required
                                                    name="telephone" placeholder="il tuo numero di telefono"
                                                    value={{ old('telephone') }}>
                                                @error('telephone')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button
                                                class="btn btn-primary next-btn hover:bg-green-500 hover:border-green-500"
                                                onclick="nextStep(event)">Seguente</button>
                                        </div>
                                        <!-- civilite et pays  -->

                                        <div class="step">
                                            <div class="form-group flex flex-col">
                                                <label class="font-weight-semibold form-label"
                                                    for="civilite">CIVILTÀ</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2 "
                                                    required name="civilite" id="civilite"
                                                    aria-label="Default select example" value={{ old('civilite') }}>

                                                    <option value="Male">Maschio</option>
                                                    <option value="Femminile">Femminile</option>
                                                </select>
                                                @error('civilite')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>
                                            <div class="form-group flex flex-col">
                                                <label for="piece" class="form-label">Aggiungi un documento d'identità</label>
                                                <input class="form-control" required type="file" name="piece"
                                                    id="piece" value={{ old('piece') }} />
                                                @error('piece')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>



                                            <div class="form-group flex flex-col">
                                                <label for="pays"
                                                    class="form-label font-weight-semibold ">PAESE</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2"
                                                    required id="pays" name="pays"
                                                    aria-label="Default select example" value={{ old('pays') }}>

                                                    <option value="France">France </option>

                                                    <option value="Afghanistan">Afghanistan </option>
 <option value="Africa_Centrale">Africa_Centrale </option>
 <option value="Sud_Africa">Sud_Africa </option>
 <option value="Albania">Albania </option>
 <option value="Algeria">Algeria </option>
 <option value="Germania">Germania </option>
 <option value="Andorra">Andorra </option>
 <option value="Angola">Angola </option>
 <option value="Anguilla">Anguilla </option>
 <option value="Arabia_Saudita">Arabia_Saudita </option>
 <option value="Argentina">Argentina </option>
 <option value="Armenia">Armenia </option>
 <option value="Australia">Australia </option>
 <option value="Austria">Austria </option>
 <option value="Azerbaigian">Azerbaigian </option>
 <option value="Bahamas">Bahamas </option>
 <option value="Bangladesh">Bangladesh </option>
 <option value="Barbados">Barbados </option>
 <option value="Bahrein">Bahrein </option>
 <option value="Belgio">Belgio </option>
 <option value="Belize">Belize </option>
 <option value="Benin">Benin </option>
 <option value="Bermuda">Bermuda </option>
 <option value="Bielorussia">Bielorussia </option>
 <option value="Bolivia">Bolivia </option>
 <option value="Botswana">Botswana </option>
 <option value="Bhutan">Bhutan </option>
 <option value="Boznia_Erzegovina">Boznia_Erzegovina </option>
 <option value="Brasile">Brasile </option>
 <option value="Brunei">Brunei </option>
 <option value="Bulgaria">Bulgaria </option>
 <option value="Burkina_Faso">Burkina_Faso </option>
 <option value="Burundi">Burundi </option>

 <option value="Caimano">Caimano </option>
 <option value="Cambogia">Cambogia </option>
 <option value="Camerun">Camerun </option>
 <option value="Canada">Canada </option>
 <option value="Canarie">Canarie </option>
 <option value="Capo Verde">Capo Verde </option>
 <option value="Cile">Cile </option>
 <option value="Cina">Cina </option>
 <option value="Cipro">Cipro </option>
 <option value="Colombia">Colombia </option>
 <option value="Comore">Colombia </option>
 <option value="Congo">Congo </option>
 <option value="Congo_democratico">Congo_democratico </option>
 <option value="Cucina">Cucina </option>
 <option value="Nord_Corea">Nord_Corea </option>
 <option value="Corea_del_Sud">Corea_del_Sud </option>
 <option value="Costa_Rica">Costa_Rica </option>
 <option value="Costa d'Avorio">Costa d'Avorio </option>
 <option value="Croazia">Croazia </option>
 <option value="Cuba">Cuba </option>

 <option value="Danimarca">Danimarca </option>
 <option value="Gibuti">Gibuti </option>
 <option value="Dominique">Dominique </option>

 <option value="Egitto">Egitto </option>
 <option value="Emirati_Arabi_Uniti">Emirati_Arabi_Uniti </option>
 <option value="Ecuador">Ecuador </option>
 <option value="Eritrea">Eritrea </option>
 <option value="Spagna">Spagna </option>
 <option value="Estonia">Estonia </option>
 <option value="Stati Uniti">Stati Uniti </option>
 <option value="Etiopia">Etiopia </option>

 <option value="Falkland">Falkland </option>
 <option value="Feroe">Feroe </option>
 <option value="Fiji">Fiji </option>
 <option value="Finlandia">Finlandia </option>
 <option value="Francia">Francia </option>

 <option value="Gabon">Gabon </option>
 <option value="Gambia">Gambia </option>
 <option value="Georgia">Georgia </option>
 <option value="Ghana">Ghana </option>
 <option value="Gibilterra">Gibilterra </option>
 <option value="Grecia">Grecia </option>
 <option value="Grenada">Grenada </option>
 <option value="Groenlandia">Groenlandia </option>
 <option value="Guadalupa">Guadalupa </option>
 <option value="Guam">Guam </option>
 <option value="Guatemala">Guatemala</option>
 <option value="Guernsey">Guernsey </option>
 <option value="Guinea">Guinea </option>
 <option value="Guinee_Bissau">Guinee_Bissau </option>
 <option value="Guinea Equatoriale">Guinea_Equatoriale </option>
 <option value="Guyana">Guyana </option>
 <option value="Guyane_francese ">Guyane_francese </option>
 <option value="Haiti">Haiti </option>
 <option value="Hawaii">Hawaii </option>
 <option value="Honduras">Honduras </option>
 <option value="Hong_Kong">Hong_Kong </option>
 <option value="Ungheria">Ungheria </option>

 <option value="India">India </option>
 <option value="Indonesia">Indonesia </option>
 <option value="Iran">Iran </option>
 <option value="Iraq">Iraq </option>
 <option value="Irlanda">Irlanda </option>
 <option value="Islanda">Islanda </option>
 <option value="Israele">Israele </option>
 <option value="Italia">italia </option>

 <option value="Giamaica">Giamaica </option>
 <option value="Jan Mayen">Jan Mayen </option>
 <option value="Giappone">Giappone </option>
 <option value="Jersey">Maglia </option>
 <option value="Giordania">Giordania </option>
                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya </option>
                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                    <option value="Kiribati">Kiribati </option>
                                                    <option value="Koweit">Koweit </option>

                                                    <option value="Laos">Laos </option>
                                                    <option value="Lesotho">Lesotho </option>
                                                    <option value="Lettonie">Lettonie </option>
                                                    <option value="Liban">Liban </option>
                                                    <option value="Liberia">Liberia </option>
                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                    <option value="Lituanie">Lituanie </option>
                                                    <option value="Luxembourg">Luxembourg </option>
                                                    <option value="Lybie">Lybie </option>

                                                    <option value="Macao">Macao </option>
                                                    <option value="Macedoine">Macedoine </option>
                                                    <option value="Madagascar">Madagascar </option>
                                                    <option value="Madère">Madère </option>
                                                    <option value="Malaisie">Malaisie </option>
                                                    <option value="Malawi">Malawi </option>
                                                    <option value="Maldives">Maldives </option>
                                                    <option value="Mali">Mali </option>
                                                    <option value="Malte">Malte </option>
                                                    <option value="Man">Man </option>
                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                    <option value="Maroc">Maroc </option>
                                                    <option value="Marshall">Marshall </option>
                                                    <option value="Martinique">Martinique </option>
                                                    <option value="Maurice">Maurice </option>
                                                    <option value="Mauritanie">Mauritanie </option>
                                                    <option value="Mayotte">Mayotte </option>
                                                    <option value="Mexique">Mexique </option>
                                                    <option value="Micronesie">Micronesie </option>
                                                    <option value="Midway">Midway </option>
                                                    <option value="Moldavie">Moldavie </option>
                                                    <option value="Monaco">Monaco </option>
                                                    <option value="Mongolie">Mongolie </option>
                                                    <option value="Montserrat">Montserrat </option>
                                                    <option value="Mozambique">Mozambique </option>

                                                    <option value="Namibie">Namibie </option>
                                                    <option value="Nauru">Nauru </option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Nicaragua">Nicaragua </option>
                                                    <option value="Niger">Niger </option>
                                                    <option value="Nigeria">Nigeria </option>
                                                    <option value="Niue">Niue </option>
                                                    <option value="Norfolk">Norfolk </option>
                                                    <option value="Norvege">Norvege </option>
                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                                    <option value="Oman">Oman </option>
                                                    <option value="Ouganda">Ouganda </option>
                                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                                    <option value="Pakistan">Pakistan </option>
                                                    <option value="Palau">Palau </option>
                                                    <option value="Palestine">Palestine </option>
                                                    <option value="Panama">Panama </option>
                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                                    </option>
                                                    <option value="Paraguay">Paraguay </option>
                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                    <option value="Perou">Perou </option>
                                                    <option value="Philippines">Philippines </option>
                                                    <option value="Pologne">Pologne </option>
                                                    <option value="Polynesie">Polynesie </option>
                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                    <option value="Portugal">Portugal </option>

                                                    <option value="Qatar">Qatar </option>

                                                    <option value="Republique_Dominicaine">Republique_Dominicaine
                                                    </option>
                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                    <option value="Reunion">Reunion </option>
                                                    <option value="Roumanie">Roumanie </option>
                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                    <option value="Russie">Russie </option>
                                                    <option value="Rwanda">Rwanda </option>

                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                    <option value="Salomon">Salomon </option>
                                                    <option value="Salvador">Salvador </option>
                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                    <option value="Senegal">Senegal </option>
                                                    <option value="Seychelles">Seychelles </option>
                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                    <option value="Singapour">Singapour </option>
                                                    <option value="Slovaquie">Slovaquie </option>
                                                    <option value="Slovenie">Slovenie</option>
                                                    <option value="Somalie">Somalie </option>
                                                    <option value="Soudan">Soudan </option>
                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                    <option value="Suede">Suede </option>
                                                    <option value="Suisse">Suisse </option>
                                                    <option value="Surinam">Surinam </option>
                                                    <option value="Swaziland">Swaziland </option>
                                                    <option value="Syrie">Syrie </option>

                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                    <option value="Taiwan">Taiwan </option>
                                                    <option value="Tonga">Tonga </option>
                                                    <option value="Tanzanie">Tanzanie </option>
                                                    <option value="Tchad">Tchad </option>
                                                    <option value="Thailande">Thailande </option>
                                                    <option value="Tibet">Tibet </option>
                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                    <option value="Togo">Togo </option>
                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                    <option value="Tunisie">Tunisie </option>
                                                    <option value="Turkmenistan">Turmenistan </option>
                                                    <option value="Turquie">Turquie </option>

                                                    <option value="Ukraine">Ukraine </option>
                                                    <option value="Uruguay">Uruguay </option>

                                                    <option value="Vanuatu">Vanuatu </option>
                                                    <option value="Vatican">Vatican </option>
                                                    <option value="Venezuela">Venezuela </option>
                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                    <option value="Vietnam">Vietnam </option>

                                                    <option value="Wake">Wake </option>
                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Yougoslavie">Yougoslavie </option>

                                                    <option value="Zambie">Zambie </option>
                                                    <option value="Zimbabwe">Zimbabwe </option>
                                                </select>
                                                @error('pays')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-semibold form-label"
                                                    for="adresse">INDIRIZZO</label>
                                                <input type="text" class="form-control" id="adresse" required
                                                    name="adresse" placeholder="Il tuo indirizzo"
                                                    value={{ old('adresse') }}>

                                                @error('adresse')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold form-label"
                                                    for="ville">CITTÀ</label>
                                                <input type="text" class="form-control" id="ville" required
                                                    name="ville" placeholder="città" value={{ old('ville') }}>

                                                @error('ville')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 flex flex-row justify-between">
                                                <button class="btn bg-red-200 prev-btn"
                                                    onclick="prevStep(event)">Precedente</button>
                                                <button
                                                    class="btn btn-primary next-btn  hover:bg-green-500 hover:border-green-500"
                                                    onclick="nextStep(event)">Seguente</button>
                                            </div>



                                        </div>
                                        <!-- civilite et pays  -->


                                        <div class="step">
                                            <div class="form-group flex flex-col">
                                                 <label for="comptes"
                                                    class="form-label font-weight-semibold "> Tipi di conto</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2 mb-2 form-control"
                                                    required id="Types_comptes" name="comptes"
                                                    aria-label="Default select example">

                                                    <option value="Conto corrente">Conto corrente</option>
 <option value="Conto di risparmio">Conto di risparmio</option>
                                                </select>
                                                <label for="devise"
                                                    class="form-label font-weight-semibold ">VALUTA</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2 form-control "
                                                    required id="devise" name="devise"
                                                    aria-label="Default select example">

                                                    <option value="EUR">EUR</option>
                                                    <option value="Dollar">Dollaro</option>
                                                    <option value="XOF">BTC</option>
                                                </select>
                                                @error('devise')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="password">Password:</label>
                                                <div class="input-affix m-b-10">
                                                    <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password" required name="password">
                                                    <i class="suffix-icon fa-ey toggle-password" onclick="togglePasswordVisibility()"><img src="site_web/img/lg/cacher.png" alt=""  class=""> </i>
                                                <i class="suffix-icon toggle fa-eye-slas" onclick="togglePasswordVisibility()"><img src="site_web/img/lg/oeil.png" alt="" class=""> </i>
                                                <style>

                                                  .toggle-password {
                                                  
                                                    cursor: pointer;
                                                  }
                                                  .fa-ey
                                                  {
                                                    display: block;

                                                  }
                                                  .fa-eye-slas
                                                  {
                                                    display: none;
                                                  }
                                                </style> 
                                                <script>
                                                  function togglePasswordVisibility() {
                                                    const passwordInput = document.getElementById('password');
                                                    const toggleIcon = document.querySelector('.toggle-password');
                                                    const toggleIcons = document.querySelector('.toggle');
                                                    if (passwordInput.type === 'password') {
                                                      passwordInput.type = 'text';
                                                      toggleIcon.classList.remove('fa-ey');
                                                      toggleIcon.classList.add('fa-eye-slas');
                                                      toggleIcons.classList.remove('fa-eye-slas');
                                                      toggleIcons.classList.add('fa-ey');
                                                     
                                                    }
                                                     else {
                                                      passwordInput.type = 'password';
                                                      toggleIcons.classList.remove('fa-ey');
                                                      toggleIcons.classList.add('fa-eye-slas');
                                                      
                                                      toggleIcon.classList.remove('fa-eye-slas');
                                                      toggleIcon.classList.add('fa-ey');
                                                    }
                                                  }

                                                </script> 

                                                </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold"
                                                    for="password_confirmation">Conferma password:</label>
                                                <div class="input-affix m-b-10">
                                                        <i class="prefix-icon anticon anticon-lock"></i>    
                                                <input type="password" class="form-control"
                                                    id="passwordst" placeholder="Conferma password" required
                                                    name="password_confirmation">
                                                    <i class="suffix-icon fa-ey toggle-passwordss" onclick="togglePasswordVisibilityt()"><img src="site_web/img/lg/cacher.png" alt=""  class=""> </i>
                                                    <i class="suffix-icon togglest fa-eye-slas" onclick="togglePasswordVisibilityt()"><img src="site_web/img/lg/oeil.png" alt="" class=""> </i>
                                                <style>

                                                  .toggle-password {
                                                  
                                                    cursor: pointer;
                                                  }
                                                  .fa-ey
                                                  {
                                                    display: block;

                                                  }
                                                  .fa-eye-slas
                                                  {
                                                    display: none;
                                                  }
                                                </style> 
                                                <script>
                                                  function togglePasswordVisibilityt() {
                                                    const passwordInput = document.getElementById('passwordst');
                                                    const toggleIconss = document.querySelector('.toggle-passwordss');
                                                    const toggleIconst = document.querySelector('.togglest');
                                                    if (passwordInput.type === 'password') {
                                                      passwordInput.type = 'text';
                                                      toggleIconss.classList.remove('fa-ey');
                                                      toggleIconss.classList.add('fa-eye-slas');
                                                      toggleIconst.classList.remove('fa-eye-slas');
                                                      toggleIconst.classList.add('fa-ey');
                                                     
                                                    }
                                                     else {
                                                      passwordInput.type = 'password';
                                                      toggleIconst.classList.remove('fa-ey');
                                                      toggleIconst.classList.add('fa-eye-slas');
                                                      
                                                      toggleIconss.classList.remove('fa-eye-slas');
                                                      toggleIconss.classList.add('fa-ey');
                                                    }
                                                  }

                                                </script> 
                                                </div>
                                           
                                                @error('password')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <div class="align-items-center justify-content-between p-t-15">
                                                    <div class="checkbox mb-10">
                                                        <input id="checkbox" required type="checkbox" name="check">
                                                        <label for="checkbox"><span>Ho letto il <a
                                                                    href="#">accordo</a></span></label>
                                                        @error('check')
                                                            <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 flex flex-row justify-between">
                                                        <button class="btn bg-red-200 prev-btn"
                                                            onclick="prevStep(event)">Precedente</button>
                                                        <button
                                                            class="btn btn-primary submit-btn  hover:bg-green-500 hover:border-green-500">Iscriviti</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>











                                    </form>
                                    <!-- -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
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

    @include('client_dashboard.components.modals')

    <div id="google_translate_element2"></div>
    <script type="text/javascript">
      function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
          pageLanguage: 'fr',
          autoDisplay: false
        }, 'google_translate_element2');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  
  
    <script type="text/javascript">
      function GTranslateGetCurrentLang() {
        var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
        return keyValue ? keyValue[2].split('/')[2] : null;
      }
  
      function GTranslateFireEvent(element, event) {
        try {
          if (document.createEventObject) {
            var evt = document.createEventObject();
            element.fireEvent('on' + event, evt)
          } else {
            var evt = document.createEvent('HTMLEvents');
            evt.initEvent(event, true, true);
            element.dispatchEvent(evt)
          }
        } catch (e) {}
      }
  
      function doGTranslate(lang_pair) {
        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair == '') return;
        var lang = lang_pair.split('|')[1];
        if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
        var teCombo;
        var sel = document.getElementsByTagName('select');
        for (var i = 0; i < sel.length; i++)
          if (/goog-te-combo/.test(sel[i].className)) {
            teCombo = sel[i];
            break;
          } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
          setTimeout(function() {
            doGTranslate(lang_pair)
          }, 500)
        } else {
          teCombo.value = lang;
          GTranslateFireEvent(teCombo, 'change');
          GTranslateFireEvent(teCombo, 'change')
        }
      }
    </script>
    <script>
      jQuery(document).ready(function() {
        var allowed_languages = ["en", "fr", "de", "it", "pt", "es", "af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "ny", "zh-CN", "zh-TW", "co", "hr", "cs", "da", "nl", "eo", "et", "tl", "fi", "fy", "gl", "ka", "el", "gu", "ht", "ha", "haw", "iw", "hi", "hmn", "hu", "is", "ig", "id", "ga", "ja", "jw", "kn", "kk", "km", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "ps", "fa", "pl", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "su", "sw", "sv", "tg", "ta", "te", "th", "tr", "uk", "ur", "uz", "vi", "cy", "xh", "yi", "yo", "zu"];
        var accept_language = navigator.language.toLowerCase() || navigator.userLanguage.toLowerCase();
        switch (accept_language) {
          case 'zh-cn':
            var preferred_language = 'zh-CN';
            break;
          case 'zh':
            var preferred_language = 'zh-CN';
            break;
          case 'zh-tw':
            var preferred_language = 'zh-TW';
            break;
          case 'zh-hk':
            var preferred_language = 'zh-TW';
            break;
          default:
            var preferred_language = accept_language.substr(0, 2);
            break;
        }
        if (preferred_language != 'fr' && GTranslateGetCurrentLang() == null && document.cookie.match('gt_auto_switch') == null && allowed_languages.indexOf(preferred_language) >= 0) {
          doGTranslate('fr|' + preferred_language);
          document.cookie = 'gt_auto_switch=1; expires=Thu, 05 Dec 2030 08:08:08 UTC; path=/;';
        }
      });
    </script>


    <!-- Core Vendors JS -->
    <script src="/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>
