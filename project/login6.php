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
    $sql = "SELECT bookname, author, description FROM bookinfo";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Book Name</th><th>Author</th><th>Description</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['bookname'] . "</td><td>" . $row['author'] . "</td><td>" . $row['description'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}

$conn->close();
?>
