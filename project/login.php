<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "project";  
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows == 1) {
        echo 
        '<script>
            window.location.href = "afteradminlogin.html";
        </script>';
    } else {
        echo
         '<script>
            window.location.href = "admin1.php";
        </script>';
    }
    $stmt->close();
}
$conn->close();
?>
