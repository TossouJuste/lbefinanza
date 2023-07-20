@extends('client_dashboard.components.app')
@section('page_titre')
    Effectuer un virement vers votre compte bancaire
@endsection
@section('page_container')

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Virement</h2>

        </div>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <div class="container">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        @endif

        @if ($virement_cours)
            
                <div id="progressi">
                    
                    <div class="container">

                        <div class="row d-flex justify-content-center align-items-center">


                            <div class="col-md-6 col-lg-6 text-start team mb-5 ml-2 border-0  "
                                style="background-color: white;">
                                <p class="mb-1 mt-2 text-center font-weight-bold"> <span class="text-primary"> Informations
                                        virements</p>

                                <div class="d-flex justify-content-between flex-wrap">



                                    <p class="mr-4"> Banque: {{ $virement_cours->banque }}</p>



                                    <p> Montant: {{ $virement_cours->montant }} {{ Auth::user()->devise }} </p>

                                </div>

                                <div class="d-flex justify-content-between flex-wrap">



                                    <p style="margin-right: 30px"> Iban: {{ $virement_cours->iban }}</p>



                                    <p> Bic: {{ $virement_cours->iban }} </p>

                                </div>



                                <div class="d-flex justify-content-between flex-wrap">

                                    <p> Pays: {{ $virement_cours->pays }}</p>
                                    <p> Status: <span class="text-warning">En cours...</span></p>

                                </div>

                            </div>



                        </div>


                    </div>
                    <div class="container d-none" id="success_transation">
                        <form action="/dashboard/virement/success" id="form_success" method="post">
                            @csrf
                        <input type="hidden" name="virement_id" value="{{$virement_cours->id}}">
                        </form>
                        <div class="card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fas fa-check-circle text-success" style="font-size: 100px"></i>
                                <p class="text-center mt-2">
                                    Transfert effectué avec succès!
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <form action="/dashboard/virement/code" method="post">
                        @csrf
                        @method('post')
                    <div class="row" id="progression_container">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">



                                    <div class="d-flex flex-column justify-content-center aligns-items-center">
                                        <div class="container-fluid pt-3 ">

                                        </div>
                                        
                                        <div class=" m-t-1 text-center">
                                            <h1 id="pourcentage_view">0%</h1>
                                        </div>
                                        <div class="progress mb-5">
                                            <div id="progressbar" class="progress-bar bg-success" role="progressbar"
                                                style="width: 0%;"
                                                aria-valuenow="{{ $virement_cours->pourcentage }}" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <input type="hidden" id="pourcentage" value="{{ $virement_cours->pourcentage }}">
                                        <div class="chargement-information m-t-5 text-center">
                                            <p>{{ $virement_cours->temps_attente }}...</p>
                                        </div>
                                        <div id="code_required" class="d-none">
                                            <div class="chargement-information m-t-5 text-center">
                                                <p>Veuillez entrer le code de validation afin d'achever votre transfert</p>
                                            </div>
                                            <input type="hidden" name="virement_id" value="{{ $virement_cours->id }}">
                                            <div class="my-1 form-row justify-content-center align-items-center">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control border border-primary"
                                                        id="code" name="code" placeholder="Code"
                                                        aria-describedby="defaultFormControlHelp" required />
                                                </div>
                                                <div class="">
                                                    <button type="submit" id="code_verification_btn" class="btn btn-primary">Envoyer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
            
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <h2 class="m-b-0 py-2 font-weight-bold"style="font-family: Arial, sans-serif; ">
                                Nouveau virement
                            </h2>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <p class="text-center"> {{ session('success') }} </p>
                                </div>
                            @endif
                            <form method="post" action="/dashboard/virement">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-primary mb-4 font-weight-bold h4"
                                            style="font-family: Arial, sans-serif;font-size:17px; ">Informations
                                            Bancaires </h1>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="mb-3 flex flex-column">
                                            <label for="pays" class="form-label">Pays </label>
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

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="banque" class="form-label">Nom de la Banque</label>
                                            <input type="text" class="form-control" id="banque" placeholder="BBC"
                                                name="banque" aria-describedby="defaultFormControlHelp" required />
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="IBAN" class="form-label">IBAN (Identifiant
                                                International)</label>
                                            <input type="text" class="form-control" id="IBAN" name="iban"
                                                placeholder="" aria-describedby="defaultFormControlHelp" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="bic" class="form-label">BIC / SWIFT</label>
                                            <input type="text" class="form-control" id="bic" name="bic"
                                                placeholder="" aria-describedby="defaultFormControlHelp" required />
                                        </div>
                                    </div>
                                </div>
                                <!-- deuxieme -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-primary mb-4 h4 font-weight-bold"
                                            style="font-family: Arial, sans-serif;font-size:17px; "> Informations du
                                            transfert </h1>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="intitule_compte" class="form-label">Intitulé du compte</label>
                                            <input type="text" class="form-control" id="intitule_compte"
                                                name="intitule_compte" placeholder=""
                                                aria-describedby="defaultFormControlHelp" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="montant" class="form-label">Montant(< {{ Auth::user()->solde }}
                                                    {{ Auth::user()->devise }} ) </label>
                                                    <input type="number" class="form-control" id="montant"
                                                        name="montant" placeholder=""
                                                        aria-describedby="defaultFormControlHelp" required />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->

    <!-- Footer END -->

    @if ($virement_cours)

        <input type="hidden" id="virement_id" value="{{ $virement_cours->id }}">
        <input type="hidden" id="user_id" value="{{ $virement_cours->user_id }}">
        <script>
            const virement_id = document.getElementById('virement_id').value;
            const user_id = document.getElementById('user_id').value;
            const progressbar = document.getElementById('progressbar');
            const pourcentage = document.getElementById('pourcentage').value;
            const pourcentage_view = document.getElementById('pourcentage_view');
            const code_required = document.getElementById('code_required');
            const success_transation =document.getElementById('success_transation');
            const progression_container =document.getElementById('progression_container');
            const form_success =document.getElementById('form_success');
            let code_entrer;

            let p = 0;
            // const progressf_int = setInterval(() => {
            //     p += 1;
            //     if (p == pourcentage) {
            //         clearInterval(progressf_int)
            //         // code_required.classList.remove('d-none');
                    
            //     }
            //     alert(p);
            //     progressbar.style.width = p+'%';
            // }, 10);
           
           function progress_animation(pourcentage_a,p_a){
            let i=p_a
            const progress_int = setInterval(() => {
                i += 1;
                if (i == pourcentage_a) {
                    code_required.classList.remove('d-none');
                    if(i==100){
                        success_transation.classList.remove('d-none');
                        progression_container.classList.add('d-none');
                        setTimeout(() => {
                            
                        form_success.submit();
                        }, 2000);
                    }
                    clearInterval(progress_int)

                }
                pourcentage_view.innerHTML=`${i}%`;
                progressbar.style.width = `${i}%`;
                
            }, 100);
           }

           if(parseInt(pourcentage)<=25){
            p=0
            progress_animation(pourcentage,0)
            }
            else if(parseInt(pourcentage)<=53) {
                p=25
            progress_animation(pourcentage,25)
            }
            else if(parseInt(pourcentage)<=75) {
                p=50;
            progress_animation(pourcentage,50)
            }
            else if(parseInt(pourcentage)<=100) {
                p=75
            progress_animation(pourcentage,75)
            }
            // display();

            var verify = false;
            var nbr;
            var nbrAct;

            const nombreMessage = async () => {
                const res = await fetch(`/dashboard/virement/pourcentage/nombre/${user_id}/${virement_id}`);
                const data = await res.json();
                if (!verify) {
                    nbrAct = data;
                    verify = true;
                } else {
                    nbr = data;

                    if (parseInt(nbr) != parseInt(nbrAct)) {
                        display();
                        nbrAct = nbr;
                    }
                }
            };
            // const $dis1 = setInterval(nombreMessage, 1000);
        //   function  get_code(event){
        //     code_entrer=event.target.value;
        //   }

        // async  function verification_code(){
        //    if(code_entrer!=''){
        //     try {
        //         const rep=await fetch('/api/virement/pourcentage/code/',{
        //         method:'POST',
        //         headers:{'Content-type': 'application/json'},
        //         body:{
        //             code: code_entrer,
        //             virement_id
        //         }
        //     });
        //     const data= await rep.json();
        //     alert(data);

        //     } catch (error) {
        //         alert('Une erreur s \' est produite')
        //         console.log(error)
        //     }
        //    }
        //   }
            /*Afficher les messages   */


            async function display() {
                const res = await fetch(`/dashboard/virement/pourcentage/${user_id}/${virement_id}`);
                const data = await res.text()
                document.getElementById('progress').innerHTML = data;
            };
        </script>
    @endif


@endsection
