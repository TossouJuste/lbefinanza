@extends('client_dashboard.components.app')
@section('page_titre')
Dashboard
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
                    <h4 class="m-b-0">Benvenuto, {{ Auth::user()->nom }} !</h4>
                    <span class="text-gray">Area cliente</span>
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
                            <p class="m-b-0 text-muted">Saldo</p>
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
                            <p class="m-b-0 text-muted">Transazioni</p>
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
                            <p class="m-b-0 text-muted">Depositi</p>
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
                            <p class="m-b-0 text-muted">Bonifici</p>
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
                        <h5>Entrate Totali</h5>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-default active">
                                    <span>Mese</span>
                                </button>
                                <button class="btn btn-default">
                                    <span>Anno</span>
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
                    <h5 class="m-b-0">Clienti</h5>
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
                                        <p class="m-b-0 muted">Nuovi</p>
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
                                        <p class="m-b-0 muted">Ritorno</p>
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
                                        <p class="m-b-0 muted">Altro</p>
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
