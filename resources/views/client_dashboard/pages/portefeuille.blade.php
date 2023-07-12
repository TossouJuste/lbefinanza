@extends('client_dashboard.components.app')
@section('page_titre')
    Gestionnaire Portefeuille
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="d-flex justify-content-between page-header align-items-center" style="height: 60px">
           <div class="">
            <h2 class="header-title mt-2" >Portefeuille</h2>
           </div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#retrait_modal">Retrait</button>
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
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0">Valeur Portefeuille</p>
                                <h2 class="m-b-0">
                                    <span> {{ Auth::user()->devise }} {{ Auth::user()->portefeuilles()->first()->solde_p }} </span>
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
                                    <span>{{ Auth::user()->portefeuilles()->first()->profit }}</span>
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
                                    <span>{{ Auth::user()->devise }} {{ Auth::user()->portefeuilles()->first()->revenu_p }}</span>
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
                                    <span>{{ Auth::user()->devise }} {{ Auth::user()->portefeuilles()->first()->benef}}</span>
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
                                    <span>{{ Auth::user()->devise }} {{ Auth::user()->portefeuilles()->first()->val_solde }}</span>
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
        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

                                                            <form method="post" action="/dashboard/portefeuille/retrait">
                                                                @csrf
                                                                <div class="modal " id="retrait_modal">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Rétrait
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
                                                                                <div class="row">
                                                                                    <div class="col mb-3">
                                                                                        <label for="numero_compte"
                                                                                            class="form-label">Numero de compte</label>
                                                                                        <input class="form-control"
                                                                                            type="text" id="montant"
                                                                                            name="numero_compte"
                                                                                            value="{{Auth::user()->numero_compte}}"
                                                                                            placeholder="Numero de compte"
                                                                                            required />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col mb-3">
                                                                                        <label for="montant"
                                                                                            class="form-label">Montant</label>
                                                                                        <input class="form-control"
                                                                                            type="number" id="montant"
                                                                                            name="montant"
                                                                                            placeholder="Montant(en {{Auth::user()->devise}} )"
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
    <!-- Footer START -->

    <!-- Footer END -->
@endsection
