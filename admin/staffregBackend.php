<?php  
			if(isset($_POST['sub'])){
      $id=$_POST['EMPID'];
      $name=$_POST['EMPNAME'];
      $address=$_POST['EMPADDRESS'];
      $dob=$_POST['DOB'];
      $gender=$_POST['gender'];
      $contact=$_POST['contact'];
      $email=$_POST['email'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $egender;
    
      $hash = password_hash($password,PASSWORD_DEFAULT);

      if($gender=="male"){
        $egender="male";
      }else if($gender=="female"){
        $egender="female";
      }

       if(preg_match("/^[7]{1}[01245678]{1}[0-9]{7}$/", $contact)){

        $sqls = "SELECT * FROM staff WHERE (username='$username')";
         $sqlp="SELECT emp_contat FROM staff_registration WHERE (emp_contat='$contact')";
          $sqle = "SELECT emp_email FROM staff_registration WHERE (emp_email='$email')";
        
        $result = mysqli_query($conn, $sqls);
        $result1 = mysqli_query($conn, $sqlp);
        $result2 = mysqli_query($conn, $sqle);

         if (mysqli_num_rows($result) === 1) {
          
         echo('<script>alert("Username already exist please try another !")
            

            </script>');


          

        }else{

          if (mysqli_num_rows($result1) === 1) {
          
         echo('<script>alert("Contact number already exist please try another !")
            

            </script>');


          

        }else{

          if (mysqli_num_rows($result2) === 1) {
          
         echo('<script>alert("Email address already exist please try another !")
            

            </script>');


          

        }else{

      $sql="insert into staff_registration values ('$id','$name','$address','$dob','$egender','$contact','$email','Gate officer')";
      $sql2="insert into staff values ('$id','$username','$hash','Gate Officer')";

      mysqli_query($conn,$sql2);
      if(mysqli_query($conn,$sql)){

        ?>
            <script Type="javascript">alert("Registered Successfully !")</script>

        <?php 

      }
    }
    }
    }
    }else{
      echo '<script>alert("Invalid Mobile Number !")</script>';


    }
  }


?>