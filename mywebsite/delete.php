<?php
   include("connection.php");
   
   $r = "DELETE FROM users WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($con, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($con);
   }else{
	   echo "User deleted successfly";
   }
       
   
?>