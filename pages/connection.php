<?php

//validamos datos del servidor
// $DB_USER = "root";
// $DB_PASSWORD = "6rMMGRLwVBaiATvH9I75";
// $DB_HOST = "containers-us-west-182.railway.app";
// $DB_NAME = "railway";
// $DB_PORT = "6581";

//conetamos al base datos
// $connec = mysqli_connect("mysql://",$DB_USER, $DB_PASSWORD, $DB_HOST, $DB_PORT, $DB_NAME);

define('DB_HOST', 'containers-us-west-182.railway.app');
define('DB_NAME', 'railway');
define('DB_USER', 'root');
define('DB_PASSWORD', '6rMMGRLwVBaiATvH9I75');
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

try {
  $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, $opciones);
  return $pdo;
} catch (Exception $e) {
  $respuesta = ['Error' => 'error: ' . $e->getMessage()];
  print json_encode($respuesta);
  die();
}

?>