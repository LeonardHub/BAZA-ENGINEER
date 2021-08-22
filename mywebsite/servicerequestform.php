<?php
?>
<html>

<title>Service Request Form</title>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        *{
            padding:0;
            margin:0;
        }
        .division1{
            margin-top:5%;
            padding:30px 30px;
        }
        .division2{
            margin-left:5%;
            display:table;
            width:80%;
            background-color:#FFE4B5;


        }
        form{
            padding-left:20px;
        }
        .form-check-label{
            padding-top:20px;

        }
        .container{
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
.header{
    height: 15%;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
    background-color:black;
}
.logo{
    width: 10%
}
.navbar{
    text-align: center;
    flex:1;
}
.navbar a{
    padding:6px 20px;
    text-decoration: none;
    color: white;
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;

}
.btn{
    cursor: pointer;
    color: #cc0052;
    font-size: 18px;
    letter-spacing: 2px;
    padding: 10px 30px;
    border: 2px solid #003333;
    background:transparent;
    text-decoration:none;
    text-align: center;
    font-weight: bold;
    margin: 40px 18px;
}
.btn:hover{
    color: #000;
    background-color: #fff;
}
.btn a:link{
    text-decoration: none;
}
.content{
    margin-top: 40px;


}.navbar a:hover{
    background-color:lightskyblue;
}
footer{
 bottom: 0;
}
.footer-distributed{
 background-color: black;
 box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
 box-sizing: border-box;
 width: 100%;
 text-align: left;
 font: bold 16px sans-serif;
 
 padding: 55px 50px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
 display: inline-block;
 vertical-align: top;
}
 
.footer-distributed .footer-left{
 width: 40%;
}
 
.footer-distributed h3{
 color:  #ffffff;
 font: normal 36px 'Cookie', cursive;
 margin: 0;
}
 
.footer-distributed h3 span{
 color:  #5383d3;
}
 
 
.footer-distributed .footer-links{
 color:  #ffffff;
 margin: 20px 0 12px;
 padding: 0;
}
 
.footer-distributed .footer-links a{
 display:inline-block;
 line-height: 1.8;
 text-decoration: none;
 color:  inherit;
}
 
.footer-distributed .footer-company-name{
 color:  #8f9296;
 font-size: 14px;
 font-weight: normal;
 margin: 0;
}
 
 
.footer-distributed .footer-center{
 width: 35%;
}
 
.footer-distributed .footer-center i{
 background-color:  #33383b;
 color: #ffffff;
 font-size: 25px;
 width: 38px;
 height: 38px;
 border-radius: 50%;
 text-align: center;
 line-height: 42px;
 margin: 10px 15px;
 vertical-align: middle;
}
 
.footer-distributed .footer-center i.fa-envelope{
 font-size: 17px;
 line-height: 38px;
}
 
.footer-distributed .footer-center p{
 display: inline-block;
 color: #ffffff;
 vertical-align: middle;
 margin:0;
}
 
.footer-distributed .footer-center p span{
 display:block;
 font-weight: normal;
 font-size:14px;
 line-height:2;
}
 
.footer-distributed .footer-center p a{
 color:  #5383d3;
 text-decoration: none;;
}
 
.footer-distributed .footer-right{
 width: 20%;
}
 
.footer-distributed .footer-company-about{
 line-height: 20px;
 color:  #92999f;
 font-size: 13px;
 font-weight: normal;
 margin: 0;
}
 
.footer-distributed .footer-company-about span{
 display: block;
 color:  #ffffff;
 font-size: 14px;
 font-weight: bold;
 margin-bottom: 20px;
}
 
.footer-distributed .footer-icons{
 margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
 display: inline-block;
 width: 35px;
 height: 35px;
 cursor: pointer;
 background-color:  #33383b;
 border-radius: 2px;
 
 font-size: 20px;
 color: #ffffff;
 text-align: center;
 line-height: 35px;
 
 margin-right: 3px;
 margin-bottom: 5px;
}
 
 
@media (max-width: 880px) {
 
 .footer-distributed{
 font: bold 14px sans-serif;
 
 }
 
 .footer-distributed .footer-left,
 .footer-distributed .footer-center,
 .footer-distributed .footer-right{
 display: block;
 width: 100%;
 margin-bottom: 40px;
 text-align: center;
 }
 
 .footer-distributed .footer-center i{
 margin-left: 0;
 }
 .main {
 line-height: normal;
 font-size: auto;
 }}
 .block{
    background-color:none;
}

.block2{
    float: right;
    width:80%;
    text-align:left;
    margin-top:20px;
    font-weight:bold;
    font-family:
}
form{
    padding-top:20px;
    margin-left:20%;
    margin-right:50%;
    width:50%;
    height:60%;
}
form label{
    text-align:left;
    float:left;
    width:30%;
    padding-top:20px;

}
form textarea{
    width:70%;
    height:30%;
    padding-bottom:20px;
    float:right;
    margin-top:20px;
}
form input{
    width:70%;
    height:30px;
    float:left;
    margin-top:20px;
}
button{
    float:right;
    margin-top:120px;
}
.request{
    padding-top:20px;
    text-align:center;
    background-color:lightcyan;
    background-size: cover;
    background-repeat:none;
}
    </style>
</head>
<body>
<div class="block">
        
        <img src="e.png" class="logo"> 
        <div class="block2">
            <h1>BAZA ENGINEERS IT HELP DESK SUPPORT</h1>
        </div>
    
               </div>
        <div class="container">
            <div class="header">
               
                <div class="navbar">
                    <a href="index.php">HOME</a>
                    <a href="services.php">SERVICES</a>
                    <a href="contactus.php">CONTACT US</a>
                    <a href="#">GALLERY</a>
                    <a href="#">COMPANY</a>
                </div>
                <button class="btn"> <a href="logout.php">Logout</a></button></div>

                <div class="request">
                <h1> IT REQUEST FORM</h1>
                   <form action="servicerequestform.php" method="post">
                       <div>
       <label for="username"><h4>Name</h4></label>   
       <label class="red"><?php if(isset($username)) {echo $emailerr;} ?></label>         
        <input type="text" name="username" placeholder="Your Name"><br>
        <label for="username"><h4>Email</h4></label>  
        <label class="red"><?php if(isset($email)) {echo $usernameerr;} ?></label>
        <input type="email" name="email" placeholder="email@example.com"><br>
        <label for="username"><h4>Name of Service</h4></label>
        <input type="text" name="servicename" placeholder="Write subject"><br>
        <label for="username"><h4>Description</h4></label>
        <textarea name="description" placeholder="Describe your problem"> </textarea><br></div>
        <div class="button"><button type="submit" name="submit" value="Submit">SUBMIT</button></div>
        <div class="error"><label><?php if(isset($email)){echo $allerr;} ?></label></div>
    </form>
</div>

<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Baza<span> Engineer</span></h3>
 
 <p class="footer-links">
 <a href="#">Home</a>
 ·
 <a href="#">About</a>
 ·
 <a href="#">Faq</a>
 ·
 <a href="#">Contact</a>
 </p>
 
 <p class="footer-company-name">BAZAEngineer&copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>Kimironko</span> Kigali, Rwanda</p>
 </div>
 
 <div>
 <i class="fa fa-phone"></i>
 <p>+250785294603</p>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="mailto:support@company.com">contact@bazaengineer.com</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>About the company</span>
 BAZA Enginee is an online support for computer users,Electronic device technicians, Software designers &amp; Baza learner.
 </p>
 
 <div class="footer-icons">
 
 <a href="#"><i class="fa fa-facebook"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-linkedin"></i></a>
 <a href="#"><i class="fa fa-github"></i></a>
 
 </div>
 
 </div>
 
 </footer>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $usernameerr=$serviceerr=$emailerr=$descriptionerr=$allerr="";
    include_once("database.php");
    $username=$_POST['username'];
    $email=$_POST['email'];
    $service=$_POST['servicename'];
    $description=$_POST['description'];
    if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['servicename'])&&!empty($_POST['description'])){
        // email validation
        if(!preg_match("/^[a-zA-Z\s]*$/",$username)){
            $usernameerr="user name can contain only letters and spaces";
        }
        if(!preg_match("/^[a-zA-Z\s]*$/",$service)){
            $usernameerr="service name can contain only letters and spaces";
        }
        //email validation
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailerr="INVALID EMAIL";
            $sql="INSERT INTO service(servicename,description1,username,email) VALUES('$service','$description','$username','$email')";
            mysqli_query($conn,$sql);
        } 
    }
    else{
        $allerr="fill all fields";
    }
   
}
   
?>