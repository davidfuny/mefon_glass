<?php
$this->load->view('layout/admin_header.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Edit Main Categories<small>Edit Main Categories...</small> </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href=""><i class="fa fa-bars"></i> List All Categories </a></li>
            <li class="active">Edit Main Categories...</li>
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
                        <h3 class="box-title">Add Categories </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <br>
                                    <?php
                                    if(isset($message)){ ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            Category has been updated successfull!
                                        </div>
                                    <?php }
                                    ?>
                                    <!-- form start -->
                                    <div class="box-body">
                                        <form action="<?php echo site_url('admin/category/updatecategory') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-validate">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 col-md-3 control-label">Nme (English)</label>
                                                <div class="col-sm-10 col-md-4">
                                                    <input type="text" name="categoryName_en" class="form-control field-validate" value="<?=$category['categoryName_en']?>" required>
                                                    <input type="hidden" name="id" value="<?=$category['id']?>">
                                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">Ctegory name(English）</span>
                                                    <span class="help-block hidden"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 col-md-3 control-label">Nme (汉语)</label>
                                                <div class="col-sm-10 col-md-4">
                                                    <input type="text" name="categoryName_cn" class="form-control field-validate" value="<?=$category['categoryName_cn']?>" required>
                                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">Ctegory name(汉语）</span>
                                                    <span class="help-block hidden"></span>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer text-center">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <a href="<?php echo site_url('admin/category') ?>" type="button" class="btn btn-default">back</a>
                                            </div>
                                            <!-- /.box-footer -->
                                        </form>
                                    </div>
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

<?php
$this->load->view('layout/admin_footer.php');
?>
