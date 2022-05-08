<!DOCTYPE html>
<!-- 05 May 2022 15:26:44 GMT -->

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
                        <h2>Open Account</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.php">Home </a></li>
                            <li>Open Account</li>
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

    <section class="account-wrap ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>Open Account</span>
                <h2>Super Save Account Open Form</h2>
            </div>
            <form action="#" class="account-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">Full name</label>
                            <input type="text" id="fname" name="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Mobile Number</label>
                            <input type="number" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="NIC-Number">NIC Number</label>
                            <input type="text" id="nic" name="nic">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" id="dob" name="dob">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="0">Gender</option>
                                <option value="1">Male </option>
                                <option value="2">Female </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">Father's name</label>
                            <input type="text" id="fname" name="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mname">Mother's name</label>
                            <input type="text" id="mname" name="mname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="marry_type">Marital Status</label>
                            <select name="marry_type" id="marry_type">
                                <option value="0">Married</option>
                                <option value="1">Married</option>
                                <option value="12">Unmarried</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sname">Spouse's anme</label>
                            <input type="text" id="sname" name="sname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nation">Nationality</label>
                            <input type="text" id="nation" name="nation">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ocupation">Ocupation</label>
                            <input type="text" id="ocupation" name="ocupation">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mon">Monthly Income</label>
                            <input type="text" id="mon" name="mon">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="soi">Source Of Income</label>
                            <input type="text" id="soi" name="soi">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4>Address</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Address 1</label>
                            <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address_2">Address 2</label>
                            <textarea name="address_2" id="address_2" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" id="state">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zip">ZIP Code</label>
                            <input type="text" name="zip" id="zip">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn style1 w-100 d-block"> Open Account</button>
                    </div>
                </div>
            </form>
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

<!-- Mirrored from templates.hibootstrap.com/raxa/rtl/open-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 15:56:44 GMT -->

</html>