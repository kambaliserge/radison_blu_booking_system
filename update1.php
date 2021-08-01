<?php
session_start();
$namee=$_SESSION['id'];
?>
<?php 
include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$room_type=$_POST['room_type'];
$check_in=$_POST['check_in'];
$check_out=$_POST['check_out'];
$check_in_time=$_POST['check_in_time'];
$occupance=$_POST['occupance'];


$sql = "UPDATE booking set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', address='" . $_POST['address'] . "', city='" . $_POST['city'] . "', country='" . $_POST['country'] . "',room_type='" . $_POST['room_type'] . "',check_in='" . $_POST['check_in'] . "',check_out='" . $_POST['check_out'] . "', check_in_time='" . $_POST['check_in_time'] . "',occupancy='" . $_POST['occupance'] . "' WHERE id='" . $namee. "'"; 

if (mysqli_query($con, $sql)){

	echo "Record updated successfully";
}
else{
  echo "error updating record".mysqli_error($con);
}
mysqli_close($con);
?>