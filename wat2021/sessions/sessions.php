
<?php
//include init.php so session vars can be used
    include "init.php";
//Use an if statement to determine whether the session var holding 
//the user name ($_SESSION['user'] has been set. If it has, echo out 
//a welcome message for the user, followed by a links to a pages
//called protected.php and logout.php.

    if(isset($_SESSION['user'])){
        echo "Welcome ".$_SESSION['user'];
        echo '<br/>';
        echo '<a href = "protected.php">Protected</a><br/>'; 
        echo '<a href = "logout.php">Logout</a><br/>';
    }
//add an else section that will include loginform.php and display any 
//error message that is held in ($_SESSION['error']
   
elseif(isset($_SESSION['error'])) {
    echo "User is not registered! <br> You should Register it first";
    include 'loginform.php';

}
else{
    
   include 'loginform.php';
}


?>
  
