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
        <div class="page-header no-gutters">
            <div class="d-md-flex align-items-md-center justify-content-between">
                <div class="media m-v-10 align-items-center">
                    <div class="avatar avatar-image avatar-lg">
                        <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <div class="media-body m-l-15">
                        <h4 class="m-b-0">Bienvenue, {{ Auth::user()->nom }} !</h4>
                        <span class="text-gray">Espace administrateur</span>
                    </div>
                </div>
                <div class="d-md-flex align-items-center d-none">

                </div>
            </div>
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
                                                            <button class="btn btn-success" data-toggle="modal"
                                                                data-target="#virement_modal_{{ $client->id }}">Créditer</button>
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


                                                            <a href="/admin/delete-client/{{ $client->id }}"
                                                                class="btn btn-danger">
                                                                Supprimer
                                                            </a>
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
