<!DOCTYPE html>
<html>
<head>
  <title>Slot-Reservation</title>
             <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="templateCss.css">
             <link type="text/css" rel="stylesheet" href="reservationCss.css" />
           


      <?php 
            include 'connection.php'; 


    include 'connection.php';

    if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $vno=$_POST['vno'];
    $date=$_POST['date'];
    $timef=$_POST['timef'];
    $timet=$_POST['timet'];
    $cat=$_POST['cat'];


     $sql="insert into slot_reservation values ('$name','$phone','$vno','$cat','$date','$timef','$timet','')";

     if(mysqli_query($conn,$sql)){

        echo '<script>alert("Reservation Request Sent Successfully!")</script>';

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
        <li><a href="Uhome1.php">HOME</a></li>
        <li><a href="reservation.php">MAKE A RESERVATION</a></li>
        <li><a href="Uprofile.php">PROFILE</a></li>
      
      </ul>
    </nav>
   
  </div>
</header>
</div>
<br><br><br>
  <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="booking-bg"></div>
            <form method="post" class="former">
              <div class="form-header">
                <h2>Reserve Your Parking Slot</h2>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Enter your Name" required="" name="name">
                <span class="form-label">Name</span>
              </div>
              <div class="form-group">
                <input class="form-control" type="tel" placeholder="Enter your Phone number" required="" name="phone">
                <span class="form-label">Phone</span>
              </div>

              <div class="form-group">
                <input class="form-control" type="text" placeholder="Enter your Vehicle Number" required="" name="vno">
                <span class="form-label">Vehicle Number</span>
              </div>

              <div class="form-group">
								<select class="form-control" required name="cat">
									<option value="" label="&nbsp;" selected hidden></option>
									<option value="A">Car/Van</option>
									<option value="B">Motor Bike</option>
									<option value="C">Three Wheel</option>
									<option value="D">Other</option>
								</select>
								<span class="select-arrow"></span>
								<span class="form-label">Vehicle Category</span>
							</div>
              
              
              <div class="form-group">
              <div class="col-md-13">
                  <div class="form-group">
                    <input class="form-control" type="date" required name="date">
                    <span class="form-label">Date of Reservation</span>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="time" required name="timef">
                    <span class="form-label">Time From</span>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="time" required name="timet">
                    <span class="form-label">Time To</span>
                  </div>
                </div>
              </div>
              <div class="form-btn">
                <input type="submit" name="sub" class="submit-btn" value="Reserve Now">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="reservationJQuery.js"></script>
  <script>
    $('.form-control').each(function () {
      floatedLabel($(this));
    });

    $('.form-control').on('input', function () {
      floatedLabel($(this));
    });

    function floatedLabel(input) {
      var $field = input.closest('.form-group');
      if (input.val()) {
        $field.addClass('input-not-empty');
      } else {
        $field.removeClass('input-not-empty');
      }
    }
  </script>

  
        
</section>

</body>
</html>