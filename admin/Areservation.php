<!DOCTYPE html>
<html>
<head>
  <?php  

      function clear(){
    include 'connection.php';
  date_default_timezone_set("Asia/colombo");
   $today=date("Y-m-d");
  $now= date('H:i:s');

  $vacant="select * from slot_reservation where reservation_date<'$today' or time_from<='$now'";
   $ans = mysqli_query($conn, $vacant);
          while( $line = mysqli_fetch_assoc($ans)) {
          $arrs[]=$line;
          foreach($arrs as $arr)

          $vehicleno=$arr['vehicle_no'];
          $catt=$arr['vCat'];

          if($arr['vCat']=="car"){
        $correct="update zonea set vehicleNo='', status='vacant', reservationStatus='no' where vehicleNo='$vehicleno' and status='vacant'";
          mysqli_query($conn,$correct);

        }else if($arr['vCat']=="van"){
           $correct="update zonea set vehicleNo='', status='vacant', reservationStatus='no' where vehicleNo='$vehicleno' and status='vacant'";
          mysqli_query($conn,$correct);
        }else if($arr['vCat']=="Motor Bike"){
           $correct="update zoneb set vehicleNo='', status='vacant', reservationStatus='no' where vehicleNo='$vehicleno' and status='vacant'";
          mysqli_query($conn,$correct);
        }else if($arr['vCat']=="Three Wheel"){
           $correct="update zonec set vehicleNo='', status='vacant', reservationStatus='no' where vehicleNo='$vehicleno' and status='vacant'";
          mysqli_query($conn,$correct);
        }
        else if($arr['vCat']=="Other"){
           $correct="update zoned set vehicleNo='', status='vacant', reservationStatus='no' where vehicleNo='$vehicleno' and status='vacant'";
          mysqli_query($conn,$correct);
        }
      }

  $clear="update slot_reservation set status='Expired' where reservation_date<'$today' or time_from<='$now'";
  mysqli_query($conn,$clear);
  }



session_start();
 if(isset($_SESSION['username'])){ 
  ?>
  <title>ParkEase-Reservation</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="Areservation.css">

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
    background-image:url(back3.jpg);
    
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
<body  <?php clear(); ?>> 
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
        <li><a href="home1.php">HOME</a></li>
        <li><a href="staffReg.php">STAFF REGISTRATION</a></li>
        <li><a href="Areservation.php">RESERVATIONS</a></li>
        <li><a href="RgateIn.php">RESERVATION - GATE IN</a></li>
        <li><a href="gateIn.php">GATE IN</a></li>
        <li><a href="gateOut.php">DEPARTURE</a></li>
        <li><a href="report.php">REPORTS</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="feedback.php">FEEDBACKS</a></li>
         <li><a href="Alogout.php">LOGOUT</a></li>
      </ul>
    </nav>
   
  </div>
</header>
</div>

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
        <th class="th"><center>Action</center></th>
        
      </tr>
    </thead>

    <?php   

                                                     $sql = " SELECT * FROM slot_reservation where status='pending'";

                                                     $result = mysqli_query($conn, $sql);
                                                     while( $row = mysqli_fetch_assoc($result)) {
                                                            $reservations[]=$row;
                                                            foreach($reservations as $reservation)
                                                           

                                                       
                                                      

    ?>
    <tbody>
      <tr>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <td class="td"><?php echo $reservation['cus_id']?></td>
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
          <form method="post" >

        <input type="submit" class="custom-btn btn-4" value="Accept" name="acc" > 
        <input type="submit" class="custom-btn btn-3" value="Reject" name="rej">
      </form>
        
        </td>
      </tr>
     
    </tbody>
    <?php   
        }
      }
      
    ?>
  </table>
</div>

</div>

  
  </section>      
<?php 





        $sql1 = "update slot_reservation set status='accepted' where reservation_id=$id";
        
   if(isset($_POST['acc'])) {


               switch ($reservation['zone']) {
          case 'Zone A':
            $vno=$reservation['vehicle_no'];
            $sql2="update zonea set vehicleNo='$vno', reservationStatus='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1 ";
             mysqli_query($conn, $sql2);
            
            break;
          
          case 'Zone B':
            $vno=$reservation['vehicle_no'];
             $sql2="update zoneb set vehicleNo='$vno', reservationStatus='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1 ";
              mysqli_query($conn, $sql2);
             
            break;

            case 'Zone C':
            $vno=$reservation['vehicle_no'];
             $sql2="update zonec set vehicleNo='$vno', reservationStatus='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1 ";
              mysqli_query($conn, $sql2);
              
            break;

            case 'Zone D':
            $vno=$reservation['vehicle_no'];
             $sql2="update zoned set vehicleNo='$vno', reservationStatus='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1 ";
              mysqli_query($conn, $sql2);
              
            break;
        }




             mysqli_query($conn, $sql1);
             
              ?>

               <script type="text/javascript">
               
               window.location.replace("Areservation.php");
              //location.reload();

             </script>

              <?php
  
         
        } 
      
        $sql2="delete from slot_reservation where reservation_id=$id";
     if(isset($_POST['rej'])) {
      mysqli_query($conn, $sql2);
             header("Location: Areservation.php");
    exit();
        }

?>

</body>

<?php   
}else{
  header('location: admin_login.php');
}

?>

</html>