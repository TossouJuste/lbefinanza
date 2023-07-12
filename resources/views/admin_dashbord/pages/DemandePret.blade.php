@extends('admin_dashbord.components.app')

@section('page_titre')
Mon compte
@endsection
@section('page_container')
             
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Liste des demandes de prêt</h2>
            
        </div>

        <div class="container-fluid pt-3 ">
            <div class="container">

                <div class="row">
                    @foreach ($donnee as $donnees )

                        <div class="col-md-6 col-lg-3 text-start team mb-5 ml-2 border-0 shadow-sm "
                        style="background-color: white;">
                            @if (strlen($donnees->nom)>0)

                            <p class="mb-1 mt-2"> <span class="text-primary"> TYPE DE PRÊT:</span> {{$donnees->typepret}}</p>
                            <p> Nom client: {{ $donnees->nom}}</p>
                            @endif

                            @if (strlen($donnees->prenom)>0)

                            <p> Prenom client: {{ $donnees->prenom}}</p>
                            @endif

                            @if (strlen($donnees->email)>0)

                            <p> Email: {{ $donnees->email}}</p>
                            @endif

                            @if (strlen($donnees->telephone)>0)

                            <p> telephone: {{ $donnees->telephone}}</p>
                            @endif

                            @if (strlen($donnees->pays)>0)

                            <p> Pays: {{ $donnees->pays}}</p>
                            @endif

                            @if (strlen($donnees->adresse)>0)

                            <p> Adresse: {{ $donnees->adresse}}</p>
                            @endif

                            @if (strlen($donnees->ville)>0)

                            <p> Ville: {{ $donnees->ville}}</p>
                            @endif

                            @if (strlen($donnees->duree)>0)

                            <p> Duree du prêt: {{ $donnees->duree}} ans </p>
                            @endif

                            @if (strlen($donnees->duree)>0)

                            <p> Montant du prêt: {{ $donnees->montant}}</p>
                            @endif

                            @if (strlen($donnees->statut)>0)

                            <p> Statut: {{ $donnees->statut}}</p>
                            @endif

                            @if (strlen($donnees->raison)>0)

                            <p> Raison de demande: {{ $donnees->raison}}</p>
                            @endif

                            @if (strlen($donnees->secteur)>0)

                            <p> Secteur: {{ $donnees->secteur}}</p>
                            @endif

                            @if (strlen($donnees->description)>0)

                            <p> Description: {{ $donnees->description}}</p>
                            @endif

                            @if (strlen($donnees->chiffreAffaires)>0)

                            <p> Chiffre D'affaires: {{ $donnees->chiffreAffaires}}</p>
                            @endif

                            @if (strlen($donnees->propriete)>0)

                            <p> Propriete: {{ $donnees->propriete}}</p>
                            @endif

                            @if (strlen($donnees->montantDette)>0)

                            <p> Montant Dette: {{ $donnees->montantDette}}</p>
                            @endif

                            @if (strlen($donnees->creanciers)>0)

                            <p> Creanciers: {{ $donnees->creanciers}}</p>
                            @endif

                            @if (strlen($donnees->mensualiteActuelle)>0)

                            <p> Mensualite Actuelle: {{ $donnees->mensualiteActuelle}}</p>
                            @endif

                            @if (strlen($donnees->marquee)>0)

                            <p> Marque voiture: {{ $donnees->marque}}</p>
                            @endif

                            @if (strlen($donnees->modele)>0)

                            <p> Modele voiture: {{ $donnees->modele}}</p>
                            @endif

                            @if (strlen($donnees->annee)>0)

                            <p> Annee voiture: {{ $donnees->annee}}</p>
                            @endif

                            @if (strlen($donnees->dureeVoyage)>0)

                            <p> Duree Voyage: {{ $donnees->dureeVoyage}}</p>
                            @endif

                            @if (strlen($donnees->dateDepart)>0)

                            <p> Date Depart: {{ $donnees->dateDepart}}</p>
                            @endif

                            @if (strlen($donnees->destination)>0)

                            <p> Destination: {{ $donnees->destination}}</p>
                            @endif

                            @if (strlen($donnees->lieuNaissance)>0)

                            <p> Lieu de Naissance: {{ $donnees->lieuNaissance}}</p>
                            @endif

                            @if (strlen($donnees->dateNaissance)>0)

                            <p> Date de Naissance: {{ $donnees->dateNaissance}}</p>
                            @endif

                            
                            @if (strlen($donnees->nom_conjointe)>0)

                            <p> Nom conjointe: {{ $donnees->nom_conjointe}}</p>
                            @endif

                            @if (strlen($donnees->prenom_conjointe)>0)

                            <p> Prenom conjointe: {{ $donnees->prenom_conjointe}}</p>
                            @endif

                            @if (strlen($donnees->nom_conjointe)>0)

                            <p> Nom conjoint: {{ $donnees->nom_conjoint}}</p>
                            @endif

                            @if (strlen($donnees->prenom_conjointe)>0)

                            <p> Prenom conjoint: {{ $donnees->prenom_conjoint}}</p>
                            @endif







                            <a href=" {{ route('vue',$donnees->id)}} " class="btn btn-primary px-4 rounded mb-3" >Vue</a>

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