<!DOCTYPE html>
<html>
<head>
	<title>Users View | Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/trainerDashboard.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:url(../images/back1.jpeg);background-size: cover;" >
<div class="header">
<span id="heading">Bicepthon Arena | Your Programs</span>
<div class="navBtn">
<a href="../trainerDashboard.php" class="btn btn-success">Back to Profile</a>
</div>
</div>
<div class="container-fluid mainContainer" style="margin-top: 100px;">
<div class="row">
<div class="col col-sm-12 col-xs-12 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" style="margin-top: 100px;background-color: rgba(0,0,0,0.6);color: white;padding:30px;">
<table style="color:white;">
<style type="text/css">
	td{
		padding: 10px;
	}
</style>
	<tr style="padding: 10px;">
		<td><b>ID</b></td>
		<td><b>Email</b></td>
		<td><b>Name</b></td>
		<td><b>Age-Group</b></td>
		<td><b>Gender</b></td>
	</tr>
<?php
	session_start();
		include '../db.php';
		$sql = "SELECT * from users where id = '".$_SESSION['trainerId']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       $enroll = $row['enroll'];
		    }
		} else {
		    echo "0 results 1";
		}

		$enroll = explode(',',trim($enroll));
		for ($x = 0; $x <= sizeof($enroll)-1; $x++) {
			$sql = "SELECT * from users where id = '".$enroll[$x]."'";
		    $result = $conn->query($sql);
			    if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<tr>
			        			<td>".$row['id']."</td>
			        			<td>".$row['email']."</td>
			        			<td>".$row['name']."</td>
			        			<td>".$row['agegroup']."</td>
			        			<td>".$row['gender']."</td>
			        	  </tr>";

			    }
			} else {
			   
			}
		}
?>
</table>
</div>
</div>
</div>
</body>
</html>