<?php
$this->load->view('layout/admin_header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Main Categories <small>Listing All Main Categories...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Main Categories</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listing All Main Categories </h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo site_url('admin/category/addcategory') ?>" type="button" class="btn btn-block btn-primary">Add New Category</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php
                                if(isset($delete)){ ?>
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        The category has been deleted.
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ENGLISH NAME</th>
                                        <th>CHINES NAME</th>
                                        <th>Added/Last Modified Date</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(count($categories)>0){
                                        $cnt=0;
                                        foreach ($categories as $key=>$category){
                                            $cnt = $cnt+1;?>
                                            <tr>
                                                <td><?=$cnt?></td>
                                                <td><?=$category['categoryName_en']?></td>
                                                <td><?=$category['categoryName_cn']?></td>

                                                <td><strong>Added Date: </strong> <?=$category['created_at']?><br>
                                                    <strong>Modified Date:</strong><?=$category['updated_at']?></td>
                                                <td><a data-toggle="tooltip" data-placement="bottom" title="Edit" href="<?php echo site_url('admin/category/edit/'.$category['id']) ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <a data-toggle="tooltip" data-placement="bottom" title="Delete" href="<?php echo site_url('admin/category/delete/'.$category['id']) ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr>
                                    <?php
                                        }
                                    } else {?>
                                        <tr>
                                            <td colspan="6">No recod find!</td>
                                        </tr>

                                    <?php }
                                    ?>
                                    </tbody>
                                </table>
                                <div class="col-xs-12 text-right">
<!--                                    {{$categories->links('vendor.pagination.default')}}-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./right sidebar -->
<?php
$this->load->view('layout/admin_footer.php');
?>
