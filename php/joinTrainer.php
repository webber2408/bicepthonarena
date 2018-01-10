<?php

session_start();
include '../db.php';
$response = $_REQUEST['trainerId'];
// echo $response;

$response = explode('%',trim($response));

$trainerId = $response[0];
$learnerId = $response[1];
// echo $response[0];
// echo $response[1];
// echo $trainerId;
// echo $learnerId;

$sql = "SELECT * FROM users where id = '".$trainerId."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dbenrollment = $row['enroll'];
    }
} else {
    echo "0 results";
}
$dbenrollment = explode(',',trim($dbenrollment));
//print_r($dbenrollment);
for($x=0;$x<=sizeof($dbenrollment)-1;$x++){
	if($dbenrollment[$x]==""){
		if($x == (sizeof($dbenrollment)-1) ){
$sql = "SELECT * FROM users where id = '".$trainerId."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['enroll'] == ""){
        	$sql = "UPDATE users SET enroll='".$learnerId."' WHERE id = '".$trainerId."'";
        }else{
        	$sql = "UPDATE users SET enroll=concat(enroll,',','".$learnerId."') WHERE id = '".$trainerId."'";
        }

    }
} else {
    echo "0 results";
}

				// $sql = "UPDATE users SET enroll=concat(enroll,',','".$learnerId."') WHERE id = '".$trainerId."'";

				if ($conn->query($sql) === TRUE) {
$sql = "SELECT * FROM users where id = '".$learnerId."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['enrolledin'] == ""){
        	$sql1 = "UPDATE users SET enrolledin='".$trainerId."' WHERE id = '".$learnerId."'";
					if ($conn->query($sql1) === TRUE) {
				    echo "Joined Successfully !";
				   }else{
				   	echo "Error ! Please try again later !";
				   }
        }else{


        		$sql1 = "UPDATE users SET enrolledin=concat(enrolledin,',','".$trainerId."') WHERE id = '".$learnerId."'";
					if ($conn->query($sql1) === TRUE) {
				    echo "Joined Successfully !";
				   }else{
				   	echo "Error ! Please try again later !";
				   }
        }
    }
} else {
    echo "0 results";
}


					
				} else {
				    echo "Error ! Please try again later !";
				}
		}
	}else{

		if($dbenrollment[$x] == $learnerId){
		echo "You have already joined ! Kindly view training program !";
		}
		else{

//booster
$sql = "SELECT * from users where id = '".$trainerId."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['enroll'] == ""){
        	$sql = "UPDATE users SET enroll='".$learnerId."' WHERE id = '".$trainerId."'";
        }else{
        	$sql = "UPDATE users SET enroll=concat(enroll,',','".$learnerId."') WHERE id = '".$trainerId."'";
        }
    }
} else {
    echo "0 results";
}
//booster end
			// $sql = "UPDATE users SET enroll=concat(enroll,',','".$learnerId."') WHERE id = '".$trainerId."'";

			if ($conn->query($sql) === TRUE) {

// booster
$sql = "SELECT * from users where id = '".$learnerId."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['enrolledin'] == ""){
        	$sql1 = "UPDATE users SET enrolledin='".$trainerId."' WHERE id = '".$learnerId."'";
        }else{
        	$sql1 = "UPDATE users SET enrolledin=concat(enrolledin,',','".$trainerId."') WHERE id = '".$learnerId."'";
        }
    }
} else {
    echo "0 results";
}
//booster end		
				if ($conn->query($sql1) === TRUE) {
			    echo "Joined Successfully !";
			   }else{
			   	echo "Error ! Please try again later !";
			   }
			} else {
			    echo "Error ! Please try again later !";
			}
		}
	}
	
}


?>