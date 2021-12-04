<!--
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Log in info for the database 
-->

<?php
$user = 'Application';
$password = 'GenshinApp!';
$db = 'genshinhelper';
$host = '127.0.0.1';
$port = '3306';

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

?>