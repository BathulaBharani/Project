<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include'db.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $address = $_POST["address"];

    $sql = "INSERT INTO 'ofo'
    ('username','password','address')
    VALUES ('$username','$password',$address')";
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="bg">
        <div class="login">
        <center><h5>LOGIN</h5></center>
        <p>User Name</p>
        <input type="text" name="user" placeholder="User Name">
        <p>Password</p>
        <input text="password" name="password" placeholder="Password">
        <p>Confirm Password</p>
        <input text="password" name="cpassword" placeholder="Enter again">
        <p>Address</p>
        <input text="text" name="address" placeholder="Address">
        
            <br><br><center> <button onclick="login()">LOGIN</button></center>
            <script>
                function login() {
                    alert("LOGGED IN");
                    location.replace("order.html");
                }
            </script>
    
        </div>
        </div>  
</body>
</html>