<?php
include "db_connection.php"; // your DB connection file
$id = $_GET['id']; // or use session if needed

$sql = "SELECT * FROM users_notes WHERE users_id = $id ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

$notes = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $notes[] = $row;
    }
}

echo json_encode($notes); // return notes as JSON
?>