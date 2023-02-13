<?php

//validamos datos del servidor
$DB_USER = "root";
$DB_HOST = "containers-us-west-182.railway.app";
$DB_PASSWORD = "6rMMGRLwVBaiATvH9I75";
$DB_NAME = "railway";
$DB_PORT = 6581;

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
// $connec = mysqli_connect("mysql://root:6rMMGRLwVBaiATvH9I75@containers-us-west-182.railway.app:6581/railway");

if (!$connec) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($connec);

?>