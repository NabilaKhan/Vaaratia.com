<?php  
 require "connect.php";  
 $name = $_POST["name"];
 $email =$_POST["email"];
 $username= $_POST["username"];
 $password= $_POST["password"];
 $birthMonth= $_POST["BirthMonth"];
 $birthDay= $_POST["BirthDay"];
 $birthYear= $_POST["BirthYear"];
 $gender= $_POST["gender"];
 $phone= $_POST["phone"];
 

 
 $sql_query = "insert into user_info values('$name','$email','$username','$password','$birthMonth','$birthDay','$birthYear','$gender','$phone');";  
 
 
 if(mysqli_query($con,$sql_query))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 include 'thank_you.html';
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 ?>  