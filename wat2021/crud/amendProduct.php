<?php
    include "connection.php";
    $id = $_GET['prodid'];

    $query = "SELECT * FROM products WHERE ProductID = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result); //select row for amending and details to populate form below

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "updateProduct.php">
        <fieldset>
            <legend>Enter Product Details</legend>
            <input type="hidden" name="hideProductID" value="<?php echo $row['ProductID']?>" /> 
            <label for = "pname">Product Name:</label>
            <input type = "text" id = "pname" value ="<?php echo $row['ProductName']?>" name = "txtName">
            <br/><br/>
            <label for ="price">Price: </label>
            <input type = "text" id = "price" value="<?php echo $row['ProductPrice']?>" name="txtPrice" >
            <br/><br/>
            <label for = "image">Image Filename: </label>
            <input type = "text" id = "image" value = "<?php echo $row['ProductImageName']?>" name= "txtImage">
            <br/>
        </fieldset>
        <input type="submit" value="Submit" name="subAmend"/>
             <input type="reset" value="Clear" />
    </form>
</body>
</html>