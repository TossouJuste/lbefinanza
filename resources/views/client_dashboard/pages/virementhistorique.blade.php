@extends('client_dashboard.components.app')
@section('page_titre')
    Mes transations
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Mes transations</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 font-weight-bold">Solde</p>
                                <h2 class="m-b-0">
                                    <span class="text-primary"> {{ Auth::user()->devise }} {{ Auth::user()->solde }} </span>
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
                                <p class="m-b-0">Numero de compte</p>
                                <h2 class="m-b-0">
                                    <span class="text-success">{{ Auth::user()->numero_compte }}</span>
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
                                <p class="m-b-0">Numero IBAN</p>
                                <h2 class="m-b-0">
                                    <span>
                                        @if (Auth::user()->iban != null)
                                            {{ Auth::user()->iban }}
                                        @else
                                            <p style="font-size: 12px; color:red; " >Mentionné lors du virements</p>
                                        @endif
                                    </span>
                                </h2>
                            </div>
                            <div class="avatar avatar-icon avatar-lg avatar-gold">
                                <i class="anticon anticon-bar-chart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Mes Transactions</h5>
                        </div>
                        @if (Auth::user()->transations()->get()->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id_transation</th>
                                                <th>Banque</th>
                                                <th>Motif</th>
                                                <th>Montant</th>
                                                <th>Date et heure</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Auth::user()->transations()->get() as $transation)
                                            <tr>
                                                <td>{{$transation->id}}</td>
                                                <td>{{$transation->nom_banque}}</td>
                                                <td>{{$transation->motif}}</td>
                                                <td>{{$transation->montant}}</td>
                                                <td>{{$transation->date_heure}}</td>

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
                                                    Aucune transation trouvée
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
