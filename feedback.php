<?php
include "connection.php";

$names=$_POST["names"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
	

	$sql="INSERT INTO feedback (f_name,f_email,mobile,message)values('$names','$email','$phone','$subject')";
if($con->query($sql)==TRUE){

	
echo "<h1 style='color:teal'align='center'>You message delivered successfully</h1><p align='center'><a href='index.html'><img src='images/hp.GIF'width='200'height='100'></p></a>"; 
}else{
	echo "Error:".$sql."<br>".$con->error;
}
?>

