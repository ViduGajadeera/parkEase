<!DOCTYPE html>

<?php 
    $con=mysqli_connect("localhost","root","","parkease");
$vno= $_POST['VNO'];
$vcat=$_POST['VCAT'];
$cat= array("Car","Van","Bike","Three wheel","Other");  
date_default_timezone_set("Asia/Colombo"); 


switch($vcat){
    case 0: 
    $zone="A";


    //update zoned set vehicleNo='', status='vacant' where reservationStatus='no';


    $query="update zonea set vehicleNo='$vno', status='fill' where reservationStatus='no' order by slotNumber limit 1";
    $show="select slotNumber from zonea where vehicleNo='$vno'";
 
    
    break;

    case 1: 
    $zone="A";
    $query="update zonea set vehicleNo='$vno', status='fill' where reservationStatus='no' order by slotNumber limit 1";
    $show="select slotNumber from zonea where vehicleNo='$vno'";
    
    break; 

    case 2: 
    $zone="B";
    $query="update zoneb set vehicleNo='$vno', status='fill' where reservationStatus='no' order by slotNumber limit 1";
    $show="select slotNumber from zoneb where vehicleNo='$vno'";

   
    break; 

    case 3: 
    $zone="C";
    $query="update zonec set vehicleNo='$vno', status='fill' where reservationStatus='no' order by slotNumber limit 1";
    $show="select slotNumber from zonec where vehicleNo='$vno'";
    
 
    break; 

    case 4: 
    $zone="D";
    $query="update zoned set vehicleNo='$vno', status='fill' where reservationStatus='no' order by slotNumber limit 1";
    $show="select slotNumber from zoned where vehicleNo='$vno'";

    break;    
}







mysqli_query($con,$query); 

$showw=mysqli_query($con,$show);



 ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Entrance Ticket</title>
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
                                                                    } ?></label>

                                        </div>
                                        </div> 
                                        






</body>
</html>
