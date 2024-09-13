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
    $bookname = $_POST['pass'];
    $lend_date = $_POST['des'];
    $stmt = $conn->prepare("SELECT * FROM bookinfo WHERE bookname = ?");
    $stmt->bind_param("s", $bookname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) 
    {
        $stmt = $conn->prepare("INSERT INTO booklend (username, bookname, lend_date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $bookname, $lend_date);
        if ($stmt->execute()) 
        {
            echo '<script>
                    alert("Book successfully borrowed!!!");
                    window.location.href = "bookabook.php";
                  </script>';
        }
    } 
    else 
    {
        echo '<script>
                alert("Book is not found!!!");
                window.location.href = "bookabook.php";
              </script>';
    }
    $stmt->close();
}

$conn->close();
?>
