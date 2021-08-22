
        <style>
            *{
               padding:0;
               margin:0;
            }
       .rightside{
           margin-left:20%;
           float:left;
           margin-top:10px;
          
       }
       table, th, td {
    border: 1px solid black;}

        </style>
        
<div class="rightside">
    <h2>User Details</h2>
<hr>
<?php
   include("database.php");
 $sql="select userid,username,email,phone from users";
 $result=$conn->query($sql);
 if($result->num_rows>0){
     echo "<table><tr><th>ID</TH><th>User Names</th><th>Email</th><th>Phone</th></tr>";
     while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["userid"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row['phone']."</td></tr>";
        
     }
     echo "</table>";
 }else{
     echo "0 results";
 }      
?>
</div>
