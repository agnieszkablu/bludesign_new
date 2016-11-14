<?php
require 'mailer/PHPMailerAutoload.php';
require_once('mailer/class.phpmailer.php');    // dodanie klasy phpmailer
require_once('mailer/class.smtp.php');    // dodanie klasy smtp

$_POST = array_map('trim', $_POST);

$error = false;

if (!isset($_POST['name']) || empty($_POST['name'])) {
    $error = true;
}

if (!isset($_POST['email']) || empty($_POST['email']) || !PHPMailer::ValidateAddress($_POST['email'])) {
    $error = true;
}

if (!isset($_POST['message']) || empty($_POST['message'])) {
    $error = true;
}

if ($error) {
    exit('nok');
}

$mail = new PHPMailer();
$mail->From = "kontakt@bludesign.pl";    //Pełny adres e-mail
$mail->FromName = "Formularz kontaktowy"; 
$mail->CharSet = 'UTF-8';
$mail->Host = "mail-serwer14106.lh.pl";    //adres serwera SMTP wysyłającego e-mail
$mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
$mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
$mail->Username = "kontakt@bludesign.pl";    //nazwa użytkownika do skrzynki e-mail
$mail->Password = "AgAolAizA33";    //hasło użytkownika do skrzynki e-mail
$mail->Port = 587; //port serwera SMTP 
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->AddAddress('kontakt@bludesign.pl');
$mail->Subject = 'Wiadomość ze strony internetowej';
$mail->Body = $_POST['message'];

if (!$mail->Send()) {
    exit('nok');
}

exit('success');