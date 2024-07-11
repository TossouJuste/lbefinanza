@extends('client_dashboard.components.app')
@section('page_titre')
le mie transazioni
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">I miei bonifici</h2>
        </div>

 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                           
                        </div>
                        @if (Auth::user()->virements()->get()->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>Paese</th>
                                                <th>Nome Banca</th>
                                                <th>Iban</th>
                                                <th>BIC</th>
                                                <th>Titolo dell'account</th>
                                                <th>Importo</th>
                                                <th>Dattero</th>
                                                <th>Stato</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Auth::user()->virements()->get() as $virement)
                                                <tr>
                                                    <td>{{ $virement->pays }}</td>
                                                    <td>{{ $virement->banque }}</td>
                                                    <td>{{ $virement->iban }}</td>
                                                    <td>{{ $virement->bic }}</td>
                                                    <td>{{ $virement->intitule_compte }}</td>
                                                    <td>{{ $virement->montant }} {{ Auth::user()->devise }} </td>
                                                    <td>{{ $virement->created_at }}</td>
                                                    <td>
                                                        @if ($virement->valide)
                                                        <span class="badge badge-success"> Successo</span>
                                                        @else
                                                        <span class="badge badge-warning">In corso</span>
                                                            
                                                        @endif
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
                                                Nessun bonifico trovato
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
