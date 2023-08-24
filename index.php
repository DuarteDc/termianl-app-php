<?php

require 'vendor/autoload.php';

use Duartebv\Poo\models\ImagePost;
use Duartebv\Poo\models\User;
use Duartebv\Poo\models\VideoPost;

$duarte = new User("Duarte", "DuarteBv", "duarte@gmail.com", "password");
$sus = new User("Sus", "Su", "sus@gmail.com", "password");
$midu = new User("Miguel", "Midudev", "midudev@gmail.com", "123456789");
$savitar = new User("Savitar", "S4vitar", "savitar@gmail.com", "pass123*");

$duartePost = new ImagePost("Code with php 8", "Img-001.jpg");
$susPost = new ImagePost("Creando un nuevo sito web", "Img-000.jpg");
$miduPost = new VideoPost("Nuevo curso de RemixJs", "VID001.mp4");
$savitarPost = new VideoPost("Entorno hacker con Arch BSWP", "VID00.mp4");


$duarte->publish($duartePost);
$sus->publish($susPost);
$midu->publish($miduPost);
$savitar->publish($savitarPost);

$duartePost->addLike($sus);
$duartePost->addLike($midu);

$susPost->addLike($savitar);

$miduPost->addLike($duarte);
$miduPost->addLike($midu);
$miduPost->addLike($sus);
$miduPost->addLike($savitar);

$savitarPost->addLike($midu);
$savitarPost->addLike($duarte);


$duarte->addFollower($sus);
$duarte->addFollower($midu);

$sus->addFollower($duarte);
$sus->addFollower($midu);

$midu->addFollower($duarte);
$midu->addFollower($sus);
$midu->addFollower($savitar);

$savitar->addFollower($duarte);

print_r(User::showProfile($duarte));
print_r(User::showProfile($sus));
print_r(User::showProfile($midu));
print_r(User::showProfile($savitar));