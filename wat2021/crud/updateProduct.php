<?php
    include "connection.php";
    $id = $_POST['hideProductID'];
    $productName = $_POST['txtName'];
    $productPrice = $_POST['txtPrice'];
    $image = $_POST['txtImage'];

    $query = "UPDATE products 
            SET
            ProductName = '$productName',
            ProductPrice = '$productPrice',
            ProductImageName = '$image' 
            WHERE ProductID = '$id'";

    mysqli_query($connection, $query); //run query
    header("Location: crud.php");
?>