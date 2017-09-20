<!DOCTYPE html>
<?php
require('func.php');
echo "bom dia";
if(isset($_POST['bt2'])) {
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
$sql = "INSERT INTO coisa (id, ip)
VALUES (null, '$ip')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>
<html lang="en">

  <head>  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acer Watch</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body class="index" id="page-top">

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <img class="img-fluid" src="img/LogoWatchHD1.png" alt="" style="width:180; height:85px;">        
            <a class="navbar-brand" href="#page-top">AcerWatch</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#download">Télécharger</a>
                    </li>          
                    <li class="nav-item">
                        <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLScYh7aOcxREdGIMhqiwprNCF6NIOfXqed5qTm0Yd91Ad8Gtsg/viewform">Évaluation</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand navbar-brand-logo" href="indexEn.php">
                            <div class="logo">
                                <img src="img/eua.png">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand navbar-brand-logo" href="indexSpain.php">
                            <div class="logo">
                                <img src="img/spain.png">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand navbar-brand-logo" href="index.php">
                            <div class="logo">
                                <img src="img/br.png">
                            </div>
                        </a>
                    </li>                    
                </ul>
            </div>
        </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
         
          <img class="img-fluid" src="img/profile.png" alt="" style="width:256px; height:256px;">
        
       <! <div class="intro-text">
          <span class="name"><font size="5">AcerWatch</font></span>
          <hr class="star-light">
          <span class="skills"> <font size="5">Le programme Acer Watch, installé sur un ordinateur portable Acer, est un système d'acquisition et d'analyse des composants installés sur la machine (Audio, Batterie, Bluetooth, Carte mère, Clavier, Souris, HD, LAN, Wi-Fi, TouchScreen, USB et Moniteur externe) </font> </span>
        </div>
    </header>
    <!-- About Section -->
    <section class="success" id="download">
      <div class="container">
        <h2 class="text-center">Télécharger</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center " >
            <a id="bt1" href="http://lesc.ufc.br/winwatch/Acer.Watch-v1.5.53.1109-x86-Release.exe" class="btn btn-lg btn-outline-info ">
              <i class="fa fa-download"></i>
              Télécharger 32 bits
            </a>
          </div>           
        </div>
        
    <div class="row">
        <div class="col-md-4"> <a> </a></div>
        
        <div class="col-md-4 cmx-auto text-center">
            <a id="bt2" href="http://lesc.ufc.br/winwatch/Acer.Watch-v1.5.53.1109-x64-Release.exe" class="btn-default">
              <i class="fa fa-download"></i>
              Télécharger 64 bits
            </a>           
        </div>        
    </div>
                       
      </div>

        <script>
            var x = "User-agent header sent: " + navigator.userAgent;
            strArch1 = new String("32");
            strArch2 = new String("64");
            if(x.search(strArch2) !== -1){
               <!--document.getElementById("dust2").innerHTML  = 'Recomendável';-->
              <!--document.getElementById("dust").style.color = "blue";-->
              document.getElementById("bt2").className = "btn btn-lg btn-outline";
              document.getElementById("bt1").className = "btn btn-lg btn-outline-info";              
            }
            
            if(x.search(strArch1) !== -1){
              document.getElementById("bt1").className = "btn btn-lg btn-outline";
              document.getElementById("bt2").className = "btn btn-lg btn-outline-info";
            }            
        </script>
    </section>
    
    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
              <div  class="footer-col col-md-4">
              <h3>Support</h3>
              <p>0800 768 0098
                <br>Du lundi au dimanche de 8h à 22h, sauf jours fériés</p>
            </div>
            <div class="footer-col col-md-4">
                <h3>Serviços</h3>
                <p>D'autres outils et services d'assistance peuvent être consultés sur le site Web  
                    <a href="http://www.acer.com.br">d'Acer</a>.</p>
            </div>
            <div class="footer-col col-md-4">
                <h3>À propos d'ACER</h3>
                <p> <a href="https://www.acer-group.com/ag/en/TW/content/ir-overview">Relations avec les investisseurs</a></p>
                <p> <a href="https://www.acer.com/ac/pt/BR/content/press">Communiqués de presse</a></p>
                <p> <a href="http://www.acer-group.com/public/Sustainability/approach/overview.htm">Responsabilité sociale des entreprises</a></p>
                <p> <a href="https://www.acer.com/ac/pt/BR/content/awards">Prix</a></p>           

            </div> 
              
          </div>
        </div>
      </div>
    </footer> 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
