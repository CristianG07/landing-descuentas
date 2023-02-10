<?php

//validamos datos del servidor
$DB_USER = "descuentas_smoke";
$DB_PASSWORD = "n27e-+}+G=NbBK#lVFT6gR1qsOWQ+aZs";
$DB_HOST = "http://dev.descuentas.com/db-connect-test.php";
$DB_NAME = "descuentas_smoketest";

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

?>