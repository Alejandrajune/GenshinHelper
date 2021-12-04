<!--
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Takes weapon name and uses it to pull up ascension material from the database
    Uses the material name to pull up corrosponding days from the database
    Echos the days to the javascript
-->

<?php
require_once 'connect.php';
$q = $_REQUEST["q"];

$sql = "SELECT MaterialName FROM weapons WHERE Weapon = '$q'";
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