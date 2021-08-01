
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Booking</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Do+Hyeon&family=Raleway:wght@100;300;600&display=swap" rel="stylesheet">
<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="icon"type="image/png"href="images/rb.png">
<style>
.booking{
border:0px solid teal;
 background-color: #f2f2f2;
width: 800px;
text-align: left;
padding: 100px;
padding-top: 50px ;
padding-bottom: 20px;
margin-top: 60px;
margin-bottom: 60px;
border-radius: 10px;
}	
      input[type=button] {
  background-color: #03e9f4;;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 10px;
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

@media(max-width: 900px){
p img{
  width: 480px;

}
.booking{
  width: 480px;
}

}
  
</style>
</head>
<body>
<form action="boo.php"method="post">
<p align="center"><img src="images/logo.PNG"width="800"height="200"></p>
<center><a href="index.html"><img src="images/return.JPG"width="150"></a><br><br><a href="room details.php"><input type="button"value="ROOM DETAILS"></a></center>

		

<center>
  <p><strong>N.B: Before filling the booking form you can click the button above to check details of our rooms,so you can have full detailed  information on our rooms.<br>At Radisson blu you are welcome to feel the difference the client is the king.</strong>
<section class="booking">

  <h1 align="center"><font color="teal">BOOKING FORM</h1><br></font>
              <h4>Names</h4>
                 <input type="text"name="name" placeholder="Enter Your Names"required>
        
              <h4>Email</h4>
                <input type="text"name="email"  placeholder="Enter Your Email"required/>
              
              <h4>Telephone</h4>
                 <input type="text"name="phone" placeholder="Enter Your Phone Number"required>
          

              <h4>Address</h4>
                 <textarea name="address" placeholder="Enter Your Address"required></textarea>
              
              <h4>City</h4>
                  <textarea name="city"placeholder="Enter Your City"></textarea>
          
              <h4>Country</h4>
                 <input type="text"name="country" placeholder="Enter Your Country"required>
         
              <h4>Room Type</h4>
                <select class="" name="room_type"required>
                  <option>--Select Room--</option>
                  <option>SUPERIOR ROOM </option>
                  <option>EXECUTIVE ROOM </option>
                  <option>JUNIOR SUITE ROOM</option>
                  <option>SUITE ROOM</option>
                  <option>ROYAL SUITE ROOM</option>
                  <option>FAMILY STAY ROOM</option>
                </select>
              
              
               <h4>Check In Date</h4>
                  <input type="date" name="cdate" class="form-control"required style="width: 380px;height: 30px">
                 <br>
                 
                 <h4>Check In Time</h4>
                   <input type="time" name="ctime" required style="width: 380px;height: 30px">
                  <br>
              
              <h4>Check Out Date </h4>
                <input type="date" name="codate" required style="width: 380px;height: 30px">
                <br><br>
              
                <h4>Occupancy</h4>
                    <input type="radio" value="single" name="occupancy"required > Single 
                    <input type="radio" value="twin" name="occupancy" required> Twin
                    <input type="radio" value="double" name="occupancy" required> Double<br><br>
                
            <p><input type="submit"value="submit" name="savedata" class="btn btn-danger"required/><br><br><br><br><br></p>
        
</section>
</center> 
</form>
</body>
</html>
