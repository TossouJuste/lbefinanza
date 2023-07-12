@extends('admin_dashbord.components.app')

@section('page_titre')
Mon compte
@endsection
@section('page_container')
             
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Liste des demandes de donation</h2>
            
        </div>

        <div class="container-fluid pt-3 ">
            <div class="container">

                <div class="row">
                    @foreach ($donnee as $donnees )

                        <div class="col-md-6 col-lg-3 text-start team mb-5 ml-2 border-0 shadow-sm "
                        style="background-color: white;">
                            @if (strlen($donnees->nom)>0)

                            <p class="mb-1 mt-2"> <span class="text-primary">Demande de don</p>
                            <p> Nom  {{ $donnees->nom}}</p>
                            @endif

                            @if (strlen($donnees->prenom)>0)

                            <p> Prenom : {{ $donnees->prenom}}</p>
                            @endif

                            @if (strlen($donnees->email)>0)

                            <p> Email: {{ $donnees->email}}</p>
                            @endif

                            @if (strlen($donnees->telephone)>0)

                            <p> telephone: {{ $donnees->telephone}}</p>
                            @endif

                            @if (strlen($donnees->type_don)>0)

                            <p> Type de Don: {{ $donnees->type_don}}</p>
                            @endif

                            




                            <a href=" {{ route('vue_donation',$donnees->id)}} " class="btn btn-primary px-4 rounded mb-3" >Vue</a>

                       </div>
                       

                    @endforeach
                </div>


            </div>
    </div>

        <!-- Content goes Here -->
    </div>

    
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    
    <!-- Footer END -->

@endsection