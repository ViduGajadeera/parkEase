<!DOCTYPE html>
<html>
<head>
	<title>ParkEase-ENTRANCE</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
  
  
} 

section{
    width: 100%;
    height: 100%;
    background-image:url(back1.jpg);
     background-blend-mode: darken;
     background-size: cover;
     background-position: center;
     position: absolute;
}


</style>

<script>

function display_ct5() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

var x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ampm;
document.getElementById('ct5').innerHTML = x1;
display_c5();
 }
 function display_c5(){
var refresh=1000; 
mytime=setTimeout('display_ct5()',refresh)
}
display_c5()
</script>



</head>
<body onload=display_ct5();> 
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
        <li><a href="Ohome1.php">HOME</a></li>
        <li><a href="gateIn.php">GATE IN</a></li>
        <li><a href="gateOut.php">DEPARTURE</a></li>
        
      </ul>
    </nav>
   <!-- <ul class="social-links list-inline unstyled list-hover-slide">
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Google+</a></li>
      <li><a href="#">GitHub</a></li>
      <li><a href="#">CodePen</a></li>
    </ul>-->
  </div>
</header>
</div>
<div class="formee"> 
<div class="container">

 <form class="well form-horizontal" action="entranceTicket.php" method="post" id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>
        <center>
          <h2><b>Entrance</b></h2>
        </center>
      </legend><br>

      <!-- Text input-->
     

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">VEHICLE NO</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input name="VNO" placeholder="ENTER VEHICLE NUMBER" class="form-control" type="text" required>

          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">VEHICLE CATEGORY</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="VCAT" class="form-control selectpicker" required>
              <option value="">SELECT VEHICLE CATEGORY</option>
             
              <option value="0">Car</option>
              <option value="1">Van</option>
              <option value="2">Bike</option>
              <option value="3">Three Wheel</option>
              <option value="4">Other</option>
            </select>
          </div>
        </div>
      </div>



      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">DATE</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <P class="form-control"> <?php echo (date("d/m/Y")) ?>   </P>
          </div>
        </div>
      </div> 


 <div class="form-group">
        <label class="col-md-4 control-label">TIME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <?php date_default_timezone_set("Asia/Colombo"); ?>
             <P class="form-control"> <span id="ct5"></span>   </P>
          </div>
        </div>
      </div>






      <!-- Button -->
      <div>
        <label class="col-md-4 control-label"></label>
        <div>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="btn">&nbsp&nbsp&nbspGENERATE SLOT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        
          <button type="reset" class="btn btn-warning">&nbsp&nbsp&nbsp&nbspCLEAR <span class="glyphicon glyphicon-remove"></span>&nbsp&nbsp&nbsp&nbsp</button>
        </div>
      </div>

    </fieldset>
  </form>
</div>
</div><!-- /.container -->

</div>

  
  </section>      


</body>

<?php  

switch(VCAT){
  case 0:
  $q="select COUNT(slotNumber) from zonea where status='fill'"; 
  $scat1=mysqli_fetch_array($showw);
  break; 

    case 1:
   $q="select COUNT(slotNumber) from zonea where status='fill'"; 
  $scat1=mysqli_fetch_array($showw);
  break; 

    case 2:
   $q="select COUNT(slotNumber) from zoneb where status='fill'"; 
  $scat2=mysqli_fetch_array($showw);
  break;

    case 3:
   $q="select COUNT(slotNumber) from zonec where status='fill'"; 
  $scat3=mysqli_fetch_array($showw);
  break;

    case 4:
   $q="select COUNT(slotNumber) from zoned where status='vacant'"; 
  $scat4=mysqli_fetch_array($showw);
  break;
}

$showw=mysqli_query($con,$q);

if($scat1[0]==100){
  echo '<script>alert("car park A is full !")</script>';
}

if($scat2[0]==75){
  echo '<script>alert("car park B is full !")</script>';
} 

if($scat3[0]==50){
  echo '<script>alert("car park C is full !")</script>';
} 


if($scat2[0]==5){
  echo '<script>alert("car park D is full !")</script>';
}


 ?>
</html>