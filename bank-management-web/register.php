<!DOCTYPE html>


<!-- Mirrored from templates.hibootstrap.com/raxa/rtl/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 15:56:44 GMT -->


<?php include 'inc/header.php'; ?>

        <div class="content-wrapper">

            <div class="breadcrumb-wrap bg-spring">
                <img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
                <img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
                <img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
                <img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-sm-8">
                            <div class="breadcrumb-title">
                                <h2>Register</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="index.html">Home </a></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                            <div class="breadcrumb-img">
                                <img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
                                <img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
                                <img src="assets/img/breadcrumb/breadcrumb-3.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="Login-wrap ptb-100">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="login-form-wrap">
                                <div class="login-header">
                                    <h3>Register New Account</h3>
                                </div>
                                <div class="login-form">
                                    <div class="login-body">
                                        <form class="form-wrap"  method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="text" name="fullName" type="text" placeholder="Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="userName" name="userName"  placeholder="Username" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="email" name="email" type="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="pwd" name="password" type="password" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="pwd_2" name="pwd_2" placeholder="Confirm Password" type="password" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-12 mb-20">
                                                    <div class="checkbox style3">
                                                        <input type="checkbox" id="test_1">
                                                        <label for="test_1">
                                                            I Agree with the <a class="link style1" href="terms-of-service.html">Terms &amp; conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <button type="submit"  name="submit" class="btn style1">
                                                            Register Now
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-0">Have an Account? <a class="link style1" href="login.html">Sign In</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        <?php include 'inc/footer.php'; ?>

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/raxa/rtl/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 15:56:44 GMT -->

</html>


<?php
//to check button is clicked
if(isset($_POST["submit"]))
//set database connection
//require_once('dbconnection.php');
include_once("dbconnection.php");

//assign variable 
$fullName = $_POST["fullName"];
$userName = $_POST["userName"];
$email = $_POST["email"];
$password = $_POST["password"];
//$encryptPassword = md5($password);


$sql1 = "INSERT INTO user (fullName,userName,email,password) VALUES ('" . $fullName . "','" . $userName . "','" . $email . "','" . $password . "')";
    if ($db->query($sql1) === TRUE) {
	echo '<script type="text/javascript">'; 
	echo 'alert("Successfull");'; 
	echo 'window.location.href = "login.php";';
	echo '</script>';
    } else {
        echo '<script>alert("Something Error")</script>';
 }

?>