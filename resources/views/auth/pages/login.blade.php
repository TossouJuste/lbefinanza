<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>seed Finance login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">

    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
      </script>
      <script src="//translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    
</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column ">
                <div class="d-flex justify-content-between align-items-center p-h-40">
                    <a href="/"><img src="assets/images/logo/logo.png" alt=""></a>
                    <a href="javascript:void(0);" class="me-1" data-toggle="modal" data-target="#quick-view">
                        <i class="fas fa-language" style="font-size: 30px"></i>
                    </a>
                    
                </div>
                <div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <p class="text-center"> {{ session('success') }} </p>
                                        </div>
                                    @endif
                                    <h2 class="m-t-20">Connexion </h2>
                                    <p>Connectez vous a votre banque en ligne en un clin d'œil</p>
                                    <p class="m-b-30 text-primary">Entrez vos identifiants </p>
                                    <form method="post" action="{{ route('auth.login') }}">
                                        @csrf
                                        @method('post')
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
                                            <label class="font-weight-semibold" for="email">Email</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="">
                                                Mot de passe oublié ?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="Password">
                                                <i class="suffix-icon fa-ey toggle-password" onclick="togglePasswordVisibility()"><img src="site_web/img/lg/cacher.png" alt=""  class=""> </i>
                                                <i class="suffix-icon toggle fa-eye-slas" onclick="togglePasswordVisibility()"><img src="site_web/img/lg/oeil.png" alt="" class=""> </i>
                                                <style>

                                                  .toggle-password {
                                                  
                                                    cursor: pointer;
                                                  }
                                                  .fa-ey
                                                  {
                                                    display: block;

                                                  }
                                                  .fa-eye-slas
                                                  {
                                                    display: none;
                                                  }
                                                </style> 
                                                <script>
                                                  function togglePasswordVisibility() {
                                                    const passwordInput = document.getElementById('password');
                                                    const toggleIcon = document.querySelector('.toggle-password');
                                                    const toggleIcons = document.querySelector('.toggle');
                                                    if (passwordInput.type === 'password') {
                                                      passwordInput.type = 'text';
                                                      toggleIcon.classList.remove('fa-ey');
                                                      toggleIcon.classList.add('fa-eye-slas');
                                                      toggleIcons.classList.remove('fa-eye-slas');
                                                      toggleIcons.classList.add('fa-ey');
                                                     
                                                    }
                                                     else {
                                                      passwordInput.type = 'password';
                                                      toggleIcons.classList.remove('fa-ey');
                                                      toggleIcons.classList.add('fa-eye-slas');
                                                      
                                                      toggleIcon.classList.remove('fa-eye-slas');
                                                      toggleIcon.classList.add('fa-ey');
                                                    }
                                                  }

                                                </script> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <span class="font-size-13 text-muted">
                                                    Vous n'avez pas de compte ?
                                                    <a class="small" href="{{ route('auth.register.view') }}">
                                                        Inscrivez-vous</a>
                                                </span>
                                                <button type="submit" class="btn btn-primary">Connectez-vous</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="assets/images/others/login-2.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('client_dashboard.components.modals')

    <div id="google_translate_element2"></div>
    <script type="text/javascript">
      function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
          pageLanguage: 'fr',
          autoDisplay: false
        }, 'google_translate_element2');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  
  
    <script type="text/javascript">
      function GTranslateGetCurrentLang() {
        var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
        return keyValue ? keyValue[2].split('/')[2] : null;
      }
  
      function GTranslateFireEvent(element, event) {
        try {
          if (document.createEventObject) {
            var evt = document.createEventObject();
            element.fireEvent('on' + event, evt)
          } else {
            var evt = document.createEvent('HTMLEvents');
            evt.initEvent(event, true, true);
            element.dispatchEvent(evt)
          }
        } catch (e) {}
      }
  
      function doGTranslate(lang_pair) {
        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair == '') return;
        var lang = lang_pair.split('|')[1];
        if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
        var teCombo;
        var sel = document.getElementsByTagName('select');
        for (var i = 0; i < sel.length; i++)
          if (/goog-te-combo/.test(sel[i].className)) {
            teCombo = sel[i];
            break;
          } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
          setTimeout(function() {
            doGTranslate(lang_pair)
          }, 500)
        } else {
          teCombo.value = lang;
          GTranslateFireEvent(teCombo, 'change');
          GTranslateFireEvent(teCombo, 'change')
        }
      }
    </script>
    <script>
      jQuery(document).ready(function() {
        var allowed_languages = ["en", "fr", "de", "it", "pt", "es", "af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "ny", "zh-CN", "zh-TW", "co", "hr", "cs", "da", "nl", "eo", "et", "tl", "fi", "fy", "gl", "ka", "el", "gu", "ht", "ha", "haw", "iw", "hi", "hmn", "hu", "is", "ig", "id", "ga", "ja", "jw", "kn", "kk", "km", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "ps", "fa", "pl", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "su", "sw", "sv", "tg", "ta", "te", "th", "tr", "uk", "ur", "uz", "vi", "cy", "xh", "yi", "yo", "zu"];
        var accept_language = navigator.language.toLowerCase() || navigator.userLanguage.toLowerCase();
        switch (accept_language) {
          case 'zh-cn':
            var preferred_language = 'zh-CN';
            break;
          case 'zh':
            var preferred_language = 'zh-CN';
            break;
          case 'zh-tw':
            var preferred_language = 'zh-TW';
            break;
          case 'zh-hk':
            var preferred_language = 'zh-TW';
            break;
          default:
            var preferred_language = accept_language.substr(0, 2);
            break;
        }
        if (preferred_language != 'fr' && GTranslateGetCurrentLang() == null && document.cookie.match('gt_auto_switch') == null && allowed_languages.indexOf(preferred_language) >= 0) {
          doGTranslate('fr|' + preferred_language);
          document.cookie = 'gt_auto_switch=1; expires=Thu, 05 Dec 2030 08:08:08 UTC; path=/;';
        }
      });
    </script>
    <!-- Core Vendors JS -->
    <script src="/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>
