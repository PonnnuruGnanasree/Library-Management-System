<?php 
    include("login4.php")
    ?>
<html>
	<head>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="addcouncellor.css">
    <title>Admin Page</title> 
  <style>
	input{
		margin:20px;
	}
	.nav-item{
		padding:0px;
			width:100%;
	}
	.btn1{
		width:200px;
		padding:20px;
	}
	.btn1:hover{
		background:#17a2b8;
	}
	
	.navbar ul{
		padding:0px;
		border:1px solid white;
		width:100%;
	}
  </style> 
  <script>
			function callsh()
			{
				if(document.getElementById("sh_menu").style.display=='block')
				{
					document.getElementById("sh_menu").style.display='none';
				}
				else {
					document.getElementById("sh_menu").style.display='block';
				}
			}
			function comp()
			{
				var p=document.getElementById("p_comp");
				var f=document.getElementById("f_comp");
				var i=document.getElementById("i_comp");
				if(document.getElementById('ccomp').style.display=='block')
				{
					p.style.display='none';
					document.getElementById('ccomp').style.display='none';
					f.style.display='none';
					i.style.display='none';
					
				}
				else
				{
					p.style.display='block';
					document.getElementById('ccomp').style.display='block';
					f.style.display='block';
					i.style.display='block';
					
				}
			}	 
	</script>
  </head>
  <body>
     	<nav class="navbar-nav navbar-expand-sm bg-info" style="margin:0px;padding:0px; color: #fff;">
		    <i class="fa fa-reorder" onclick="callsh()" style="cursor:pointer;font-size:24px;margin:20px 2px 0px 20px;color:white"></i>
            <div class="nav-item item1" style="margin-left:5%">                   
                <h3  style="float:left;cursor:pointer;margin:10px 2px 0px 20px;">LIBRARY MANAGEMENT SYSTEM  | Admin</h3>                                   
            </div>
            <div style="width:50%" >
                <a class="btn btn-danger" style="float:right;padding-left:30px;padding-right:30px;margin:10px;" href="index.html">Logout</a>
            </div>		
		</nav>
        <nav  class="navbar navbar1 bg-dark" style="float:left;margin:0px;display:block;padding:0px;box-shadow:.2px 1px 2px 1px;" id="sh_menu">
            <!-- Links -->
                <ul class="navbar-nav" style="width:100%;">
                                        
                <li class="nav-item">
                        <a class="btn btn-dark btn1" onclick="comp()" href="#">Dash Board</a>
                    </li>
                    <li class="nav-item"  id="p_comp" style="display:none;border-top:1.2px solid white;">
                        <a class="btn btn-dark btn1" onclick="pending()" href="add book.php">Add a book</a>
                    </li>
                    <li class="nav-item" id="ccomp" style="display:none;">
                        <a class="btn btn-dark btn1" onclick="complcomp()"href="addstudent.php">Add a student</a>
                    </li>
                    <li class="nav-item" id="f_comp" style="display:none;">
                        <a class="btn btn-dark btn1" onclick="full()"  href="viewborrowerinfo.php">View borrower INfo</p></a>
                    </li>                
                </ul>
        </nav>	
        <div id="main" class="container" style="position:relative;">
          <div id="forum" style="width:80%;margin-left:8%;background:white;margin-top:25px;float:left; border:1px solid #f4f8f8;border-radius:10px;box-shadow:2px 3px 5px 2px;">
            <form name="form" action="login4.php" onsubmit="return isvalid()" method="POST"> 
                <div style="margin:0%;">
                <h1 style="text-align:center;border-bottom:2px solid #f0f5f1;padding:12px;border-radius:2px;">Add Student</h1>
                </div>
                  <div style="margin:5%">
                       <lable>Roll Number</lable>
                       <input type="text" id="user" name="user"  placeholder="Enter the roll number" class="form-control" > 
                  </div>
                  <div style="margin:5%"> 
                      <lable>Password</lable>
                      <input type="password" id="pass" name="pass" placeholder="Create Password" class="form-control" > 
                  </div>
                      <input type="submit" id="btn" value="Add" name = "submit" class="btn btn-primary" style="padding-left:30%;padding-right:30%;margin-left:20%;">
                  </div>
            </form>
      
                 
          </div>
          </div>
	</body>
</html> 