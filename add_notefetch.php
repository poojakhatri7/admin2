<?php
include 'db_connection.php'; // your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $customer_id = intval($_POST['customer_id']);

    $sql = "INSERT INTO users_notes (users_id, note, created_at) 
            VALUES ($customer_id, '$note', NOW())";

    if (mysqli_query($conn, $sql)) {
        // Return newly added note HTML snippet
        echo "
        <div class='fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed'>
          <p class='text-body-highlight mb-1'>$note</p>
          <div class='text-end'>
            <p class='text-body-tertiary text-opacity-85 mb-0'>Just now</p>
          </div>
        </div>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
