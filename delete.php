<?php


include "connection.php";

$sql = "DELETE FROM booking WHERE name='" . $_GET["name"] . "'"; // Delete data from the table booking using id

 if (mysqli_query($con, $sql)) {
   echo "Record deleted succesfully";
 } else {
   echo "Error delecting record" . mysqli_error($con);
 }

mysqli_close($con);

?>