
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Room details</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Do+Hyeon&family=Raleway:wght@100;300;600&display=swap" rel="stylesheet">
<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="icon"type="image/png"href="images/rb.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    input[type=button] {
  background-color: teal;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 10px;
}

input[type=button]:hover {
   background-color: #45a049;
  color: #fff;
  box-shadow: 0 0 5px #03e9f4,
  0 0 25px #03e9f4, 0 0 50px #03e9f4,0 0 100px #03e9f4;}
@media(max-width: 700px){
p img{
  width: 480px;
}
}
</style>
</head>
<body>

<p align="center"><img src="images/logo.PNG"width="800"height="200"></p>
<center><a href="booking.php"><input type="button"value="Back" ></a>
</center>

		
<div class="col-md-12">
            <div class="float-left">
                <h2>Room Details</h2>
            </div>            
           
         

            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">Room name</th>
                  <th scope="col">Maximum guests</th>
                  <th scope="col">Size</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                
                </tr>
              </thead>
              <tbody>
                
                <?php

            
                include "connection.php";

                $sql="select * from rooms"; // Fetch all the data from the table rooms

                $result = $con->query($sql);
                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[1];?></th>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                  
                   
                    
                            

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Rooms available</td>
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
