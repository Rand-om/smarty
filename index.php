<?php

$view = isset($_GET["view"]) ? $_GET["view"] : 'inicio';

require('core/libs/smarty/Smarty.class.php');

is_file("core/controllers/".$view."Controller.php") ? 
	include("core/controllers/".$view."Controller.php"): 
	include("core/controllers/errorController.php");

?>

