<?php
include "webapi/config/database.php";

// Assuming that you have a valid connection in the $database variable
$database = new Database();
$conn = $database->getConnection();

$stat = $_GET['stat'];

if ($stat == "Buka") {
    $stmt = $conn->prepare("UPDATE station1 SET servo = 1");
    $stmt->execute();
    echo "Buka";
} else {
    $stmt = $conn->prepare("UPDATE station1 SET servo = 0");
    $stmt->execute();
    echo "Tutup";
}
?>
