<?php
	// print_r($_POST);
$json = file_get_contents('php://input');
$action = json_decode($json, true);
var_dump($action);
?>