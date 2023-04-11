<?php
//include init.php
include "init.php";
//Gather details submitted from the $_POST array and store in local vars

if(isset($_POST['subLogin'])){
    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    //build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
    $query = "SELECT * FROM users WHERE userName = '$username' AND password = '$password' ";
//run query and store result
    $result = mysqli_query($connection, $query);




//check result and generate message with code below
if ($row = mysqli_fetch_assoc($result)) {
    // echo 'You are recognised!';
    $_SESSION['user'] = $username;
    header('location:sessions.php');
} 

else {
    // echo 'Not recognised!';
    $_SESSION['error']= "User not recognised";
    header ('location: sessions.php');

}

}

?>