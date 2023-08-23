<?php

require 'vendor/autoload.php';

use Duartebv\Poo\models\Post;

$object = new Post("Este es mi primer post");

echo $object->getMessage();
// echo $object->setId('abc-123');
// echo $object->getId();
