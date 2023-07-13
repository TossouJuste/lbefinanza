@extends('client_dashboard.components.app')
@section('page_titre')
Tableau de bord
@endsection
@section('page_container')
<div class="main-content">
    <div class="page-header no-gutters">
        <div class="d-md-flex align-items-md-center justify-content-between">
            <div class="media m-v-10 align-items-center">
                <div class="avatar avatar-image avatar-lg">
                    <img src="@if(Auth::user()->photo_profil=='default.png') /{{ Auth::user()->photo_profil}} @else {{Storage::url(Auth::user()->photo_profil)}} @endif "  alt="photo_profil">
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
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-dollar"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0"> {{Auth::user()->devise}} {{Auth::user()->solde}} </h2>
                            <p class="m-b-0 text-muted">Solde</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-line-chart"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">+ {{Auth::user()->transations()->get()->count()}} </h2>
                            <p class="m-b-0 text-muted">Transations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                            <i class="anticon anticon-profile"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">{{Auth::user()->depots()->get()->count()}}</h2>
                            <p class="m-b-0 text-muted">Depôts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                            <i class="anticon anticon-user"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">{{Auth::user()->virements()->get()->count()}}</h2>
                            <p class="m-b-0 text-muted">Virements</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Total Revenue</h5>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-default active">
                                    <span>Month</span>
                                </button>
                                <button class="btn btn-default">
                                    <span>Year</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-50" style="height: 330px">
                        <canvas class="chart" id="revenue-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="m-b-0">Clients</h5>
                    <div class="m-v-60 text-center" style="height: 200px">
                        <canvas class="chart" id="customers-chart"></canvas>
                    </div>
                    <div class="row border-top p-t-25">
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">
                                            @php
                                           rand(25000, 30000)
                                            @endphp</h4>
                                        <p class="m-b-0 muted">Nouveau</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">
                                          
                                        </h4>
                                        <p class="m-b-0 muted">Returning</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0"></h4>
                                        <p class="m-b-0 muted">Autres</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection