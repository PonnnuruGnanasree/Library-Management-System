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
    $sql = "SELECT username, bookname, lend_date FROM booklend";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Book Name</th><th>Lend Date</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['username'] . "</td><td>" . $row['bookname'] . "</td><td>" . $row['lend_date'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}

$conn->close();
?>
