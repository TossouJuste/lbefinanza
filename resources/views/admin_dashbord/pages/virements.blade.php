@extends('admin_dashbord.components.app')

@section('page_titre')
    Les virements
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Les virements</h2>
        </div>
        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Virements</h5>
                        </div>
                        @if ($virements->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nom client</th>
                                                <th>Prenom client</th>
                                                <th>Pays</th>
                                                <th>Nom Banque</th>
                                                <th>IBAN</th>
                                                <th>BIC</th>
                                                <th>Intitule compte</th>
                                                <th>Montant</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($virements as $virement)
                                                <tr>
                                                    <td> {{ $virement->user->nom }}</td>
                                                    <td>{{ $virement->user->prenom }}</td>
                                                    <td>{{ $virement->pays }}</td>
                                                    <td>{{ $virement->banque }}</td>
                                                    <td>{{ $virement->iban }}</td>
                                                    <td>{{ $virement->bic }}</td>
                                                    <td>{{ $virement->intitule_compte }}</td>
                                                    <td>{{ $virement->montant }} {{ $virement->devise }} </td>
                                                    <td>{{ $virement->created_at }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button class="btn btn-success" data-toggle="modal"
                                                                data-target="#virement_modal_{{ $virement->id }}">Progression</button>
                                                            <form method="post" action="/admin/change-progression">
                                                                @csrf
                                                                <div class="modal fadeIn-bottom" id="virement_modal_{{ $virement->id }}"
                                                                  >
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Modifier le
                                                                                    pourcentage du virement
                                                                                    {{ $virement->id }} </h5>
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
                                                                                <input type="hidden" name="virement_id"
                                                                                    value="{{ $virement->id }}">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-semibold" for="pourcentage">Pourcentage</label>
                                                                                        <input type="number" max="100" min="0" required class="form-control" id="pourcentage" required name="pourcentage"
                                                                                            placeholder="Pourcentage" value="{{ $virement->code_pourcentage }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-semibold" for="temps_attente">Temps attente</label>
                                                                                        <input type="text" class="form-control" required id="temps_attente" required name="temps_attente"
                                                                                            placeholder="Temps _attente" value="{{ $virement->temps_attente }}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-semibold" for="code">Codes </label>
                                                                                        <input type="text" class="form-control" readonly required id="code" required name="code"
                                                                                            placeholder="Code pour la validation"  value="{{ $virement->code1 }} pour 25%">
                                                                                            <input type="text" class="form-control" readonly required id="code2" required name="code1"
                                                                                            placeholder="Code pour la validation" value="{{ $virement->code2 }} pour 53%">
                                                                                            <input type="text" class="form-control" readonly required id="code3" required name="code2"
                                                                                            placeholder="Code pour la validation" value="{{ $virement->code3 }} pour 75%">
                                                                                    </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-default m-r-10"
                                                                                    data-dismiss="modal">Annuler</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Enregistrer</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            @if($virement->valide==0)
                                                            <a href="/admin/valider-virement/{{ $virement->id }}"
                                                                class="btn btn-dark m-r-2" style="margin-right: 10px;">valider</a>
                                                            @endif
                                                            <a href="/admin/delete-virement/{{ $virement->id }}"
                                                                class="btn btn-danger">Rejeter</a>
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
                                            <div class="d-flex h-100 flex-column justify-content-center align-items-center">
                                                <a href="#" class="text-primary "><i class="mdi mdi-account-plus"
                                                        style="font-size: 100px"></i></a>
                                                <p class="text-center mt-2 font-weight">
                                                    Aucun virements trouvés
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
