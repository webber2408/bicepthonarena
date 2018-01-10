<!DOCTYPE html>
<html>
<head>
	<title>Hackathon</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
<div class="header">
<span id="heading">Bicepthon Arena</span>
<div class="navBtn">
<button type="button" class="btn btn-primary" data-target='#learnerloginModal' data-toggle='modal'>Learner Login</button>
<button type="button" class="btn btn-primary" data-target='#trainerloginModal' data-toggle='modal'>Trainer Login</button>
<button type="button" class="btn btn-success" data-target='#registerModal' data-toggle='modal'>Register</button>
</div>
</div>
<!-- learner login modal start -->
<div class="modal fade" id="learnerloginModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<div class="modal-header" style="color:white;">
  	<h2><b>Login<b></h2>
  	</div>
    <div class="modal-content" i style="padding: 40px;">
      		<form action="php/login.php" method="POST" id="registerForm">
      					
						<div class="form-group">
						 <label><b>Email</b><sup><span class="aster">&#10033;</span></sup></label>
				      		<input type="text" class="form-control" placeholder="Email" id="luseremail" name="useremail" required />
				      	</div>
				      

				      	<div class="form-group">
				         <label><b>Password</b><sup><span class="aster">&#10033;</span></sup></label>
		    				<input type="password" class="form-control" placeholder="Enter Password" name="userpassword" required>
		    		    </div>
				      <button type="submit" class="btn btn-primary" name='submit'>Login</button>&nbsp;&nbsp;
				    </form>
    </div>
  </div>
</div>
<!-- learner login modal end -->
<!--  trainer login modal start -->
<div class="modal fade" id="trainerloginModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<div class="modal-header" style="color:white;">
  	<h2><b>Login<b></h2>
  	</div>
    <div class="modal-content" i style="padding: 40px;">
      		<form action="php/login.php" method="POST" id="registerForm">
      					
						<div class="form-group">
						 <label><b>Email</b><sup><span class="aster">&#10033;</span></sup></label>
				      		<input type="text" class="form-control" placeholder="Email" id="luseremail" name="useremail" required />
				      	</div>
				      

				      	<div class="form-group">
				         <label><b>Password</b><sup><span class="aster">&#10033;</span></sup></label>
		    				<input type="password" class="form-control" placeholder="Enter Password" name="userpassword" required>
		    		    </div>
				      <button type="submit" class="btn btn-primary" name='submit'>Login</button>&nbsp;&nbsp;
				    </form>
    </div>
  </div>
</div>
<!-- trainer login modal end -->
<!-- register modal start -->
<div class="modal fade" id="registerModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<div class="modal-header" style="color:white;">
  	<h2><b>Registration<b></h2>
  	</div>
    <div class="modal-content" i style="padding: 40px;">
      		<form action="php/register.php" method="POST" id="registerForm">
      					<div class="form-group">
						 <label><b>Name</b><sup><span class="aster">&#10033;</span></sup></label>
				      		<input type="text" class="form-control" placeholder="Name" id="username" name="username" required />
				      	</div>
						<div class="form-group">
						 <label><b>Email</b><sup><span class="aster">&#10033;</span></sup></label>
				      		<input type="text" class="form-control" placeholder="Email" id="useremail" name="useremail" required />
				      	</div>
				      	<div class="form-group">
						  <label for="gender">Gender<sup><span class="aster">&#10033;</span></sup></label>
						  <select class="form-control" name="gender" id="gender" required>
						  	<option></option>
						  	<option>Male</option>
						  	<option>Female</option>
						  </select>
						</div>
				      	<div class="form-group">
						  <label for="agegroup">Age-Group<sup><span class="aster">&#10033;</span></sup></label>
						  <select class="form-control" name="agegroup" id="agegroup" required>
						  	<option></option>
						  	<option>15-20 yrs</option>
						  	<option>20-30 yrs</option>
						  	<option>30-40 yrs</option>
						  	<option>40-50 yrs</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="profession">User Type<sup><span class="aster">&#10033;</span></sup></label>
						  <select class="form-control" name="profession" id="profession" required>
						  	<option></option>
						  	<option>Learner</option>
						  	<option>Trainer</option>
						  	
						  </select>
						</div>

				      	<div class="form-group">
				         <label><b>Password</b><sup><span class="aster">&#10033;</span></sup></label>
		    				<input type="password" class="form-control" placeholder="Enter Password" name="userpassword" required>
		    		    </div>
				      <button type="submit" class="btn btn-primary" name='submit'>Register</button>&nbsp;&nbsp;
				    </form>
    </div>
  </div>
</div>
<!-- register modal end -->
<div class="container-fluid">
	<div class="row mainRow" style="background:url(images/back.jpeg);background-size: cover;">
	<!-- <iframe src="https://giphy.com/embed/lbHx8qog3tmGQ" width="480" height="320" frameBorder="0" class="giphy-embed giphy" allowFullScreen></iframe><br>
	<iframe src="https://giphy.com/embed/M5E0Gkfw6uNt6" width="480" height="319" frameBorder="0" class="giphy-embed giphy" allowFullScreen></iframe> -->
	<div class="col col-lg-4 col-sm-12 col-xs-12 col-md-4" style="background:url(images/pop.jpg);background-size: cover;height: 100%;">
	</div>
	</div>
	<div class="hover container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-xs-10 col-sm-10 col-lg-offset-4 right-col ">
			<div class="jumbotron maingiph" style="background-color: rgba(0,0,0,0.4);">
			     <h2 style="color:blue;">Popeye the sailor man!</h2>
			    <p ><h3 style="color:white;">" I'm strong to the finish, 'cause I eats me Spinach, I'm Popeye the sailor man! "<h3></p>
			  </div>

		</div>
		<div class="col-lg-8 col-md-8 col-xs-10 col-sm-10 col-lg-offset-4 right-col1">
			<div class="jumbotron maingiph" style="background-color: rgba(0,0,0,0.4);">
			    <h2 style="color:blue;">Get ready .... Here I am , Bluto !</h2>
			    <p><h3 style="color:white;">" Okay, shorty, from now on the Oyls is gonna be double taxed. Triple taxed. Quadruple taxed! Surtaxed! Exercised taxed! Overtaxed! And, thumb taxed! "<h3></p>
			  </div>
			  
		</div>
	</div>
	</div>
</div>
</body>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Welcome user !</h4>
      </div>
      <div class="modal-body" style="font-size: 18px;">
        <p>Bicepthon arena is a portal designed to help learners get trained by joining a particular trainer !<br> 
PS: Bluto can now easily learn to gym and defeat Popeye !!</p>
				<p>
				<span style="color:blue">Test Learner ID : </span>&nbsp;&nbsp;rahul@gmail.com<br>
				<span style="color:blue">Test Learner Password : </span>&nbsp;&nbsp;rahul123<br>
				</p>
				<br>
				<p>
				<span style="color:blue">Test Trainer ID : </span>&nbsp;&nbsp;mukesh@gmail.com<br>
				<span style="color:blue">Test Trainer Password : </span>&nbsp;&nbsp;mukesh123<br>
				</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</html>