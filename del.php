<?php


include "connection.php";
$fnames=$_GET['f_name'];
$sql = "DELETE FROM feedback WHERE f_name='" . $_GET["f_name"] . "'"; // Delete data from the table feedback using id

 if (mysqli_query($con, $sql)) {
   echo "Record deleted succesfully";
 } else {
   echo "Error delecting record" . mysqli_error($con);
 }

mysqli_close($con);

?>