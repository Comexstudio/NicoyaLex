<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!------ICO ------>
  <link rel="shorcut icon" type="image/x-icon" href="../assets/ico.jpg">
  <!----- CSS ------>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/master.css">
  <link rel="stylesheet" href="../css/hamburgers.css">
  <!----- GOOGLE FONTS ------>
  <title>NicoyaLex │ Contacto</title>
</head>
<body>
    <!-- ============ HEADER ============ -->
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
                <img class="logo" src="../assets/img/logo.png" alt="NicoyaLex">
            </div>
        </div>
        <div class="header_raya"></div>
        <nav class="navigation">
            <ul class="show_">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="acercade.html">Acerca de</a></li>
                <li><a href="nuestro_equipo.html">Nuestro equipo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <!-- ============ END HEADER ============ -->

    <!-- ============ CONTACT ============ -->
    <section class="page-section" id="contact">
      <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-lg-8 col-xl-6 text-center">
                  <h2 class="mt-0">¡Contáctanos!</h2>
                  <hr class="divider" />
                  <p class="text-muted mb-5">Llena nuestro formulario</p>
              </div>
          </div>
          <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
              <div class="col-lg-6">

                  <!-- ============ FORM ============ -->
                  <form data-sb-form-api-token="API_TOKEN" id="contactForm"  method="post" action="enviar.php" class="formulario">
                  <div class="form-floating mb-3">
                      <input  class="form-control" id="name" data-sb-validations="required" type="text" placeholder="Nombre" name="nombre" required>
                      <label for="name">Nombre Completo</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                  </div>
                  <div class="form-floating mb-3">
                      <input  class="form-control" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,email" name="email" required>
                      <!-- Opcional -->
                          <label for="email">Email</label>
                              <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido.</div>
                          <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido.</div>
                  </div>
                  <div class="form-floating mb-3">
                      <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" type="text" name="mensaje" required></textarea>
                      <!-- Opcional -->
                              <label for="message">Mensaje</label>
                          <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido</div>
                  </div>
                  <div class="btn-enviar">
                      <input class="boton" type="submit" value="Enviar">
                  </div>
                  </form>

              </div>
          </div>
      </div>
    </section>
    <!-- ============ END CONTACT ============ -->

    <!-- ============ LOCATION ============ -->
    <div id="map"></div>
    <!-- ============ END LOCATION ============ -->
  
    <!-- ============ CONTACT INFORMATION ============ -->
    <div class="contacto_">
        <div>
          <p class="contacto_p">Contactenos</p>
        </div>
        <div>
          <p class="contacto_n"><span><img src="https://img.icons8.com/ios-filled/20/fa314a/google-maps-new.png"/></span>Nicoya, Guanacaste</p>
        </div>
        <div class="contact__social">
          <p class="contacto_r"><span><img src="https://img.icons8.com/ios-glyphs/20/fa314a/mail-contact.png"/></span> <a target="_blank" href="mailto:rodolfoquiros@nicoyalex.com">rodolfoquiros@nicoyalex.com</a></p>
          <p class="contacto_r"><span><img src="https://img.icons8.com/ios-glyphs/20/fa314a/mail-contact.png"/></span> <a target="_blank" href="mailto:danielarosales@nicoyalex.com">danielarosales@nicoyalex.com</a></p>
        </div>
        <div>
          <p class="contacto_num"><span><img src="https://img.icons8.com/material-rounded/20/fa314a/phone-not-being-used.png"/></span><a  class="number-phone" href="tel:+50626855859">+50686632139</a></p>
        </div>
        <div>
          <a href="https://m.facebook.com/NicoyaLex-2065719336788628/"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/facebook.png"/></a>
        </div>
      </div>
    <!-- ============ END CONTACT INFORMATION ============ -->


    <!-- ============ FOOTER ============ -->
      <footer class="footer">
          <div class="container">
              <p class="derechos">&copy2021 NicoyaLex</p>
          </div>
      </footer>
    <!-- ============ END FOOTER ============ -->

    <!-- ============ JS ============ -->
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
      <script src="../js/mapas.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnInWAxY1G6X2NubLdlPofyPRzghF7EWA&callback=iniciarMap"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="../js/scripts.js"></script>
</body>
</html>