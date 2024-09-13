<?php
session_start();

require 'vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder();
$builder->build();


$_SESSION['captcha'] = $builder->getPhrase();

header('Content-type: image/jpeg');
$builder->output();
$builder->save("out.jpg",80);
?>
