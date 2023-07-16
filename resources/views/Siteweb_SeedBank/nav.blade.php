<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
      <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 30px"
      >
      <img src="site_web/img/logo.png" alt="" class="d-none d-md-flex d-sm-flex"  >
     
      <img src="site_web/img/logo1.png" alt="logo" class=" d-md-none d-sm-none"  >
      </a>
      
      <button
        type="button"
        class="navbar-toggler "
        data-toggle="collapse"
        data-target="#navbarCollapse"
        style="width:30px;height:25px;" 
      >
        <span class="navbar-toggler-icon"    ></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="{{ route('Page_principal')}}" class="nav-item nav-link active">Accueil</a>
          <div class="nav-item dropdown">
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              >Nos Services</a
            >
            <div class="dropdown-menu rounded-0 m-0">
              <a href=" {{ route('auth.register.view')}} " class="dropdown-item">Overture compte</a>
              <a href=" {{ route('Page_donation')}} " class="dropdown-item">Donation</a>
              <a href=" {{ route('Page_loan')}} " class="dropdown-item">Prêt</a>
             
             
              <a href=" {{ route('Page_investmentPlanning')}} " class="dropdown-item">Planification d'investissement</a>
            </div>
          </div>
          
          
          <a href="{{ route('Page_carte')}}" class="nav-item nav-link">Cartes</a>
          <a href="{{ route('Page_about') }}" class="nav-item nav-link">A propos</a>
          <a href="{{ route('Page_contact') }}" class="nav-item nav-link">Contact</a>
          <a href="gallery.html" class="nav-item nav-link">Langue</a>
         
          
        </div>
        <a href="{{ route('auth.register.view')}}" class="btn btn-primary px-4 mr-2 rounded">Devenir client</a>
        <a href=" {{ route('login')}} " class="btn btn-primary px-4 rounded">Connexion</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->