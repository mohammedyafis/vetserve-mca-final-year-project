
<?php  include 'connect.php';  ?>
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
                                           

                                            <li><a href="login.php">login</a></li>

                                           
                                        </ul>
                                    </nav>
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
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
        <div class="container">
    <div ><br><br><br>
       
      <div class="card-header"><center> <h2>Register</h2></center></div><br>


        <form role="form"  method="post">


<h4>Client Details*</h4><br>
 
 


<div class="form-group">

    <input type="text" name="name" class="form-control"  placeholder="Enter Client Name" required>
    </div>

<div class="form-group">
<input type="text" name="phone" class="form-control"  placeholder="Enter Client Contact no" required="true" maxlength="10" pattern="[0-9]+">
</div>


<div class="form-group">
<input type="email" id="email" name="email" class="form-control"  placeholder="Enter Client Email id" required="true" onBlur="userAvailability()">
<span id="user-availability-status1" style="font-size:12px;"></span>
</div>


<div class="form-group">
<textarea name="address" class="form-control"  placeholder="Enter Address" required="true"></textarea>
</div>


<h4>Patient Details*</h4><br>
<div class="form-group">
<input type="text" name="patname" class="form-control"  placeholder="Enter Patient Name" required="true">
</div>

<div class="form-group">
<div class="clip-radio radio-primary">
<input type="radio" id="rg-female" name="gender" value="female" >
<label for="rg-female">
Female
</label>
<input type="radio" id="rg-male" name="gender" value="male">
<label for="rg-male">
Male
</label>
</div>
</div>


<div class="form-group">
<input type="text" name="patage" class="form-control"  placeholder="Enter Patient Age" required="true">
</div>

<div class="form-group">
<input type="text" name="cat" class="form-control"  placeholder="Enter Patient Catagory" required>
</div>

<div class="form-group">
<input type="text" name="breed" class="form-control"  placeholder="Enter Patient Breed" required>
</div>

<h4>Login Details*</h4><br>
<div class="form-group">

<input type="text" name="uname" class="form-control"  placeholder="Enter Username " id="unamee"required onBlur="userAvailability()">
</div>
<span id="unamee" style="font-size:12px;"></span>
<div class="form-group">

<input type="text" name="passwd" class="form-control"  placeholder="Enter Password " required>
</div>
<input type="hidden" name="role" value="PATIENT">

<center><button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Register
</button></center>
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


<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),

type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
   

</body>


</html>


<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $patname=$_POST['patname'];
    $gender=$_POST['gender'];
    $patage=$_POST['patage'];
    $Catagory=$_POST['cat'];
    $breed=$_POST['breed'];
  



    $Username=$_POST['uname'];
    $Password=$_POST['passwd'];
    $role=$_POST['role'];


$a ="INSERT INTO `patient`(`c_name`, `phone`, `email`, `address`, `pat_name`, `gender`, `age`, `catagory`, `breed`) VALUES ('$name','$phone','$email','$address','$patname','$gender','$patage','$Catagory','$breed')";

mysqli_query($con,$a);

   $last_id = $con->insert_id;

   mysqli_query($con,"INSERT INTO `login`( `username`, `password`, `type`, `pat_id`) VALUES ('$Username','$Password','$role','$last_id')");

 echo "<script>alert('Successfully Registered');</script>";
 echo "<script>window.location.href='login.php';</script>";


         
    
}
?>


<?php include 'footer.php';?>


