<?php
include 'db_connection.php';

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = intval($_POST['id']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $update = "UPDATE enquiry_message SET status = '$status' WHERE id = $id";
    if (mysqli_query($conn, $update)) {
       echo "success";
    } else {
        echo "error" . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
?>