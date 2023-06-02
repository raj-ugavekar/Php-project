<?php
$conn = mysqli_connect("localhost", "root", "", "PetShop");
try {
    if($conn)
        echo "Sucessfully Connected to database<br><br>";
    else {
        echo "error while addding data";
        exit(0);
    }
} catch (Exception $e) {
    echo "exception occur";
}
?>