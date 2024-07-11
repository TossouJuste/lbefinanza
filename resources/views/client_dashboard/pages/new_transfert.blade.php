@extends('client_dashboard.components.app')
@section('page_titre')
Effettua un bonifico su un altro conto LBE Finanza
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Trasferimento</h2>

        </div>
        

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h2 class="m-b-0 py-2">
                        Nuovo trasferimento
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <p class="text-center"> {{ session('success') }} </p>
                            </div>
                        @endif
                        <form method="post" action="/dashboard/depot">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="inputAddress">Numero di conto</label>
                                <input type="text" class="form-control" name="numero_compte" id="numero_compte"
                                    placeholder="12345678900">
                            </div>
                            <div class="form-group">
                                <label for="motif">Motivo</label>
                                <input type="text" class="form-control" name="motif" id="motif"
                                    placeholder="Pagamento">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Quantità</label>
                                <input type="number" class="form-control" name="montant" id="montant"
                                    placeholder="Quantità({{ Auth::user()->devise }}) meno di {{ Auth::user()->saldo }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Mandare</button>
                        </form>
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
