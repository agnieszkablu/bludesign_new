<?php
require 'mailer/PHPMailerAutoload.php';
require_once('mailer/class.phpmailer.php');    // dodanie klasy phpmailer
require_once('mailer/class.smtp.php');    // dodanie klasy smtp

session_start();
if(isset($_POST)){
  	if (empty($_POST['your-name'])) {
		  $_SESSION['errors']['your-name'] = 'First name is missing';
  	}
	if (empty($_POST['your-email'])) {
		  $_SESSION['errors']['your-email'] = 'email is missing';
  	}
 
  if(count($_SESSION['errors']) > 0){
	    //This is for ajax requests:
            if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                echo json_encode($_SESSION['errors']);
                exit;
             }
	    //This is when Javascript is turned off:
           echo “<ul>”;
           foreach($_SESSION['errors'] as $key => $value){
	      echo “<li>” . $value . “</li>”;
           }
           echo “</ul>”;exit;
  }else{
	/// define variables and set to empty values
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["your-name"]);
      $email = test_input($_POST["your-email"]);
      $message = test_input($_POST["your-message"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $mail = new PHPMailer();
    $mail->From = "kontakt@bludesign.pl";    //Pełny adres e-mail
    $mail->FromName = "Formularz kontaktowy"; 
    $mail->CharSet = 'UTF-8';
    $mail->Host = "mailng.az.pl";    //adres serwera SMTP wysyłającego e-mail
    $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
    $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
    $mail->Username = "kontakt@bludesign.pl";    //nazwa użytkownika do skrzynki e-mail
    $mail->Password = "AGAolaiza33";    //hasło użytkownika do skrzynki e-mail
    $mail->Port = 587; //port serwera SMTP 
    $mail->SetFrom($_POST[$email], $_POST[$name]);
    $mail->AddAddress('kontakt@bludesign.pl');
    $mail->Subject = 'Wiadomość ze strony internetowej';
    $mail->Body = $_POST[$message];
   }
}