<?php
session_start();
require('security_client.php');
require('database.php');
if(isset($_POST['valid'])){
    if(isset($_POST['numero_compte'],$_POST['montant'],$_POST['motif']) AND !empty(trim($_POST['montant'])) AND !empty(trim($_POST['motif'])) AND !empty(trim($_POST['numero_compte']))  AND $_POST['montant']>0){
      $montant=htmlspecialchars($_POST['montant']);
      $motif=htmlspecialchars($_POST['motif']);
      $numero_compte=htmlspecialchars($_POST['numero_compte']);
       //existence du compte
      $comptes=$db->prepare('SELECT * FROM clients WHERE numero_compte=?');
      $comptes->execute([$numero_compte]);
      $exist_compte=$comptes->rowCount();
      if($exist_compte>0){
        $client=$db->prepare('SELECT * FROM clients WHERE id_client=? ');
        $client->execute([$_SESSION['id_client']]);
        $compte=$comptes->fetch();
        $client_info=$client->fetch();
        if($client_info['solde']>$montant){
            if($client_info['numero_compte']!=$compte['numero_compte'] ){
                $transation=$db->prepare('INSERT INTO depot(numero_compte,id_client,motif,montant,createdAt) VALUES(?,?,?,?,CURDATE() )');
                $transation->execute([ $numero_compte,$_SESSION['id_client'],$motif,$montant]);        
          //ajouter au compte
                $client_new=$db->prepare('UPDATE clients SET solde = ? WHERE numero_compte=?');
          $client_new->execute([$compte['solde']+$montant , $numero_compte]);
          //debit
          $client_depot=$db->prepare('UPDATE clients SET solde = ? WHERE id_client=?');
          $client_depot->execute([$client_info['solde']-$montant , $_SESSION['id_client'] ]);
          //fin debit
          $success='Operation effectuée avec success';
            }else{
                $error="Vous tentez d'envoyer de l'argent à vous même! ";
            }
        }else{
            $error="Solde insufisant";
        }
       
      }else{
        $error="Utilisateur n'existe pas ";
      }
       //existence duc cpompte
      
    }else{
      $error=" Veuillez verifier le montant entré (superieur)";
    }
  }
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Virements |Brink Finance</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <script src="assets/vendor/js/helpers.js"></script>
<script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include('components/aside.php');  ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include('components/nav.php');  ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Bienvenu(e) <?=$user_nav_info['prenom']?> <?=$user_nav_info['nom']?></h5>
                          <p class="mb-4">
                            <h1 class="h4">Espace Client |<?php echo date('d m Y');   ?> | <span id="hour_brink"></span>  </h1>
                          </p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<form action="" method="post">
    
<div class="card my-4 my-3">
                    <h5 class="card-header">Transfert</h5>
                    <div class="card-body">
                    <?php  
                    if(isset($error)){
                        ?>
                        <div
                        class="bs-toast toast fade show bg-danger"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Error</div>
                          
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                      <?=$error ?>    
                    </div>
                      </div>
                        <?php
                    }
                    
                    ?>
                    <?php  
                    if(isset($success)){
                        ?>
                        <div
                        class="bs-toast toast fade show bg-success"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Success</div>
                          
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                      <?=$success?>    
                    </div>
                      </div>
                        <?php
                    }
                    ?>
<!-- deuxieme -->   
    
<div class="container">
<div class="row">
                                  <div class="col mb-3">
                                    <label for="numero_compte" class="form-label">Numero de compte du destinataire</label>
                                    <input
                              class="form-control"
                              type="text"
                              id="numero_compte"
                              name="numero_compte"
                              placeholder="000000000"
                              required
                            />
                           </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="motif" class="form-label">Motif</label>
                                    <input
                              class="form-control"
                              type="text"
                              id="motif"
                              name="motif"
                              placeholder="Motif"
                              required
                            />
                           </div>
                                </div>



                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="montant" class="form-label">Montant</label>
                                    <input
                              class="form-control"
                              type="text"
                              id="montant"
                              name="montant"
                              placeholder="Montant(en <?=$user_nav_info['devise'] ?> )"
                              required
                            />
                           </div>
                                </div>
                                <div class="my-3" >
                                    <button class="btn btn-primary" name="valid">valider</button>
                                </div>
                              </div>
                              
                              <!-- fcghvgvhg -->
                     
                    </div>
                  </div>
</form>
            </div>
            <!-- / Content -->
            <!-- Footer -->
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <div style="position:fixed;bottom:4px;right:5%;z-index:999999;" id="gtranslate_wrapper"><!-- GTranslate: https://gtranslate.io/ --></div>
<br /><style type="text/css">
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'fr',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
</script>
<script>jQuery(document).ready(function() {var allowed_languages = ["en","fr","de","it","pt","es","af","sq","am","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","eo","et","tl","fi","fy","gl","ka","el","gu","ht","ha","haw","iw","hi","hmn","hu","is","ig","id","ga","ja","jw","kn","kk","km","ko","ku","ky","lo","la","lv","lt","lb","mk","mg","ms","ml","mt","mi","mr","mn","my","ne","no","ps","fa","pl","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","so","su","sw","sv","tg","ta","te","th","tr","uk","ur","uz","vi","cy","xh","yi","yo","zu"];var accept_language = navigator.language.toLowerCase() || navigator.userLanguage.toLowerCase();switch(accept_language) {case 'zh-cn': var preferred_language = 'zh-CN'; break;case 'zh': var preferred_language = 'zh-CN'; break;case 'zh-tw': var preferred_language = 'zh-TW'; break;case 'zh-hk': var preferred_language = 'zh-TW'; break;default: var preferred_language = accept_language.substr(0, 2); break;}if(preferred_language != 'fr' && GTranslateGetCurrentLang() == null && document.cookie.match('gt_auto_switch') == null && allowed_languages.indexOf(preferred_language) >= 0){doGTranslate('fr|'+preferred_language);document.cookie = 'gt_auto_switch=1; expires=Thu, 05 Dec 2030 08:08:08 UTC; path=/;';}});</script>


    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
