<?php 
session_start();
$sw=$_GET['id'];
$_SESSION['id']=$sw;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon"type="image/png"href="images/rb.png">
</head>
<body>

<div class="container mt-2">

  <div class="page-header">
      <h2>Update Data</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php
            include 'connection.php';
            $query = "SELECT * FROM booking WHERE id='$sw'"; 
            $result=mysqli_query($con,$query);
            
            $cust = mysqli_fetch_assoc($result);
            

            ?>
            <form action="update1.php" method="POST">

              <div class="form-group">
                <label>Names</label>
                <input type="text" name="name" class="form-control" value="<?php echo $cust['name']; ?>" required>
              </div> 
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $cust['email']; ?>" required>
              </div>                

              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $cust['phone']; ?>" required>
              </div>              

              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $cust['address']; ?>" required>
              </div>
              <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $cust['city']; ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
                <input type="text" name="country" class="form-control" value="<?php echo $cust['country']; ?>" required>
              </div>
              <div class="form-group">
                <label>Room type</label>
             
                <select class="form-group" name="room_type"required>
                  <option value="<?php echo $cust['room_type']; ?>">--Select Room--</option>
    
                  <option>SUPERIOR ROOM </option>
                  <option>EXECUTIVE ROOM </option>
                  <option>JUNIOR SUITE ROOM</option>
                  <option>SUITE ROOM</option>
                  <option>ROYAL SUITE ROOM</option>
                  <option>FAMILY STAY ROOM</option>
                </select>
              
              </div>
              <div class="form-group">
                <label>Check in</label>
                <input type="date" name="check_in" class="form-control" value="<?php echo $cust['check_in']; ?>" required>
              </div>
              <div class="form-group">
                <label>Check out</label>
                <input type="date" name="check_out" class="form-control" value="<?php echo $cust['check_out']; ?>" required>
              </div>
              <div class="form-group">
                <label>Check in time</label>
                <input type="time" name="check_in_time" class="form-control" value="<?php echo $cust['check_in_time']; ?>" required>
              </div>
              <div class="form-group">
                <label>Occupancy</label>
                <input type="radio" name="occupance" class="form-control" selected><?php echo $cust['occupancy']; ?>
                 <?php 
if($cust['occupancy']==='double'|| $cust['occupancy']==='Double'){
                 ?>
               <input type="radio" name="occupance" class="form-control" value="Single">Single 
               <input type="radio" name="occupance" class="form-control" value="Twin">Twin 

                 
                 <?php 
               }
else if($cust['occupancy']==='single'|| $cust['occupancy']==='Single'){
                 ?>
               <input type="radio" name="occupance" class="form-control" value="Double">Double  
               <input type="radio" name="occupance" class="form-control" value="Twin">Twin
                 
                 <?php 
}
else{
                 ?>
               <input type="radio" name="occupance" class="form-control" value="Double">Double 
                <input type="radio" name="occupance" class="form-control" value="Single">Single  
                 <?php 
                 } 
                 ?>

              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>        
</div>
</body>
</html>