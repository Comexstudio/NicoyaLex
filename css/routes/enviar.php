
    <!-- ============ SEND EMAIL ============ -->
    <?php 

    $myemail = 'mpaniagua@comexstudio.com';
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    $to = $myemail;
    $email_subject = "Nuevo mensaje: $subject";
    $email_body = "Haz recibido un nuevo mensaje del sitio web Nicoyalex. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
    $headers = "From: $email";

    mail($to, $email_subject, $email_body, $headers);

    if($name){

      echo "<script> 
        
      alert('Datos Enviados Correctamente'); 
      
      location.href = 'contacto.php';
      
      </script>";


    }else{

      echo "<script> 

      alert('incorrecto');
      
      </script>";


    }

    ?>
    