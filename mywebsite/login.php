<?php
    if(isset($_POST['login']))
    {
    include("database.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select = mysqli_query($conn, "SELECT email,password FROM users WHERE email = '$email' AND password='$password'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
        header ("Location: servicerequestform.php");
    }
else{
    echo "Incorrect username or password";
}}
?>
<html>
    <head>
        <title>
            login
        </title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body class="body"> 

        <div class="container">
            <div class="header">
               
                <div class="navbar">
                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
                    <a href="services.php">SERVICES</a>
                    <a href="products.php">PRODUCT</a>
                    <a href="contactus.php">CONTACT US</a>
                    <a href="gallery.php">GALLERY</a>
                    <a href="company.php">COMPANY</a>
                </div>
                <button class="btn"> <a href="signup.php">ASK ENGINEER</a></button>
            </div>
                <hr>
    <div class="login-box"><h1>Login</h1>
        <form action="login.php" method="POST" >
    <div class="textbox">
        <label for="username">User Names</label>
        <input type="text" placeholder="Enter Username" name="email"><br>
    </div>
    <div class="textbox">
        <label for="password">Password</label>
        <input type="password"placeholder="Enter Password" name="password">
        
    </div>
    
    <input class="btn" type="submit" name="login" value="Login">
    <div>
    Don't have an account ? <a href="signup.php">Register here</a>
    </form>
    </div>
    </body>

</html>