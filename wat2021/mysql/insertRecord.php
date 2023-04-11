<?php
    include 'connection.php';
    //  a.

    if(isset($_POST['subtn'])){
        if(!empty($_POST['firstName'])&& !empty($_POST['lastName'])&&!empty($_POST['email'])&&!empty($_POST['pwd'])&&!empty($_POST['gender'])&&!empty($_POST['age'])){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $query = "INSERT INTO customer(FirstName,LastName,Email,Password,Gender,Age) VALUES ('$fname','$lname','$email','$pwd','$gender','$age')";

    // echo $query;
    // exit();
    if(mysqli_query($connection, $query)){
        echo "Record inserted successfully.";
       } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
       }
    }
    else{
       
        header('Location:mysql.php');
    }
    }
?>