<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>

        label{
            display: block;
            border-bottom: 2px solid #ccc;
            padding: 5px 5px;

        }
        .area a{
        	display: block;
        	width: 50%;
        	margin: 0 auto;
        }

    </style>

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

<!--============================ Single profile information detals markup sart from here======================-->
	<div class="area">
	    <h3>Your Details Information</h3>
	    <hr>
	    <label for="">Your Name: <i><?php echo $single_info['name']; ?></i></label>

	    <label for="">Your Father Name:<i><?php echo $single_info['fname']; ?></i></label>

	    

	   <label for="">Your Profile Pic:
	        <img class="img-responsive" src="images/<?php echo $single_info['pic'];?>">
		</label>

	    
	    <a class="btn btn-info" href="show-all.php">Back to all users?</a>
	</div>

</body>
</html>