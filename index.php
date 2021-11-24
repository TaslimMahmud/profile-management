<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>

	<h2>Registration Form</h2>
	
	<form action="store.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label for="name">Enter Your Name:</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="fname">Enter Your Father Name:</label>
				<input type="text" name="fname" id="fname" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="image">Chosose your profile pic</label>
				<input id="image" type="file" name="pic" class="btn btn-default">
			</div>
			
			
			<div class="form-group">
				<input type="submit" name="submit" value="Register" class="btn btn-success">
				<input type="reset" name="submit" value="Reset" class="btn btn-info">
			</div>
		</div>
	</form>

</body>
</html>