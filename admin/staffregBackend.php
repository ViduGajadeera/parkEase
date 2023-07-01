<?php  
			if(isset($_POST['sub'])){
      $id=$_POST['EMPID'];
      $type=$_POST['emptype'];
      $name=$_POST['EMPNAME'];
      $address=$_POST['EMPADDRESS'];
      $dob=$_POST['DOB'];
      $gender=$_POST['gender'];
      $contact=$_POST['contact'];
      $email=$_POST['email'];
      $etype;
      $egender;
      if($type=="permanent"){
        $etype="permanent";
      }else if($type=="contract"){
        $etype="contract";
      }


      if($gender=="male"){
        $egender="male";
      }else if($gender=="female"){
        $egender="female";
      }

      $sql="insert into staff_registration values ('$id','$etype','$name','$address','$dob','$egender','$contact','$email')";

      if(mysqli_query($conn,$sql)){

        ?>
            <script Type="javascript">alert("Registered Successfully !")</script>

        <?php 

      }
    }


?>