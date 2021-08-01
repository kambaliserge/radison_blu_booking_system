<?php 
//include('Menu Bar.php');
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$room_type=$_POST['room_type'];
$cdate=$_POST['cdate'];
$codate=$_POST['codate'];
$ctime=$_POST['ctime'];
$occupancy=$_POST['occupancy'];

/*if($email=="")

$sql= mysqli_query($con,"select * from booking where email='$email' "); 
$result=$sql->fetch_assoc();
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from booking where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:teal'>You have already booked this room</h1>";    
  }
  else
  {
*/
   $sql="INSERT INTO booking(name,email,phone,address,city,country,room_type,check_in,check_out,check_in_time,occupancy) 
  VALUES('$name','$email','$phone','$address','$city','$country',
  '$room_type','$cdate','$codate','$ctime','$occupancy')";
   if($con->query($sql)==TRUE)
   {
    echo"<br>";
   echo "<h1 style='color:cornflowerblue'align='center'>You have Successfully booked this room</h1><p align='center'><a href='index.html'><img src='images/hp.GIF'width='200'height='100'></p></a>"; 
   }
  else{
  echo "Error:".$sql."<br>".$con->error;
}

?>

