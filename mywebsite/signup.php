<html>
    <head>
    <?php
include("database.php");
    if(isset($_POST['register']))
    {
$error="";
$email=$_POST['email'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$select = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
echo "The email already exist!";
}
else{
        $query="INSERT INTO users(username, email,phone, Password ) VALUES ('$username', '$email', '$phone', '$password')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
    }}

    
?>
        <title>
            Register
        </title>
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body class="body">
            <div class="header">
                <img src="logo.png" class="logo">
                <div class="navbar">
                    <a href="index.php">HOME</a>
                    <a href="#">SERVICES</a>
                    <a href="#">PRICING</a>
                    <a href="#">CONTACT US</a>
                    <a href="#">GALLERY</a>
                    <a href="#">COMPANY</a></div>
                </div>
        <div class="login-box"><h1>Register for free</h1>
      <form action="signup.php" method="POST"> 
    <div class="textbox">
        <label for="username">User Names</label>
        <input type="text" placeholder="Enter Username" name="username" required="required"><br>
    </div>
    <div class="textbox">
        <label for="email">Email</label>
        <input type="email"placeholder="Enter Email" name="email" required="required"><br>
        <label></label>
    </div>
    <div class="textbox">
        <label for="phone">Password</label>
        <input type="phone"placeholder="Enter Phone number" name="phone" required="required"><br>
    </div>
    <div class="textbox">
        <label for="password">Password</label>
        <input type="password"placeholder="Enter Password" name="password" required="required"><br>    
    </div>
    <div class="textbox">
        <label for="password">Re-enter Password</label>
        <input type="password"placeholder="Confrim Password" name="cpassword" required="required"><br>    
    </div>
    <input class="btn" type="submit" name="register" value="Register"><br>
</div>
<div class="textbox">
  <center>Already have an account ? <a href="login.php">Login</a></center> 
</div>
</div>
</form>
    </body>

</html>

