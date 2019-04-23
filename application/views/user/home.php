<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/user/css/bootstrap.min.css" rel="stylesheet">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets/user/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/user/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .navbar-brand img{
        margin-left:220%;
    }
    @media (max-width: 992px){
        .navbar-brand img{
            margin-left: 0;
        }
    }
    .navbar a {

        color: #78828c !important;
        font: 400 18px "PT Sans Narrow", Arial, sans-serif;
        text-transform: uppercase;
    }
    .top-menu{
        margin-left: 55%;
    }
    @media (max-width: 1024px){
        .navbar ul a {
            border-bottom: 1px solid #efefef;
            padding: 10px 15px 10px 10px !important;
            position: relative;
            color: #666;
        }
        a:focus, a:hover, a:active {
            color: white !important;
            outline: 0;
            text-decoration: none;
            background-color: #e6400c;;
        }
        .navbar a {
            display: block;

        }
        .top-menu{
            margin-left: 0;
        }
    }

</style>

<body class="fixed-nav sticky-footer" id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav" style=" box-shadow: 0 1px 4px rgba(228, 228, 228, 0.95);">

    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/pages/img/logo/logo.png" style="width: 110px;"></a>
    <a href="javascript:void(0);" class="mobi-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
       aria-label="Toggle navigation" style="right: 0;"></i></a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav top-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/') ?>">HOME</a></li>
            <li class="nav-item"><a class="nav-link" class="nav-link" href="">About</a></li>
            <li><a class="nav-link"  href="">Proudcts</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/page_company') ?>">Company</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>


        </ul>
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="">
                    <i class="fa fa-home"></i>
                    <span class="nav-link-text">Check</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">My Order</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="">On Way</a>
                    </li>
                    <li>
                        <a href="">History</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Profile</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="">Payment</a>
                    </li>
                    <li>
                        <a href="">Address</a>
                    </li>
                    <li>
                        <a href="">Account</a>
                    </li>
                    <li>
                        <a href="">Info</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Go to Mefon</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

    </div>



</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <!-- BEGIN PRE-FOOTER -->
        <div class="pre-footer" id="contact">
            <div class="container">
                <div class="row">
                    <!-- BEGIN BOTTOM ABOUT BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2>About us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                        <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                    </div>
                    <!-- END BOTTOM ABOUT BLOCK -->
                    <!-- BEGIN TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2 class="margin-bottom-0">Latest Tweets</h2>

                    </div>
                    <!-- END TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <!-- BEGIN BOTTOM CONTACTS -->
                        <h2>Our Contacts</h2>
                        <address class="margin-bottom-20">
                            35, Lorem Lis Street, Park Ave<br>
                            California, US<br>
                            Phone: 300 323 3456<br>
                            Fax: 300 323 1456<br>
                            Email: <a href="">info@mefon.com</a><br>
                            Skype: <a href="">mefon</a>
                        </address>
                        <!-- END BOTTOM CONTACTS -->
                        <div class="pre-footer-subscribe-box">
                            <h2>Newsletter</h2>
                            <form action="javascript:void(0);">
                                <div class="input-group">
                                    <input type="text" placeholder="youremail@mail.com" class="form-control">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->



        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- BEGIN COPYRIGHT -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <!-- END COPYRIGHT -->
                    <div class="col-md-4 col-sm-4 text-right">
                        <p class="powered">More details <a href="" target="_blank" >Mefon</a> - Collect from <a href=""  target="_blank">Buty</a></p>
                    </div>


                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN PRE-FOOTER -->
        <div class="pre-footer" id="contact">
            <div class="container">
                <div class="row">
                    <!-- BEGIN BOTTOM ABOUT BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2>About us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                        <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                    </div>
                    <!-- END BOTTOM ABOUT BLOCK -->
                    <!-- BEGIN TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2 class="margin-bottom-0">Latest Tweets</h2>

                    </div>
                    <!-- END TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <!-- BEGIN BOTTOM CONTACTS -->
                        <h2>Our Contacts</h2>
                        <address class="margin-bottom-20">
                            35, Lorem Lis Street, Park Ave<br>
                            California, US<br>
                            Phone: 300 323 3456<br>
                            Fax: 300 323 1456<br>
                            Email: <a href="">info@mefon.com</a><br>
                            Skype: <a href="">mefon</a>
                        </address>
                        <!-- END BOTTOM CONTACTS -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- BEGIN COPYRIGHT -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <!-- END COPYRIGHT -->
                    <div class="col-md-4 col-sm-4 text-right">
                        <p class="powered">More details <a href="" target="_blank" >Mefon</a> - Collect from <a href=""  target="_blank">Buty</a></p>
                    </div>


                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN PRE-FOOTER -->
        <div class="pre-footer" id="contact">
            <div class="container">
                <div class="row">
                    <!-- BEGIN BOTTOM ABOUT BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2>About us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                        <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                    </div>
                    <!-- END BOTTOM ABOUT BLOCK -->
                    <!-- BEGIN TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <h2 class="margin-bottom-0">Latest Tweets</h2>

                    </div>
                    <!-- END TWITTER BLOCK -->
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <!-- BEGIN BOTTOM CONTACTS -->
                        <h2>Our Contacts</h2>
                        <address class="margin-bottom-20">
                            35, Lorem Lis Street, Park Ave<br>
                            California, US<br>
                            Phone: 300 323 3456<br>
                            Fax: 300 323 1456<br>
                            Email: <a href="">info@mefon.com</a><br>
                            Skype: <a href="">mefon</a>
                        </address>
                        <!-- END BOTTOM CONTACTS -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->



        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- BEGIN COPYRIGHT -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">2019 © Mefon Page.Reserved  ALL Rights Reserved.</div>
                    </div>
                    <!-- END COPYRIGHT -->
                    <div class="col-md-4 col-sm-4 text-right">
                        <p class="powered">More details <a href="" target="_blank" >Mefon</a> - Collect from <a href=""  target="_blank">Buty</a></p>
                    </div>


                </div>
            </div>
        </div>
        <!-- END FOOTER -->



    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer" style="color: white;position: fixed">
        <div class="container">
            <div class="text-center">
                <small>2019 © Mefon Page.Reserved ALL Rights Reserved.</small>
            </div>
        </div>
    </footer>
<!--    <!-- Scroll to Top Button-->
<!--    <a class="scroll-to-top rounded" href="#page-top">-->
<!--        <i class="fa fa-angle-up"></i>-->
<!--    </a>-->
<!--    <!-- Logout Modal-->
<!--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
<!--         aria-hidden="true">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>-->
<!--                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">-->
<!--                        <span aria-hidden="true">×</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>-->
<!--                <div class="modal-footer">-->
<!--                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>-->
<!--                    <a class="btn btn-primary" href="login.html">Logout</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>

<script src="<?php echo base_url(); ?>assets/user/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/user/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/user/js/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/user/js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/user/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/user/js/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/user/js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url(); ?>assets/user/js/sb-admin-datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/user/js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>



