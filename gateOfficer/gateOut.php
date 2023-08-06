<!DOCTYPE html>
<html>
<head>
   <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>

  <title>ParkEase-EXIT</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="gateout.css">

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
 

  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
  $result4 = mysqli_query($conn, $sql4);




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
        <li><a href="Ohome1.php">HOME</a></li>
        <li><a href="gateIn.php">GATE IN</a></li>
        <li><a href="reservationIn.php">RESERVATION - GATE IN</a></li>
        <li><a href="gateOut.php">DEPARTURE</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="Ologout.php">LOGOUT</a></li>
        
      </ul>
    </nav>
  
  </div>
</header>
</div>
<div class="formee"> 
<div class="container">

 <form class="well form-horizontal" action="gateOutTicket.php" method="post" id="contact_form">
    <fieldset>

     
      <legend>
        <center>
          <h2><b>Departure</b></h2>
        </center>
      </legend><br>

    
     

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
            <label class=" control-label"><?php if(isset($_POST['sub'])){ echo $cat; }else echo "N/A"; ?></label>
          </div>
        </div>
      </div>



      

      <div class="form-group">
        <label class="col-md-4 control-label">DATE</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <label class=" control-label"><?php if(isset($_POST['sub'])){echo $vehicle['date']; }else echo "N/A"; ?></label>
          </div>
        </div>
      </div> 


 <div class="form-group">
        <label class="col-md-4 control-label">IN-TIME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <label class=" control-label"> <?php if(isset($_POST['sub'])){echo $vehicle['inTime']; }else echo "N/A"; ?></label>    
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
</div>

</div>

  
        
</section>

</body>
<?php   
}else{
  header('location: officerLogin.php');
}

?>
</html>