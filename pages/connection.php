<?php

//validamos datos del servidor
$DB_USER = "root";
$DB_PASSWORD = "6rMMGRLwVBaiATvH9I75";
$DB_HOST = "containers-us-west-182.railway.app";
$DB_NAME = "railway";
$DB_PORT = "6581";

//conetamos al base datos
$connec = mysqli_connect("mysql://",$DB_USER, $DB_PASSWORD, $DB_HOST, $DB_PORT, $DB_NAME);

if ($connec) {
  echo "CONECTADO";
} else {
  echo "NO CONECTADO";
}

?>