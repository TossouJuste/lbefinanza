<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Seed Finance</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

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
                <div class="d-md-flex p-h-40">
                    <a href="/"><img src="assets/images/logo/logo.png" alt="" ></a>   
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="/assets/images/others/sign-up-2.png" alt="">
                        </div>
                        <div class="m-l-auto col-md-5">
                            <div class="card">

                                <div class="card-body">

                                    <h2 class="m-t-20">Inscription</h2>
                                    <p class="m-b-30">Veuillez remplir le formulaire ci-dessous pour vous inscrire</p>
                                    <form id="step-form" class="step-form" enctype="multipart/form-data" onsubmit="return validateForm(event)"
                                        method="post" action="{{ route('auth.register') }}">
                                        @csrf
                                        @method('post')

                                        {{-- @error('password')
                                    <p class="p-2 bg-red-100 mb-2">Merci de bien vouloir examiner le formulaire d'inscription afin de détecter et de corriger toute éventuelle erreur.</p>
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
                                                <label class="font-weight-semibold" for="nom">NOM</label>
                                                <input type="text" class="form-control" id="nom" required
                                                    name="nom" placeholder="Votre nom" value={{ old('nom') }}>
                                                @error('nom')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="prenom">PRENOM</label>
                                                <input type="text" class="form-control" id="prenom" required
                                                    name="prenom" placeholder="Votre prénom" value={{ old('prenom') }}>
                                                @error('prenom')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="email">EMAIL</label>
                                                <input type="email" class="form-control" id="email" required
                                                    name="email" placeholder="Votre email" value={{ old('email') }}>
                                                @error('email')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="telephone">NUMERO DE
                                                    TELEPHONE</label>
                                                <input type="tel" class="form-control" id="telephone" required
                                                    name="telephone" placeholder="Votre numero de télephone"
                                                    value={{ old('telephone') }}>
                                                @error('telephone')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button
                                                class="btn btn-primary next-btn hover:bg-green-500 hover:border-green-500"
                                                onclick="nextStep(event)">Suivant</button>
                                        </div>
                                        <!-- civilite et pays  -->

                                        <div class="step">
                                            <div class="form-group flex flex-col">
                                                <label class="font-weight-semibold form-label"
                                                    for="civilite">CIVILITE</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2 "
                                                    required name="civilite" id="civilite"
                                                    aria-label="Default select example" value={{ old('civilite') }}>

                                                    <option value="Masculin">Masculin</option>
                                                    <option value="Féminin">Féminin</option>
                                                </select>
                                                @error('civilite')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>
                                            <div class="form-group flex flex-col">
                                                <label for="piece" class="form-label">Ajouter une pièce
                                                    d'identité</label>
                                                <input class="form-control" required type="file" name="piece"
                                                    id="piece" value={{ old('piece') }} />
                                                @error('piece')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>



                                            <div class="form-group flex flex-col">
                                                <label for="pays"
                                                    class="form-label font-weight-semibold ">PAYS</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2"
                                                    required id="pays" name="pays"
                                                    aria-label="Default select example" value={{ old('pays') }}>

                                                    <option value="France">France </option>

                                                    <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                    <option value="Albanie">Albanie </option>
                                                    <option value="Algerie">Algerie </option>
                                                    <option value="Allemagne">Allemagne </option>
                                                    <option value="Andorre">Andorre </option>
                                                    <option value="Angola">Angola </option>
                                                    <option value="Anguilla">Anguilla </option>
                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                    <option value="Argentine">Argentine </option>
                                                    <option value="Armenie">Armenie </option>
                                                    <option value="Australie">Australie </option>
                                                    <option value="Autriche">Autriche </option>
                                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                                    <option value="Bahamas">Bahamas </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbade">Barbade </option>
                                                    <option value="Bahrein">Bahrein </option>
                                                    <option value="Belgique">Belgique </option>
                                                    <option value="Belize">Belize </option>
                                                    <option value="Benin">Benin </option>
                                                    <option value="Bermudes">Bermudes </option>
                                                    <option value="Bielorussie">Bielorussie </option>
                                                    <option value="Bolivie">Bolivie </option>
                                                    <option value="Botswana">Botswana </option>
                                                    <option value="Bhoutan">Bhoutan </option>
                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                    <option value="Bresil">Bresil </option>
                                                    <option value="Brunei">Brunei </option>
                                                    <option value="Bulgarie">Bulgarie </option>
                                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                                    <option value="Burundi">Burundi </option>

                                                    <option value="Caiman">Caiman </option>
                                                    <option value="Cambodge">Cambodge </option>
                                                    <option value="Cameroun">Cameroun </option>
                                                    <option value="Canada">Canada </option>
                                                    <option value="Canaries">Canaries </option>
                                                    <option value="Cap_vert">Cap_Vert </option>
                                                    <option value="Chili">Chili </option>
                                                    <option value="Chine">Chine </option>
                                                    <option value="Chypre">Chypre </option>
                                                    <option value="Colombie">Colombie </option>
                                                    <option value="Comores">Colombie </option>
                                                    <option value="Congo">Congo </option>
                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                    <option value="Cook">Cook </option>
                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                    <option value="Croatie">Croatie </option>
                                                    <option value="Cuba">Cuba </option>

                                                    <option value="Danemark">Danemark </option>
                                                    <option value="Djibouti">Djibouti </option>
                                                    <option value="Dominique">Dominique </option>

                                                    <option value="Egypte">Egypte </option>
                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                    <option value="Equateur">Equateur </option>
                                                    <option value="Erythree">Erythree </option>
                                                    <option value="Espagne">Espagne </option>
                                                    <option value="Estonie">Estonie </option>
                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                    <option value="Ethiopie">Ethiopie </option>

                                                    <option value="Falkland">Falkland </option>
                                                    <option value="Feroe">Feroe </option>
                                                    <option value="Fidji">Fidji </option>
                                                    <option value="Finlande">Finlande </option>
                                                    <option value="France">France </option>

                                                    <option value="Gabon">Gabon </option>
                                                    <option value="Gambie">Gambie </option>
                                                    <option value="Georgie">Georgie </option>
                                                    <option value="Ghana">Ghana </option>
                                                    <option value="Gibraltar">Gibraltar </option>
                                                    <option value="Grece">Grece </option>
                                                    <option value="Grenade">Grenade </option>
                                                    <option value="Groenland">Groenland </option>
                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                    <option value="Guam">Guam </option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernesey">Guernesey </option>
                                                    <option value="Guinee">Guinee </option>
                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                    <option value="Guyana">Guyana </option>
                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                                    <option value="Haiti">Haiti </option>
                                                    <option value="Hawaii">Hawaii </option>
                                                    <option value="Honduras">Honduras </option>
                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                    <option value="Hongrie">Hongrie </option>

                                                    <option value="Inde">Inde </option>
                                                    <option value="Indonesie">Indonesie </option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq">Iraq </option>
                                                    <option value="Irlande">Irlande </option>
                                                    <option value="Islande">Islande </option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italie">italie </option>

                                                    <option value="Jamaique">Jamaique </option>
                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                    <option value="Japon">Japon </option>
                                                    <option value="Jersey">Jersey </option>
                                                    <option value="Jordanie">Jordanie </option>

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
                                                    for="adresse">ADRESSE</label>
                                                <input type="text" class="form-control" id="adresse" required
                                                    name="adresse" placeholder="Votre address"
                                                    value={{ old('adresse') }}>

                                                @error('adresse')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold form-label"
                                                    for="ville">VILLE</label>
                                                <input type="text" class="form-control" id="ville" required
                                                    name="ville" placeholder="Ville" value={{ old('ville') }}>

                                                @error('ville')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 flex flex-row justify-between">
                                                <button class="btn bg-red-200 prev-btn"
                                                    onclick="prevStep(event)">Precedent</button>
                                                <button
                                                    class="btn btn-primary next-btn  hover:bg-green-500 hover:border-green-500"
                                                    onclick="nextStep(event)">Suivant</button>
                                            </div>



                                        </div>
                                        <!-- civilite et pays  -->


                                        <div class="step">
                                            <div class="form-group flex flex-col">
                                                <label for="devise"
                                                    class="form-label font-weight-semibold ">DEVISE</label>
                                                <select class="form-select border-2 border-indigo-200 rounded-lg py-2 "
                                                    required id="devise" name="devise"
                                                    aria-label="Default select example">

                                                    <option value="EUR">EUR</option>
                                                    <option value="Dollar">Dollar</option>
                                                    <option value="XOF">BTC</option>
                                                </select>
                                                @error('devise')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="password">Password:</label>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password" required name="password">
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold"
                                                    for="password_confirmation">Confirm Password:</label>
                                                <input type="password" class="form-control"
                                                    id="password_confirmation" placeholder="Confirm Password" required
                                                    name="password_confirmation">
                                                @error('password')
                                                    <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <div class="align-items-center justify-content-between p-t-15">
                                                    <div class="checkbox mb-10">
                                                        <input id="checkbox" required type="checkbox" name="check">
                                                        <label for="checkbox"><span>I have read the <a
                                                                    href="#">agreement</a></span></label>
                                                        @error('check')
                                                            <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 flex flex-row justify-between">
                                                        <button class="btn bg-red-200 prev-btn"
                                                            onclick="prevStep(event)">Precedent</button>
                                                        <button
                                                            class="btn btn-primary submit-btn  hover:bg-green-500 hover:border-green-500">S'inscrire</button>
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


    <!-- Core Vendors JS -->
    <script src="/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>
