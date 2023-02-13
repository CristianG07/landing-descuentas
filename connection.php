<?php

//validamos datos del servidor
$DB_USER = "root";
$DB_HOST = "containers-us-west-182.railway.app";
$DB_PASSWORD = "6rMMGRLwVBaiATvH9I75";
$DB_NAME = "railway";
$DB_PORT = 6581;

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// if (!$connec) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($connec);

?>