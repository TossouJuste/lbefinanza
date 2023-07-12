@extends('admin_dashbord.components.app')
@section('page_titre')
Mon compte
@endsection
@section('page_container')
             
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Liste des demandes de prise de contact</h2>
            
        </div>

        <div class="container-fluid pt-3 ">
            <div class="container">

                <div class="row">
                    @foreach ($donnee as $donnees )

                        <div class="col-md-6 col-lg-3 text-start team mb-5 ml-2 border-0 shadow-sm "
                        style="background-color: white;">
                            @if (strlen($donnees->nom)>0)

                            <p class="mb-1 mt-2"> <span class="text-primary"> Formulaire Contact</p>
                            <p> Nom : {{ $donnees->nom}}</p>
                            @endif

                            @if (strlen($donnees->email)>0)

                            <p> Email: {{ $donnees->email}}</p>
                            @endif

                            @if (strlen($donnees->subject)>0)

                            <p> Sujet: {{ $donnees->subject}}</p>
                            @endif

                            @if (strlen($donnees->nom_message)>0)

                            <p> Message: {{ $donnees->message}}</p>
                            @endif

                            <a href=" {{ route('vue_contact',$donnees->id)}} " class="btn btn-primary px-4 rounded mb-3" >Vue</a>

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