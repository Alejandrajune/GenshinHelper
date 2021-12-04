<!--
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    Gets Character name from javascript and returns corresponding material name
    Uses the material name and gets corrosponding days from the database
-->
<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM characters WHERE CharacterName = '$q'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$matName = $row['MaterialName'];

$sql = "SELECT Day FROM farmingdays WHERE Item = '$matName'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
echo "<ul>";
while($row = mysqli_fetch_array($result)){
    $day = $row['Day'];
    echo "<li>$day</li>";
}
echo "</ul>";
?>