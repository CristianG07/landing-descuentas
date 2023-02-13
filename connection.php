<?php

//validamos datos del servidor
$DB_USER = "descuentas_smoke";
$DB_HOST = "localhost";
$DB_PASSWORD = "n27e-+}+G=NbBK#lVFT6gR1qsOWQ+aZs";
$DB_NAME = "descuentas_smoketest";
// $DB_PORT = "6581";

//conetamos al base datos
// $connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$connec = mysqli_connect("mysql://root:6rMMGRLwVBaiATvH9I75@containers-us-west-182.railway.app:6581/railway");

if (!$connec) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($connec);

?>