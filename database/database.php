<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$mysqli = new mysqli("localhost", "root", "", "db_teste");

if ($mysqli->connect_errno){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM usuarios"; 
$result = $mysqli->query($sql);
   
while($row = $result->fetch_assoc()){
   $data[] = $row;
}
$result -> free_result();

$mysqli -> close();

echo json_encode($data);
?>

