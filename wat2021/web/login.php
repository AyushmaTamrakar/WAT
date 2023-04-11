<?php
    session_start();
    include "connection.php";
    if(isset($_POST['login'])){
      
            $username = $_POST['username'];
       
        $password = $_POST['password'];
        $rem = $_POST['remember'];

        
       
        $fpass = sha1($password);
        $query = "SELECT UserName, Password FROM register WHERE UserName = '$username' AND Password = '$fpass' ";
        //run query and store result
        $result = mysqli_query($connection, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            // echo 'You are recognised!';
            
            if(isset($_POST['remember'])){
            setcookie('user',$username, time()+60*60*7);
            $_SESSION['user'] = $username;
            header('location:navbar.php');}
            else{
                header('location:navbar.php');
            }
        } 
        
        else {
            // echo 'Not recognised!';
            $_SESSION['error']= "User not recognised";
           
            header ('location:register.php');
        
    }}
?>