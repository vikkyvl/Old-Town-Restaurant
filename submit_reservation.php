<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

$data = json_decode(file_get_contents("php://input"), true);

$date = $conn->real_escape_string($data['date'] ?? '');
$time = $conn->real_escape_string($data['time'] ?? '');
$people = intval($data['people'] ?? 0);
$name = $conn->real_escape_string($data['name'] ?? '');
$phone = $conn->real_escape_string($data['phone'] ?? '');

if (empty($date) || empty($time) || $people <= 0 || empty($name) || empty($phone)) {
    die(json_encode(["status" => "error", "message" => "Invalid input data"]));
}

$sql = "INSERT INTO reservations (date, time, people, name_surname, phone) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss", $date, $time, $people, $name, $phone);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Reservation created successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to create reservation"]);
}

$stmt->close();
$conn->close();
?>



