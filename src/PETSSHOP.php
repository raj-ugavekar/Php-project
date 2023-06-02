<?php
$conn=mysqli_connect("localhost","root","");
if($conn)
{
echo"succsefully connected to server";
}
else
{
echo"connection to server failed";
exit();
}
$q1="CREATE DATABASE PetShop";
$r1=mysqli_query($conn,$q1);
if($r1)
echo"<br>database PetShop created succsefully";
else
echo"<br>error in creating databse";
mysqli_close($conn);
?>