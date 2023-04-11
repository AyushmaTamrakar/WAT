<?php
  include "connection.php";
  if(isset($_POST['subbtn'])){
    if(empty($_POST['UserName']) && empty($_POST['Email']) && empty($_POST['Password'])&& empty($_POST['Age'])){
      $bigError ="All fields required!";
    }
    else{
    if(!empty($_POST['UserName']) && strlen(mysqli_real_escape_string($connection,$_POST['UserName'])) >= 6){
      $UserName = $_POST['UserName'];   
    }
    elseif(strlen(trim($_POST['UserName']))<6){
      $nameError = "Username should contain more than 6 characters";
    }
    else{
      $error1 = "Please enter your username!<br>";
    }
    if(!empty($_POST['Email']) && filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
      $Email= $_POST['Email'];
    }
    elseif(empty($_POST['Email'])){
      $error2 ="Email is required!<br>";
      
    }
    else{
      $emailError ="Please enter a valid email address";
    }
    if(!empty($_POST['Password']) && preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/',$_POST['Password']) ){
      $password = $_POST['Password'];
     
    }
    elseif(empty($_POST['Password'])){
      $errorPass = "Password is required!<br>";
    }
    elseif(preg_match('/(?=.*\d)(?=.*[A-Z])/',$_POST['Password'])){
      $errorPass2 = "Must contain atleast one small letter.";
    }
    elseif(preg_match('/(?=.*\d)(?=.*[a-z])/',$_POST['Password'])){
      $errorPass3 = "Must contain atleast one capital letter.";
    }
    elseif(preg_match('/(?=.*[a-z])(?=.*[A-Z])/',$_POST['Password'])){
      $errorPass4 = "Must contain atleast one number";
    }
    elseif(preg_match('/(?=.*\d)/',$_POST['Password'])){
      $errorPass5 = "Must contain atleast one small letter and one capital letter.";
    }
    elseif(preg_match('/(?=.*[A-Z])/',$_POST['Password'])){
      $errorPass6 = "Must contain atleast one small letter and a number.";
    }
    elseif(preg_match('/(?=.*[a-z])/',$_POST['Password'])){
      $errorPass7 = "Must contain atleast one capital letter and a number.";
    }
    elseif(!preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/',$_POST['Password'])){
      $errorPass1 = "Must contain atleast one capital letter, small letter and a number";
    }
    
    if(!empty( $_POST['Age']) && $_POST['Age']>=18 && $_POST['Age']<120){ 
      $Age = $_POST['Age'];
    }
    elseif(isset($_POST['Age'])==isset($_POST['default'])){
      $errorAge = "Age is required<br>";
    }
    else{
      $ageCheck="Age should be between 18 and 120<br>";
    }
    if(!empty($_POST['checkbox']) && isset($_POST['UserName']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Age'])){
      $fpass = sha1($password);
      $query = "INSERT INTO register(UserName,Email,Password,Age) VALUES ('$UserName','$Email','$fpass','$Age')";
      if(mysqli_query($connection, $query)){
          $success= '<div style="color:green" >You have been registered in our database</div>';
         
      } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
      }
    }
    else{
      $check = "<br>You must agree to terms and conditions.";
  }
  }
  }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="register.css" />
    <script
      src="https://kit.fontawesome.com/6338071364.js"
      crossorigin="anonymous"
    ></script>
   
  </head>
  <body>
   
      <nav>
        <div class="content">
          <div class="title">fragrance</div>
          <ul class="links">
            <li><a href="./navbar.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="navbar.php">Products</a></li>
            <!-- <li><a href="">Register/Login</a></li> -->
          </ul>
      </nav>
      <div class="dummy"></div>


  <!-- registration form -->
  <div class="registration">
 
    <div class="form-box">
        <div class="button-box"><div id="btn"></div>
            <button class="toggle-btn" onclick="register()" >Register</button>
            <button class="toggle-btn" onclick="login()" >Login</button>
        </div>
       
    <form action="register.php" method="post" class="form1" id="register">
        <div class="error">
       <?php if(isset($bigError)){echo $bigError;} 
       elseif(isset($success)){
         echo $success;
       }
       
       
       ?></div>
      
       
       <h1>Registration</h1>
            <label for = "userName">User Name</label>
            <input id = "userName" name = "UserName" type = "text" placeholder="Enter Username" class="input-field" value="<?php
            if(!empty($UserName)){echo $UserName;}?>">
            <div class="error"><?php if(isset($error1)){
                echo $error1;
            }
            elseif(isset($nameError)){
                echo $nameError;
            }
            ?></div>
            <br>
            <label for="email">Email </label>
            <input id="email" name = "Email" type = "text" placeholder="Enter Email" class="input-field"
            value="<?php
            if(!empty($Email)){echo $Email;}?>">
            <div class="error"><?php if(isset($error2)){
                echo $error2;}
                elseif(isset($emailError)){
                    echo $emailError;
                }
            ?></div> <br>
            <label for="pwd">Password</label>
            <input id="pwd" name="Password" type="password" placeholder="Enter Password" class="input-field" value="<?php
            if(!empty($password)){echo $password;}?>"><br>
            <div class="error"><?php if(isset($errorPass)){
                echo $errorPass;
            }
            elseif(isset($errorPass1)){
                echo $errorPass1;
            }
            elseif(isset($errorPass2)){
              echo $errorPass2;
          }
          elseif(isset($errorPass3)){
            echo $errorPass3;
        }
        elseif(isset($errorPass4)){
          echo $errorPass4;
      }
      elseif(isset($errorPass5)){
        echo $errorPass5;
    }
    elseif(isset($errorPass6)){
      echo $errorPass6;
  }
  elseif(isset($errorPass7)){
    echo $errorPass7;
}
            
            ?> </div><br>
            <label id="age">Age</label>
            <select name="Age">
              <option disabled selected name ="default" >Select an age</option>
              <?php for($i=1;$i<=120;$i++){
                    ?>
                    <option <?php if (isset($Age) && $Age==$i) echo "selected";?> 
                    value ="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
            }?>
            </select>
            
            <div class="error"><?php if(isset($errorAge)){
                echo $errorAge;
            }
            elseif(isset($ageCheck)){
                echo $ageCheck;
            }
            ?></div>
            <input type="checkbox" class="check-box" name ="checkbox" value="<?php if(isset($_POST['txtCheck'])) echo "checked='checked'"; ?> "><span>Terms and conditions</span> 
            <div class="error"><?php if(isset($check)){
                echo $check;
            }?></div>
            
            <br>
            <input type ="submit"  name ="subbtn" value="Register" class="input-field sub">
           
    </form>

    <form action="login.php" method="post" class="form1" id="login">
       <h1>Login</h1>
            <label for = "userName">User Name</label>
            <input id = "userName" name = "username" type = "text" placeholder="Enter Username" class="input-field">
            
            <label for="pwd">Password</label>
            <input id="pwd" name="password" type="password" placeholder="Enter Password" class="input-field"><br>
          
            <input type="checkbox" class="check-box" name="remember" checked ><span>Remember Me</span> 
            
            <br>
            <input type ="submit" name ="login" value="Login" class="input-field sub">
           
    </form>
</div>
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
        var x = document.getElementById("register");
        var y = document.getElementById("login");
        var z = document.getElementById("btn");

        function login(){
            x.style.left="-1000px";
            y.style.left="20px";
            z.style.left = "110px";
        }
        function register(){
            x.style.left="20px";
            y.style.left="950px";
            z.style.left = "0px";
        }

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
}
}


        </script>
  </body>
</html>
