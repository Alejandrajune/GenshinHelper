<!-- 
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Takes weapon name and gets corrosponding material name from the database
    Uses the material name to get corrosponding domain name
-->

<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM weapons WHERE Weapon = '$q'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$matName = $row['MaterialName'];   

$sql = "SELECT DomainName FROM materiallocations WHERE MaterialName = '$matName'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$domName = $row['DomainName'];
echo $domName;
?>