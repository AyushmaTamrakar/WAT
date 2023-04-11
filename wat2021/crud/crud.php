<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
<h1>Manage Product</h1>
<?php 
    include "displayProducts.php";
?>

    <form method = "post" action= "insertProduct.php">
        <fieldset>
            <legend>Enter New Product Details</legend>
            <label for = "productName">Product Name: </label><br/>
            <input type = "text" id = "productName" name = "ProductName"><br/><br/>
            <label for = "price">Price: </label><br/>
            <input type= "text" id= "price" name= "ProductPrice"><br/><br/>
            <label for = "image">Image Filename: </label><br/>
            <input type = "text" id = "image" name = "ProductImageName">
            <br/><br/>
            <input type="submit" value="Submit" name="subbtn"/>
             <input type="reset" value="Clear" />
</fieldset>
</form>
<a href="../watIndex.php">Home</a>
</body>
</html>