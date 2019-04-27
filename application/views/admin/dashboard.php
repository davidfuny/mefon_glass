<?php
$this->load->view('layout/admin_header.php');
?>

    <!-- dynamic content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Dashboard 1.1</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row" style="display: none">
                <div class="col-md-12">
                    <div class="box box-default">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-info"></i> Version Info!</h4>
                                You are using the latest <strong>version </strong> of our <strong>Ecommerce Solution</strong>.<br>
                                This latest version is came up with both <strong>Ecommerce Desktop</strong> and <strong>Application</strong><br>
                                Our old version is not compatible with <strong>Desktop Version</strong>.<br>
                                If you want to choose our <strong>Ecommerce Desktop System</strong> as well. Please <strong>upgrade</strong> your all CMS to our latest <strong>version 3.0</strong>.
                                If you have purchased CMS with <strong>Desktop System package</strong> and want to buy <strong>Application Package</strong>. Please purchase our <strong>CMS and Application services</strong> and enable these feture from <strong>Admin Panel</strong>.<br>
                                If you have purchased CMS with Application System package and want to buy Desktop Package. Please purchase our <strong>CMS and Desktop services</strong> and enable these feture from <strong>Admin Panel</strong>.<br>
                                Just put your files into your existing system and enjoy with our <strong>Ecommerce Solution.</strong>.<br>
                                <strong>Now feel free to use!</strong>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Oders</h3>
                            <p>new oders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">view All Orders <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue">
                        <div class="inner">
                            <h3>Total Money</h3>
                            <p>Total Money</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">view All Products <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>Total Money Earned</h3>
                            <p>Total Money Earned</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">view All Orders <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">

                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>out Of Stock </h3>
                            <p>out Of Stock</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">out Of Stock <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>customer Registrations</h3>

                            <p>customer Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">view All Customers <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>total Products</h3>

                            <p>total Products</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="">view All Products <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>


            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./end of dynamic content -->


    <div class="control-sidebar-bg"></div>
    <!-- ./right sidebar -->
<?php
$this->load->view('layout/admin_footer.php');
?>
