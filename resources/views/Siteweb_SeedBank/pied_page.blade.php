<!-- Footer Start -->
<div
class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
>
<div class="row pt-5">
  <div class="col-lg-3 col-md-6 mb-5">
    <a
      href=""
      class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
      style="font-size: 40px; line-height: 40px"
    >
      <i class="flaticon-043-teddy-bear"></i>
      <span class="text-white">Seed Finance</span>
    </a>
    <p>
      Seed Finance offre un service de crédit accessible à
       tous garantissant une qualité de service exceptionnelle.
    </p>
    
  </div>
  <div class="col-lg-3 col-md-6 mb-5">
    <h3 class="text-primary mb-4">Get In Touch</h3>
    <div class="d-flex">
      <h4 class="fa fa-map-marker-alt text-primary"></h4>
      <div class="pl-3">
        <h5 class="text-white">Address</h5>
        <p>123 Street, New York, USA</p>
      </div>
    </div>
    <div class="d-flex">
      <h4 class="fa fa-envelope text-primary"></h4>
      <div class="pl-3">
        <h5 class="text-white">Email</h5>
        <p>contact@seedfinance.com</p>
      </div>
    </div>
    <div class="d-flex">
      <h4 class="fa fa-phone-alt text-primary"></h4>
      <div class="pl-3">
        <h5 class="text-white">Telephone</h5>
        <p>+33 757 824 762</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-5">
    <h3 class="text-primary mb-4">Quick Links</h3>
    <div class="d-flex flex-column justify-content-start">
      <a class="text-white mb-2" href="{{route('Page_principal')}}"
        ><i class="fa fa-angle-right mr-2"></i>Accueil</a
      >
      <a class="text-white mb-2" href="{{route('Page_about')}}"
        ><i class="fa fa-angle-right mr-2"></i>A propos</a
      >
      <a class="text-white mb-2" href="{{route('Page_loan')}}"
        ><i class="fa fa-angle-right mr-2"></i>Prêt</a
      >
      <a class="text-white mb-2" href="{{route('Page_carte')}}"
        ><i class="fa fa-angle-right mr-2"></i>Carte</a
      >
      <a class="text-white mb-2" href="{{route('auth.register.view')}}"
        ><i class="fa fa-angle-right mr-2"></i>Compte</a
      >
      <a class="text-white" href="{{route('Page_contact')}}"
        ><i class="fa fa-angle-right mr-2"></i>Contact </a
      >
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-5">
    <h3 class="text-primary mb-4">Newsletter</h3>
    <form action="">
      <div class="form-group">
        <input
          type="text"
          class="form-control border-0 py-4"
          placeholder="Votre Nom"
          required="required"
        />
      </div>
      <div class="form-group">
        <input
          type="email"
          class="form-control border-0 py-4"
          placeholder="Votre Email"
          required="required"
        />
      </div>
      <div>
        <button
          class="btn btn-primary btn-block border-0 py-3 rounded"
          type="submit"
        >
          Envoyer maintenant
        </button>
      </div>
    </form>
  </div>
</div>
<div
  class="container-fluid pt-5"
  style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
>
  <p class="m-0 text-center text-white">
    &copy;
    <a class="text-primary font-weight-bold" href="/">Seed Finance</a>.
    All Rights Reserved.

  </p>
</div>
</div>
<style>
.goc{display:none;}
       
@media (max-width:600px) {
     .goc{
            position:fixed;
            bottom:0;
            height: 70px;
            width:100%;
            background:white;
            display:flex;
            flex-direction:row;
            justify-content:space-around;
            align-items:center;
            text-align:center;

        }
   .goc a{
            padding:10px;
            border-radius:10px;
            font-family:'roboto';
            border:1px solid white;


        }
        .t1{
            background:#ed922c;
            color:white;
           
            
        }
        .t2{
            background: #4cb7e5;
            color:white;
            margin-right:10px;
        }
            
}
    </style>
    <div class="goc d-block d-md-none">
        <a class="t1 btn" href="/register">Ouvrir un compte</a>
        <a class="t2 btn" href="/login">mon compte</a>
    </div>
<!-- Footer End -->