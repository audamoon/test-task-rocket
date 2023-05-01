<?php
use PHPMailer\PHPMailer\PHPMailer;

include 'vendor/autoload.php';
include 'credentials.php';
date_default_timezone_set('Etc/UTC');

$subject = $_POST['name'] . " запись";
$message = $_POST['phone'] . " от " . $_POST['name'];
$mail = new PHPMailer();
$mail->Mailer = 'smtp';
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = '465';
$mail->SMTPAuth = true;
$mail->Username = $yandexLogin;
$mail->Password = $yandexPass;

$mail->setFrom($yandexLogin, 'Test medicine');
$mail->addAddress('audamoon@internet.ru', 'test test');
$mail->CharSet = 'UTF-8';
$mail->CharSet = 'UTF-8';
$mail->Subject = $subject;
$mail->msgHTML("<p>{$message}</p>");

if ($mail->send()) {
    echo "<script src='success.js'></script>";
} else {
    echo "<script src='fail.js'></script>";
}