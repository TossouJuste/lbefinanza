<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LBE Finanza- @yield('page_titre')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <style>
        /* .active{
            background-color: coral;
        } */
    </style>
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('client_dashboard.components.nav')
                
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('client_dashboard.components.sidebar')
            
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
               @yield('page_container')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
            @include('client_dashboard.components.footer')
                
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
            @include('client_dashboard.components.modals')
           </div>
    </div>

    
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
    @yield('javascript')
    <script src="/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>