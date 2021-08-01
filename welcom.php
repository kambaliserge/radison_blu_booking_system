<?php

include "connection.php";
$uname=$_POST['username'];
$pwd=$_POST['password'];
$t=0;
session_start();
if (isset($_SESSION['user'])) {
	
} 
$f=mysqli_query($con,"select * from admin where username='$uname'");
while ($p=mysqli_fetch_array($f)) {
	if ($uname==$p['username'] and $pwd==$p['password']) {
		$t=1;
		$h=$p['username'];
		$b=$p['password'];
	}
}
if ($t==1) {

include"all1.php";
$_SESSION['k1']=$h;
$_SESSION['k2']=$b;

}
else
{
	echo "<script>alert('username or password incorrect!')</script>";
 	echo "<script>location.href='login.php'</script>";
}

?>

