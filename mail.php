<?php
include 'register.php' ;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendemail_verify($username, $email, $verify_token){
  $mail = new PHPMailer(true);
 
  //Server settings
  //$mail->SMTPDebug = 2;                                     //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  
  $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
  $mail->Username   = 'ibutang imong email';              //SMTP username
  $mail->Password   = 'i search sa youtube "how to get smtp password"';                     //SMTP password
  
  $mail->SMTPSecure = "tls";                                  //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('email nimo'); 
  $mail->addAddress($email);                                  //Name is optional

  //Content
  $mail->isHTML(true);                                        //Set email format to HTML
  $mail->Subject = 'Email Verification';
  
  $email_template = "
    <h2>You are Registered now!</h2>
    <h5>Verify your email address to Login with the given link below</h5>
    <br/><br/>
    <a href='http://localhost/Laboratory%20Activities/lab3/verify-email.php?token=$verify_token'>Verify</a>";
    
  $mail->Body = $email_template;
  $mail->send();
}
?>