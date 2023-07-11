<?php
session_start();
include('database.php');
include('security_admin.php');

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

    <title>Dashboard - Clients |Brink Finance</title>

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
          
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Mes</span> Clients
              </h4>

              <div class="row">
                <div class="col-md-12">
                 
                  <div class="card">
                    <!-- Notifications -->
                    <h5 class="card-header">Clients</h5>
                    
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless border-bottom">
                        <thead>
                          <tr>
                            <th class="text-nowrap text-center">Numero de compte</th>
                            <th class="text-nowrap text-center">Nom</th>
                            <th class="text-nowrap text-center">Prenom</th>
                            <th class="text-nowrap text-center">Email</th>
                            <th class="text-nowrap text-center">Telephone</th>
                            <th class="text-nowrap text-center">civilite</th>
                            <th class="text-nowrap text-center">Pays</th>
                            <th class="text-nowrap text-center">Adresse</th>
                            <th class="text-nowrap text-center">Ville</th>
                            <th class="text-nowrap text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                    $clients=$db->prepare('SELECT * FROM clients WHERE valide=?');
                    $clients->execute([1]);
                    $nclient=$clients->rowCount();
                    if($nclient>0){
                        while($client=$clients->fetch()){
                            ?>
                              <tr>
                            <td class="text-center"><?=$client['id_client'] ?></td>
                            <td class="text-center"><?=$client['nom'] ?></td>
                            <td class="text-center"><?=$client['prenom'] ?></td>
                            <td class="text-center"><?=$client['email'] ?></td>
                            <td class="text-center"><?=$client['telephone'] ?></td>
                            <td class="text-center"><?=$client['civilite'] ?></td>
                            <td class="text-center"><?=$client['pays'] ?></td>
                            <td class="text-center"><?=$client['adresse'] ?></td>
                            <td class="text-center"><?=$client['ville'] ?></td>
                            <td class="text-center">
                                <div class="d-flex">
                                    <a href="profil.php?id_client=<?=$client['id_client']  ?>" class="btn btn-primary">
                                        Profil
                                    </a>
                                </div>
                            </td>
                             </tr>
                            
                            <?php
                        }
                    }

                        ?>
                        </tbody>
                      </table>
                    </div>
                    
                    <!-- /Notifications -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  </div>
                
              </div>
            </footer>
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



