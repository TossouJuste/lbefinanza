@extends('client_dashboard.components.app')
@section('page_titre')
    Il Mio Account
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Il Mio Account</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 font-weight-bold">Saldo</p>
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
                                <p class="m-b-0 font-weight-bold">Numero di Conto</p>
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
                                <p class="m-b-0 font-weight-bold">Numero IBAN</p>
                                <h2 class="m-b-0">
                                    <span>
                                        @if(Auth::user()->iban!=null)
                                    
                                        {{ Auth::user()->iban }}
                                        @else
                                            <p style="font-size: 12px; color:red; " >Menzionato durante il bonifico</p>
                                        @endif
                                    </span>
                                </h2>
                            </div>
                            <div class="avatar avatar-icon avatar-lg avatar-gold">
                                <i class="anticon anticon-bar-chart "></i>
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
                                <p class="m-b-0 font-weight-bold">Codice BIC</p>
                                <h2 class="m-b-0">
                                    <span>{{ Auth::user()->code_bic }}</span>
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
                                <p class="m-b-0 font-weight-bold">Codice Sportello</p>
                                <h2 class="m-b-0">
                                    <span>{{ Auth::user()->code_guichet }}</span>
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
                                <p class="m-b-0 font-weight-bold">Codice Banca</p>
                                <h2 class="m-b-0">
                                    <span>{{ Auth::user()->code_banque }}</span>
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
        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->

    <!-- Footer END -->
@endsection
