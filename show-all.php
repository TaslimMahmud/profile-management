<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Users</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		h2{
			margin-top: 60px;
		}
		table tr td, th{
			text-align: center;
		}
	</style>
</head>

<body>

	<?php  


		$db_connection = new PDO("mysql:host=localhost;dbname=registration","root","");

		$aql = "SELECT * FROM `user_info`";


		$all_data = $db_connection-> query($aql);

		$all_data_index = $all_data ->fetchAll( PDO::FETCH_ASSOC );

	?>

	
	<div class="container">
	<h2>All User's Profile</h2>
	<hr>
    	<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>


		<?php 

			foreach ($all_data_index as $single_data ) {
		
		?>
			<tr>
				<td><?php echo $single_data['name'];?></td>
				

				<td><a class="btn btn-success" href="view.php?id=<?php echo $single_data['id']; ?>">View user</a></td>
				<td><a class="btn btn-warning" href="edit.php?id=<?php echo $single_data['id']; ?>">Edit user</a></td>
				<td><a class="btn btn-danger" href="delete.php?id=<?php echo $single_data['id']; ?>">Delete user</a></td>
			</tr>

	<?php }  ?>

		</table>
	</div>
	
</body>
</html>