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
$q1="CREATE TABLE Pets(Pet_ID VARCHAR(5) NOT NULL,Pet_Type varchar(10) NOT NULL,Pet_Breed varchar(10) NOT NULL,Pet_Color varchar(10) NOT NULL,Pet_Age integer NOT NULL,Pet_Price integer NOT NULL,PRIMARY KEY(Pet_ID))";
$r1=mysqli_query($conn,$q1);
if($r1)
echo"<br>table Pets created succsefully";
else
echo"<br>error in creating Product table";
mysqli_close($conn);
?>