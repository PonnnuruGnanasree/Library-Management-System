<?php 
    include("login.php")
    ?>
    
<html>
	<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="admin.css">
  <title>Admin Login</title>
  
  
  
  <style>
	input{
		margin:7px;
	}
    body {
  overflow: hidden; /* Hide scrollbars */
} 
div{
    margin: left 10%;
}
.cancel{

height:38px;
}
.main{
  height: 600px;
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
		 
				
		<div id="forum" style="width:80%;margin-left:8%;background:white;margin-top:25px;float:left; border:1px solid #f4f8f8;border-radius:10px;box-shadow:2px 3px 5px 2px;">
			<form name="form" action="login.php" onsubmit="return isvalid()" method="POST"> 
					<div style="margin:0%;">
					<h1 style="text-align:center;border-bottom:2px solid #f0f5f1;padding:12px;border-radius:2px;">Administration</h1>
					</div>
				    <div style="margin:5%">
					     <label>Your Name</label>
				         <input type="text" id="user" name="user" required placeholder="Enter your name" class="form-control" > 
				    </div>
                    <div style="margin:5%"> 
                     <label>Password</label>
                        <input type="password" id="pass" name="pass" required placeholder="Enter your Password" class="form-control" > 
                    </div>  
                    <!-- <div class="main"> -->
                        <!-- <input type="submit" id="btn" value="Login" name = "submit" class="btn btn-primary" style="padding-left:28%;padding: right 20px;%;margin-left:7%;">
                        <a href="index.html" class="btn btn-primary cancel" style="padding-left 28px;padding-right:28px;margin-left:17px; margin: right 20px;"  > Cancel</a> -->
                        <!-- <input type="submit" id="btn" value="Login" name="submit" class="btn btn-primary">
          <a href="index.html" class="btn btn-primary">Cancel</a>
				    </div> -->


            <div>
                      <input type="submit" id="btn" value="Add" name = "submit" class="btn btn-primary" style="padding-left:30%;padding-right:30%;margin-left:20%;">
                  </div>         

           
		</div>
		</div>
		
  </body>
  
  		
</html>