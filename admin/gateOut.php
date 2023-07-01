<!DOCTYPE html>
<html>
<head>
	<title>ParkEase-EXIT</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="gateOutcss.css">

<script>

function display_ct5() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

var x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ampm;
document.getElementById('ot').innerHTML = x1;
display_c5();
 }
 function display_c5(){
var refresh=1000; 
mytime=setTimeout('display_ct5()',refresh)
}
display_c5()
</script>


<?php   

  include 'connection.php'; 

 if(isset($_POST['sub'])){

  $vno=$_POST['VNO'];
  $num;
  $cat;

  $sql1="select * from zonea where vehicleNo='$vno'";
  $sql2="select * from zoneb where vehicleNo='$vno'";
  $sql3="select * from zonec where vehicleNo='$vno'";
  $sql4="select * from zoned where vehicleNo='$vno'";
  $sql5="select * from gate_transactions where vNumber='$vno'";

  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
  $result4 = mysqli_query($conn, $sql4);
  $result5= mysqli_query($conn, $sql5);


    while( $row = mysqli_fetch_assoc($result5)) {
                                                            $vehicles[]=$row;
                                                            foreach($vehicles as $vehicle)
                                                           $id= $row['vNumber'];

                                                       
                                                       if(mysqli_num_rows($result5)>0){}}

  if(mysqli_num_rows($result1)>0){
    $num=1;
  }
  if(mysqli_num_rows($result2)>0){
   $num=2; 
  }
   if(mysqli_num_rows($result3)>0){
   $num=3; 
  }
   if(mysqli_num_rows($result4)>0){
   $num=4; 
  }


            switch($num){

              case 1:
                      $cat="CAR/VAN";
              break;
              
              case 2:
                     $cat="MOTOR BIKE"; 
              break;
              
              case 3:
                     $cat="THREE WHEEL"; 
              break;

              case 4:
                     $cat="OTHER"; 
              break;               
            }

}


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
        <li><a href="">HOME</a></li>
        <li><a href="index.html">STAFF REGISTRATION</a></li>
        <li><a href="#">RESERVATIONS</a></li>
        <li><a href="">GATE IN</a></li>
        <li><a href="#">DEPARTURE</a></li>
        <li><a href="#">REPORTS</a></li>
        <li><a href="#">FEEDBACKS</a></li>
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

 <form class="well form-horizontal" action=" " method="post" id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>
        <center>
          <h2><b>Departure</b></h2>
        </center>
      </legend><br>

      <!-- Text input-->
     

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">VEHICLE NO</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input name="VNO" placeholder="ENTER VEHICLE NUMBER" class="form-control" type="text"> 
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">VEHICLE CATEGORY</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <label class=" control-label"><?php if(isset($_POST['sub'])){ echo $cat; } ?></label>
          </div>
        </div>
      </div>



      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">DATE</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <label class=" control-label"><?php if(isset($_POST['sub'])){echo $vehicle['date']; } ?></label>
          </div>
        </div>
      </div> 


 <div class="form-group">
        <label class="col-md-4 control-label">IN-TIME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <label class=" control-label"> <?php if(isset($_POST['sub'])){echo $vehicle['inTime']; } ?></label>    
          </div>
        </div>
      </div>


  <div class="form-group">
        <label class="col-md-4 control-label">OUT-TIME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <?php date_default_timezone_set("Asia/Colombo"); ?>
            <label class="control-label" id="ot"></label>
             
          </div>
        </div>
      </div>




      <!-- Button -->
      <div>
        <label class="col-md-4 control-label"></label>
        <div>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="sub">&nbsp&nbsp&nbspGENERATE BILL <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        
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
</html>