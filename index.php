<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get's started</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section>
       <div><br/> <br/><br/><br/><br/><br/></div>
       <form id="san">
        <div id="text">
            <h2><span class="auto-typed"></span></h2>
        </div>
        
        <h1>Are You Admin or Officer or User?</h1>

        <div class="btn">
        		 
            <a href="admin\admin_login.php">ADMIN</a>           
            <a href="user\userLogin.php">USER</a>
            <a href="gateOfficer\officerLogin.php">OFFICER</a>  

        </div>


        <div class="dis">
            <p></p>
            <p>
                 all rights reserved®
            </p>
        </div>

</form>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   
    <script>
        var typed = new Typed(".auto-typed",{
            strings: ["Select your Category"],
            typeSpeed: 200,
            backSpeed: 200,
            loop: true
        })
    </script>
</body>
</html>