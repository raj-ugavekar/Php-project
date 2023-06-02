<?php
include 'p1.php';

$FoodID = $_POST["id"];
$FoodBrand = $_POST["brand"];
$FoodType = $_POST["type"];
$FoodPrice = $_POST["price"];

$q1 = "INSERT INTO Food_Inventory VALUES ('$FoodID','$FoodBrand','$FoodType','$FoodPrice')";
$r1= mysqli_query($conn,$q1);
try{
if($r1)
{
	echo "Data inserted sucessfully";
            include 'InventoryDisplay.php';
        }
        else{
            echo "Error while addding data";
    }
}
    catch (Exception $e)
    {
        echo "exception occur";
    }
?>