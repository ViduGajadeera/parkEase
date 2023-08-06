<!DOCTYPE html>
<html>
<head>
  <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>
  <title>ParkEase-Home</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='tarrif.css' rel='stylesheet' type='text/css'>
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


.card {
  position: relative;
  width: 250px;
  height: 270px;
  border-radius: 14px;
  z-index: 1111;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  ;
}

.bg {
  position: absolute;
  top: 5px;
  left: 5px;
  width: 240px;
  height: 260px;
  z-index: 2;
  background: rgba(255, 255, 255, .95);
  backdrop-filter: blur(24px);
  border-radius: 10px;
  overflow: hidden;
  outline: 2px solid white;

  font-family: sans;
  font-size: 36px;
  font-weight: bold;
  text-align: center;
}

.blob {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-color: #ff0000;
  opacity: 1;
  filter: blur(12px);
  animation: blob-bounce 5s infinite ease;
}

@keyframes blob-bounce {
  0% {
    transform: translate(-100%, -100%) translate3d(0, 0, 0);
  }

  25% {
    transform: translate(-100%, -100%) translate3d(100%, 0, 0);
  }

  50% {
    transform: translate(-100%, -100%) translate3d(100%, 100%, 0);
  }

  75% {
    transform: translate(-100%, -100%) translate3d(0, 100%, 0);
  }

  100% {
    transform: translate(-100%, -100%) translate3d(0, 0, 0);
  }
}


#cardtbl{
  margin-left: 335px;
  margin-top: 100px;
  width: auto;

}

.vacant{
  font-size: 300%;
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

<?php   
 $sqlA = " SELECT count(slotNumber) FROM zonea where status ='vacant'";

                                                     $resultA = mysqli_query($conn, $sqlA);
                                                     while( $rowA = mysqli_fetch_array($resultA)) {
                                                          

$sqlB = " SELECT count(slotNumber) FROM zoneb where status ='vacant'";

                                                     $resultB = mysqli_query($conn, $sqlB);
                                                     while( $rowB = mysqli_fetch_array($resultB)) {
                                                           


$sqlC = " SELECT count(slotNumber) FROM zonec where status ='vacant'";

                                                     $resultC = mysqli_query($conn, $sqlC);
                                                     while( $rowC = mysqli_fetch_array($resultC)) {
                                                          



$sqlD = " SELECT count(slotNumber) FROM zoned where status ='vacant'";

                                                     $resultD = mysqli_query($conn, $sqlD);
                                                     while( $rowD = mysqli_fetch_array($resultD)) {
                                                           


?>

<table id="cardtbl">
<tr><td>
<div class="card">
  <div class="bg">Zone A <br><?php if(!$rowA[0]==0){ echo" Available Slots"; } ?><br><div class="vacant"><?php if(!$rowA[0]==0){ echo $rowA[0];} else{echo "full";} ?></div></div>
  <div class="blob"></div>
</div>
</td>
<td width="40px"></td>
<td>

<div class="card">
  <div class="bg">Zone B<br><?php if(!$rowB[0]==0){ echo" Available Slots"; } ?><br><div class="vacant"><?php if(!$rowB[0]==0){ echo $rowB[0];} else{echo "full";} ?></div></div>
  <div class="blob"></div>
</div>
</td>
<td width="40px"></td>
<td>
<div class="card">
  <div class="bg"> Zone C<br><?php if(!$rowC[0]==0){ echo" Available Slots"; } ?><br><div class="vacant"><?php if(!$rowC[0]==0){ echo $rowC[0];} else{echo "full";} ?></div></div>
  <div class="blob"></div>
</div>
</td>
<td width="40px"></td>
<td>

<div class="card">
  <div class="bg">Zone D<br><?php if(!$rowD[0]==0){ echo" Available Slots"; } ?><br><div class="vacant"><?php if(!$rowD[0]==0){ echo $rowD[0];} else{echo "full";} ?></div></div>
  <div class="blob"></div>
</div>
</td>
</tr>


</table>

<?php   
}
}
}
}

?>





<?php  

 $sql1 = " SELECT * FROM tarrif where category ='car' and userType='unregistered'";

                                                     $result = mysqli_query($conn, $sql1);
                                                     while( $row = mysqli_fetch_assoc($result)) {
                                                            $cars[]=$row;
                                                            foreach($cars as $car)



 $sql2 = " SELECT * FROM tarrif where category ='three wheel' and userType='unregistered'";

                                                     $result1 = mysqli_query($conn, $sql2);
                                                     while( $row1 = mysqli_fetch_assoc($result1)) {
                                                            $wheels[]=$row1;
                                                            foreach($wheels as $wheel) 
                                                          

$sql3 = " SELECT * FROM tarrif where category ='bike' and userType='unregistered'";

                                                     $result2 = mysqli_query($conn, $sql3);
                                                     while( $row2 = mysqli_fetch_assoc($result2)) {
                                                            $bikes[]=$row2;
                                                            foreach($bikes as $bike) 




 $sql4 = " SELECT * FROM tarrif where category ='other' and userType='unregistered'";

                                                     $result3 = mysqli_query($conn, $sql4);
                                                     while( $row3 = mysqli_fetch_assoc($result3)) {
                                                            $others[]=$row3;
                                                            foreach($others as $other)


?>

<!-- tarrif -->
  
  <div id="containerr">
    <div class="pricetab">
      <h1> BIKE </h1>
      <div class="price">
        <h2>LKR <?php echo $bike['price']?> </h2>
      </div>
    </div>


    <div class="pricetab">
      <h1> THREE WHEEL </h1>
      <div class="price">
        <h2>LKR <?php echo $wheel['price']?> </h2>
      </div>
    </div>





    <div class="pricetabmid">
      <h1> CAR </h1>
      <div class="pricemid">
        <h2>LKR <?php echo $car['price']?></h2>
      </div>
      
    
    </div>
    <div class="pricetab">
      <h1> VAN </h1>
      <div class="price">
        <h2>LKR <?php echo $car['price']?> </h2>
      </div>
      
     
    </div>
    <div class="pricetab">
      <h1> OTHER </h1>
      <div class="price">
        <h2>LKR <?php echo $other['price']?></h2>
      </div>
      
    
    </div>
  </div>

<?php  

}
}
}
}
?>


</div>

  
  </section>      


</body>
<?php   
}else{
  header('location: admin_login.php');
}

?>

</html>