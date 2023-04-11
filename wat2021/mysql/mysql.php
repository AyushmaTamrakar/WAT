<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
    <form method = "post" action = "insertRecord.php">
        <fieldset>
            <legend>Enter Customer Details</legend>
         <label for = "fname">First Name: </label>
         <input type = "text" name = "firstName" value = "" id = "fname">
         <br><br>
         <label for ="lname">Surname: </label>
         <input type = "text" name = "lastName" value = "" id = "lname">
         <br><br>
         <label for = "email">Email: </label>
         <input type = "text" name = "email" id = "email">
         <br><br>
         <label for = "pwd">Password: </label>
         <input type = "text" name = "pwd" value = "" id = "pwd">
         <br><br>
         <label for = "gender">Gender: </label>
         <select name ="gender" id= "gender" >
             <option value = "Male" >Male</option>
             <option value = "Female">Female</option>
         </select>
         <br><br>
         <label for = "age">Age: </label>
         <input type = "text" name = "age" id = "age">
         <br/><br/>
         <input type = "submit" value = "Submit" name = "subtn">
</fieldset>
</form>
 <?php
    include "selectRecord.php";
 ?><br>
 <a href="../watIndex.php">Home</a>
</body>
</html>