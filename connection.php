<?php

//validamos datos del servidor
$DB_USER = "root";
$DB_HOST = "containers-us-west-136.railway.app";
$DB_PASSWORD = "pchI5VEgjuDmbWmx9dKZ";
$DB_NAME = "railway";
$DB_PORT = 6429;

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// if (!$connec) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($connec);

?>