@extends('client_dashboard.components.app')
@section('page_titre')
    Mon compte
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Mon compte</h2>
        </div>
        <div class="page-header no-gutters">
            <div class="d-md-flex align-items-md-center justify-content-between">
                <div class="media m-v-10 align-items-center">
                    <div class="avatar avatar-image avatar-lg">
                        <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <div class="media-body m-l-15">
                        <h4 class="m-b-0">Bienvenue, {{ Auth::user()->nom }} !</h4>
                        <span class="text-gray">Espace client</span>
                    </div>
                </div>
                <div class="d-md-flex align-items-center d-none">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0">Solde</p>
                                <h2 class="m-b-0">
                                    <span> {{ Auth::user()->devise }} {{ Auth::user()->solde }} </span>
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
                                    <span>{{ Auth::user()->numero_compte }}</span>
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
                                        @if(Auth::user()->iban!=null)
                                    
                                        {{ Auth::user()->iban }}
                                        @else
                                            Non mentionné
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
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0">Code BIC</p>
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
                                <p class="m-b-0">Code Guichet</p>
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
                                <p class="m-b-0">Code Banque</p>
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
