<?php 


		$name 			= $_POST['name'];
		$fname 			= $_POST['fname'];
		$pic_name		= $_FILES['pic']['name'];
		$pic_tmp		= $_FILES['pic']['tmp_name'];

		move_uploaded_file( $pic_tmp, 'images/'.$pic_name );
		$_POST['pic'] 	= $pic_name;


		//Databasae connection in PDO method
		$db_connection = new PDO( "mysql:host=localhost;dbname=registration","root","" );

		//Databasae query
		$sql = "INSERT INTO user_info( name, fname, pic) VALUES( '$name', '$fname','$pic_name' )";

		//Query in PDO
		 $db_connection->query($sql);

		 //Redirect location
		header("location:show-all.php");

?>



