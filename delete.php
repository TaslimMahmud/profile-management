<?php 


	$db_connection = new PDO("mysql:host=localhost;dbname=registration","root","");

		$aql =  "DELETE FROM `user_info` WHERE `user_info`.`id` =".$_GET['id'];


	$all_data = $db_connection-> query($aql);

	//Redirect Location
	header("location:feedback.php");

























