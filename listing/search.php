<?php  
 require "connection.php";  
 
 $sql_query = "SELECT `area`, `location`, `address`, `rent`, `rooms`, `for_gender`, `for_occupation`, `available`, `email`, `phone`, `image` FROM `house_info` WHERE `area`='Mirpur' AND `rent` BETWEEN 5000 AND 8000;";  
 $result = mysqli_query($con,$sql_query);  
 while($row = mysqli_fetch_assoc($result) )  
 {  

 $area =$row["area"]; 
 $rent =$row["rent"]; 
 echo "Welcome ".$area.'<br>'.$rent.'<br>';
  
 }  
 
 ?>  