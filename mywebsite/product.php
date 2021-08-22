<?php
  include("database.php");
?>

<form action="" method="post">
  <input type="text" name ="pname" placeholder="Enter the product name"/>
  <br/> 
    <input type="text" name ="brand" placeholder="Enter the price"/>
   <br/> 
   <input type="number" name ="cost" placeholder="Enter the price"/>
   <br/>
	<input type="submit" name ="submit" value="Save"/>
	<input type="submit" name ="retrieve" value="Retrieve"/>
</form>
<?php
   if(isset($_POST["submit"])){ 
        $pname=$_POST['pname'];
        $brand=$_POST['brand'];
        $cost=$_POST['cost'];

		$query= "INSERT INTO product (pname,brand,cost)VALUES ('$pname','$brand','$cost')";
		
		$r = mysqli_query($conn, $query); 
	    if(!$r){
			echo "Failed ".mysqli_error($conn);
		}else{
			echo "Product saved";
		}
   }else{
	   
	   $rqu = "SELECT * FROM product";
	   $result = mysqli_query($conn, $rqu);
	   ?>
	   <table border="1">
	     <tr>
		    <th>ID </th>
			<th>Product name </th>
            <th>Product Brand </th>
			<th>Product price </th>
			<th colspan="3">Action </th>
		</tr> 
	   <?php
	   while($r = mysqli_fetch_array($result)){
		   ?>
		   
		   <tr>
		   <td><?php echo $r['id'];?></td>
		   <td><?php echo $r['pname'];?></td>
		   <td><?php echo $r['brand'];?></td>
           <td><?php echo $r['cost'];?></td>

		   <td><a href="productDetails.php?id=<?php echo $r['id'];?>"> More </a></td>
		   <td><a href="productUpdate.php?id=<?php echo $r['id'];?>"> Update</a> </td>
		   <td><a href="productDelete.php?id=<?php echo $r['id'];?>"> Delete </a></td>
		   </tr>
	    <?php    
	   }
	   ?>
	  </table>
	  <?php
      } 
?>
