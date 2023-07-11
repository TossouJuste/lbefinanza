@extends('client_dashboard.components.app')
@section('page_titre')
    Effectuer un transfert vers un autre compte seedBank
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Transfert</h2>

        </div>
        <div class="page-header no-gutters">
            <div class="d-md-flex align-items-md-center justify-content-between">
                <div class="media m-v-10 align-items-center">
                    <div class="avatar avatar-image avatar-lg">
                        <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <div class="media-body m-l-15">
                        <h4 class="m-b-0">Bienvenue, {{ Auth::user()->nom }}!</h4>
                        <span class="text-gray">Espace client</span>
                    </div>
                </div>
                <div class="d-md-flex align-items-center d-none">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h2 class="m-b-0 py-2">
                            Nouveau transfert
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
                                <label for="inputAddress">Numero de compte</label>
                                <input type="text" class="form-control" name="numero_compte" id="numero_compte"
                                    placeholder="12345678900">
                            </div>
                            <div class="form-group">
                                <label for="motif">Motif</label>
                                <input type="text" class="form-control" name="motif" id="motif"
                                    placeholder="Paiement">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Montant</label>
                                <input type="number" class="form-control" name="montant" id="montant"
                                    placeholder="Montant({{ Auth::user()->devise }}) inferieur à {{ Auth::user()->solde }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
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
