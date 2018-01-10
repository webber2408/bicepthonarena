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
        $dbenroll = $row['enroll'];
        $dbenroll = explode(',',trim($dbenroll));
        $_SESSION["trainerId"] = $dbid;
    }
} else {
    echo "<script>alert('Error ! Please try again later !');
        window.location='trainerDashboard.php';
      </script>";
}
$enroll = array();
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
	<title>Trainer Profile</title>
	<link rel="stylesheet" type="text/css" href="css/trainerDashboard.css">
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
<span id="heading">Bicepthon Arena (Trainer's Profile)</span>
<div class="navBtn">

<form action='php/viewLearners.php'>
<button type="submit" class="btn btn-primary">View your learners</button>
</form>
<form action='php/viewPrograms.php'>
<button type="submit" class="btn btn-success">View your programs</button>
</form>
<form action='php/logout.php'>
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</div>
</div>
<div class="container-fluid mainContainer" style="background:url(images/back1.jpeg);background-size: cover;">
    	<div class="row mainRow" >
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
					</ul><br>
                     <h3><u><b style="color:white;">Enrolled Learners</b></u></h3><br>
                    <ul class="list-group">
                    <?php
                          $sql = "SELECT * FROM users where id = '".$_SESSION['trainerId']."'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $dbdbenroll = $row['enroll'];
                                }
                            } else {
                                echo "0 results";
                            }

                            if($dbdbenroll == ""){
                                    echo "<li class='list-group-item' >No learners till now !</li>";
                            }else{
                                echo '<li class="list-group-item">';
                                for ($x = 0; $x <= sizeof($dbenroll)-1; $x++) {
                                  echo $enroll[$x];echo '<br>';
                                }
                                echo "</li>";
                            }

                    ?>
                      
                    </ul>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col2">
    				<div style="display: flex;justify-content: space-around;"><h2>Create your daywise fitness program</h2>
                    </div>
    				<div>
                    <form action="php/postProgram.php" method="post">
                       <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 1</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised1">Exercise</label>
                          <select class="form-control mainScroll" id="exercised1" name="exercised1[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd1" name="setsd1" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed1" name="totaltimed1" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 2</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised2">Exercise</label>
                          <select class="form-control mainScroll" id="exercised2" name="exercised2[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd2" name="setsd2" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed2" name="totaltimed2" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 3</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised3">Exercise</label>
                          <select class="form-control mainScroll" id="exercised3" name="exercised3[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd3" name="setsd3" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed3" name="totaltimed3" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 4</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised4">Exercise</label>
                          <select class="form-control mainScroll" id="exercised4" name="exercised4[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd4" name="setsd4" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed4" name="totaltimed4" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 5</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised5">Exercise</label>
                          <select class="form-control mainScroll" id="exercised5" name="exercised5[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd5" name="setsd5" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed5" name="totaltimed5" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 6</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised6">Exercise</label>
                          <select class="form-control mainScroll" id="exercised6" name="exercised6[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd6" name="setsd6" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed6" name="totaltimed6" required />
                        </div>
                        <!-- end of a day -->
                        <!-- start of a day -->
                         <h3 style="color:white;"><u>Day 7</u></h3>

                         <div class="form-inline">
                         
                        <div class="form-group">
                          <label for="exercised7">Exercise</label>
                          <select class="form-control mainScroll" id="exercised7" name="exercised7[]" multiple>
                            <option>Abs-Crunches</option>
                            <option>Abs-Situps</option>
                            <option>Back-barbell</option>
                            <option >Back-Dumbell Shrugs</option>
                            <option >Biceps- Curls</option>
                            <option >Biceps - Hammers</option>
                            <option>Chest - Bench Press</option>
                          </select>
                        </div>
                        <div class="form-group">
                         <label><b>Sets each</b></label>
                            <input type="text" class="form-control" placeholder="Sets each" id="setsd7" name="setsd7" required />
                        </div>
                        <div class="form-group">
                         <label><b>Total time </b></label>
                            <input type="text" class="form-control" placeholder="Total time" id="totaltimed7" name="totaltimed7" required />
                        </div>
                        <!-- end of a day -->
                        </div><br><br>
                          <button type="submit" class="btn btn-danger" name='submit'>Post program</button>
                    </form>
    				</div>
    			</div>
    	</div>
 </div>
 
</body>

</html>
