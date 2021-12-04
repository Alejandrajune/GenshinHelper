<!-- 
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    
    Gets character name from javascript and uses that to get the corrosponding material name
    Uses the material name to get corrosponding domain name and returns it to the javascript -->
<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM characters WHERE CharacterName = '$q'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$matName = $row['MaterialName'];

$sql = "SELECT DomainName FROM materiallocations WHERE MaterialName = '$matName'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$domName = $row['DomainName'];
echo $domName;
?>
