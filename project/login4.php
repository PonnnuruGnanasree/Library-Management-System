<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db_name = "project";  
        $conn = new mysqli($servername, $username, $password, $db_name);
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        echo " ";

    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
           
        $sql = "INSERT into student (username, password)
        VALUES ('$username', '$password' )";
        $result = mysqli_query($conn, $sql);  
        
        
        if($result == true){  
             echo  '<script>
                     window.location.href = "addstudent.php";
                    alert("Student successfully added!!!")            
                      </script>';             
        }      
    }
?>