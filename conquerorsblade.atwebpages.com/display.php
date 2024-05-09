<?php
   // show errors 
error_reporting(E_ALL);
ini_set('display_errors', 1);
    //errors ends here 
// call the page for connecting to the db
require_once('dbconnector.php');
?>
<?php
$get_member =" SELECT name, prestige, region, map, resourceName, resourceAmount FROM mafiacb";
$user_coder1 = $con->prepare($get_member);
$user_coder1 ->execute();

echo "<table border='1'>
<tr>
<td align=center> <b>name</b></td>
<td align=center><b>region</b></td>
<td align=center><b>resourceName</b></td>;
<td align=center><b>resourceAmount</b></td>;
<td align=center><b>prestige</b></td>
<td align=center><b>map</b></td>";

while($row =$user_coder1->fetch(PDO::FETCH_ASSOC)){
$region = $row['region'];
$name = $row['name'];
$prestige =$row['prestige'];
$map =    $row['map'];
$resourceName =    $row['resourceName'];
$resourceAmount =    $row['resourceAmount'];

    echo "<tr>";
    echo "<td align=center>$name</td>";
    echo "<td align=center>$region</td>";
    echo "<td align=center>$resourceName</td>";
    echo "<td align=center>$resourceAmount</td>";
    echo "<td align=center>$prestige </td>";
    echo "<td align=center>$map</td>";       
}
echo "</table>";
?>