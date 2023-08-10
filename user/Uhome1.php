<!DOCTYPE html>
<html>
<head>
  <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>
  <title>ParkEase-Home</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="Ureservation.css">

<link rel="stylesheet" href="position.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<style type="text/css">

@import "compass/css3";

*, :before, :after {
  box-sizing: border-box;
}

.unstyled {
  list-style: none;
  padding: 0;
  margin: 0;
}
.unstyled a {
  text-decoration: none;
}

.list-inline {
  overflow: hidden;
}
.list-inline li {
  float: left;
}

.header {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 17.5em;
  background: #302f2f;
}

.logo {
/*  text-transform: lowercase;*/

  font: 300 2em "Source Sans Pro", Helvetica, Arial, sans-serif;
  text-align: center;
  padding: 0;
  margin: 0;
}
.logo a {
  display: block;
  padding: 1em 0;
  color: #DFDBD9;
  text-decoration: none;
  transition: .15s linear color;
}
.logo a:hover {
  color: #fff;
}
.logo a:hover span {
  color: #DF4500;
}
.logo span {
  font-weight: 700;
  transition: .15s linear color;
}

.main-nav ul {
  border-top: solid 1px #3C3735;
}
.main-nav li {
  border-bottom: solid 1px #3C3735;
}
.main-nav a {
  padding: 1.1em 0;
  color: #DFDBD9;
  font: 400 1.125em "Source Sans Pro", Helvetica, Arial, sans-serif;
  text-align: center;
 /* text-transform: lowercase; */
}
.main-nav a:hover {
  color: #fff;
}

.social-links {
  border-bottom: solid 1px #3C3735;
}
.social-links li {
  width: 25%;
  border-left: solid 1px #3C3735;
}
.social-links li:first-child {
  border: none;
}
.social-links a {
  display: block;
  height: 5.5em;
  text-align: center;
  color: #3C3735;
  font: 0.75em/5.5em "Source Sans Pro", Helvetica, Arial, sans-serif;
}
.social-links a:hover {
  color: #DFDBD9;
}

.list-hover-slide li {
  position: relative;
  overflow: hidden;
}
.list-hover-slide a {
  display: block;
  position: relative;
  z-index: 1;
  transition: .35s ease color;
}
.list-hover-slide a:before {
  content: '';
  display: block;
  z-index: -1;
  position: absolute;
  left: -100%;
  top: 0;
  width: 100%;
  height: 100%;
  border-right: solid 5px #DF4500;
  background: #3C3735;
  transition: .35s ease left;
}
.list-hover-slide a.is-current:before, .list-hover-slide a:hover:before {
  left: 0;
}

.body{
  background: #302f2f;



}
#div{
background-color:#302f2f;
padding: 18px; 
position: fixed;
width: 100%;


}

#heed{
  color: white; 
  
}

#success_message {
  display: none;
}

.formee{

  padding: 50px; 
  margin-left: 250px;
  opacity: 0.9;
  
} 

section{
    width: 100%;
    height: 100%;
    background-image:url(back3.png);
   
    
     background-blend-mode: darken;
     background-size: cover;
     background-position: center;
     position: absolute;
}
.btn{
    
    color: black;
}




</style>
<?php 
      include 'connection.php';
      


?>



</head>
<body> 
  <section>
  <div class="navbar navbar-inverse navbar-static-top">
    <div id="div">
  <div class="container">
    <div align="center" id="heed" ><h3> <b> AUTOMATED PARKING MANAGEMENT SYSTEM </b></h3></div>

    </div>
  </div>




<header class="header" role="banner">
  <h1 class="logo">
    <table><tr><td>
    <img src="logo.png" height="80px" width="80px"></td> 

    <td><a href="#">Park <span>Ease</span></a></td>
    </tr>
</table>
  </h1>
  <div class="nav-wrap">
     <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
        <li><a href="Uhome1.php">HOME</a></li>
        <li><a href="reservation.php">MAKE A RESERVATION</a></li>
        <li><a href="Uprofile.php">PROFILE</a></li>
         <li><a href="logout.php">LOGOUT</a></li>
      
      </ul>
    </nav>
   
  </div>
</header>
</div>
<?php  
$uname=$_SESSION['username'];
$uid=$_SESSION['id'];


