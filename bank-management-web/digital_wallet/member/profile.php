<!doctype html>
<html lang="en">

<?php include 'includes/header.php' ?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        
    <?php include 'includes/navbar.php' ?>
    <?php include 'includes/sidebar.php' ?>
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><i class="fa fa-fw fa-user"></i> My Profile </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Profile Information</h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" novalidate="">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" placeholder="" value="John" required="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" placeholder="" value="Doe" required="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="lastName">Email</label>
                                                        <input type="text" class="form-control" placeholder="" value="john@gmail.com" required="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="lastName">Contact</label>
                                                        <input type="text" class="form-control" placeholder="" value="09897897877" required="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">Username</label>
                                                        <input type="text" class="form-control" placeholder="" value="John" required="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Password</label>
                                                        <input type="password" class="form-control" placeholder="" value="**********" required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-12 offset-lg-0">
                                                        <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    
</body>
 
</html>