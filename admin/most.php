<!DOCTYPE html>
<html>
<head>

  <title>ParkEase-PARKING SUMMARY</title> 
              <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="most.css">

      <?php 
            include 'connection.php'; 


             if(isset($_POST['sub'])){

              $dtf=$_POST['datef'];
              $dtt=$_POST['datet'];

                $query1="select COUNT(cat) from gate_transaction where cat='car' and date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";
                $query2="select COUNT(cat) from gate_transaction where cat='van' and date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";
                $query3="select COUNT(cat) from gate_transaction where cat='Motor Bicycle' and date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";
                $query4="select COUNT(cat) from gate_transaction where cat='Three wheel' and date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";
                $query5="select COUNT(cat) from gate_transaction where cat='other' and date BETWEEN '$dtf' AND '$dtt' ORDER BY trans_id";


                $result1=mysqli_query($conn, $query1);
                $result2=mysqli_query($conn, $query2);
                $result3=mysqli_query($conn, $query3);
                $result4=mysqli_query($conn, $query4);
                $result5=mysqli_query($conn, $query5);
                  
               
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

  <form class="well form-horizontal" action="most.php" method="post" id="contact_form">
    <fieldset>

      <legend>
        <center>
          <h2><b>PARKED VEHICLES SUMMARY</b></h2>
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

  


    </fieldset>


<br> <br>
  
  <?php  if(isset($_POST['sub'])){ ?>
  <table class="table">
    <thead>
      <tr>
        <th class="th">CAR</th>
        <th class="th">VAN</th>
        <th class="th">MOTOR BICYCLE</th>
        <th class="th">THREE WHEEL</th>
        <th class="th">OTHER</th>
       
        
      </tr>
    </thead>
     <tbody>
      <tr>
        
        <td class="td"><?php   while( $row1 = mysqli_fetch_array($result1)) {
                  $ans1=$row1[0];
                  echo $ans1;
             }  ?></td>
        <td class="td"><?php   while( $row2 = mysqli_fetch_array($result2)) {
                  $ans2=$row2[0];
                  echo $ans2;
             }  ?></td>
        <td class="td"><?php   while( $row3 = mysqli_fetch_array($result3)) {
                  $ans3=$row3[0];
                  echo $ans3;
             }  ?></td>
        <td class="td"><?php   while( $row4 = mysqli_fetch_array($result4)) {
                  $ans4=$row4[0];
                  echo $ans4;
             }  ?></td>
        <td class="td"><?php   while( $row5 = mysqli_fetch_array($result5)) {
                  $ans5=$row5[0];
                  echo $ans5;
             }  ?></td>
        
      </tr>
     
    </tbody>
  </table>
  <br><br>


  <?php
              $dtf=$_POST['datef'];
              $dtt=$_POST['datet'];
        $most="select cat, COUNT(cat) AS MOST_FREQUENT from gate_transaction where date BETWEEN '$dtf' AND '$dtt' GROUP BY cat ORDER BY COUNT(cat) DESC";
        $result6=mysqli_query($conn, $most);?>

        <h2>Most Parked Vehicle With In the Period : </h2>

        <h1 style="color: red;"><b>
        <?php
        while( $row6 = mysqli_fetch_array($result6)) {
                  $ans6=$row6[0];
                  echo $ans6;
          
                } ?>
                  </b></h1>



<?php

   } ?>
</form>
</div>
</div>

</div>

  
        
</section>

</body>

</html>