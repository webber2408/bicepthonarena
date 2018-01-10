<?php
session_start();
include 'db.php';
if(!isset($_SESSION['userEmail'])){
   echo "<script>alert('Please login !');
   //window.location='index.php';
   </script>";
}else{
  
    $email = $_SESSION['userEmail'];
}

$sql = "SELECT * FROM users where email = '".$email."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dbname = $row['name'];
        $dbemail = $row['email'];
        $dbid = $row['id'];
        $dbagegroup = $row['agegroup'];
        $dbprofession = $row['profession'];
        $dbgender = $row['gender'];
        $dbenroll = $row['enrolledin'];
        $_SESSION["learnerId"] = $dbid;
    }
} else {
    echo "<script>alert('Error ! Please try again later !');
        window.location='learnerDashboard.php';
      </script>";
}

// echo $dbenroll;
$enroll = array();
$dbenroll = explode(',',trim($dbenroll));
//echo "<script>alert('".print_r($dbenroll)."'');</script>";
for ($x = 0; $x <= sizeof($dbenroll)-1; $x++) {
    //echo $dbenroll[$x];echo '<br>';
    $sql = "SELECT * FROM users where id = '".$dbenroll[$x]."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($enroll,$row['name']);
    }
  }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Learner Profile</title>
	<link rel="stylesheet" type="text/css" href="css/learnerDashboard.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
<span id="heading">Bicepthon Arena (Learner's Profile)</span>
<div class="navBtn">
<form action='php/logout.php'>
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</div>
</div>
<div class="container-fluid mainContainer" style="background:url(images/back1.jpeg);background-size: cover;">
    	<div class="row mainRow">
    		<div class="jumbotron profileJumbo" style="margin-top: 80px;">
			    <h3><?php echo $dbname; ?> , we welcome you to your own personal profile page !</h3> 
			  </div>
    	</div>
    	<div class="row profileRow">
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col1">
    				<ul class="list-group">
					  <li class="list-group-item" style="background-color: #515279;"><pre style="overflow:hidden;"><b style="color:darkblue;">Name</b> <span id="name"><?php echo $dbname; ?></span></li></pre>
					  <li class="list-group-item"><b class="fields">Email</b><span id="email"><?php echo $dbemail; ?></span></li>
					  <li class="list-group-item"><b class="fields">Gender</b><span id="gender"><?php echo $dbgender; ?></span></li>
					  <li class="list-group-item"><b class="fields">User-Type</b><span id="profession"><?php echo $dbprofession; ?></span></li>
					  <li class="list-group-item"><b class="fields">Age-Group</b><span id="agegroup"><?php echo $dbagegroup; ?></span></li>
					</ul>
                    <h3><u><b style="color:white;">Your trainers</b></u></h3><br>
                    <ul class="list-group">

                    <?php

                            $sql = "SELECT * FROM users where id = '".$_SESSION['learnerId']."'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $dbdbenroll = $row['enrolledin'];
                                }
                            } else {
                                echo "0 results";
                            }

                            if($dbdbenroll == ""){
                                    echo "<li class='list-group-item' >No trainers till now ! Please join !</li>";
                            }else{
                                for ($x = 0; $x <= sizeof($dbenroll)-1; $x++) {
                                                        //echo '<div style="display:flex;justify-content:space-between"';
                                                        echo '<li class="list-group-item" style="display:flex;justify-content:space-between">';
                                                        echo '<h4>'.$enroll[$x].'</h4>';
                                                        echo '<button class="btn btn-success btn-sm" name="'.$dbenroll[$x].'" onclick="clicked(this.name);">View Training</button>';
                                                        echo '</li>';
                                    } 
                            }
                    ?>
                        </li>
                    </ul>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col2">
    				<h2 style="color:white;">Active fitness programs by Trainers</h2>
    				<div class="queueCard">
                        <?php
                        $sql = "SELECT * FROM users where profession = 'Trainer'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $dbname = $row['name'];
                                $dbemail = $row['email'];
                                $dbid = $row['id'];
                                $dbagegroup = $row['agegroup'];
                                $dbprofession = $row['profession'];
                                $dbgender = $row['gender'];
                                
                               //echo $dbname;
                               echo "<div class='stagingQueue' style='width:100%;
                        padding: 5px;
                        background-color: aliceblue;
                        height:100px;
                        margin-bottom:10px;
                        padding-top:30px;
                        margin-bottom: 5px; box-shadow:2px 2px 2px black;'>";
                                echo "<div style='display:flex;justify-content:space-between;'>
                                        <div>
                                        <b>Trainer Name:</b>&nbsp;&nbsp;".$dbname."<br>
                                        <b>Email:</b>&nbsp;&nbsp;".$dbemail."
                                        </div>
                                        <a class='btn btn-danger' name='".$dbid."%".$_SESSION['learnerId']."' onclick='joinTrainer(this.name);' style='height:40px;'>Join</a>&nbsp;&nbsp;<br>
                                     </div>
                                      </div>";
                            
                            }
                        } else {
                            echo "<script>alert('Error ! Please try again later !');
                                window.location='learnerDashboard.php';
                              </script>";
                        }
                        ?>
    				</div>
    			</div>
    	</div>
 </div>

<script type="text/javascript">
    function clicked(trainerId){
        //this.preventDefault();
        // var iframe = document.getElementById("mainFrame");
        // iframe.src = "docs/"+filename;
        // alert(filename);
        

        var params = "trainerId="+trainerId;
                  var xhr = new XMLHttpRequest();
                  xhr.open('POST','php/viewTrainerprogramajax.php',true);
                  xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                  // console.log(xhr);
                  xhr.onload = function(){
                    // alert(this.status);
                    // alert(this.readyState);
                     if(this.status == 200 && this.readyState == 4){
                        // alert(document.getElementById("textarea"));

                        window.location='php/viewTrainerprogram.php';
                        // document.getElementById("textarea").innerHTML = this.responseText;
                        // document.getElementById("tfname").innerHTML = filename;
                        // alert("File opened successfully ! Please check down or toggle !");
                    }
                  }

                  xhr.send(params);
    }

    function joinTrainer(trainerId){
        //this.preventDefault();
        // var iframe = document.getElementById("mainFrame");
        // iframe.src = "docs/"+filename;
        // alert(filename);
        

        var params = "trainerId="+trainerId;
                  var xhr = new XMLHttpRequest();
                  xhr.open('POST','php/joinTrainer.php',true);
                  xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                  // console.log(xhr);
                  xhr.onload = function(){
                    // alert(this.status);
                    // alert(this.readyState);
                     if(this.status == 200 && this.readyState == 4){
                        alert(this.responseText);

                        window.location='learnerDashboard.php';
                        // document.getElementById("textarea").innerHTML = this.responseText;
                        // document.getElementById("tfname").innerHTML = filename;
                        // alert("File opened successfully ! Please check down or toggle !");
                    }
                  }

                  xhr.send(params);
    }
</script>
 <div class="footer">
    v 1.1.0 | Designed & Developed by Rahul Sharma (www.rahul-sharma.org)
    </div>
</body>
</html>
