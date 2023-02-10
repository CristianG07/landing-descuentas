<?php

//validamos datos del servidor
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_HOST = "localhost";
$DB_NAME = "registros";
// $DB_URL = "registros";
// $DB_PORT = "registros";

//conetamos al base datos
// $connec = mysqli_connect('$DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME');
$connec = mysqli_connect('mysql://root:6rMMGRLwVBaiATvH9I75@containers-us-west-182.railway.app:6581/railway');

?>