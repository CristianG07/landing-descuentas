<?php

//validamos datos del servidor
$DB_USER = "descuentas_smoke";
$DB_HOST = "localhost";
$DB_PASSWORD = "n27e-+}+G=NbBK#lVFT6gR1qsOWQ+aZs";
$DB_NAME = "descuentas_smoketest";

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// if (!$connec) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($connec);

?>