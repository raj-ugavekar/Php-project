<?php
include 'p1.php';
$Pet_ID=$_POST['id'];

$sq1 = "SELECT * FROM Pets WHERE Pet_ID=$Pet_ID";
try{
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
            while ($info = mysqli_fetch_array($q1)) {
                echo "<br>Pet Id is " . $info['Pet_ID'];
                echo "<br>Pet Type is " . $info['Pet_Type'];
                echo "<br>Pet Breed is " . $info['Pet_Breed'];
				echo "<br>Pet Color is " . $info['Pet_Color'];
				echo "<br>Pet Age is " . $info['Pet_Age'];
				echo "<br>Pet Price is " . $info['Pet_Price'];
                echo "<br>";
            }
    } else
        echo "not found";
}
catch (Exception $e) {
    echo "exception occurs";
}
?>
