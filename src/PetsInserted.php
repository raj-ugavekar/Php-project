<?php
include 'p1.php';

$PetID = $_POST["id"];
$PetType = $_POST["type"];
$PetBreed = $_POST["breed"];
$PetColor = $_POST["color"];
$PetAge = $_POST["age"];
$PetPrice = $_POST["price"];

$q1 = "INSERT INTO Pets VALUES ('$PetID','$PetType','$PetBreed','$PetColor','$PetAge','$PetPrice')";
$r1= mysqli_query($conn,$q1);
try{
if($r1)
{
	echo "Data inserted sucessfully";
            include 'PetsDisplay.php';
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