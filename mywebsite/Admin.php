
<html>
<head>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .body2{
        background-image:url("licensed-image.jfif");
        background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
    .block{
        color:black;
        background-color:white;
    }
</style>
</head>
<body class="body2">
<div class="block">
        <img src="e.png" class="logo" height="80px" width="250px"> 
        <div class="block2">
            <h1>BAZA ENGINEERS IT HELP DESK SUPPORT</h1>
        </div>
    
               </div>
        <div class="container">
            <div class="header">
               
                <div class="navbar">
                   <a href="#"> <h1>ADMIN DASHBOARD</h1></a>
                </div>
                <button class="btn"> <a href="adminlogin.php">Logout</a></button></div>
                <div id="mySidenav" class="sidenav">
                    <a href="admin.php?page=home">Dashboard</a>
                    <a href="admin.php?page=service">Services</a>
                    <a href="admin.php?page=users">Clients</a>
                    <a href="admin.php?page=agents">AGENTS</a>
                    <a href="admin.php?page=product">PRODUCTS</a>
                    <a href="index.php">Visit Site</a>
</div>
<div>
</div>
</body>
</html> 

<?php
$page = isset($_GET['page']) ?$_GET['page'] : "home";
include $page.'.php';

?>


