<?php
  
   include "connection.php";
   session_start();
   if(!isset($_SESSION['user'])){
     header("location:register.php");
   }
?>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="register.php" target="_blank" >Login/Register</a></li>
                    
                    <!-- <div class="custom-select"><form method="post" action ="sort.php">
                      <select name="product" class="s">
                    <option value = "1">Products</option>
                    <option value = "2">Perfume</option>
                    <option  value = "3">Cologne</option>
                  </select> 
                  <button class="sub"  type="submit" name="prodbtn">GO</button></form></div> -->
          <div class="search-box">
            <form action="sort.php" method="post">
                <input type="input" placeholder="Search..." id="search-bar" name="search"value="<?php if(!empty($search)){ echo $search;}?>">
                <button class="go-icon"  type="submit" name="search-btn"><i class="fa fa-search"></i></button>
    </form></div>
        <li><a href="logout.php">Logout</a></li>
        </nav>
    </div>
<div class="dummy"></div>
 
<div class="msg">
  <?php
   echo "<p class= 'p'>Welcome ". $_SESSION['user']."</p>";?>
</div>

    
    <div class="sortForm">
   <h1 class="filter">Filter Search</h1>
  <form method="post" action ="sort.php">
         <select name="productfilter" >
         <option <?php if(isset($productfilter) && $productfilter=='1')echo "selected"?> value = "1">Products</option>
         <option <?php if(isset($productfilter) && $productfilter=='2')echo "selected"?> value = "2">Perfume</option>
         <option <?php if(isset($productfilter) && $productfilter=='3')echo "selected"?> value = "3">Cologne</option>
              </select> 
         <label for="Name">Name</label>
        <input type="radio" class="radio" id ="Name" name="filter" value="Name"  <?php if(isset($filter) && $filter=='Name')echo "selected"?>>
        <label for="Price">Price</label>
        <input type="radio" class="radio" id ="Price" name="filter" value="Price"  <?php if(isset($filter) && $filter=='Price')echo "selected"?>>
                  <button class="subt"  type="submit" name="filterbtn">GO</button></form></div>

                  
    <div class="gallery">
      <section class="product-list">
        <h1>Our Products</h1>
        <div class="product-container">

          <!-- product 1 -->
          <div class="card" id="pro1">
            <div class="image"><img src="image/dior.jpg" alt="J'adore" /></div>
             <div class="title">J'Adore Eau de parfum</div>
             <div class="text">
               <b>Price:</b> $1200.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 2 -->
           <div class="card" id="pro2">
         
            <div class="image"><img src="image/dior1.jpg" alt="J'adore" /></div>
            <div class="title">J'Adore Eau de toilette</div>
            <div class="text">
            <b>Price:</b> $1900.00
            </div>

            <a href="#">Buy Now</a>
          </div>
          <!-- product 3 -->
          <div class="card" id="pro3">
          
            <div class="image"><img src="image/dior2.jpg" alt="J'adore" /></div>
             <div class="title">DIOR ADDICT Eau de parfum</div> <div class="text">
             <b>Price:</b> $2900.00
            </div>

            <a href="#">Buy Now</a>
          </div>
          <!-- product 4 -->
          <div class="card" id="pro4">
           
            <div class="image"><img src="image/dior3.jpg" alt="J'adore" /></div>
             <div class="title">MISS DIOR</div><div class="text">
             <b>Price:</b>$5200.00
            </div>

            <a href="#">Buy Now</a>
          </div>
          <!-- product 5 -->
          <div class="card" id="pro5">
   
            <div class="image"><img src="image/dior4.jpg" alt="J'adore" /></div>
                    <div class="title">HYPNOTIC POISON</div> <div class="text">
                    <b>Price:</b> $120.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 6 -->
          <div class="card" id="pro6">
            
            <div class="image"><img src="image/dior5.jpg" alt="J'adore" /></div>
            <div class="title">POISON GIRL</div><div class="text">
            <b>Price:</b> $18500.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 7 -->
          <div class="card" id="pro7">
          
            <div class="image"><img src="image/dior6.jpg" alt="J'adore" /></div>
             <div class="title">PURE POISON</div> <div class="text">
             <b>Price:</b> $4200.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 8 -->
          <div class="card" id="pro8">
            
            <div class="image"><img src="image/dior7.jpg" alt="J'adore" /></div>
            <div class="title">DIOR ADDICT</div><div class="text">
            <b>Price:</b> $5200.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 9 -->
          <div class="card" id="pro9">
           
            <div class="image"><img src="image/dior8.jpg" alt="J'adore" /></div>
             <div class="title">DIORISSIMO</div><div class="text">
            <b>Price:</b> $7200.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 10 -->
          <div class="card" id="pro10">
            <div class="title">BOIS D'ARGENT</div>
            <div class="image"><img src="image/dior9.jpg" alt="J'adore" /></div>
            <div class="text">
            <b>Price:</b> $2300.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 11 -->
          <div class="card" id="pro11">
            <div class="title">PATCHOULI IMPÉRIAL</div>
            <div class="image">
              <img src="image/dior10.jpg" alt="J'adore" />
            </div>
            <div class="text">
            <b>Price:</b> $1200.00
            </div>
            <a href="#">Buy Now</a>
          </div>
          <!-- product 12 -->
          <div class="card" id="pro12">
            <div class="title">TOBACOLOR</div>
            <div class="image">
              <img src="image/dior11.jpg" alt="J'adore" />
            </div>
            <div class="text">
            <b>Price:</b> $3200.00
            </div>
            <a href="#">Buy Now</a>
          </div> 
        </div>
      </section>
    </div>
    
    <div class="bg"></div>
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