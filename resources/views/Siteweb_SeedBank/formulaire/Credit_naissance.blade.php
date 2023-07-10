<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Formulaire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="site_web/css/style.css" rel="stylesheet" />
    <head>
        <title>Formulaire de demande de Crédit Spécial Naissance</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
    
            form {
                width: 400px;
                margin: 0 auto;
            }
    
            h2 {
                margin-top: 20px;
            }
    
            label {
                display: block;
                margin-top: 10px;
            }
    
            input, select {
                width: 100%;
                padding: 5px;
                margin-top: 5px;
            }
    
            button {
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
            }
    
            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
         <!-- Navbar Start -->
    @include('Siteweb_SeedBank.nav')
    <!-- Navbar End -->
        <form>
            <h2>Informations personnelles</h2>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
    
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
    
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>
    
            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>
    
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
    
            <h2>Informations sur la naissance</h2>
            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required>
    
            <label for="lieuNaissance">Lieu de naissance :</label>
            <input type="text" id="lieuNaissance" name="lieuNaissance" required>
    
            <label for="poids">Poids à la naissance :</label>
            <input type="number" id="poids" name="poids" required>
    
            <h2>Informations sur la demande de crédit</h2>
            <label for="montantCredit">Montant du crédit :</label>
            <input type="number" id="montantCredit" name="montantCredit" required>
    
            <label for="motif">Motif du crédit :</label>
            <textarea id="motif" name="motif" required></textarea>
    
            <h2>Documents requis</h2>
            <label for="pieces">Pièces justificatives :</label>
            <input type="file" id="pieces" name="pieces" multiple required>
    
            <h2>Conditions générales</h2>
            <input type="checkbox" id="conditions" name="conditions" required>
            <label for="conditions">J'accepte les conditions générales du crédit spécial naissance</label>
    
            <button type="submit">Envoyer</button>
        </form>
 
    <!-- Footer Start -->
    @include('Siteweb_SeedBank.pied_page')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

