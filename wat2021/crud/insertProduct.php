<?php
include "connection.php";
if(isset($_POST['subbtn'])){
    $productName = $_POST['ProductName'];
    $productPrice = $_POST['ProductPrice'];
    $image = $_POST['ProductImageName'];

    $query = "INSERT INTO products (ProductName, ProductPrice, ProductImageName)
    VALUES ('$productName', '$productPrice', '$image')
    ";

    mysqli_query($connection, $query);

    header("Location: {$_SERVER['HTTP_REFERER']}"); //goes back to calling page
}
?>