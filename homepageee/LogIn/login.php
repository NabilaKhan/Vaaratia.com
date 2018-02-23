<?php  
 require "connect.php";  
 $username = $_POST["username"];  
 $password =  $_POST["password"];
 $sql_query = "select name from user_info where username like '$username' and password like '$password';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["name"];  
 include 'add_property.html';
			
 
 exit();
 
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?>  