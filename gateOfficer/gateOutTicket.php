<!DOCTYPE html>



<head>

<?php
include 'connection.php';


 $vno= $_POST['VNO'];

$delquery="select * from parked_vehicles where vehicle_no='$vno'";
         $ans = mysqli_query($conn, $delquery);
          while( $line = mysqli_fetch_assoc($ans)) {
          $arrs[]=$line;
          foreach($arrs as $arr)

                    switch ($arr['category']) {

                                                            case 'car':
                                                            $zone="zonea";
                                                            $del="update zonea set status='vacant', reservationStatus='no', vehicleNo='' where ((vehicleNo='$vno') and status='fill') order by slotNumber limit 1";
                                                            break;

                                                             case 'van':
                                                            $zone="zonea";
                                                          $del="update zonea set status='vacant', reservationStatus='no', vehicleNo='' where ((vehicleNo='$vno') and status='fill') order by slotNumber limit 1";
                                                            break;

                                                             case 'Motor Bicycle':
                                                            $zone="zoneb";
                                                            $del="update zoneb set status='vacant', reservationStatus='no', vehicleNo='' where ((vehicleNo='$vno') and status='fill') order by slotNumber limit 1";
                                                            break;

                                                             case 'Three wheel':
                                                            $zone="zonec";
                                                           $del="update zonec set status='vacant', reservationStatus='no', vehicleNo='' where ((vehicleNo='$vno') and status='fill') order by slotNumber limit 1";
                                                            break;

                                                             case 'other':
                                                            $zone="zoned";
                                                            $del="update zoned set status='vacant', reservationStatus='no', vehicleNo='' where ((vehicleNo='$vno') and status='fill') order by slotNumber limit 1";
                                                            break;

                                                       
                                                        
                                                    }


             mysqli_query($conn, $del);                                        
      }
      



?>








    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Gate Out Ticket</title>
    <style>
        @media print {
            @page {
                margin: 0 auto; /* imprtant to logo margin */
                sheet-size: 300px 250mm; /* imprtant to set paper size */
                page height: 100px;
            }
            
            
            }

            #topic{
                font-size: 2rem;
            }
         
           
        .al{
            text-align: left;
        }
        .bod{
            padding: 60px;
            text-align: center;
            font-size: 20px;
            margin: 20px;
        } 
        .ali{
            text-align: center;
        }
        #slot{
            font-size: 100px;
        }
    </style>

