<?php
include 'p1.php';

$delete = $_POST['delete'];

$sq1 = "DELETE FROM Pets WHERE Pet_ID=$delete";
$q1 = mysqli_query($conn, $sq1);
try {
    if ($q1) {
        echo "Deleted succesfully";
		include 'PetsDisplay.php';
    } else
        echo "Error while deleting";
} 
catch (Exception $e) {
    echo "exception occur";
}
?>