<?php

use app\class\objectMaker;

require '../../vendor/autoload.php';

echo "Opa, Docker rodou!!!!<br>";
$object = new objectMaker;
$obj = $object->createObject("Nome", "Hector Vieira Saldivar", "Cidade", "Curitiba");

foreach($obj as $item) {
  echo $item . "<br>";
}
var_dump ($obj);

// https://www.youtube.com/watch?v=x2EMBvG8P3M
// Comando Docker: docker container run -d -p 81:80 --name php-test -v {caminho}:/var/www/html php:8.1.18-apache-buster
// Comando Docker: docker start php-test
// https://pestphp.com/docs/mocking