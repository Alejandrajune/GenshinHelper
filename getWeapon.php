<!-- Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Gets a character name and returns corresponding material name
-->

<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM weapons WHERE Weapon = '$q'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$matName = $row['MaterialName'];   

echo $matName;
?>