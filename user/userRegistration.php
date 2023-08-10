<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> ParkEase - USER REGISTRATION</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <style type="text/css">
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  /*height: 100vh;*/
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

select{
     height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}


      </style>


      <?php  
      include 'connection.php';

            if(isset($_POST['sub'])){
            $name=$_POST['name'];
            $uname=$_POST['uname'];
            $mail=$_POST['email'];
            $mobile=$_POST['mobile'];
            $pwrd=$_POST['pwrd'];
            $repwrd=$_POST['repwrd'];
            $addr=$_POST['addr'];
            $dob=$_POST['dob'];
            $vno=$_POST['vno'];
            $workplace=$_POST['workplace'];
            $desig=$_POST['desig'];
            $gender=$_POST['gender'];
            $vcat;
            $cat;
            $vcat=$_POST['cater'];


            //age check 

            $date2=date("d-m-Y");
      $date1= new DateTime($dob);
      $date2= new DateTime($date2);

      $interval= $date1 ->diff($date2);
      $age = $interval -> y;



            if (!$vcat==0) {
              
            
            switch($vcat){
              
              case 1:
              $cat="car";
              break;

              case 2:
              $cat="van";
              break;

              case 3:
              $cat="Motor Bicycle";
              break;

              case 4:
              $cat="Three wheel";
              break;

              case 5:
              $cat="other";
              break;

            }
         



            // vehicle number validation
            if(preg_match("/^([a-zA-Z]{1,3}|((?!0*-)[0-9]{1,3}))-[0-9]{4}(?<!0{4})/m", $vno)){

            // mobile number validation 
            if(preg_match("/^[7]{1}[01245678]{1}[0-9]{7}$/", $mobile)){

                 if($age>=18){

            // password check
            if($pwrd==$repwrd){


                $hash = password_hash($pwrd,PASSWORD_DEFAULT);



                  $sqls = "SELECT * FROM users WHERE (username='$uname')";
                  $sqlp="SELECT cus_mobile FROM customer WHERE (cus_mobile='$mobile')";
                  $sqle = "SELECT cus_email FROM customer WHERE (cus_email='$mail')";
                  $sqlv="SELECT cus_vno FROM customer WHERE (cus_vno='$vno')";

        $result = mysqli_query($conn, $sqls);
        $result1 = mysqli_query($conn, $sqlp);
        $result2 = mysqli_query($conn, $sqle);
        $result3 = mysqli_query($conn, $sqlv);
       
        if (mysqli_num_rows($result) === 1) {
          
         echo('<script>alert("Username already exist please try another !")
            

            </script>');


          

        }else{
               
                if (mysqli_num_rows($result1) === 1) {
                    
                  echo('<script>alert("Mobile number already exist please try another !")
                   
            

            </script>');

                }else{ 

                if (mysqli_num_rows($result2) === 1) {

                  echo('<script>alert("Email address already exist please try another !")
            

            </script>');

                }else{


               if (mysqli_num_rows($result3) === 1) {

                  echo('<script>alert("Vehicle number already exist !")
            

            </script>');

                }else{             

               $sql="insert into customer values ('$name','$addr','$dob','$gender','$mail','$cat','$vno','$mobile','$workplace','$desig','')";
               $quer="insert into users values ('','$uname','$hash','user')";

               if(mysqli_query($conn,$sql)){

                mysqli_query($conn,$quer);



             echo('<script>alert("Registered successfully !")
            

            </script>');
           header('location: userLogin.php');

      }
    }
    }
    }
    }
            }else{ ?>

              <script Type="javascript">alert("Re-Entered password is not matching with the password. Try Again!")</script>

              <?php
            }


          }else{

    echo '<script>alert("Invalid age !")</script>';

  }


          }else{
            echo '<script>alert("Invalid Mobile Number !")</script>';
          }
        }else{

           echo '<script>alert("Invalid vehicle number !")</script>';
        }

         }else{
            echo '<script>alert("Please select the vehicle type !")</script>';

          }

         


          }

      ?>


   </head>
<body>
  <div class="container">
    <div>
    <img src="logo.png" height="80px" width="80px"> 
    <h2>ParkEase</h2>
  </div>
    <div class="title">USER Registration</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="name">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name="uname">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="(+94)" required name="mobile">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="pwrd">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required name="repwrd">
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter Your Address" required name="addr">
          </div>

            <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date"  required name="dob">
          </div>

            <div class="input-box">
            <span class="details">Vehicle Number</span>
              <input type="text" placeholder="Enter Your Vehicle Number" required name="vno">
              *Enter your vehicle number without letters of province. eg: WP
          </div>

          <div class="input-box">
            <span class="details">Vehicle Category</span>
             <select name="cater" required="">
               <option selected>-- SELECT VEHICLE CATEGORY--</option>
               <option value="1">CAR</option>
               <option value="2">VAN</option>
               <option value="3">MOTOR BIKE</option>
               <option value="4">THREE WHEEL</option>
               <option value="5">OTHER</option>

             </select>
          </div>

          <div class="input-box">
            <span class="details">Working Place (optional)</span>
            <input type="text" placeholder="Enter Your Working Place" name="workplace">
          </div>

            <div class="input-box">
            <span class="details">Designation (optional)</span>
            <input type="text" placeholder="Enter Your Designation" name="desig">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="not-specified">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
           <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="sub">
        </div>
      </form>
    </div>
  </div>
</body>
</html>