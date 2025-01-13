<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "feedback"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

$data = json_decode(file_get_contents("php://input"), true);

$name = $conn->real_escape_string($data['name'] ?? '');
$dishes_rating = (int)($data['dishes_rating'] ?? 0);
$service_rating = (int)($data['service_rating'] ?? 0);
$text = $conn->real_escape_string($data['text'] ?? '');
$date = $conn->real_escape_string($data['date'] ?? '');

if (empty($name) || empty($text) || $dishes_rating <= 0 || $service_rating <= 0) {
    die(json_encode(["status" => "error", "message" => "Invalid data provided"]));
}

$sql = "INSERT INTO feedback (name, dishes_rating, service_rating, text, date) 
        VALUES ('$name', $dishes_rating, $service_rating, '$text', '$date')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "New record created successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $sql . " - " . $conn->error]);
}

$conn->close();
?>

