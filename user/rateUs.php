<!DOCTYPE html>
<html>
<head>
  <title>Customer Feedback</title>
             <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="templateCss.css">
              <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
              <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
              <link rel="stylesheet" type="text/css" href="feedbackcss.css">
           


      <?php 
            include 'connection.php'; 
      include 'feedbackBackend.php';

  
            
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
        <li><a href="#">MAKE A RESERVATION</a></li>
        <li><a href="#">PROFILE</a></li>
        <li><a href="#">RATE US</a></li>
      </ul>
    </nav>
   
  </div>
</header>
</div>
<br><br><br>
 <div class="testbox">
      <form action="" method="post">
        <h1>Customer Feedback Form</h1>
        <p><b>Please take a few minutes to give us feedback about our service by filling in this short Customer Feedback Form. We are conducting this research in order to measure your level of satisfaction with the quality of our service. We thank you for your participation.</b></p>
        <hr />


         <h4>Name</h4>
       
        <input class="email" type="text" name="name" />
         <h4>Address</h4>
        
        <input class="email" type="text" name="address" />
         <h4>Mobile</h4>
       
        <input class="email" type="text" name="mobile" />
        <hr />



        <h3>Overall experience with our service</h3>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Very Good</th>
            <th>Good</th>
            <th>Fair</th>
            <th>Poor</th>
            <th>Very Poor</th>
          </tr>
          <tr>
            <td class="first-col">How would you rate your overall experience with our service?</td>
            <td><input type="radio" value="rate_vgood" name="rate" /></td>
            <td><input type="radio" value="rate_good" name="rate" /></td>
            <td><input type="radio" value="rate_fair" name="rate" /></td>
            <td><input type="radio" value="rate_poor" name="rate" /></td>
            <td><input type="radio" value="rate_vpoor" name="rate" /></td>
          </tr>
          
          <tr>
            <td class="first-col">How would you rate our prices?</td>
            <td><input type="radio" value="price_vgood" name="price" /></td>
            <td><input type="radio" value="price_good" name="price" /></td>
            <td><input type="radio" value="price_fair" name="price" /></td>
            <td><input type="radio" value="price_poor" name="price" /></td>
            <td><input type="radio" value="price_vpoor" name="price" /></td>
          </tr>
          
          <tr>
            <td class="first-col">How satisfied are you with the customer support?</td>
            <td><input type="radio" value="sup_vgood" name="sup" /></td>
            <td><input type="radio" value="sup_good" name="sup" /></td>
            <td><input type="radio" value="sup_fair" name="sup" /></td>
            <td><input type="radio" value="sup_poor" name="sup" /></td>
            <td><input type="radio" value="sup_vpoor" name="sup" /></td>
          </tr>
          <tr>
            <td class="first-col">Would you recommend our service to other people?</td>
            <td><input type="radio" value="recommend_vgood" name="recommend" /></td>
            <td><input type="radio" value="recommend_good" name="recommend" /></td>
            <td><input type="radio" value="recommend_fair" name="recommend" /></td>
            <td><input type="radio" value="recommend_poor" name="recommend" /></td>
            <td><input type="radio" value="recommend_vpoor" name="recommend" /></td>
          </tr>
        </table>
        <h4>What should we change in order to live up to your expectations?</h4>
        <textarea rows="5" name="sug"></textarea>
        <h4>Email</h4>
        <small>Only if you want to hear more from us.</small>
        <input class="email" type="text" name="mail" /> 
        <br><br>
        <div class="btn-block">
          <input type="submit" name="sub" value="Send Feedback" id="sub">
        </div> 
        <div class="btn-block">
          <button type="reset" >Clear</button>
        </div>
      </form>
    </div>



  
        
</section>

</body>
</html>