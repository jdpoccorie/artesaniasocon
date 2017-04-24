<?php
$fname = $_POST["var1"];
$email = $_POST["var2"];
$country = $_POST["var3"];
$city = $_POST["var4"];
$phone = $_POST["var5"];
$message = $_POST["var6"];	
$idioma = $_POST["var7"];	

//armar el contenido

// Varios destinatarios
$para  = 'Zenobio Ocon Condori <artesaniasocon@gmail.com>';

// subject
$titulo = 'MENSAJE DE CONTACTO: Desde AtesaniasOcon ('.$fname.')';

// message
$mensaje = '
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>MENSAJE DE CONTACTO: Desde AtesaniasOcon</title>						
    </head>
    <body>
      <h2>Mensaje recibido desde la web:</h2>

      <p><strong>Nombre: </strong>'.$fname.'</p>
      <p><strong>Email: </strong>'.$email.'</p>
      <p><strong>País: </strong>'.$country.'</p>
      <p><strong>Ciudad: </strong>'.$city.'</p>
      <p><strong>Teléfono: </strong>'.$phone.'</p>
      <p><strong>Mensaje: </strong>'.$message.'</p>					  
    </body>
</html>
';

// Si cualquier línea es más larga de 70 caracteres, usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'Zenobio Ocon Condori <artesaniasocon@gmail.com>' . "\r\n";
$cabeceras .= 'From: '.$fname.' <admin@artesaniasocon.com>' . "\r\n";
$cabeceras .= 'Cc: Madelin <mpastorsa@gmail.com>' . "\r\n";
$cabeceras .= 'Bcc: Ronald Caparo <ronaldcaparo@gmail.com>' . "\r\n";
$cabeceras .= 'Reply-To: '.$fname.' <'.$email.'>' . "\r\n";
$cabeceras .= 'X-Mailer: PHP/' . phpversion();

// Mail it
if(mail($para, $titulo, $mensaje, $cabeceras))
{				 	
    if($idioma == "espaniol"){
        echo $fname." gracias por contactar con nosotros. Muy pronto nos comunicaremos con usted para proporcionarle la información.";						
    }

    if($idioma == "ingles"){
        echo $fname." thank you for contact us. In a short time we contact you to give you the request information.";						
    }

}
else
{
    if($idioma == "espaniol"){
        echo "Lo sentimos, el mensaje no ha podido ser enviado. Por favor intente otra vez. Gracias.";
    }

    if($idioma == "ingles"){
        echo "We are sorry, the message cannot be sent. Please try again. Thank you.";
    }
}
?>