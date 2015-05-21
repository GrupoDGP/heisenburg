<!--Copyright ©. All rights reserved. Designed by Antonio Jimenez Martinez -->
<!--informacion contacto -->




<div class ="contacta">

<h2>Formulario contacto</h2>
<form method="post" action="index.php?page=contacto">
   Name: <input type="text" name="name" value="<?php echo $name;?>"required>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>"required>
   <br><br>
   <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   <input type="submit" name="submit" value="Enviar">
</form>
</div> <!-- end contacta -->




<?php
// define variables and set to empty values
$email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
    }
    if (!empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>alert('correo incorrecto');</script>";
    }
    }
    if (!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }

    require 'lib/PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    //Permitir el acceso al correo desde aplicacion no seguras desde
    //https://www.google.com/settings/security/lesssecureapps
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sibweb2014@gmail.com';                 // SMTP username
    $mail->Password = 'antonioandres';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->From = 'sibweb2014@gmail.com';
    $mail->FromName = 'heisenburg';
    $mail->addAddress($email, $name);     // Add a recipient
    $mail->Subject = '[Mensaje de heisenburg] Asunto';
    $mail->Body    = $comment;


    if(!$mail->send()) {
    	//echo "<script type='text/javascript'>alert('Message could not be sent');</script>";
        echo 'Mensaje no ha podido ser enviado';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
    	//echo "<script type='text/javascript'>alert('Message has been sent');</script>";
        echo 'Mensaje ha sido enviado';
    }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
