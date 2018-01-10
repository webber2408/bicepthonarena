<?php
include '../db.php';

session_start();
$dbusername = $_REQUEST['username'];
$dbuseremail = $_REQUEST['useremail'];
$dbusergender = $_REQUEST['gender'];
$dbuseragegroup = $_REQUEST['agegroup'];
$dbuserprofession = $_REQUEST['profession'];
$dbuserpassword = $_REQUEST['userpassword'];

		 	   $query = "SELECT * FROM users WHERE email = '".$dbuseremail."'";

		 	   $result = mysqli_query($conn , $query);
		 	   if(!$result){
		 	   	  	echo "result not coming";
		 	   	  }


		 	   if ($result->num_rows > 0) {
		 	   	   echo "<script>alert('This email address is already registered !  Go for Login !');
		 	   	   			window.location='../index.php';</script>";
		 	   }
		 	   else{
		 	   	   $query = "INSERT INTO users(name,email,password,gender,agegroup,profession) VALUES('".$dbusername."','".$dbuseremail."','".$dbuserpassword."','".$dbusergender."','".$dbuseragegroup."','".$dbuserprofession."')";
		 	   	   //echo $query;
		 	   	  $new =  mysqli_query($conn,$query);
		 	   	  if(!$new){
		 	   	  	echo "DAta not going";
		 	   	  }
		 	   	  $_SESSION['userEmail'] = $dbuseremail;

		 	   	  if($dbuserprofession == "Learner"){
		 	   	  		echo "<script>alert('You have successfully signedup !!');
		 	   	   	window.location='../learnerDashboard.php';</script>";
		 	   	  }else if($dbuserprofession == "Trainer"){
		 	   	  		echo "<script>alert('You have successfully signedup !!');
		 	   	   	window.location='../trainerDashboard.php';</script>";
		 	   	  }
		 	   	   
		 	   }
	
   







?>
