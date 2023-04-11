<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 90px;
            width:90px;
        }
        table,th{
            border :none;
        }
        </style>
</head>
<body>
    <?php
    include "connection.php";
  
    $query = "SELECT * FROM products";
    //run query and store result
    $result = mysqli_query($connection,$query);
    echo "<table cellpadding =20px border= 5px>";
        echo"<tr>";
        echo"<th>Product Name</th>";
            echo"<th>Price</th>";
            echo"<th>Image</th>";
            echo"<th>Amend</th>";
            echo"<th>Delete</th>";
        echo"</tr>";
   
        while($row= mysqli_fetch_assoc($result)){
            
            echo "<tr>";
            echo "<td>".$row['ProductName']."</td>";
            echo "<td>".$row['ProductPrice']."</td>";
            echo "<td>";
            echo'<img src= "./images/'.$row['ProductImageName'].'">';
            echo"</td>";
            echo "<td>".'<a href="amendProduct.php?prodid='.$row['ProductID'].'">Amend</a>'."</td>";
            echo "<td>".'<a href ="deleteProduct.php?prodid='.$row['ProductID'].'">Delete</a>'."</td>";
            echo "</tr>";
        }
echo"</table><br/><br/>";
?>
</body>
</html>