<?php
    $url='localhost';
    $user='root';
    $psw='';
    $dbname='baza';
    $conn=mysqli_connect($url,$user,$psw,$dbname);
    if(!$conn){
        die('Could not Connect My Sql:');
    }
?>