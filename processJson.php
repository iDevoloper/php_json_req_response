<?php
$json = file_get_contents("php://input");
$obj = json_decode($json);
$response = array();

$response["data1"] = $obj->field1;
$response["data2"] = $obj->field2;

$json_response = json_encode($response);
echo $json_response;
header("Content-type: application/json");
?>