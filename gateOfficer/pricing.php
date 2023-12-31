<!DOCTYPE html>
<html>
<head>
  <?php  


session_start();
 if(isset($_SESSION['username'])){ 
  ?>
	<title>ParkEase-ENTRANCE</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="tarrifTbl.css">
             <link type="text/css" rel="stylesheet" href="Areservation.css" />
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
    background-image:url(back1.jpg);
     background-blend-mode: darken;
     background-size: cover;
     background-position: center;
     position: absolute;
}


</style>





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
        <li><a href="reservationIn.php">RESERVATION - GATE IN</a></li>
        <li><a href="gateOut.php">DEPARTURE</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="Ologout.php">LOGOUT</a></li>
        
      </ul>
    </nav>
  
  </div>
</header>
</div>



<div class="containeer">
  <table class="table">
    <thead>
      <th class="the">Charges per Hour For Non-Registered Customers</th>
      <tr>
        <th class="th">Category ID</th>
        <th class="th">Category</th>
        <th class="th">Charges per Hour (Rs)</th>
        
        
        
      </tr>
    </thead>

    <?php   

             include 'connection.php'; 
                                                     $sql = " SELECT * FROM tarrif where userType='unregistered'";

                                                     $result = mysqli_query($conn, $sql);
                                                     while( $row = mysqli_fetch_assoc($result)) {
                                                            $tarrifs[]=$row;
                                                            foreach($tarrifs as $tarrif)
                                                           

                                                       
                                                    

    ?>
    <tbody>
      <tr>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <td class="td"><?php echo $tarrif['tarrif_id']?></td>
        <td class="td"><?php echo $tarrif['category']?></td>
      <td class="td"><?php echo $tarrif['price']?> </td>
        
        

      </tr>
     <?php   
        }
      }
    ?>

    <th class="the">Charges per 8 Hours for Registered Customers</th>
    <tr>
        <th class="th">Category ID</th>
        <th class="th">Category</th>
        <th class="th">Charges for 8 Hours (Rs)</th>
        
        
        
      </tr>


    <?php   

             include 'connection.php'; 
                                                     $sql = " SELECT * FROM tarrif where userType='registered' and tarrif_id>4";

                                                     $result = mysqli_query($conn, $sql);
                                                     while( $row = mysqli_fetch_assoc($result)) {
                                                            $tarrifs[]=$row;
                                                            foreach($tarrifs as $tarrif)
                                                           

                                                       
                                                    

    ?>
    <tbody>
      <tr>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <td class="td"><?php echo $tarrif['tarrif_id']?></td>
        <td class="td"><?php echo $tarrif['category']?></td>
        <td class="td"> <?php echo $tarrif['price']?></td>
        
        <?php  
          $id=$tarrif['tarrif_id'];
        ?>

      </tr>
     <?php   
        }
      }
    ?>
    </tbody>
    
            

    
  </table>
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