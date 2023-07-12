@extends('admin_dashbord.components.app')
@section('page_titre')
    Les transations
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Les transations</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Transations</h5>
                        </div>
                        @if ($transations->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>id_transation</th>
                                                <th>Nom de la banque</th>
                                                <th>client</th>
                                                <th>client_compte</th>
                                                <th>Motif</th>
                                                <th>Montant</th>
                                                <th>Date et heure</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transations as $transation)
                                            <tr>
                                                <td> {{$transation->id_transation_banque}}</td>
                                                <td>{{$transation->nom_banque}}</td>
                                                <td> {{$transation->user->nom}} {{$transation->user->prenom}} </td>
                                                <td> {{$transation->user->numero_compte}} </td>
                                                <td>{{$transation->motif}}</td>
                                                <td>{{$transation->montant}} {{$transation->user->devise}} </td>
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
