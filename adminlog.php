<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/bclinico/index-multipage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 10:00:10 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- css file -->
<link rel="stylesheet " href="css/login.css">
<!-- Title -->
<title>Karn - Hospital</title>
<link rel="stylesheet" href="css/style2.css">

<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />







</head>
<body>
<?php
   require('config.php');
   session_start();
   if(isset($_POST['adminlogin']))
   {
    $query = "SELECT * FROM `admin` WHERE `admin_name`='$_POST[name]' AND `admin_pass`='$_POST[password]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        ?>
        <script>
            alert('login successfully...');
            window.location.href='pre clinic/preclinic.dreamstechnologies.com/html/template/index.php';
        </script>";
        <?php
    }else{
        echo "<script>alert('incorrect password'); </script>";
    }
}
   ?>
   
    <header class="header">
        <nav class="navbar">
            <a href="index-multipage.php" class="dropdown-toggle active" data-toggle="dropdown"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
            

        </nav>
    </header>
    <div class="background"></div>


    
    <div class="container">
        <div class="content">
            <div class="content-in">
            <h2 class="logo">Karn</h2>

            <div class="text-sci">
                <h2>Welcome to Hospital</h2>

                <p>welcome to our Hospital Login. it is Login page into Admin Login, Doctor Login and user Login.</p>

                <div class="social-icons">
                    
                    <a href="#" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>


                </div>
            </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="#" method="POST">
                    <h2>Admin Login</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" required="required" data-error="email must be required" name="name" id="">
                        <label>Username or Email</label>
                        
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <input type="password" required="required" data-error="Password must be required" name="password" id="">
                        <label>Password</label>
                        
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Password</a>
                    </div>

                    <button type="submit" name="adminlogin" class="btn">Sign In</button>

                    <div class="login-register">
                         </div>
                </form>
            </div>

           
        </div>
    </div>
    </div>

    

</body>
</html>