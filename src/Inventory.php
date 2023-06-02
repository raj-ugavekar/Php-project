<?php
$conn=mysqli_connect("localhost","root","","petShop");
if($conn)
{
echo"succsefully connected to server";
}
else
{
echo"connection to server failed";
exit();
}
$q1="CREATE TABLE Food_Inventory(Food_ID VARCHAR(5) NOT NULL,Food_Brand varchar(10) NOT NULL,Food_Type varchar(10) NOT NULL,Food_Price integer NOT NULL,PRIMARY KEY(Food_ID))";
$r1=mysqli_query($conn,$q1);
if($r1)
echo"<br>table Food Inventory created succsefully";
else
echo"<br>error in creating Product table";
mysqli_close($conn);
?>