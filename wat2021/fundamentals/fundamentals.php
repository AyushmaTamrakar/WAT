<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Applications and Technologies</title>
<link type="text/css" rel="stylesheet" href="main.css" />
</head>
<body>
<header>
<h1>Paul Doney C123457</h1>
</header>
<section id="container">
<h1>Fundamentals of PHP</h1>

<?php
echo "<h2>Selection</h2>";
date_default_timezone_set("Asia/Kathmandu");
$day = date('l'); //that is a lower case L
echo 'It\'s '.$day.".";
// echo "<hr>";
$day1 = date("Y / m / d");
echo "<br>Current Date: ".$day1;

if($day=="Wednesday"){
    echo "<br>It's midweek.";
}
else{
    echo "<br>It's not midweek.";
}
echo "<br>";
$hour = date("H:i:s");
if($hour<12){
    echo "Good Morning!";
}
else if($hour>=12 || $hour<18){
    echo "Good Afternoon!";
}
else{
    echo "Good Night!";
}
$password = "pass";
if(strLen($password) > 4 && strLen($password)<10){
    echo "<br>Password length is valid!";
}
else{
    echo "<br>Password length is invalid!";
}
$passwordCheck = "username";
if($passwordCheck == "password" || $passwordCheck == "username"){
    echo "<br>Password Invalid!";
}
else{
    echo "<br>Password valid!";
}


echo "<br><br>";
$price = 25;
    $age = 15;
    $membership = "true";
    $discount = 0;
    if($membership=="true"){
        if($age < 12 && $age > 0 ){
            $discount = 50;
        }
        elseif($age>=12 && $age<18  ){
            $discount = 25;
        }
        elseif($age>65){
            $discount = 25;
        }
        $dis = 10;
        $disamt = $price * (1-($discount/100));
        $famt = $disamt *(1-($dis/100));
        echo "<br>Initial Ticket Price : ".$price;
        echo "<br>Age: ". $age;
        echo "<br>Member: ". $membership;
        echo "<br>Final Ticket Price: ".number_format($famt,2,'.',',' );
    }
    if($membership == "false" ){
        if($age < 12 && $age > 0 ){
            $discount = 50;
        }
        elseif($age>=12 && $age<18  ){
            $discount = 25;
        }
        elseif($age>65){
            $discount = 25;
        }
    
        $disamt = $price * (1-($discount/100));
      
        echo "<br>Initial Ticket Price : ".$price;
        echo "<br>Age: ". $age;
        echo "<br>Member: ". $membership;
        echo "<br>Final Ticket Price: ".number_format($disamt,2,'.',',' );
    }

echo "<br /><br/>";


echo "<h1>Arrays</h1>";
echo "<h3>Simple Arrays</h3>";
$products = array("t-shirt","cap","mug");
print_r($products);
echo "<br>";
$products[1] = "shirt";
print_r($products);
echo "<br>";
$products[] = "skirt";
// array_push($products, "skirt");
print_r($products);
echo "<br><b>Items in my products array</b>";
echo "<br><b>The item at index [2] is: " . $products[2];
echo "<br>The item at index [3] is: " . $products[3] . "</b>";
echo "<br><h3>Associative Arrays</h3>";
$customer = array("CustID" => "12", "CustName" => "Sarah", "CustAge" => "23", "CustGender" => "F");
print_r($customer);
echo "<br>";
// $customer += "CustEmail" => "sarah@gmail.com";
$customer["CustEmail"] =   "sarah@gmail.com";
print_r($customer); 
echo "<br><b>Items in my customer array </b>";
echo "<br>The item at index [CustName] is: " . $customer["CustName"];
echo "<br>The item at index [CustEmail] is: " . $customer["CustEmail"] ;
echo "<br><h3>Multi-Dimensional Arrays</h3>";
$stock = array(
    array("t-shirt", "9.99", "100", array("blue", "green", "red")),
    array("cap", "4.99", "50", array("blue", "black", "grey")),
    array("mug", "6.99", "30",array("yellow", "green", "pink"))
);
echo "<br><b>This is my order:<br></b>";
echo $stock[0][3][1] ." ". $stock[0][0] ."<br>";
echo "Price: &#163;" . $stock[0][1];
echo "<br>" . $stock[1][3][2] . " " . $stock[1][0];
echo "<br>Price: &#163;" . $stock[1][1];
echo "<br><h1>Loops</h1>";
echo "<h3>While Loop</h3>";
$counter = 1;
while($counter < 6){
    echo "Count: " . $counter . "<br>";
    $counter++;
}
echo "<br>";
$counter = 1;
$shirtPrice = 9.99;
echo "<table border = 1 cellpadding = 6px>";
echo "<tr><th>Quantity</th><th>Price</th></tr>";
while($counter <= 10){
    $total = $counter * $shirtPrice;
    $ftotal = number_format($total,2);
    echo "<tr><td> $counter </td> <td> &#163; $ftotal</td></tr>";
    $counter++;
}
echo "</table>";
echo "<h3>For Loops</h3>";
$names = array("Peter", "Kat", "Laura", "Ali", "Popacatapetal");
for($i = 0; $i < 5; $i++){
    echo $names[$i] . "<br>";
}
echo "<h3>Foreach Loops</h3>";
$names = array("Peter" => "c123455", "Kat" => "c634523", "Laura" => "c234653", "Ali" => "c348570", "Popacatapetal" => "c4570302");
foreach($names as $key => $value){
    echo "Name: ". $key. " ID: " .$value . "<br>" ;
}
$city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
echo "<br>Before: ";
print_r($city);
echo "<br>After: ";
foreach($city as $key => $value){
   $city[$key]  = ucfirst(strtolower($value));
}
print_r($city);
echo "<h1>Extension Exercise</h1>";
echo "<h1>Some Useful Functions</h1>";
// $password = '<script>alert("You have been hacked")</script>';
$password ="password";
// $password="pass   ";




if(isset($password) && !empty($password) && strlen(trim($password)) > 6 && strlen(trim($password)) <=8 && !is_numeric($password)){ 
    
    echo "<br>Password is: " . htmlentities($password);
    echo "<br>Password OK.";
    // $md5pass = md5($password);
    $sha1pass = sha1($password);
    echo "<br>Encrypted password: " . $sha1pass;
}

else if(is_numeric($password)){
    echo "<br>Password cannot be a number.";
}
else if(empty($password)){
    echo "<br>Please enter a password";
}
else{
    echo "<br>Your password must be between 6 and 8 characters in length.";
}
 

?>
</section>
<footer>
<small> <a href="../watIndex.php">Home</a></small>
</footer>

</body>
</html>
