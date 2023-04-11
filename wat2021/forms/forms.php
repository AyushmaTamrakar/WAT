<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8"/>
        <meta name = "viewport" content = "width=device-width, initial-scale=1"/>
        <title>Forms</title>
    </head>
    <body>
        <h1>Processing Input from HTML Forms</h1>
        <h2>Login Form using GET</h2>
        <form method="post" action="./forms.php">
        <fieldset>
        <legend>Login</legend>
        <label for="email">Email: </label>
        <input type="text" name="txtEmail"/><br />
        <label for="passwd">Password: </label>
        <input type="password" name="txtPass" /><br />
        <input type="submit" value="Submit" name="loginSubmit" />
        <input type="reset" value="Clear" />
</fieldset>
</form>
   <?php
   if(isset($_POST['loginSubmit'])){
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];
    echo "<br>Email: ".$email;
    echo "<br>Password: ". $password;
   }
   
   ?>
   <br/>
   <form method="post" action="">
   <fieldset>
   <legend>Comments</legend>
   <label for="">Email: </label>
   <input type="text" name="Email" value="<?php if(isset($_POST['Email'])){
       echo $_POST['Email'];
   } ?>" /><br />
   <textarea rows="4" cols="50" name="txt"><?php if(isset($_POST['txt'])){
       echo $_POST['txt']; }?>
    </textarea><br />
   <label for="">Click to Confirm: </label>
   <input type="checkbox" name="chkAgree" value="agree"><br />
   <input type="submit" value="Submit" name="subbtn"/>
   <input type="reset" value="Clear" />
   </fieldset>
   </form>
   
   <?php
   if(isset($_POST['subbtn'])){
       if(!empty($_POST['Email'])){
       $email1 = $_POST['Email'];
       $comment = $_POST['txt'];
       if(filter_var($email1, FILTER_VALIDATE_EMAIL)){
        if(isset($_POST['chkAgree'])){
            $confirm = "Agree";
        }
        else{
            $confirm = "Not Agreed";
        }
           echo "<br/>$email1 is a valid email address.";
           echo "<br/><br/>Email: ". $email1;
           echo "<br>Comments: " . $comment;
           echo "<br>Confirm: ". $confirm;
       }
       else{
           echo "$email1 is not a valid email address.";
       }
       
   
    }
    else{
        echo "<br/>Email must not be empty!";
        
    }
   }
   ?>
   <form method = "post" action = "">
        <h2>Tax Calculator</h2>
        <fieldset>
             <legend>Without TAX calculator</legend>
             <label for = "tax">After Tax Price: </label>
             <input type = "text" id = "tax" name="taxPrice"  value = "<?php if(isset($_POST['taxPrice'])){
                 echo $_POST['taxPrice'];
             } ?>" >
             <label for ="Rate"> Tax Rate: </label>
             <input type = "text" id ="Rate" name ="taxRate" value ="<?php if(isset($_POST['taxRate'])){
                 echo $_POST['taxRate'];
             } ?>">
             <input type="submit" value="Submit" name="sub_btn"/>
             <input type="reset" value="Clear" />
          </fieldset>
    </form>
    <?php
    if(isset($_POST['sub_btn'])){
        
        if(!empty($_POST['taxPrice']) && !empty($_POST['taxRate'])){
           if(preg_match('/^\d+(:?[.]\d{2})$/', $_POST['taxPrice']) && preg_match('/^\d+(:?[.]\d{2})$/',$_POST['taxRate'])){
            $afterTax = $_POST['taxPrice'];
            $taxRate = $_POST['taxRate'];
         $beforeTax = $afterTax/(1+$taxRate/100);
           echo "<br><b>Price before tax =</b> &#163;".number_format($beforeTax,2);
           
        }
        else if(!preg_match('/^\d+(:?[.]\d{2})$/',$_POST['taxPrice']) ){
            echo "<br>Please enter the price in the format 9.99.";
        }
        else if(!preg_match('/^\d+(:?[.]\d{2})$/',$_POST['taxRate'])){
            echo "<br>Please enter a whole number for tax rate.";
        }
        }
        else{
            echo "<br>All fields Required";
            
        }
    }
    ?>
    
    <!-- $_GET and URLs -->
    <br>
    <h1>Passing Data Appended to an URL</h1>
    <h2>Pick a category</h2>
    <a href = "forms.php?cat=Films">Films</a>
    <a href = "forms.php?cat=Books">Books</a>
    <a href = "forms.php?cat=Music">Music</a>
    <?php 
       if(isset($_GET['cat'])){
       $data = $_GET['cat'];
       echo "<br><br>The category chosen is ".$data .".";
       }
    ?>
    <hr/>
    <h1>Extension Exercise</h1>
    <form method = "post" action = "forms.php">
    <h2>Order Form</h2>
    <p>Please fill out this form to place your order.</p>
    <fieldset>
        <legend>Enter your login details</legend>
        <label for = "uname">User Name: </label>
        <input type = "text" name = "userName" id ="uname">
        <label for = "mail">Email: </label>
        <input type = "text" name = "uemail" id = "mail">
  </fieldset>
  <fieldset>
        <legend>Pizza Selection</legend>
        <label >Size: </label>
        <input type ="radio" name = "size" value = "small" id = "small" ><label for = "small">small</label>
        <input type ="radio" name = "size" value = "medium" id= "medium"><label for = "medium">medium</label>
        <input type ="radio" name = "size" value = "large" id= "large"><label for = "large">large</label>

        <br>
        <label for = "topping">Topping: </label>
        <select name = "topping" id = "topping">
            <option disabled selected>Please select</option>
            <option value = "seafood">Seafood</option>
            <option value = "chicken">Chicken</option>
            <option value = "bbq">BBQ Chicken</option>
            <option value = "veg">Vegetable</option>
    </select>
    <br>
    <label for = "extra">Extras: </label>
    <input type = "checkbox" id = "parmesan" value = "parmesan" name = "extra[]">
    <label for = "parmesan">Parmesan</label>

    <input type = "checkbox" id = "olives" value = "olives" name = "extra[]">
    <label for = "olives">Olives</label>

    <input type = "checkbox" id = "capers" value = "capers" name = "extra[]">
    <label for = "capers">Capers</label>
    </fieldset>
    <input type="submit" value="Submit" name="btnSub"/>
     <input type="reset" value="Clear" />
    </form>
    <?php
       if(isset($_POST['btnSub'])){
           if(!empty($_POST['userName']) && !empty($_POST['uemail']) ){
            if(filter_var($_POST['uemail'], FILTER_VALIDATE_EMAIL)){
              if(!empty($_POST['size']) && !empty($_POST['topping'])&& !empty($_POST['extra'])){
                $name = $_POST['userName'];
                $email = $_POST['uemail'];
                $size = $_POST['size'];
                $topping = $_POST['topping'];
                $extra = $_POST['extra'];
                echo "<br><h4>Thank you for your order: </h4>";
                echo "Customer ID: ". $name;
                echo "<br>Email: ". $email;
                echo "<br>Your order: ". $size . " ". $topping;
                echo "<br>Extra Toppings: " ;
                foreach($extra as $ex){
                     echo  $ex." ";
                    }
              }
              else if(empty($_POST['extra']) && !empty($_POST['size']) && !empty($_POST['topping'])){
                $name = $_POST['userName'];
                $email = $_POST['uemail'];
                $size = $_POST['size'];
                $topping = $_POST['topping'];
                echo "<br><h4>Thank you for your order: </h4>";
                echo "Customer ID: ". $name;
                echo "<br>Email: ". $email;
                echo "<br>Your order: ". $size . " ". $topping;
              }
              else{
                  echo "Please select your preference!";
              }
            }
            else{
                echo "Invalid Email";
            }
        }
              else{
                  echo "Fields empty!";
              }
           
        
       }
    ?><br><a href="../watIndex.php">Home</a>
    </body>
    
</html>
