<!-- 
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021

    Takes the current day of the week and gets the corrosponding materials from the database
    Creates a table to display information from database
-->

<?php
require_once 'connect.php'; // Connect to Database
$q = $_REQUEST["q"];

$sql = "SELECT * FROM farmingdays WHERE Day = '$q'"; 
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
echo "<tr><th>Material</th><th>Location</th></tr>";

while($row = mysqli_fetch_array($result)){
    $item = $row['Item'];

    $sql2 = "SELECT DomainName FROM materiallocations WHERE MaterialName = '$item'";
    $result2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
    $row2 = mysqli_fetch_array($result2);
    $domain = $row2['DomainName'];

    echo "<tr>";
    echo "<td><div style='height:100%;width:100%'>$item</div></td>";
    echo "<td>$domain</td>";
    echo "</tr>";
}
?>