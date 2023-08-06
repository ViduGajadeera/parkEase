<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Staff - Log In</title>
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




session_start(); 



if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        ?> 
            <script>
                alert("Username is empty!");
                window.location.replace("officerLogin.php");
            </script>

        <?php

    }else if(empty($pass)){

     
        ?> 
            <script>
                alert("Password is empty!");
                window.location.replace("officerLogin.php");
            </script>

        <?php

    }else{

        $sql = "SELECT * FROM staff WHERE (username='$uname')";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            $hash=$row['password'];
             $verify = password_verify($pass, $hash);

            if ($row['username'] === $uname) {

                if ($verify) {
                 

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['userId'];

                header("Location: Ohome1.php");

                exit();
            }else{
                ?>
                        <script>
                alert("Incorrect Password !");
                window.location.replace("officerLogin.php");
            </script>

                <?php
            }

            }else{

               
        ?> 
            <script>
                alert("Incorrect Username !");
                window.location.replace("officerLogin.php");
            </script>

        <?php

            }

        }else{

             ?> 
            <script>
             alert("Incorrect Username or Password !");
               window.location.replace("officerLogin.php");
            </script>

        <?php

        }

    }

}
?>



   </head>
   <body>
      <div class="login-form">
         <div class="text">
           STAFF LOGIN
         </div>
         <form action="officerLogin.php" method="post">
            <div class="field">
               <div class="fas fa-user"></div>
               <input type="text" placeholder="Email or Phone" name="uname">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" placeholder="Password" name="password" >
            </div>

            <div class="link">
               
               <a href="Oforgot.php">Forgot Your Password</a>
            </div>
            <!-- <input type="submit" onsubmit=" log1()" value="LOG IN" name="btns" class="button">-->
             <button onsubmit="log1()">LOG IN</button>
             
          
         </form>
      </div>
   </body>
</html>