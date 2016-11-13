<?php
require 'PHPMailerAutoload.php';
require_once('class.phpmailer.php');    // dodanie klasy phpmailer
require_once('class.smtp.php');    // dodanie klasy smtp

$_POST = array_map('trim', $_POST);

$error = false;

if (!isset($_POST['your-name']) || empty($_POST['your-name'])) {
    $error = true;
}

if (!isset($_POST['your-email']) || empty($_POST['your-email']) || !PHPMailer::ValidateAddress($_POST['your-email'])) {
    $error = true;
}

if (!isset($_POST['your-message']) || empty($_POST['your-message'])) {
    $error = true;
}

if ($error) {
    exit('nok');
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
$mail->SetFrom($_POST['your-email'], $_POST['your-name']);
$mail->AddAddress('kontakt@bludesign.pl');
$mail->Subject = 'Wiadomość ze strony internetowej';
$mail->Body = $_POST['your-message'];

if (!$mail->Send()) {
    exit('nok');
}

exit('success');