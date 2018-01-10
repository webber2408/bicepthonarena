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
<body style="background:url(../images/back1.jpeg);background-size: cover;">
<div class="header">
<span id="heading">Bicepthon Arena | Your Programs</span>
<div class="navBtn">
<a href="../trainerDashboard.php" class="btn btn-success">Back to Profile</a>
</div>
</div>
<div class="container-fluid mainContainer" style="margin-top: 100px;background-color: rgba(0,0,0,0.6);color: white;padding:30px;">
<table style="color:white;">
	<tr>
		<td><b>D1-Exercise</b></td>
		<td><b>D1-Sets</b></td>
		<td><b>D1-Total time</b></td>
		<td><b>D2-Exercise</b></td>
		<td><b>D2-Sets</b></td>
		<td><b>D2-Total time</b></td>
		<td><b>D3-Exercise</b></td>
		<td><b>D3-Sets</b></td>
		<td><b>D3-Total time</b></td>
		<td><b>D4-Exercise</b></td>
		<td><b>D4-Sets</b></td>
		<td><b>D4-Total time</b></td>
		<td><b>D5-Exercise</b></td>
		<td><b>D5-Sets</b></td>
		<td><b>D5-Total time</b></td>
		<td><b>D6-Exercise</b></td>
		<td><b>D6-Sets</b></td>
		<td><b>D6-Total time</b></td>
		<td><b>D7-Exercise</b></td>
		<td><b>D7-Sets</b></td>
		<td><b>D7-Total time</b></td>
	</tr>

	<?php
		session_start();
		include '../db.php';
		$sql = "SELECT * from exercise where trainerId = '".$_SESSION['trainerId']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<tr>
		        			<td>".$row['exercised1']."</td>
		        			<td>".$row['setsd1']."</td>
		        			<td>".$row['totaltimed1']."</td>
		        			<td>".$row['exercised2']."</td>
		        			<td>".$row['setsd2']."</td>
		        			<td>".$row['totaltimed2']."</td>
		        			<td>".$row['exercised3']."</td>
		        			<td>".$row['setsd3']."</td>
		        			<td>".$row['totaltimed3']."</td>
		        			<td>".$row['exercised4']."</td>
		        			<td>".$row['setsd4']."</td>
		        			<td>".$row['totaltimed4']."</td>
		        			<td>".$row['exercised5']."</td>
		        			<td>".$row['setsd5']."</td>
		        			<td>".$row['totaltimed5']."</td>
		        			<td>".$row['exercised6']."</td>
		        			<td>".$row['setsd6']."</td>
		        			<td>".$row['totaltimed6']."</td>
		        			<td>".$row['exercised7']."</td>
		        			<td>".$row['setsd7']."</td>
		        			<td>".$row['totaltimed7']."</td>
		        	  </tr>";

		    }
		} else {
		    echo "0 results";
		}
?>
</table>
</div>
</body>
</html>
