<!DOCTYPE html>
<html>
<head>

  <title>ParkEase-INCOME CALCULATOR</title> 
              <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="income.css">

      <?php 
            include 'connection.php'; 


             if(isset($_POST['sub'])){

              $dtf=$_POST['datef'];
              $dtt=$_POST['datet'];

                $query="select SUM(amount) from gate_transaction where date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";

                $result=mysqli_query($conn, $query);
                  
               
           }


           if(isset($_POST['res'])){
            ?>
            <script type="text/javascript"> 
                window.location.replace("income.php")
            </script>

            <?php
           }
            
      ?>





</head>
<body> 
  <section>

<div class="formee"> 
<div class="container">

  <form class="well form-horizontal" action="income.php" method="post" id="contact_form">
    <fieldset>

      <legend>
        <center>
          <h2><b>INCOME CALCULATOR</b></h2>
        </center>
      </legend><br>

    
       

     

  

    

      <div class="form-group">
        <label class="col-md-4 control-label">DATE FROM</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="datef" placeholder="" class="form-control" type="DATE">
          </div>
        </div>
      </div> 


        <div class="form-group">
        <label class="col-md-4 control-label">DATE TO</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="datet" placeholder="" class="form-control" type="DATE">
          </div>
        </div>
      </div>


    

      
     

     
      <div>
        <label class="col-md-4 control-label"></label>
        <div>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="sub">&nbsp&nbsp&nbspCalculate <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        
          <button type="reset" class="btn btn-warning" name="res">&nbsp&nbsp&nbsp&nbspCLEAR <span class="glyphicon glyphicon-remove"></span>&nbsp&nbsp&nbsp&nbsp</button>
        </div>
      </div>

      <br><br>
      <?php  

       if(isset($_POST['sub'])){ ?>

      <div class="form-group">
        <label class="col-md-9 control-label"><h2>Income For The Selected Period </h2></label>
         <label class="col-md-7 control-label"><h1 style="color: red;"><b>LKR. <?php   while( $row = mysqli_fetch_array($result)) {
                  $ans=$row[0];
                  echo $ans;
             }  ?></b> </h1></label>
        
      </div>

    <?php } ?>


    </fieldset>



  </form>
</div>
</div>

</div>

  
        
</section>

</body>

</html>