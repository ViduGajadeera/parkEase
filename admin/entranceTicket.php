<!DOCTYPE html>

<?php 
    $con=mysqli_connect("localhost","root","","parkease");
$vno= $_POST['VNO'];
$vcat=$_POST['VCAT'];
$cat= array("Car","Van","Bike","Three wheel","Other");  
date_default_timezone_set("Asia/Colombo"); 
$catt;

switch($vcat){
    case 0: 
    $zone="A";
    $catt="car";
    

    //update zoned set vehicleNo='', status='vacant' where reservationStatus='no';


    $query="update zonea set vehicleNo='$vno', status='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1";
    $show="select slotNumber from zonea where vehicleNo='$vno'";
 
    
    break;

    case 1: 
    $zone="A";
    $catt="van";
     
    $query="update zonea set vehicleNo='$vno', status='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1";
    $show="select slotNumber from zonea where vehicleNo='$vno'";
    
    break; 

    case 2: 
    $zone="B";
    $catt="Motor Bicycle";
     
    $query="update zoneb set vehicleNo='$vno', status='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1";
    $show="select slotNumber from zoneb where vehicleNo='$vno'";

   
    break; 

    case 3: 
    $zone="C";
    $catt="Three wheel";
     
    $query="update zonec set vehicleNo='$vno', status='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1";
    $show="select slotNumber from zonec where vehicleNo='$vno'";
    
 
    break; 

    case 4: 
    $zone="D";
    $catt="other";
    
    $query="update zoned set vehicleNo='$vno', status='fill' where ((status='vacant') and reservationStatus='no') order by slotNumber limit 1";
    $show="select slotNumber from zoned where vehicleNo='$vno'";

    break;    
}


$dateT=date('Y/m/d H:i:s', time());
$timeN=date("Y/m/d H:i:s");

 


mysqli_query($con,$query); 

$showw=mysqli_query($con,$show);



 ?>




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Entrance Ticket</title>
    <style>
        @media print {
            @page {
                margin: 0 auto; 
                sheet-size: 300px 250mm; 
                page height: 100px;
            }
            
            
            }

            #topic{
            	font-size: 2rem;
            }
         
           
        .al{
        	text-align: right;
        }
        .bod{
        	padding: 60px;
        	text-align: center;
        	font-size: 20px;
        	margin: 20px;
        } 
        .ali{
        	text-align: right;
        }
        #slot{
        	font-size: 100px;
        }
    </style>
</head>
<body onload="window.print();">

<div>
	<div class="head" align="center">
		<img src="logo.png" height="150px" width="150px"></td> 
	<p id="topic">ParkEase</p>
	<p><i>Automated Parking Management System</i></p>
	<p>--------------------------------------------------------------------------------------------------------------</p>
	<br>
	<h2>Entrance Ticket</h2>
	</div>

	 										<div class="bod">
                                            <table><tr><td width="35%"></td><td class="ali">Vehicle No: </td><td><?php echo($vno); ?></td></tr>
                                            <tr><td width="35%"></td><td class="ali">Vehicle Category: </td><td><?php echo($cat[$vcat]); ?></td></tr>
                                            <tr><td width="35%"></td><td class="ali">Date: </td><td><?php echo(date("d/m/Y")); ?></td></tr>
                                            <tr><td width="35%"></td><td class="ali">Time: </td><td><?php echo(date("h:i:s")); ?></td></tr>
                                            <tr><td width="35%"></td><td class="ali">Zone: </td><td><?php echo($zone);  ?></td></tr>
                                            

                                            </table>
                                             <div class="bod">
                                        	<label><h2>Your Slot Number</h2></label>
                                        	<label id="slot"><?php while($data= mysqli_fetch_array($showw)){
                                                                echo ($data[0]);
                                                                $slno=$data[0];  
                                                                    } ?></label>

                                        </div>
                                        </div> 




                                         <?php  

                                                        $sql3 = " SELECT * FROM customer where cus_vno='$vno'";

                                                     $result2 = mysqli_query($con, $sql3);
                                                     while( $row2 = mysqli_fetch_assoc($result2)) {
                                                            $customers[]=$row2;
                                                            foreach($customers as $customer)
                                                                if($vno==$customer['cus_vno']){
                                                                   
                                                                $query2="insert into parked_vehicles values ('$vno','$catt','$dateT','$timeN','registered')";
                                                                mysqli_query($con,$query2);
                                                               

                                                     

                                                                
                                                                $custp =$customer['cus_mobile'];
                                                                $cusName= $customer['cus_name'];
                                                                $cusGen;
                                                                if($customer['cus_gender']=="male"){
                                                                   $cusGen="Mr."; 
                                                                }elseif ($customer['cus_gender']=="female") {
                                                                  $cusGen="Ms/Mrs.";   
                                                                }



$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://dmw9er.api.infobip.com/sms/2/text/advanced",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"messages":[{"destinations":[{"to":"+94'.$custp.'"}],"from":"InfoSMS","text":"parkEase 1.0: \n'.$cusGen.' '.$cusName.' Your vehicle is parked at slot number '.$slno.'"}]}',
    CURLOPT_HTTPHEADER => array(
        "Authorization: App 19b995fc959ea5dfe1c7328c782230c0-8230f0aa-5c5c-443e-9e4c-660d8f675cd4",
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl); 
//echo $response; 
        

                                                                      
                                                                }
                                                                else {
                                                            $query3="insert into parked_vehicles values ('$vno','$catt','$dateT','$timeN','unregistered')";
                                                                mysqli_query($con,$query3);
                                                                }
                                                            } 

                                                           

 ?>
                                        






</body>

</html>
