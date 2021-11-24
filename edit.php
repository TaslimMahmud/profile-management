<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>


		<?php 

		  	//Databse connection
			 $db_connection = new PDO("mysql:host=localhost;dbname=registration","root","");
			

		   // Dtabase query
					  $aql = "SELECT * FROM `user_info` WHERE id=".$_GET['id'];
			//query in PDO
				 $all_data = $db_connection ->query( $aql );

			//Filter from database in PDO
			  $single_info = $all_data->fetch(PDO::FETCH_ASSOC);

		?>	


	<h2>Update your profile</h2>
	
	<form action="update.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label for="name">Enter Your Name:</label>
				<input type="text" name="name" value="<?php echo $single_info['name']; ?>" id="name" class="form-control">
				<input type="hidden" name="id" value="<?php echo $single_info['id']; ?>" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="fname">Enter Your Father Name:</label>
				<input type="text" name="fname" value="<?php echo $single_info['fname']; ?>" id="fname" class="form-control">
				<input type="hidden" name="id" value="<?php echo $single_info['id']; ?>" id="fname" class="form-control">
			</div>
			
				
			<div class="form-group">
				<label for="image">Chosose yor profile pic</label>
				<input id="image" type="file" name="pic" class="btn btn-default">
			</div>
			
			<div class="form-group">
				<input type="submit" name="submit" value="Update" class="btn btn-info active">
			</div>
		</div>
	</form>

</body>
</html>