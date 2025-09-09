<?php
// include 'db_connection.php'; 

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $note = mysqli_real_escape_string($conn, $_POST['note']);
//     $customer_id = intval($_POST['customer_id']);

//     $sql = "INSERT INTO users_notes (users_id, note, created_at) 
//             VALUES ($customer_id, '$note', NOW())";

//     if (mysqli_query($conn, $sql)) {
    
//         echo "
//         <div class='fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed'>
//           <p class='text-body-highlight mb-1'>$note</p>
//           <div class='text-end'>
//             <p class='text-body-tertiary text-opacity-85 mb-0'>Just now</p>
//           </div>
//         </div>";
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }
?>
<?php
include 'db_connection.php'; // your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $customer_id = intval($_POST['customer_id']);

    $sql = "INSERT INTO users_notes (users_id, note, created_at) 
            VALUES ($customer_id, '$note', NOW())";

    if (mysqli_query($conn, $sql)) {
        // get the last inserted note id
        $noteId = mysqli_insert_id($conn);

        // Return newly added note HTML snippet (with delete button)
        echo "
        <div class='fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed'>
          <p class='text-body-highlight mb-1'>" . htmlspecialchars($note) . "</p>
          <div class='text-end'>
            <p class='text-body-tertiary text-opacity-85 mb-0'>Just now</p>
            <span class='delete-note' data-id='$noteId' style='cursor:pointer;'>
              <i class='fa fa-trash text-danger ms-2'></i>
            </span>
          </div>
        </div>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

