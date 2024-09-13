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
        $bookname = $_POST['user'];
        $author = $_POST['pass'];
        $des=$_POST['des'];   
        $sql = "INSERT into bookinfo (bookname, author, description)
        VALUES ('$bookname', '$author', '$des')";
        $result = mysqli_query($conn, $sql);  

        
        if($result == true){  
             echo  '<script>
                     window.location.href = "add book.php";
                    alert("Book successfully added!!!")            
                      </script>';             
        }      
    }
?>