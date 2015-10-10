<?php   

  if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $recaptcha_secret = "CLAVE_SECRETA";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
            $mensaje = "<div style=color:green;>Genial, No eres un robot. </div>";
        }
        else
        {
            $mensaje = "<div style=color:red;>Tú eres un robot (Debes completar la validación) </div>";
        }
    }

?>

<!DOCTYPE html>
 
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>No Captcha reCaptcha</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          // colocamos la clave para el sitio, generada al crear la aplicacioón
                  'sitekey' : 'CLAVE_DEL_SITIO',
                  'callback' : verifyCallback
                });
         }
        var verifyCallback = function(response) {
                alert(response);
              };
        function valid() {          

        // Validamos si los campos estan vacios y enviamos una alerta
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

</head>
<body>

	<div class="container">

    <h1>No Captcha reCaptcha</h1>
   

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
            <div class="g-recaptcha" data-sitekey="CLAVE_DEL_SITIO"></div>	

            <br>

				    <input type="submit" class="btn btn-primary" value="Aceptar" id="btnenviar" name="btnenviar" onclick="return valid()">

				</form>
	        	
			</div>

		</div>

		<br>

		<footer align="center">				    	
			Desarrollado por <a href="http://www.collectivecloudperu.com" target="_blank">Collective Cloud Perú</a>
		</footer>

	</div>

</body>
</html>