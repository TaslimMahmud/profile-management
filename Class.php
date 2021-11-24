<?php


Class MnageRegistrationProces{

	public $pdo;

	public function __construct (){
		
		try{

			
			$db_connection = new PDO( "mysql:host=localhost;dbname=registration","root","" );

			$db_connection-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$this-> pdo = $db_connection;
			echo "<h4>Databse Connection ok</h4>";

		}catch(PDOException $error){

			echo "Database connection error".$error-> getMessage;

		}





	}

}





















?>