<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
    <?php 
    session_start();

    ?>



      <meta charset="utf-8">
      <title>Forgot Your Password</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style type="text/css">

      @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins',sans-serif;
}
body{
  display: flex;
  height: 100vh;
  text-align: center;
  align-items: center;
  justify-content: center;
  background: #151515;
}
.login-form{
  position: relative;
  width: 370px;
  height: auto;
  background: #1b1b1b;
  padding: 40px 35px 60px;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  box-shadow: inset 0 0 1px #272727;
}
.text{
  font-size: 30px;
  color: #c7c7c7;
  font-weight: 600;
  letter-spacing: 2px;
}
form{
  margin-top: 40px;
}
form .field{
  margin-top: 20px;
  display: flex;
}
.field .fas{
  height: 50px;
  width: 60px;
  color: #868686;
  font-size: 20px;
  line-height: 50px;
  border: 1px solid #444;
  border-right: none;
  border-radius: 5px 0 0 5px;
  background: linear-gradient(#333,#222);
}
.field input,form button{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 19px;
  color: #868686;
  padding: 0 15px;
  border-radius: 0 5px 5px 0;
  border: 1px solid #444;
  caret-color: #339933;
  background: linear-gradient(#333,#222);
}
input:focus{
  color: #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.2),
              inset 0 0 5px rgba(0,255,0,.1);
  background: linear-gradient(#333933,#222922);
  animation: glow .8s ease-out infinite alternate;
}
@keyframes glow {
   0%{
    border-color: #339933;
    box-shadow: 0 0 5px rgba(0,255,0,.2),
                inset 0 0 5px rgba(0,0,0,.1);
  }
   100%{
    border-color: #6f6;
    box-shadow: 0 0 20px rgba(0,255,0,.6),
                inset 0 0 10px rgba(0,255,0,.4);
  }
}
button{
  margin-top: 30px;
  border-radius: 5px!important;
  font-weight: 600;
  letter-spacing: 1px;
  cursor: pointer;
}
button:hover{
  color: #339933;
  border: 1px solid #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.3),
              0 0 10px rgba(0,255,0,.2),
              0 0 15px rgba(0,255,0,.1),
              0 2px 0 black;
}
.link{
  margin-top: 25px;
  color: #868686;
}
.link a{
  color: #339933;
  text-decoration: none;
}
.link a:hover{
  text-decoration: underline;
}
</style>


<?php 
 include 'connection.php';   

	if (isset($_POST['sub'])) {
    $mobile=$_POST['mobile'];
    if(preg_match("/^[0]{1}[7]{1}[01245678]{1}[0-9]{7}$/", $mobile)){
       $sqlp="SELECT * FROM customer WHERE (cus_mobile='$mobile')";
        $result1 = mysqli_query($conn, $sqlp);
        if (mysqli_num_rows($result1) === 1) {

          $otp= rand(1000,9999);


                                                     while( $row = mysqli_fetch_assoc($result1)) {
                                                            $customers[]=$row;
                                                            foreach($customers as $customer)
                                                               $custp =$customer['cus_mobile'];
		  
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
    CURLOPT_POSTFIELDS =>'{"messages":[{"destinations":[{"to":"+94'.$custp.'"}],"from":"InfoSMS","text":"parkEase 1.0: \n'. 'Your OTP to reset your password is '.$otp.'"}]}',
    CURLOPT_HTTPHEADER => array(
        "Authorization: App 19b995fc959ea5dfe1c7328c782230c0-8230f0aa-5c5c-443e-9e4c-660d8f675cd4",
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl); 
//echo $response;

$_SESSION['otp']=$otp;
$_SESSION['mobile']=$custp;
header('location: otp.php');

}




  }else{
    echo('<script>alert("Mobile number doest not registered !")
                   
            

            </script>');
  } 
		
   }else{
            echo '<script>alert("Invalid Mobile Number !")</script>';
          }

 }

?>


   </head>
   <body>
      <div class="login-form">
         <div class="text">
           FORGOT YOUR PASSWORD ?
         </div>
         <form action="forgot.php" method="post">
            <div class="field">
               <div class="fas fa-mobile-alt"></div>
               <input type="text" placeholder="Enter Mobile Number" name="mobile">
            </div>
            
            
             <button type="submit" name="sub">Submit</button>
          
          
         </form>
      </div>
   </body>
</html>