<?php
include 'p1.php';
$Food_ID=$_POST['id'];

$sq1 = "SELECT * FROM Food_Inventory WHERE Food_ID=$Food_ID";
try{
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
            while ($info = mysqli_fetch_array($q1)) {
                echo "<br>Food Id is " . $info['Food_ID'];
                echo "<br>Food Brand is " . $info['Food_Brand'];
                echo "<br>Food Type is " . $info['Food_Type'];
				echo "<br>Food Price is " . $info['Food_Price'];
                echo "<br>";
            }
    } else
        echo "not found";
}
catch (Exception $e) {
    echo "exception occurs";
}
?>
