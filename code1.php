<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h3>Login Form</h3>
    <form method="POST" action=" ">
    <label>Name:</label>
    <input type="text" name="uname">
    <br>
    <label>Password</label>
    <input type="password" name="upassword">
    <br>
        <input type="submit" name="Submit">
</form>
<br>
<?php
if(isset($_POST["Submit"]))
{
    $user=$_POST['uname'];
    $pass=$_POST['upassword'];
    if($user==='admin' & $pass=== '12345')
        {
            echo"Welcome Your Submission:";
            
        }
        else 
        {
         echo"Invalid Login& password";
        }
}
?>
</body>
</html>