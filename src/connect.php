<?php
$conn=mysqli_connect("localhost","root","");
if($conn)
{
echo"succsefully connected to server";
}
else
{
echo"connection to server failed";
}
mysqli_close($conn);
?>