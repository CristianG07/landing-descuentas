<?php

//validamos datos del servidor
$DB_USER = "id20285018_wp_f740d690f648a28d8a47958e41ad6f61";
$DB_HOST = "localhost";
$DB_PASSWORD = "7I2HIXeDoUt@mFS3";
$DB_NAME = "id20285018_wp_f740d690f648a28d8a47958e41ad6f61";
// $DB_PORT = "6581";

//conetamos al base datos
$connec = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

if (!$connec) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($connec);

?>