<?php
  session_start();
   include '../db.php';
   $dbuseremail = $_REQUEST['useremail'];
   $dbuserpassword = $_REQUEST['userpassword'];

   $query = "SELECT * FROM users WHERE email ='".$dbuseremail."'";
   $result = mysqli_query($conn,$query);
   echo $query;

  if ($result->num_rows > 0) {
   
	   while($row = $result->fetch_assoc()) {
      $bpass = $row['password'];
      $bprofession = $row['profession'];
    }
    if($bpass == $dbuserpassword ){

      if($bprofession == 'Learner'){
        $_SESSION['userEmail'] = $dbuseremail;
          echo "<script>
          //alert('Logged in successfully !!'); 
        window.location='../learnerDashboard.php';
      </script>";
      }else if($bprofession == 'Trainer'){
        $_SESSION['userEmail'] = $dbuseremail;
          echo "<script>
          //alert('Logged in successfully !!'); 
        window.location='../trainerDashboard.php';
      </script>";
      }
      
      
    }
    else{
      echo "<script>alert('Enter correct password!!');
        window.location='../index.php';
      </script>";
    }
    }
    else{
      echo "<script>alert('This email address is not registered !  Go for Signup !');
        window.location='../index.php';
        </script>";
    }
    



?>