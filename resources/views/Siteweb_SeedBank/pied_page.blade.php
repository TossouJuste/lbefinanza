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
    <div class="d-flex justify-content-start mt-4">
      <a
        class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
        style="width: 38px; height: 38px"
        href=""
        ><i class="fab fa-twitter"></i
      ></a>
      <a
        class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
        style="width: 38px; height: 38px"
        href=""
        ><i class="fab fa-facebook-f"></i
      ></a>
      <a
        class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
        style="width: 38px; height: 38px"
        href=""
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <a
        class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
        style="width: 38px; height: 38px"
        href=""
        ><i class="fab fa-instagram"></i
      ></a>
    </div>
  
    
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
        <p>contact@seedgroup-finance.com</p>
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
      <a class="text-white mb-2" href="/contact"
        ><i class="fa fa-angle-right mr-2"></i>Contact</a
      >
      <a class="text-white" href="{{route('implantation')}}"
        ><i class="fa fa-angle-right mr-2"></i>Nos implantations </a
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
    <div class="goc d-block d-md-none text center justify-content-between">
        <a class="t1 btn" href="/register">Ouvrir un compte</a>
        <a class="t2 btn" href="/login">mon compte</a>
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
<!-- Footer End -->