?>
<div class="containeer">
  <table class="table">
    <thead>
      <tr>
        <th class="th">Customer ID</th>
        <th class="th">Name</th>
        <th class="th">Mobile</th>
        <th class="th">Vehicle Number</th>
        <th class="th">Zone</th>
        <th class="th">Date</th>
        <th class="th">Time From</th>
        <th class="th">Time To</th>
        <th class="th"> Undo Reservation</th>
        
      </tr>
    </thead>

    <?php   

                                                     $sql = " SELECT * FROM slot_reservation where status='pending' and cus_id='$uid'";

                                                     $result = mysqli_query($conn, $sql);
                                                     while( $row = mysqli_fetch_assoc($result)) {
                                                            $reservations[]=$row;
                                                            foreach($reservations as $reservation)
                                                           

                                                       
                                                    

    ?>
    <tbody>
      <tr>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <td class="td"><?php echo $reservation['reservation_id']?></td>
        <td class="td"><?php echo $reservation['name']?></td>
        <td class="td"><?php echo $reservation['mobile']?></td>
        <td class="td"><?php echo $reservation['vehicle_no']?></td>
        <td class="td"><?php echo $reservation['zone']?></td>
        <td class="td"><?php echo $reservation['reservation_date']?></td>
        <td class="td"><?php echo $reservation['time_from']?></td>
        <td class="td"><?php echo $reservation['time_to']?></td>
        <?php  
          $id=$reservation['reservation_id'];
        ?>


        <td class="td">
          

        <form action="Uhome1.php" method="post">
        <input type="submit" class="custom-btn btn-3" value="Delete" name="rej">
      <!-- <button onclick=" del()" class="custom-btn btn-3">Delete</button>-->
             </form>
        </td>
      </tr>
     <?php   
        }
      }
    ?>
    </tbody>
    
  </table>
</div>
<?php
$sql = " SELECT * FROM customer where cus_id='$uid'";
         $result = mysqli_query($conn, $sql);
         while( $row = mysqli_fetch_assoc($result)) {
         $users[]=$row;
    foreach($users as $user)
      if($user['cus_vcat']=="car"){
        $zone="Zone A";
        $vehicle=$user['cus_vno'];
        $select = " SELECT slotNumber FROM zonea where vehicleNo='$vehicle'";

       

      }else if($user['cus_vcat']=="van"){
          $zone="Zone A";
           $vehicle=$user['cus_vno'];
        $select = " SELECT slotNumber FROM zonea where vehicleNo='$vehicle'";

      

      }else if($user['cus_vcat']=="Motor Bike"){
          $zone="Zone B";
           $vehicle=$user['cus_vno'];
        $select = " SELECT slotNumber FROM zoneb where vehicleNo='$vehicle'";

        

      }else if($user['cus_vcat']=="Three Wheel"){
          $zone="Zone C";
           $vehicle=$user['cus_vno'];
        $select = " SELECT slotNumber FROM zonec where vehicleNo='$vehicle'";

       

      }else if($user['cus_vcat']=="Other"){
          $zone="Zone D";
           $vehicle=$user['cus_vno'];
        $select = " SELECT slotNumber FROM zoned where vehicleNo='$vehicle'";

        

      }

?>

<div id="containerr">
    <div class="pricetab">
      <h1> Your Vehicle is Parked at Slot Number : </h1>
      <div class="price">
        <?php
  $resulting = mysqli_query($conn, $select);
         while( $rows = mysqli_fetch_array($resulting)) {
         $nos[]=$rows;
         foreach($nos as $slot)
       
         
         ?>                                                                                                      
                                                           
        <h2><?php echo $zone; ?> </br><?php echo $slot['slotNumber']; ?> </h2>
      </div>
    </div>
  </div>

     <?php
}
}
       ?> 




</div>

  
  </section> 


<?php 
        $sql1 = "delete from slot_reservation where reservation_id=$id";
   if(isset($_POST['rej'])) {
             mysqli_query($conn, $sql1);
             ?>

             <script type="text/javascript">
               
               window.location.replace("Uhome1.php");


             </script>


             <?php

        } 
      

    /* if(isset($_POST['rej'])) {
             header("Location: Areservation.php");
    exit();
        }*/

?>

</body>

<?php   
}else{
  header('location: userLogin.php');
}

?>

</html>