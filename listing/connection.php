<?php  
 $db_name = "vaaratia.com";  
 $mysql_user = "root";  
 $mysql_pass = "";  
 $server_name = "localhost";  
 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  
 
 if(!$con)
 {
	 
	echo "connection failure".mysqli_connect_error();
 }
 else{
	// echo "connection succes<br>";
 }
 
?>  