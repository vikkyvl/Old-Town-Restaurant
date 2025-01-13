<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "feedback"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT * FROM feedback ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $reviews = [];
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
    echo json_encode($reviews);
} else {
    echo json_encode([]);
}

$conn->close();
?>
