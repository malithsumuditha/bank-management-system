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
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard </h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Current Money</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">$9,000</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                    </div>
                                </div>
                                <div class="card-body bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue"></div>
                                </div>
                                <div class="card-footer text-center bg-white">
                                    <a href="#" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Number of Deposits</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">132</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                    </div>
                                </div>
                                <div class="card-body bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue3"></div>
                                </div>
                                <div class="card-footer text-center bg-white">
                                    <a href="#" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Number of Withdrawals</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">20</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">15%</span>
                                    </div>
                                </div>
                                <div class="card-body text-center bg-light p-t-40 p-b-40">
                                    <div id="sparkline-revenue2"></div>
                                </div>
                                <div class="card-footer text-center bg-white">
                                    <a href="#" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    
<?php include 'includes/footer.php' ?>
</body>
</html>
