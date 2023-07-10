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
<div class="page-header no-gutters">
                        <div class="d-md-flex align-items-md-center justify-content-between">
                            <div class="media m-v-10 align-items-center">
                                <div class="avatar avatar-image avatar-lg">
                                    <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                                <div class="media-body m-l-15">
                                    <h4 class="m-b-0">Bienvenue, {{Auth::user()->nom}}!</h4>
                                    <span class="text-gray">Project Manager</span>
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
                                                <span>$14,966</span>
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
                                                <span>2012554549685298</span>
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
                                                <span>Pas mentionné</span>
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
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Customer</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#5331</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-image" style="height: 30px; width: 30px;">
                                                                        <img src="/assets/images/avatars/thumb-1.jpg" alt="">
                                                                    </div>
                                                                    <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>8 May 2019</td>
                                                        <td>$137.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-success badge-dot m-r-10"></span>
                                                                <span>Approved</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#5375</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-image" style="height: 30px; width: 30px;">
                                                                        <img src="/assets/images/avatars/thumb-2.jpg" alt="">
                                                                    </div>
                                                                    <h6 class="m-l-10 m-b-0">Darryl Day</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>6 May 2019</td>
                                                        <td>$322.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-success badge-dot m-r-10"></span>
                                                                <span>Approved</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#5762</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-image" style="height: 30px; width: 30px;">
                                                                        <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                                                                    </div>
                                                                    <h6 class="m-l-10 m-b-0">Marshall Nichols</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>1 May 2019</td>
                                                        <td>$543.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-success badge-dot m-r-10"></span>
                                                                <span>Approved</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#5865</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-image" style="height: 30px; width: 30px;">
                                                                        <img src="/assets/images/avatars/thumb-4.jpg" alt="">
                                                                    </div>
                                                                    <h6 class="m-l-10 m-b-0">Virgil Gonzales</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>28 April 2019</td>
                                                        <td>$876.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-primary badge-dot m-r-10"></span>
                                                                <span>Pending</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#5213</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-image" style="height: 30px; width: 30px;">
                                                                        <img src="/assets/images/avatars/thumb-5.jpg" alt="">
                                                                    </div>
                                                                    <h6 class="m-l-10 m-b-0">Nicole Wyne</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>28 April 2019</td>
                                                        <td>$241.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-success badge-dot m-r-10"></span>
                                                                <span>Approved</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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