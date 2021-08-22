<?php
    if(isset($_POST['login']))
    {
    include("database.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select = mysqli_query($conn, "SELECT email,password FROM admin WHERE email = '$email' AND password='$password'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
        header ("Location:Admin.php");
    }
else{
    echo "Incorrect username or password";
}}
?>
<html>
    <head>
        <title>
            Admin login
        </title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body class="body"> 
                <hr>
    <div class="login-box"><h1>ADMIN </h1>
        <form action="login.php" method="POST" >
    <div class="textbox">
        <label for="email">Email:</label>
        <input type="text" placeholder="Enter Username" name="email"><br>
    </div>
    <div class="textbox">
        <label for="password">Password</label>
        <input type="password"placeholder="Enter Password" name="password">
        
    </div>
    
    <input class="btn" type="submit" name="login" value="Login">
    <div>

    </form>
    </div>
    </body>

</html>