<?php
include "/connector.php";
$scope.name2="in insert";

$data=json_decode(file_get_contents("php://uinput"));
$id=$dbhandle->real_escape_string($data->id);
$name=$dbhandle->real_escape_string($data->name);

$query="INSERT INTO userstable VALUES($id,'".$name."')";

$dbhandle->query($query);

?>