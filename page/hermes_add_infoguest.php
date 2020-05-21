<!DOCTYPE html>
<?php include "../function.php" ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/img/apple-icon.png") ?>" />
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/favicon.ico") ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets/css/light-bootstrap-dashboard.css?v=2.0.0") ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url("assets/css/demo.css") ?>" rel="stylesheet" />
    <script src="<?php echo base_url("assets/js/jquery-3.5.0.min.js") ?>"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url("assets/img/sidebar-5.jpg") ?>">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- start add infoguest check-in  -->
            <div class="content">
                <div class="card">
                    <div class="row m-2">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Stay date : </strong><span id="display_checkin"></span><strong> to </strong><span id="display_checkout"></span>
                                </div>
                                <div class="col-md-6">
                                    <strong>Book Date : </strong><span id="display_bookdate"></span></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>By : </strong><span id="display_firstname"></span>
                                    <strong>Agency : </strong><span id="display_lastname"></span>
                                </div>
                                <div class="col-md-6">
                                    <strong>Phone : </strong><span id="display_phone"></span><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <strong>Room : </strong><span id="display_room"></span>
                            <strong>Type : </strong><span id="display_type"></span>
                            <strong>Building : </strong><span id="display_building"></span>
                            <strong>Views : </strong><span id="display_views"></span>
                        </div>

                    </div>

                    <form id="form_add_checkinguest" method="POST">
                        <div class="card-head">
                            <div class="row m-2">
                                <div class="col-md-7">
                                    <h3 class=""> Add more guest in this room </h3>
                                </div>
                                <div class="col-md-5 mt-3 text-right">
                                    <button type="submit" data-toggle="modal" id="savecheckinguest" data-target="#exampleModal" class="btn btn-info btn-round ">Save</button>
                                    <button type="submit" id="cancel_edit_infoguest" class="btn btn-primary btn-round ">Cancel</button>
                                    <input type="text" name="bl_id_add" id="bl_id_add" style="display:none;">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">First Name : </label>
                                    <input type="text" class="form-control" name="display_firstname_checkinguest" id="display_firstname_checkinguest" />
                                </div>
                                <div class="col-md-3">
                                    <label for="">Last Name : </label>
                                    <input type="text" class="form-control" name="display_lastname_checkinguest" id="display_lastname_checkinguest" />
                                </div>
                                <div class="col-md-3">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control" name="display_phone_checkinguest" id="display_phone_checkinguest" />
                                </div>
                                <div class="col-md-3">
                                    <label for="">Passport ID : </label>
                                    <input type="text" class="form-control" name="display_passport_checkinguest" id="display_passport_checkinguest" />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Birthday (YYYY-MM-DD) : </label>
                                    <input type="date" class="form-control" name="display_HBD_checkinguest" id="display_HBD_checkinguest" value="" min="2020-01-01" max="2020-12-31">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Nationality : </label>
                                    <select class="custom-select form-control" name="display_nation_checkinguest" id="display_nation_checkinguest">
                                        <option selected>N/A</option>
                                        <option value="1">thai</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">E-mail : </label>
                                    <input type="text" class="form-control" name="display_email_checkinguest" id="display_email_checkinguest" />
                                </div>
                                <div class="col-md-3">
                                    <label for="">Sex : </label>
                                    <select class="custom-select form-control" name="display_sex_checkinguest" id="display_sex_checkinguest">
                                        <option selected>N/A</option>
                                        <option value="1">male</option>
                                        <option value="2">female</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Including Breakfast : </label>
                                    <select class="custom-select form-control" name="display_incbreakfast_checkinguest" id="display_incbreakfast_checkinguest">
                                        <option selected>No</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Breakfast </label>
                                    <select class="custom-select form-control" name="display_breakfast_checkinguest" id="display_breakfast_checkinguest">
                                        <option selected>N/A</option>
                                        <option value="1">set 1</option>
                                        <option value="2">set 2</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Room Price : </label>
                                    <input type="text" class="form-control" name="display_price_checkinguest" id="display_price_checkinguest" />
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <!-- end add infoguest check-in  -->
        </div>
    </div>


    <footer class="footer">
        <div class="container-fluid">
            <nav>
                <ul class="footer-menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Company</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </ul>
                <p class="copyright text-center">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </nav>
        </div>
    </footer>
    </div>
    <!-- Modal -->
    <!-- ALERT ARE YOU SURE? -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD GUEST
                        INFORMATION
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ARE YOU SURE WANT TO CHANGES ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_yes">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ALERT BOX SUCCESS -->
    <div id="modal_alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content alert alert-success">
                SAVE SUCCESSFULLY
            </div>
        </div>
    </div>
</body>

<style>
    .fixposition {
        margin-left: 15px;
    }
</style>
<!--   Core JS Files   -->
<script src="<?php echo base_url("assets/js/core/jquery.3.2.1.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/core/popper.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/core/bootstrap.min.js") ?>" type="text/javascript"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=2.0.0") ?>" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("assets/js/demo.js") ?>"></script>
<!-- <script src="application/load_hermes.js"></script> -->
<script src="<?php echo base_url("application/add_infoguest.js") ?>"></script>

</html>