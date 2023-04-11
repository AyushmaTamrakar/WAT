<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/6338071364.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sort.css" />
</head>
<body>

    <div class="wrapper">
        <nav>
           
            <div class="content">
                <div class="title">fragrance</div>
                <ul class="links">
                    <li><a href="navbar.php"  >Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="register.php" target="_blank" >Login/Register</a></li>
                    
                   
          <!-- <div class="search-box">
            <form action="" method="post">
                <input type="input" placeholder="Search..." id="search-bar" name="search" value="<?php if(!empty($search)){ echo $search;}?>">
                <button class="go-icon"  type="submit" name="search-btn"><i class="fa fa-search"></i></button>
    </form></div> -->
    <li><a href="logout.php">Logout</a></li>
        </nav>
    </div>
<div class="dummy"></div>



<div class="re">
<?php
    include "connection.php";
    if(isset($_POST['filterbtn'])){
      if(isset($_POST['productfilter']) && isset($_POST['filter'])){
        if($_POST['productfilter']=='2' && $_POST['filter']=='Name'){
          echo "<h1 class='head'>Our Perfumes</h1>";
            $name = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='1' AND Name = $name ORDER BY Name";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
        if($_POST['productfilter']=='2' && $_POST['filter']=='Price'){
          echo "<h1 class='head'>Our Perfumes</h1>";
            $price = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='1' AND Price = $price ORDER BY Price";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
        if($_POST['productfilter']=='3' && $_POST['filter']=='Name'){
          echo "<h1 class='head'>Our Cologne</h1>";
            $name = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='2' AND Name = $name ORDER BY Name";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
        if($_POST['productfilter']=='3' && $_POST['filter']=='Price'){
          echo "<h1 class='head'>Our Cologne</h1>";
            $price = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='2' AND Price = $price ORDER BY Price";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
        if($_POST['productfilter']=='1' && $_POST['filter']=='Name'){
          echo "<h1 class='head'>Our Perfumes</h1>";
            $name = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE  Name = $name ORDER BY Name";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
        if($_POST['productfilter']=='1' && $_POST['filter']=='Price'){
          echo "<h1 class='head'>Our Perfumes</h1>";
            $price = $_POST['filter'];
            $query= "SELECT Name, Price, Image FROM fragrance WHERE  Price = $price ORDER BY Price";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
        }
      }
      elseif(isset($_POST['productfilter'])){
        if($_POST['productfilter']=="1"){
    echo "<h1 class='head'>Our Products</h1>";
    $query= "SELECT Name, Price, Image FROM fragrance ";
     $result = mysqli_query($connection,$query);
     echo "<table cellpadding =20px border= 5px>";
      echo"<tr>";
      echo"<th>Product Name</th>";
          echo"<th>Product Price</th>";
          echo"<th>Image</th>";
      
      echo"</tr>";
 
      while($row= mysqli_fetch_assoc($result)){
          
          echo "<tr>";
          echo "<td>".$row['Name']."</td>";
          echo "<td>".$row['Price']."</td>";
         
          echo "<td>";
          echo'<img src= "./image/'.$row['Image'].'">';
          echo"</td>";
         
          echo "</tr>";
      }
echo"</table><br/><br/>";
    }
    if($_POST['productfilter']=="2"){
        echo "<h1 class='head'>Our Perfumes</h1>";
        $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='1'";
         $result = mysqli_query($connection,$query);
         echo "<table cellpadding =20px border= 5px>";
          echo"<tr>";
          echo"<th>Product Name</th>";
              echo"<th>Product Price</th>";
              echo"<th>Image</th>";
          
          echo"</tr>";
     
          while($row= mysqli_fetch_assoc($result)){
              
              echo "<tr>";
              echo "<td>".$row['Name']."</td>";
              echo "<td>".$row['Price']."</td>";
             
              echo "<td>";
              echo'<img src= "./image/'.$row['Image'].'">';
              echo"</td>";
             
              echo "</tr>";
          }
  echo"</table><br/><br/>";
        }

        if($_POST['productfilter']=="3"){
            echo "<h1 class='head'>Our Cologne</h1>";
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='2'";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
            }
}
    }
  


   
    if(isset($_POST['search-btn'])){
       if(!empty($_POST['search']) ){
        $search = htmlentities($_POST['search']);
        $query= "SELECT Name, Price, Image FROM fragrance WHERE lower(Name)='$search'";
        
         $result = mysqli_query($connection,$query);
         $count = mysqli_num_rows($result);
         if( $count<= 0){
                echo '<span class="error">No results found</span>';
               
        }
        else{
             echo "<table cellpadding =20px border= 5px>";
            echo"<tr>";
            echo"<th>Product Name</th>";
            echo"<th>Product Price</th>";
            echo"<th>Image</th>";
          echo"</tr>";
          while($row= mysqli_fetch_assoc($result)){
              
              echo "<tr>";
              echo "<td>".$row['Name']."</td>";
              echo "<td>".$row['Price']."</td>";
             
              echo "<td>";
              echo'<img src= "./image/'.$row['Image'].'">';
              echo"</td>";
              }
              echo "</tr>";
         
            echo"</table><br/><br/>";
        }
    
      
    }
    else{
        header('Location: navbar.php');
    }
}
    
    if(isset($_POST['prodbtn'])){
        if(isset($_POST['product'])){
            if($_POST['product']=="1"){
        echo "<h1 class='head'>Our Products</h1>";
        $query= "SELECT Name, Price, Image FROM fragrance ";
         $result = mysqli_query($connection,$query);
         echo "<table cellpadding =20px border= 5px>";
          echo"<tr>";
          echo"<th>Product Name</th>";
              echo"<th>Product Price</th>";
              echo"<th>Image</th>";
          
          echo"</tr>";
     
          while($row= mysqli_fetch_assoc($result)){
              
              echo "<tr>";
              echo "<td>".$row['Name']."</td>";
              echo "<td>".$row['Price']."</td>";
             
              echo "<td>";
              echo'<img src= "./image/'.$row['Image'].'">';
              echo"</td>";
             
              echo "</tr>";
          }
  echo"</table><br/><br/>";
        }
        if($_POST['product']=="2"){
            echo "<h1 class='head'>Our Perfumes</h1>";
            $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='1'";
             $result = mysqli_query($connection,$query);
             echo "<table cellpadding =20px border= 5px>";
              echo"<tr>";
              echo"<th>Product Name</th>";
                  echo"<th>Product Price</th>";
                  echo"<th>Image</th>";
              
              echo"</tr>";
         
              while($row= mysqli_fetch_assoc($result)){
                  
                  echo "<tr>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Price']."</td>";
                 
                  echo "<td>";
                  echo'<img src= "./image/'.$row['Image'].'">';
                  echo"</td>";
                 
                  echo "</tr>";
              }
      echo"</table><br/><br/>";
            }

            if($_POST['product']=="3"){
                echo "<h1 class='head'>Our Cologne</h1>";
                $query= "SELECT Name, Price, Image FROM fragrance WHERE Category ='2'";
                 $result = mysqli_query($connection,$query);
                 echo "<table cellpadding =20px border= 5px>";
                  echo"<tr>";
                  echo"<th>Product Name</th>";
                      echo"<th>Product Price</th>";
                      echo"<th>Image</th>";
                  
                  echo"</tr>";
             
                  while($row= mysqli_fetch_assoc($result)){
                      
                      echo "<tr>";
                      echo "<td>".$row['Name']."</td>";
                      echo "<td>".$row['Price']."</td>";
                     
                      echo "<td>";
                      echo'<img src= "./image/'.$row['Image'].'">';
                      echo"</td>";
                     
                      echo "</tr>";
                  }
          echo"</table><br/><br/>";
                }
    }
    }
   

 
   
?>
</div>

 <!-- footer -->
 <footer>
      <div class="container">
        <div class="first box">
          <h2>Additional Links</h2>
          <p class="link">
            <a href="aboutus.html">About Us</a>
            <a href="aboutus.html#policy">Privacy Policy</a>
            <a href="product.html">Products</a>
            <a href="aboutus.html">Legal terms and conditions</a>
          </p>
        </div>
        <div class="second box">
          <h2>Contact Us</h2>
          <p class="link">
            <a
              href="https://www.google.com/maps/place/Sherpa+Mall/@27.7105497,85.3156752,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19015ce34aa3:0x833d1f9f02d0db2d!8m2!3d27.710545!4d85.3178639"
              ><i class="fas fa-map-marker-alt"></i>Kathmandu,Nepal</a
            >
            <a href="tel:+9770913582040"
              ><i class="fas fa-phone"></i>+9770913582040</a
            >
            <a href="tel:+9770913582040"
              ><i class="fas fa-phone"></i>+9770913582040</a
            >

            <a href="mailto:fragrance@gmail.com"
              ><i class="far fa-envelope"></i>frag@gmail.com</a
            >
          </p>
        </div>
        <div class="third box">
          <h2>Follow Us</h2>
          <p class="link">
            <a href="https://www.facebook.com/"
              ><i class="fab fa-facebook-f"></i>Facebook
            </a>
            <a href="https://www.instagram.com/"
              ><i class="fab fa-instagram"></i>Instagram</a
            >
            <a href="https://www.youtube.com/"
              ><i class="fab fa-youtube"></i>Youtube
            </a>
            <a href="https://twitter.com/?lang=en"
              ><i class="fab fa-twitter"></i>Twitter
            </a>
          </p>
        </div>

        <div class="fourth box">
          <h2>Join Our NewsLetter</h2>
          <p>Sign up to receive exclusive updates and content</p>
          <input
            type="email"
            id="footer-email"
            placeholder="*Your email address"
          />
          <button type="submit" id="footer-email-btn">OK</button>
          <p id="Demo"></p>
        </div>
        <div class="bottom box">&copy; fragrance. All Rights Reserved.</div>
      </div>
    </footer>

    <script>
       

        document.getElementById("footer-email-btn").addEventListener("click", validate);
function validate(){
    var mail= document.getElementById("footer-email").value;
    var regx = /^([a-zA-Z0-9\.]+)@([a-zA-Z0-9]+).([a-z]{2,20})(.[a-zA-Z]{2,4})?$/
    if(regx.test(mail)){
    document.getElementById("Demo").innerHTML = "You have successfully subscribed to our newsletter";
    document.getElementById("Demo").style.visibility="visible";
    return true;
}
else if(mail===""){
    document.getElementById("Demo").innerHTML="Please enter your email address."
    document.getElementById("Demo").style.visibility="visible";
}
else{
    document.getElementById("Demo").innerHTML = "Invalid email address. Please enter a valid email address.";
    document.getElementById("Demo").style.visibility="visible";
    return false;
}</script>
</body>
</html>