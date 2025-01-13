<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$date = $_GET['date'] ?? '';

if (empty($date)) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT time FROM reservations WHERE date = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $date);
$stmt->execute();
$result = $stmt->get_result();

$unavailableSlots = [];
while ($row = $result->fetch_assoc()) {
    $unavailableSlots[] = $row['time']; 
}

echo json_encode($unavailableSlots);

$stmt->close();
$conn->close();
?>






