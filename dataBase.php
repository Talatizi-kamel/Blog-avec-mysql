<?php


$dsn = 'mysql:host=localhost;dbname=blog';
$user = getenv('DB_USER');
$password = getenv('DB_PWD');

try {
  $pdo = new PDO($dsn, $user, $password);
 // echo'Conection OK !!';

} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}

return $pdo;