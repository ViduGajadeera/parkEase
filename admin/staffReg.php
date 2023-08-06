<!DOCTYPE html>
<html>
<head>
  <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>
  <title>ParkEase-STAFF REGISTRATION</title> 
              <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="staffRegcss.css">

      <?php 
            include 'connection.php'; 
            include  'staffregBackend.php';
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
<div class="formee"> 
<div class="container">

  <form class="well form-horizontal" action=" " method="post" id="contact_form">
    <fieldset>

      <legend>
        <center>
          <h2><b>Staff Registration Form</b></h2>
        </center>
      </legend><br>

    
       

     

      <div class="form-group">
        <label class="col-md-4 control-label">EMPLOYEE ID</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="EMPID" placeholder="EMPLOYEE ID" class="form-control" type="text" required="">
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">EMPLOYEE NAME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="EMPNAME" placeholder="EMPLOYEE NAME" class="form-control" type="text" required="">
          </div>
        </div>
      </div>

      

      <div class="form-group">
        <label class="col-md-4 control-label">EMPLOYEE ADDRESS</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
            <input name="EMPADDRESS" placeholder="EMPLOYEE ADDRESS" class="form-control" type="text" required="">
          </div>
        </div>
      </div>

    

      <div class="form-group">
        <label class="col-md-4 control-label">DATE OF BIRTH</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="DOB" placeholder="" class="form-control" type="DATE">
          </div>
        </div>
      </div> 


    <div class="form-group">
        <label class="col-md-4 control-label">GENDER</label> 

        <div class="col-md-4 inputGroupContainer"> 
        
        <input type="radio" name="gender" value="male"><b>MALE</b> &nbsp&nbsp&nbsp <input type="radio" name="gender" value="female"> <b>FEMALE </b>
        
         
        </div>
      </div>



    
      <div class="form-group">
        <label class="col-md-4 control-label">CONTACT NO</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="contact" placeholder="(+94)" class="form-control" type="text" required="">
          </div>
        </div>
      </div>

   

      <div class="form-group">
        <label class="col-md-4 control-label">EMAIL</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="EMAIL" class="form-control" type="email" required="">
          </div>
        </div>
      </div>


        <div class="form-group">
        <label class="col-md-4 control-label">USERNAME</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="username" placeholder="USERNAME" class="form-control" type="text" required="">
          </div>
        </div>
      </div>


        <div class="form-group">
        <label class="col-md-4 control-label">PASSWORD</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input name="password" placeholder="PASSWORD" class="form-control" type="password" required="">
          </div>
        </div>
      </div>

      
      <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

     
      <div>
        <label class="col-md-4 control-label"></label>
        <div>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="sub">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        
          <button type="reset" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRESET <span class="glyphicon glyphicon-remove"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
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
  header('location: admin_login.php');
}

?>
</html>