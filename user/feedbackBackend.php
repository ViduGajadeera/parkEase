<?php  

      

        if(isset($_POST['sub'])){


            $name=$_POST['name'];
            $addr=$_POST['address'];
            $mobile=$_POST['mobile'];
            $mail=$_POST['mail'];
            $suggest=$_POST['sug'];


            $rate=$_POST['rate'];
            $price=$_POST['price'];
            $sup=$_POST['sup'];
            $recommend=$_POST['recommend'];

            $drate; $dprice; $dsup; $drec;

             


            switch($rate){

              case "rate_vgood":
                                $drate="Very good";
                                break;

              case "rate_good":
                                $drate="Good";
                                break;

              case "rate_fair":
                                $drate="Fair";
                                break;

              case "rate_poor":
                                $drate="Poor";
                                break;

              case "rate_vpoor":
                                $drate="Very poor";
                                break;
            }



             switch($price){

              case "price_vgood":
                                $dprice="Very good";
                                break;

              case "price_good":
                                $dprice="Good";
                                break;

              case "price_fair":
                                $dprice="Fair";
                                break;

              case "price_poor":
                                $dprice="Poor";
                                break;

              case "price_vpoor":
                                $dprice="Very poor";
                                break;
            }



              switch($sup){

              case "sup_vgood":
                                $dsup="Very good";
                                break;

              case "sup_good":
                                $dsup="Good";
                                break;

              case "sup_fair":
                                $dsup="Fair";
                                break;

              case "sup_poor":
                                $dsup="Poor";
                                break;

              case "sup_vpoor":
                                $dsup="Very poor";
                                break;
            }



              switch($recommend){

              case "recommend_vgood":
                                $drec="Very good";
                                break;

              case "recommend_good":
                                $drec="Good";
                                break;

              case "recommend_fair":
                                $drec="Fair";
                                break;

              case "recommend_poor":
                                $drec="Poor";
                                break;

              case "recommend_vpoor":
                                $drec="Very poor";
                                break;
            }


            $sql="insert into cus_feedback values ('','$name','$addr','$mobile','$mail','$drate','$dprice','$dsup','$drec','$suggest')";

      if(mysqli_query($conn,$sql)){

        ?>
            <script Type="javascript">alert("Feedback sent Successfully !")</script>

        <?php 

      }



    

        }
?>