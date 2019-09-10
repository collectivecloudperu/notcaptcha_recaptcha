<?php   

  if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $recaptcha_secret = "CLAVE_SECRETA";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);

        $response = json_decode($response, true);
        if($response["success"] === true)
        {
            $mensaje = "<div style=color:green;font-weight:bold;>Genial, No eres un robot. </div>";
        }
        else
        {
            $mensaje = "<div style=color:red;font-weight:bold;>Tú eres un robot (Debes completar la validación) </div>";
        }
    }

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Sistema Anti Robots con Google No Captcha reCaptcha V2 (Actualizado 10-09-2019)</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    

  </head>

  <body> 

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="http://nubecolectiva.com"><img src="http://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="http://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://blog.nubecolectiva.com" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li> 
          </ul>
          <form name="bencc" method="get" action="http://www.google.com/search" id="bencc" class="form-inline mt-2 mt-md-0" target="_blank">
            <input type="hidden" name="domains" value="blog.nubecolectiva.com">
            <input type="hidden" name="sitesearch" value="blog.nubecolectiva.com">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('bencc').submit()">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    </header>

    <div class="pccp mt-5 mb-3" align="center">
              <!-- P -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <!-- End P -->
    </div>

    <main role="main">

        <div class="container mt-5">

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4 text-center">Sistema Anti Robots con Google No Captcha reCaptcha V2 (Actualizado 10-09-2019)</h1>

                <span style="color:purple;"><strong>NOTA:</strong> El sistema de imágenes clickable y audio aparecerá cuando intentes llenar el formulario de entre 6 a 10 intentos.</span>
   

                <div class="row">

                    <div class="col-md-12">

                      <h2> Formulario de Contacto </h2>

                      <form role="form" name="formulario" method="post">

                        <?php echo $mensaje; ?>

                      <div class="form-group">
                        <label for="nya">Nombres y Apellidos:</label>
                        <input type="text" class="form-control" id="nya" name="nya" placeholder="Ingresa tus Nombres y Apellidos">
                      </div>

                      <div class="form-group">
                        <label for="telefono">Ingresa tu Número de Telefono o Celular:</label>
                        <input type="phone" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu Número">
                      </div>

                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" id="email" placeholder="Ingresa tu Correo">
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input type="text" class="form-control" id="asunto" id="asunto" placeholder="Ingresa el Asunto de tu Mensaje">
                      </div>

                      <div class="form-group">
                        <label for="mensaje">Asunto:</label>
                        <textarea class="form-control" id="mensaje" id="mensaje" placeholder="Ingresa  tu Mensaje"></textarea>
                      </div>

                      <label>Verificación :</label>
                        <div class="g-recaptcha" data-sitekey="CLAVE_DE_SITIO"></div> 

                        <br>

                      <input type="submit" class="btn btn-primary" value="Aceptar" id="btnenviar" name="btnenviar" onclick="return valid()">

                  </form>
                      
                </div>

              </div>             

            </div>

          </div>      

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="http://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="http://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="http://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="http://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="http://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>           
          
          
          
        </div>

    </main>


    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="http://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type="text/javascript">
        var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'CLAVE_DE_SITIO',
          'callback' : verifyCallback
          });
         }
        var verifyCallback = function(response) {
          alert(response);
        };

        function valid() {          

          var nya = jQuery('#nya').val();
          var telefono = jQuery('#telefono').val();
          var email = jQuery('#email').val();
          var asunto = jQuery('#asunto').val();
          var mensaje = jQuery('#mensaje').val(); 
          var gc = jQuery('#g-recaptcha-response').val();
                   
          if(!nya){
                    alert('Por favor, ingresa tus Nombres y Apellidos');
                    $("#nya").focus();
                    return false;                  
                  }

          if(!telefono){
                    alert('Por favor, ingresa tu Telefono');
                    $("#telefono").focus();
                    return false;
                  }

          if(!email){
                    alert('Por favor, ingresa tu Email');
                    $("#email").focus();
                    return false;
                  }

          if(!asunto){
                    alert('Por favor, ingresa el Asunto de tu Mensaje');
                    $("#asunto").focus();
                    return false;
                  }

          if(!mensaje){
                    alert('Por favor, ingresa tu Mensaje');
                    $("#mensaje").focus();
                    return false;
                  }

          if(!gc){
                    alert('Por favor, activa la casilla de verificación');
                    return false;
                  }

          else {
          return true;
          }

        }
    </script>
    
  </body>
</html>
