<!DOCTYPE html>
<html>
<head>
   <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>
	<title>ParkEase-Profile</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css"></script>
<link rel="stylesheet" type="text/css" href="Uprofile.css">

<style type="text/css">
    
body{
        background-color: #242426;
    }

</style>

<?php  
$uid=$_SESSION['id'];


 include 'connection.php'; 

        $sql = " SELECT * FROM customer where cus_id='$uid'";
         $result = mysqli_query($conn, $sql);
         while( $row = mysqli_fetch_assoc($result)) {
         $users[]=$row;
    foreach($users as $user)
        
        
 

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


    
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="body">
                                                    <div class="row m-l-0 m-r-0">



                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                       
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_name'];}?></h6>
                                                               
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">

                                                                        <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">User ID</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_id'];}?></h6>
                                                                    </div>


                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_email'];}?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_mobile'];}?></h6>
                                                                    </div>

                                                                        <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Address</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_address'];}?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Gender</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_gender'];}?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Date of Birth</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_dob'];}?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Vehicle Number</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['cus_vno'];}?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Working Place</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['working_place'];}?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Designation</p>
                                                                        <h6 class="text-muted f-w-400"><?php if(mysqli_num_rows($result)>0){ echo $user['designation'];}?></h6>
                                                                    </div>
                                                                    <?php     
                                                                        
                                                                    }

                                                                    ?>

                                                                </div>

                                                               
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                            




</div>

  
  </section>      


</body>
<?php   
}else{
  header('location: userLogin.php');
}

?>

</html>