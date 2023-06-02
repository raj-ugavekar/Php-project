<?php
include 'p1.php';

$Food_ID=$_POST['id'];
$Food_Price=$_POST['price'];

$sq1 = "UPDATE Food_Inventory SET Food_Price=$Food_Price WHERE Food_ID=$Food_ID";
$q1=mysqli_query($conn,$sq1);

try {
    if ($q1) {
        echo "updated succesfully";
        include 'InventoryDisplay.php';
    } else
        echo "error while updating data";
} catch (Exception $e) {
  echo "exception occurs";
}
?>