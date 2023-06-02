<?php
include 'p1.php';

$Pet_ID=$_POST['id'];
$Pet_Price=$_POST['price'];

$sq1 = "UPDATE Pets SET Pet_Price=$Pet_Price WHERE Pet_ID=$Pet_ID";
$q1=mysqli_query($conn,$sq1);

try {
    if ($q1) {
        echo "updated succesfully";
        include 'PetsDisplay.php';
    } else
        echo "error while updating data";
} catch (Exception $e) {
  echo "exception occurs";
}
?>