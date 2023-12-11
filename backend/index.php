<?php
header("Access-Control-Allow-Origin: *");
$data = ["mesage" => "hi from backend"];
echo json_encode($data);

?>