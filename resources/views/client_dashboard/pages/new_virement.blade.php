@extends('client_dashboard.components.app')
@section('page_titre')
Effectuer un virement vers votre compte bancaire
@endsection
@section('page_container')
             
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Virement</h2>
            
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
        <div class="col-md-12">
                            <div class="card">
                            
                                <div class="card-header">
                                <h2 class="m-b-0 py-2">
Nouveau virement
                                            </h2>
                                </div>
                                <div class="card-body">
                                    
                                    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <input id="gridCheck" type="checkbox">
            <label for="gridCheck">Check me out</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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