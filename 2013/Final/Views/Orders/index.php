
<?php
	//Controller for the model
	include_once "../../inc/_global.php";

	$model = Orders::Get();
	$view = 'list.php';//Gives list of Contact Methods to list.php
	include '../Shared/_Layout.php';
