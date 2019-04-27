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
                <a  href="<?php echo site_url('user/user_logout') ?>" class="nav-link" data-toggle="modal" data-target="#exampleModal">
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