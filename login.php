<?php


session_start();
 
require_once "connect.php";

 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $result =mysqli_query($con,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row = mysqli_fetch_array($result);
        $user=$row['username'];   
        $id=$row['login_id'];
        $type=$row['type'];    
        $staff=$row['staff_id']; 
        $pat_id = $row['pat_id'];

             
  if($type=='PHARMACY')
    {    
      $_SESSION['login_id']=$id; 
    $_SESSION['uname']=$user;
     $_SESSION['type']=$type;
      
      header("location:pharmacy/pharma-home.php");
    }  
  elseif($type=='ADMIN')
    {  
   $_SESSION['login_id']=$id; 
    $_SESSION['username']=$user;
     $_SESSION['type']=$type;
       header("location:admin/admin-home.php");                     
    }
    elseif($type=='DOCTOR')
    {  
   $_SESSION['login_id']=$id; 
   $_SESSION['staff_id']=$staff; 
    $_SESSION['username']=$user;
     $_SESSION['type']=$type;
     
    
        
       header("location:doctor/appoint.php");                     
    }
    elseif($type=='PATIENT')
    {  
    $_SESSION['login_id']=$id; 
    $_SESSION['username']=$user;
     $_SESSION['type']=$type;
     $_SESSION['pat_id']=$pat_id;
     
    
        
       header("location:patient-home.php");                     
    }
    elseif($type=='RECEPTION')
    {  
    $_SESSION['login_id']=$id; 
    $_SESSION['username']=$user;
     $_SESSION['type']=$type;
    
        
       header("location:reception/reception-home.php");                     
    }







     else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                  
    
    // Close connection
    mysqli_close($con);
}}
?>












<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vetserve </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo2.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


   <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">

                                            <li><a href="index.php">Home</a></li>
                                           

                                            <li><a href="register.php">Register</a></li>

                                           
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <div class="container">
    <div class="card card-login mx-auto mt-5">
         <div class="wrapper" style="margin:0 auto;margin-top:50px;">
      <div class="card-header"><center> <h2>Login</h2></center></div>
      <div class="card-body">
        <p>Please fill in your credentials to login.</p>
        <form action="" method="POST">
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
               <center><input name="sbmt" type="submit" class="btn btn-primary" value="Login"></center> 
            </div>
            
        </form>
        </div>
    </div>   
      </div>
    </div>
  </div>
    
        
    <br><br>




        
        
        
        
        
            <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

   

</body>

</html>
<?php include 'footer.php';?>