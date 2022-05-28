<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----- CSS ------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <!------Ico ------>
    <link rel="shorcut icon" type="image/x-icon" href="assets/logo.jpg">
    <!----- Fuente 1 ------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100;300&display=swap" rel="stylesheet"> 
    <!------ Fuente 2 ----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Open+Sans&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <!-----  Fuente 3 ------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">  
    <!---- Animaciones ---->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"ß/>
    <title>NicoyaLex │ Acerca de</title>
</head>
<body>
    <!------- Header ------>
    <header class="header">
      <div class="header_color">
        <span class="menu__">
          <button id="menu-icon" class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
      </button></span>
      </div>
        <div class="container logo-nav-container">
            <div class="header_logo">
                <img class="logo" src="img/logo.png" alt="NicoyaLex">
            </div>
        </div>
        <div class="header_raya"></div>
        <nav class="navigation">
            <ul class="show_">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="acercade.html">Acerca de</a></li>
                <li><a href="nuestro_equipo.html">Nuestro equipo</a></li>
                <li><a href="redit/contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <!------ Main ----->
    <main class="main">

      
    </main>
    
    


  <!---- Contactos ---->
  <div class="contacto_">
    <div>
      <p class="contacto_p">Contactenos</p>
    </div>
    <div>
      <p class="contacto_n"><span><img src="https://img.icons8.com/ios-filled/20/fa314a/google-maps-new.png"/></span>Nicoya, Guanacaste</p>
    </div>
    <div>
      <p class="contacto_r"><span><img src="https://img.icons8.com/ios-glyphs/20/fa314a/mail-contact.png"/></span> rquiros@nicoyalex.com</p>
    </div>
    <div>
      <p class="contacto_num"><span><img src="https://img.icons8.com/material-rounded/20/fa314a/phone-not-being-used.png"/></span>2685-5859</p>
    </div>
    <div>
      <a href="https://m.facebook.com/NicoyaLex-2065719336788628/"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/facebook.png"/></a>
    </div>
  </div>


  <!---- Mapa Ubicacion ----->
  <div id="map"></div>


    <!----- Footer del Sitio ----->
    <footer class="footer">
        <div class="container">
            <p class="derechos">&copy2021 NicoyaLex</p>
        </div>
    </footer>

    
    <!---- JS ---->
    <script>
      // Look for .hamburger
      var hamburger = document.querySelector(".hamburger");
      // On click
      hamburger.addEventListener("click", function() {
        // Toggle class "is-active"
        hamburger.classList.toggle("is-active");
        // Do something else, like open/close menu
      });
    </script>

    <script src="js/mapas.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnInWAxY1G6X2NubLdlPofyPRzghF7EWA&callback=iniciarMap"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>