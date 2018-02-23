<?php  
 require "connect.php";
 $rent= $_POST["rent"];
 $advance= $_POST["advance"];
 $month= $_POST["month"];
 $day= $_POST["date"];
 echo $day;
 echo $month;
 echo $year;
 $year= $_POST["year"];
 $available=$day.'/'.$month.'/'.$year; 
 $area = $_POST["area"];
 $location = $_POST["location"];
 $address = $_POST["address"];
 $email =$_POST["email"];
 $name=$_POST["name"];
 $phone= $_POST["number"];
 $gender= $_POST["gender"];
 $occupation= $_POST["occupation"];
 $room_no= $_POST["room_no"];
 $filetmp = $_FILES["file_img"]["tmp_name"];
 $filename = $_FILES["file_img"]["name"];
 $filetype = $_FILES["file_img"]["type"];
 $filepath = "../p2_page3/listing/images/".$filename;
 move_uploaded_file($filetmp,$filepath);
	
	
 
 
 $sql_query = "insert into house_info values('$area','$location','$address','$rent','$advance','$room_no','$gender','$occupation','$available',
 '$email','$name','$phone','$filename');";  
 
 
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