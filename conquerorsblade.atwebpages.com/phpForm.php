<?php

$Name = $_POST['name'];
$Region = $_POST['region'];
$Prestige = $_POST['prestige'];
$ResourceName = $_POST['resourceName'];
$ResourceAmount = $_POST['resourceAmount'];
$Map = $_POST['map'];

$servername = "fdb29.awardspace.net";
$username = "3624893_ip18kb";
$password = "kristians1102";
$database = "3624893_ip18kb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into mafiacb(name,region,prestige,resourceName,resourceAmount,map) values('$Name','$Region','$Prestige','$ResourceName','$ResourceAmount','$Map')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$Name.", ".$Region.", ".$Prestige.", ".$ResourceName.", ".$ResourceAmount.", ".$Map;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>