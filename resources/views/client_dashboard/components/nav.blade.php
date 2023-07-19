
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
  <script src="//translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<div class="header">
    <div class="logo logo-dark">
        <a href="/">
            <img src="/assets/images/logo/logo.png" alt="Logo">
            <img class="logo-fold" src="/assets/images/logo/logo-fold.png" alt="Logo">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="/">
            <img src="/assets/images/logo/logo-white.png" alt="Logo">
            <img class="logo-fold" src="/assets/images/logo/logo-fold-white.png" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="logo-mobile">
                <a href="javascript:void(0);">
                    <img src="/site_web/img/logo1.png" alt="logo" class=" d-md-none d-sm-none"  >

                </a>
            </li>
           
        </ul>
        <ul class="nav-right">
            
            <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                    <div class="avatar avatar-image  m-h-10 m-r-15">
                        <img src="@if(Auth::user()->photo_profil=='default.png') /{{ Auth::user()->photo_profil}} @else {{Storage::url(Auth::user()->photo_profil)}} @endif "  alt="photo_profil">
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-50">
                            <div class="avatar avatar-lg avatar-image">
                                <img src="/assets/images/avatars/thumb-3.jpg" alt="">
                            </div>
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->nom}} {{ Auth::user()->prenom}} </p>
                                <p class="m-b-0 opacity-07">@ {{ Auth::user()->nom}}</p>
                            </div>
                        </div>
                    </div>
                    <a href="/dashboard/profil" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                <span class="m-l-10">Mon profil</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                    
                    
                    <a href="/logout" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Deconnexion</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" class="me-1" data-toggle="modal" data-target="#quick-view">
                    <i class="fas fa-language" style="font-size: 30px"></i>
                </a>
            </li>
        </ul>
    </div>
</div>