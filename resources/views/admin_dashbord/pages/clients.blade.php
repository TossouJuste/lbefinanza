@extends('admin_dashbord.components.app')
@section('page_titre')
    Les clients non validés
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Les clients non validés</h2>
        </div>
        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Clients non validés</h5>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                <p class="text-center"> {{ session('success') }} </p>
                            </div>
                        @endif
                        @if ($clients->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap text-center">Numero de compte</th>
                                                <th class="text-nowrap text-center">Solde</th>
                                                <th class="text-nowrap text-center">Nom</th>
                                                <th class="text-nowrap text-center">Prenom</th>
                                                <th class="text-nowrap text-center">Email</th>
                                                <th class="text-nowrap text-center">Telephone</th>
                                                <th class="text-nowrap text-center">civilite</th>
                                                <th class="text-nowrap text-center">Pays</th>
                                                <th class="text-nowrap text-center">Adresse</th>
                                                <th class="text-nowrap text-center">Ville</th>
                                                <th class="text-nowrap text-center">Piece</th>
                                                <th class="text-nowrap text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $client)
                                                <tr>
                                                    <td class="text-center">{{ $client->numero_compte }}</td>
                                                    <td class="text-center text-success">{{ $client->solde }}</td>
                                                    <td class="text-center">{{ $client->nom }}</td>
                                                    <td class="text-center">{{ $client->prenom }}</td>
                                                    <td class="text-center">{{ $client->email }}</td>
                                                    <td class="text-center">{{ $client->telephone }}</td>
                                                    <td class="text-center">{{ $client->civilite }}</td>
                                                    <td class="text-center">{{ $client->pays }}</td>
                                                    <td class="text-center">{{ $client->adresse }}</td>
                                                    <td class="text-center">{{ $client->ville }}</td>
                                                    <td class="text-center"><a href="{{ Storage::url($client->piece) }}"
                                                            target="_blank" rel="noopener noreferrer">Piece</a> </td>
                                                    <td class="text-center">
                                                        <div class="d-flex">
                                                            {{-- debut crediter  --}}
                                                            <button class="btn btn-success mx-2" data-toggle="modal"
                                                                data-target="#virement_modal_{{ $client->id }}">Créditer</button>
                                                                <button class="btn btn-success mx-2" data-toggle="modal"
                                                                data-target="#virement_modal_portefeuile_{{ $client->id }}">Portefeuille</button>
                                                                <a href="/admin/delete-client/{{ $client->id }}"
                                                                    class="btn btn-danger">
                                                                    Supprimer
                                                                </a>








                                                                
                                                            <form method="post" action="/admin/crediter">
                                                                @csrf
                                                                <div class="modal " id="virement_modal_{{ $client->id }}">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Crediter le compte
                                                                                    {{ $client->numero_compte }} </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal">
                                                                                    <i class="anticon anticon-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                @if ($errors->any())
                                                                                    <div class="alert alert-danger">
                                                                                        <ul>
                                                                                            @foreach ($errors->all() as $error)
                                                                                                <li>{{ $error }}
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                @endif
                                                                                <input type="hidden" name="user_id"
                                                                                    value="{{ $client->id }}">
                                                                                <input type="hidden" name="numero_compte"
                                                                                    value="{{ $client->numero_compte }}">
                                                                                <div class="row g-2">
                                                                                    <div class="col mb-3">
                                                                                        <label for="nameBasic"
                                                                                            class="form-label">Id
                                                                                            Transation</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            id="id_transation"
                                                                                            name="id_transation"
                                                                                            placeholder="Id de la transation de la banque"
                                                                                            required />
                                                                                    </div>
                                                                                    <div class="col mb-3">
                                                                                        <label for="motif"
                                                                                            class="form-label">Motif</label>
                                                                                        <input class="form-control"
                                                                                            type="text" id="motif"
                                                                                            name="motif"
                                                                                            placeholder="Motif" required />
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row g-2">
                                                                                    <div class="col mb-0">
                                                                                        <label for="nom_banque"
                                                                                            class="form-label">Nom de la
                                                                                            banque</label>
                                                                                        <input class="form-control"
                                                                                            type="text" id="nom_banque"
                                                                                            name="nom_banque"
                                                                                            placeholder="Nom de la banque de depot"
                                                                                            required />
                                                                                    </div>
                                                                                    <div class="col mb-0">
                                                                                        <label for="date_heure"
                                                                                            class="form-label">Date et
                                                                                            heure de depôt</label>
                                                                                        <input type="datetime-local"
                                                                                            id="date_heure"
                                                                                            name="date_heure"
                                                                                            class="form-control"
                                                                                            placeholder="DD / MM / YY" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col mb-3">
                                                                                        <label for="montant"
                                                                                            class="form-label">Montant</label>
                                                                                        <input class="form-control"
                                                                                            type="number" id="montant"
                                                                                            name="montant"
                                                                                            placeholder="Montant(en {{ $client->devise }} )"
                                                                                            required />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-default m-r-10"
                                                                                    data-dismiss="modal">Annuler</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Envoyer</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            {{-- fin credit  --}}

                                                            {{-- porte feuille  --}}
                                                            
                                                            <form method="post" action="/admin/portefeuille/depot">
                                                                @csrf
                                                                <div class="modal " id="virement_modal_portefeuile_{{ $client->id }}">
                                                                    <div class="modal-dialog modal-xl">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Portefeuille de  {{$client->nom}} {{$client->prenom}}
                                                                                    </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal">
                                                                                    <i class="anticon anticon-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                @if ($errors->any())
                                                                                    <div class="alert alert-danger">
                                                                                        <ul>
                                                                                            @foreach ($errors->all() as $error)
                                                                                                <li>{{ $error }}
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                @endif
                                                                                <input type="hidden" name="user_id"
                                                                                    value="{{ $client->id }}">
                                                                                <div class="form-row mb-3">
                                                                                    <div class="col-auto">
                                                                                        
                                                                                        <input class="form-control"
                                                                                            type="number" id="montant"
                                                                                            name="montant"
                                                                                            placeholder="Montant(en {{ $client->devise }} )"
                                                                                            required />
                                                                                    </div>
                                                                                    <div  class="col-auto"><button type="submit"
                                                                                        class="btn btn-primary">Envoyer</button>
                                                                                     </div>




                                                                                </div>


                                                                                {{-- les informations de utilisateurs  --}}
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Valeur Portefeuille</p>
                                                                                                        <h2 class="m-b-0">
                                                                                                            <span> {{ $client->devise }} {{ $client->portefeuilles()->first()->solde_p }} </span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                                                                        
                                                                                                        <i class="anticon anticon-dollar"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Profit Mensuel</p>
                                                                                                        <h2 class="m-b-0">
                                                                                                            <span>{{ $client->portefeuilles()->first()->profit }}</span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                                                                        <i class="anticon anticon-bar-chart"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Profit Journalier</p>
                                                                                                        <h2 class="m-b-0">
                                                                                                            <span>1.77%</span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                                                                        <i class="anticon anticon-bar-chart"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Revenu Journalier</p>
                                                                                                        <h2 class="m-b-0">
                                                                                                            <span>{{ $client->devise }} {{ $client->portefeuilles()->first()->revenu_p }}</span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                                                                                                        <i class="anticon anticon-dollar"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Benefice</p>
                                                                                                        <h2 class="m-b-0 text-success">
                                                                                                            <span>{{ $client->devise }} {{ $client->portefeuilles()->first()->benef}}</span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                                                                        <i class="anticon anticon-dollar"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                                    <div>
                                                                                                        <p class="m-b-0">Valeur Total Portefeuille</p>
                                                                                                        <h2 class="m-b-0 text-success">
                                                                                                            <span>{{ $client->devise }} {{ $client->portefeuilles()->first()->val_solde }}</span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                                                                                                        <i class="anticon anticon-dollar"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- fin information   --}}
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-default m-r-10"
                                                                                    data-dismiss="modal">Fermer</button>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>


                                                            {{-- fin portefeuille  --}}

                                                            





                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <div class="card" style="height: 200px">
                                        <div class="card-body shadow">
                                            <div
                                                class="d-flex h-100 flex-column justify-content-center align-items-center">
                                                <a href="#" class="text-primary "><i class="mdi mdi-account-plus"
                                                        style="font-size: 100px"></i></a>
                                                <p class="text-center mt-2 font-weight">
                                                    Pas de clients
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->

    <!-- Footer END -->
@endsection
