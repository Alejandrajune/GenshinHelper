<!--
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Log in info for the database 
-->

<?php
$user = 'root';
$password = 'Paimon6879!';
$db = 'genshinhelper';
$host = '127.0.0.1';
$port = '3306';

$link = mysqli_init();
mysqli_ssl_set($link, "certs/client-key.pem", "certs/client-cert.pem", "certs/ca-cert.pem", NULL, NULL);
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

?>
