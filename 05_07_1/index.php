<?php
require_once ("./vendor/autoload.php");

//$v1 = new App\Class1();
//echo $v1;

$header = new App\Design\Header();
$footer = new App\Design\Footer();

echo $header;

$mail = new App\Mail\MailController();
$mail->showForm();


echo $footer;