<?php   

        
        date_default_timezone_set("Asia/Colombo");
         $tariff;   
       
        // $vno="cas1234";
        $query="select * from parked_vehicles where vehicle_no='$vno'";
         $result = mysqli_query($conn, $query);
          while( $row = mysqli_fetch_assoc($result)) {
          $datas[]=$row;
          foreach($datas as $data)
                                                           

         if(mysqli_num_rows($result)>0){

            $date1=$data['date'];
            $date2= date('Y/m/d H:i:s');

            $from_time = strtotime($date1);
            $to_time = strtotime($date2);
            $hours = (round(abs($from_time - $to_time)/(60*60)));
            $diff=sprintf("%02d",$hours);

           

     


?>

</head>
<body onload="window.print();">

<div>
    <div class="head" align="center">
        <img src="logo.png" height="150px" width="150px"></td> 
    <p id="topic">ParkEase</p>
    <p><i>Automated Parking Management System</i></p>
    <p>--------------------------------------------------------------------------------------------------------------</p>
    <br>
    <h2>Gate Out Ticket</h2>
    </div>

                                            <div class="bod">
                                            <table><tr><td width="25%"></td><td class="ali">Vehicle No: </td><td><?php echo $data['vehicle_no'];  ?></td></tr>
                                            <tr><td width="25%"></td><td class="ali">Vehicle Category: </td><td><?php echo $data['category'];  ?></td></tr>
                                            <tr><td width="25%"></td><td class="ali">Date: </td><td><?php echo $data['date'];  ?></td></tr>
                                            <tr><td width="25%"></td><td class="ali">In Time: </td><td><?php echo $data['in_time'];  ?></td></tr>
                                            <tr><td width="25%"></td><td class="ali">Out Time:</td><td><?php echo(date("h:i:s")); ?></td></tr>
                                            <tr><td width="25%"></td><td class="ali">User Type:</td><td><?php echo $data['user_type'];  ?></td></tr>

                                            <?php



                                                        




                                                   if($data['user_type']=="unregistered"){
                                                    switch ($data['category']) {
                                                        case 'car':
                                                            $tid=1;
                                                            break;

                                                             case 'van':
                                                            $tid=1;
                                                            break;

                                                             case 'Motor Bicycle':
                                                            $tid=2;
                                                            break;

                                                             case 'Three wheel':
                                                            $tid=3;
                                                            break;

                                                             case 'other':
                                                            $tid=4;
                                                            break;
                                                        
                                                        
                                                    }


                                                   
     
             $sqlquery="select * from tarrif where tarrif_id='$tid'";
   $resultsql = mysqli_query($conn, $sqlquery);
 while( $rower = mysqli_fetch_assoc($resultsql)) {
          $rots[]=$rower;
          foreach($rots as $rot)
            if($diff<1){
                $tariff=$rot['price'];
            }else
            $tariff= ($rot['price']*$diff);
           // $tariff=$diff;
            


                                             if($data['user_type']=="unregistered"){
?>



                                            <tr><td width="35%"></td><td class="ali">Charge:</td><td>Rs. <?php echo $tariff;  ?></td></tr>
                                            <?php

                                            $today=date('Y/m/d');
                                            $transcat=$data['category'];
                                            $trans="insert into gate_transaction values ('','$today','$transcat','$tariff')";
                                            mysqli_query($conn, $trans); 
                                        }

      }
         

     }else if ($data['user_type']=="registered"){

         switch ($data['category']) {
                                                        case 'car':
                                                            $tid=5;
                                                            $tidp=1;
                                                            break;

                                                             case 'van':
                                                            $tid=5;
                                                            $tidp=1;
                                                            break;

                                                             case 'Motor Bicycle':
                                                            $tid=6;
                                                            $tidp=2;
                                                            break;

                                                             case 'three wheel':
                                                            $tid=7;
                                                            $tidp=3;
                                                            break;

                                                             case 'other':
                                                            $tid=8;
                                                            $tidp=4;
                                                            break;
                                                        
                                                        
                                                    }

              $sqlquery1="select * from tarrif where tarrif_id='$tidp'";
   $resultsql1 = mysqli_query($conn, $sqlquery1);
 while( $rower1 = mysqli_fetch_assoc($resultsql1)) {
          $rots1[]=$rower1;
          foreach($rots1 as $rot1)
            
                $tariff1=$rot1['price'];
     









                     $sqlquery="select * from tarrif where tarrif_id='$tid'";
   $resultsql = mysqli_query($conn, $sqlquery);
 while( $rower = mysqli_fetch_assoc($resultsql)) {
          $rots[]=$rower;
          foreach($rots as $rot)
            if($diff<8){
                $tariff=$rot['price'];
            }else
            $tariff= $rot['price']+($rot1['price']*($diff-8));
            //$tariff=$diff-8;



     }
}
}                                                   
                                                if($data['user_type']=="registered"){
                                            ?>

                                            <tr><td width="35%"></td><td class="ali">Charge:</td><td>Rs. <?php echo $tariff;  ?></td></tr>
                                        <?php 

                                                $today=date('Y/m/d');
                                            $transcat=$data['category'];
                                            $trans="insert into gate_transaction values ('','$today','$transcat','$tariff')";
                                            mysqli_query($conn, $trans);

                                    }

                                     ?>
                                            </table>
                                            <?php
                                                

                                                
                                            }
                                        }


                                              

                                             ?>
    <p>------------------------------------------------------------------------------------</p>

    <h2>Thank you </h2>
    <h3>Come Again !</h3>

                                        </div>
                                        </div> 





</body>
</html>
