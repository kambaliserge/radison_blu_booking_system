
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Admin Page</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Do+Hyeon&family=Raleway:wght@100;300;600&display=swap" rel="stylesheet">
<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="icon"type="image/png"href="images/rb.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      input[type=button] {
  background-color: #03e9f4;;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
   background: #03e9f4;
  color: #fff;
  box-shadow: 0 0 5px #03e9f4,
  0 0 25px #03e9f4, 0 0 50px #03e9f4,0 0 100px #03e9f4;}

@media(max-width: 700px){
p img{
  width: 500px;
}
}
</style>
</head>
<body>

<p align="center"><img src="images/logo.PNG"width="800"height="200"></p>
<center><a href="feed.php"><input type="button"value="FEEDBACKS"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.html"><img src="images/logout.JPG"width="100"></a></center>

		
<div class="col-md-12">
            <div class="float-left">
                <h2>Booking List</h2>
            </div>            
           
           

            <table class="table table-hover table-info">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Names</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">City</th>
                  <th scope="col">Country</th>
                  <th scope="col">Room type</th>
                  <th scope="col">Check in</th>
                  <th scope="col">Check out</th>
                  <th scope="col">Check in time</th>
                  <th scope="col">Occupancy</th>
                 <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            
                include "connection.php";

                $sql="select * from booking"; // Fetch all the data from the table booking 

                $result = $con->query($sql);
                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[9];?></td>
                    <td><?php echo $array[10];?></td>
                     <td><?php echo $array[11];?></td>
                            
                    <td> 
                      <a href="edit.php?id=<?php echo $array[0];?>" class="btn btn-primary">Update</a>
                      <a href="delete.php?name=<?php echo $array[1];?>" class="btn btn-danger">Delete</a>
                      
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>


        
</section>
</center> 
</form>
</body>
</html>
