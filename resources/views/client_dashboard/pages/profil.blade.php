@extends('client_dashboard.components.app')
@section('page_titre')
    Mon Profil
@endsection
@section('page_container')

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Mon profil</h2>
        </div>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="d-md-flex align-items-center">
                                <div class="text-center text-sm-left ">
                                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                                        <img src="@if(Auth::user()->photo_profil=='default.png') /{{ Auth::user()->photo_profil}} @else {{Storage::url(Auth::user()->photo_profil)}} @endif" alt="">
                                    </div>
                                    <form method="post" id="form_avatar" enctype="multipart/form-data" action="/dashboard/profil/avatar">
                                        @csrf
                                        <input type="file" onchange="form_submit(event)" hidden name="photo_profil"
                                            id="photo_profil">
                                        <label for="photo_profil" class="btn btn-dark bg-black"> <i
                                                class="fa  text-white fa-camera"></i> </label>
                                    </form>
                                </div>
                                <div class="text-center text-sm-left m-v-15 p-l-30">
                                    <h2 class="m-b-5">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
                                    <p class="text-opacity font-size-13">@ {{ Auth::user()->nom }}</p>
                                    <p class="text-dark m-b-20">{{ Auth::user()->email }}</p>
                                    <button class="btn btn-primary btn-tone" data-toggle="modal"
                                        data-target="#profile_change_widget">Modifier</button>
                                        

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="d-md-block d-none border-left col-1"></div>
                                <div class="col">
                                    <ul class="list-unstyled m-t-10">
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex font-weight-semibold text-dark ">
                                                <i class="m-r-10 text-primary anticon anticon-mail" style="margin-top:12px;"></i>
                                                <span class="">Email</span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{ Auth::user()->email }}</p>
                                        </li>
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex  font-weight-semibold text-dark ">
                                                <i class="m-r-10 text-primary anticon anticon-phone" style="margin-top:12px;"></i>
                                                <span>Phone: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{ Auth::user()->telephone }}</p>
                                        </li>
                                        
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex  font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-dollar" style="margin-top:12px;"></i>
                                                <span>Type de compte: </span>
                                            </p>
                                            <p class="col font-weight-semibold">{{ Auth::user()->Types_comptes }}</p>
                                        </li>

                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex  font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-dollar" style="margin-top:12px;"></i>
                                                <span>Devise: </span>
                                            </p>
                                            <p class="col font-weight-semibold">{{ Auth::user()->devise }}</p>
                                        </li>
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-compass" style="margin-top:12px;"></i>
                                                <span>Pays: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{ Auth::user()->pays }}</p>
                                        </li>
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-compass" style="margin-top:12px;"></i>
                                                <span>Adresse: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{ Auth::user()->adresse }}</p>
                                        </li>
                                        
                                        <li class="row flex-wrap">
                                            <p class="col-sm-4 col-4 d-flex font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-compass"style="margin-top:12px;"></i>
                                                <span>Civilite: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{ Auth::user()->civilite }}</p>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- modal --}}


    <!-- Button trigger modal -->

    <!-- Modal -->
    <form method="post" action="/dashboard/profil">
        @csrf
        <div class="modal fade" id="profile_change_widget">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modifier mon profil</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">

                                @method('post')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="font-weight-semibold" for="nom">NOM</label>
                                    <input type="text" class="form-control" id="nom" required name="nom"
                                        placeholder="Votre nom" value="{{ Auth::user()->nom }}">
                                    @error('nom')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="prenom">PRENOM</label>
                                    <input type="text" class="form-control" id="prenom" required name="prenom"
                                        placeholder="Votre prénom" value="{{ Auth::user()->prenom }}">
                                    @error('prenom')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-semibold" for="telephone">NUMERO DE
                                        TELEPHONE</label>
                                    <input type="tel" class="form-control" id="telephone" required name="telephone"
                                        placeholder="Votre numero de télephone" value="{{ Auth::user()->telephone }}">
                                    @error('telephone')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex flex-col">
                                    <label for="pays" class="form-label font-weight-semibold ">PAYS</label>
                                    <select class="form-select border-2 border-indigo-200 rounded-lg py-2" required
                                        id="pays" name="pays" aria-label="Default select example"
                                        value={{ old('pays') }}>

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
                                    <label class="font-weight-semibold form-label" for="adresse">ADRESSE</label>
                                    <input type="text" class="form-control" id="adresse" required name="adresse"
                                        placeholder="Votre address" value="{{ Auth::user()->adresse }}">

                                    @error('adresse')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-semibold form-label" for="ville">VILLE</label>
                                    <input type="text" class="form-control" id="ville" required name="ville"
                                        placeholder="Ville" value="{{ Auth::user()->ville }}">

                                    @error('ville')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex flex-col">
                                    <label for="devise" class="form-label font-weight-semibold ">DEVISE</label>
                                    <select class="form-select border-2 border-indigo-200 rounded-lg py-2 " required
                                        id="devise" name="devise" aria-label="Default select example">

                                        <option value="EUR">EUR</option>
                                        <option value="Dollar">Dollar</option>
                                        <option value="XOF">BTC</option>
                                    </select>
                                    @error('devise')
                                        <p class="p-2 bg-red-100 mb-2">{{ $message }}</p>
                                    @enderror

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    {{-- fin modal  --}}
    <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->

    <!-- Footer END -->

    <script>
        const form_avatar = document.getElementById('form_avatar');

        function form_submit(event) {
            if (event.target.files.length > 0) {

                form_avatar.submit()

            }
        }
    </script>
@endsection
