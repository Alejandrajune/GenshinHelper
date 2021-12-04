<!-- 
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    Takes characters name and gets corrosponding material name from database 
-->
<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM characters WHERE CharacterName = '$q'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$matName = $row['MaterialName'];

echo $matName;

?>