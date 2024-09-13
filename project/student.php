<?php 
    include("login1.php")
    ?>
<html>
	<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="admin.css">
  <title>Student Login</title>
  
  
  
  <style>
	input{
		margin-left:7px;
    margin-right :4px;
	}
  .cancel{
    width:20px;
    height: 40px;
  }

.btn{
  padding-right:10px;
}
  </style>
  </head>
  <body>
  
  
        <nav class="navbar-nav navbar-expand-sm bg-dark">
                <div class="nav-item item1" style="margin-left:5%">
                    <h2 onclick='window.location.open("index.html");' style="cursor:pointer">  LIBRARY MANAGEMENT SYSTEM</h2>
                </div>
                <div class="nav-item items" >
                <a class="nav-link" href="Admin.php">Admin</a>
                </div>
                <div class="nav-item items">
                <a class="nav-link" href="student.php">Student</a>
                </div>
                <div class="nav-item items">
                <a class="nav-link" href="aboutus.html">About</a>
                </div>
       </nav>
		<div id="pic" style="float:left;background-size:cover;position :absolute;opacity:0.7">
			<img src="image.jpg" width="100%" height="92%">
		</div>
		<div id="main" class="container" style="position:relative;">
		 
				
		<div id="forum" style="width:80%;margin-left:8%;margin-right:5%;background:white;margin-top:25px;float:left; border:1px solid #f4f8f8;border-radius:10px;box-shadow:2px 3px 5px 2px;">
			<form name="form" action="login1.php" onsubmit="return isvalid()" method="POST"> 
					<div style="margin:5%;">
					<h1 style="text-align:center;border-bottom:2px solid #f0f5f1; padding:12px;border-radius:2px;"> Student</h1>
					</div>
					<div style="margin:5%">
					<h4>Your Rollnumber
				<input type="text" id="user" name="user" required placeholder="Enter your rollnumber" class="form-control" style = "padding-right:10%;" >
				Password
				<input type="password" id="pass" name="pass" required placeholder="Enter your Password" class="form-control" ></h4>
				<input type="submit" id="btn" value="Login" name = "submit" class="btn btn-primary login" style="padding: right 10px; margin-right:5px;">
         <a href="index.html"  style="padding: right 10px; margin-right:5px;"> Cancel</a>
				</div>
			</form>
		</div>
		</div>
		
  </body>
  
  		
</html>