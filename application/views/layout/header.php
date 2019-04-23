<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Mefon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="Mefon description" name="description">
    <meta content="Mefon keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <!--    <meta property="og:url" content="-CUSTOMER VALUE-">-->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/pages/img/logo/logo.png">
    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/pages/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="<?php echo base_url(); ?>assets/pages/css/components.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/pages/css/modal.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/pages/css/slider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/pages/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/pages/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?php echo base_url(); ?>assets/pages/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/pages/css/modal.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.min.js" type="text/javascript"></script>

    <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class="menu-always-on-top">
<?php
$user_language = $_SESSION["language"];
$this->lang->load('content', $user_language);
if ($user_language == 'english') {
    echo("<script src='https://recaptcha.net/recaptcha/api.js'></script>");
}
if ($user_language == 'chinese') {
    echo(" <script src='https://recaptcha.net/recaptcha/api.js?hl=zh-CN'></script>");
}
?>
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel">

    <div class="color-mode-icons icon-color"
         style="background: #c9c9c9 url('<?= base_url('assets/pages/img/' . $user_language . '.png'); ?>') center no-repeat;"></div>
    <div class="color-mode-icons icon-color-close"></div>

    <div class="color-mode">
        <p>SELECT LANGUAGE</p>
        <ul class="inline">
            <li><a href="<?php echo site_url('language/index/english') ?>"><img
                            src="<?= base_url('assets/pages/img/english.png'); ?>" style="width: 20px" alt=""></a></li>
            <li><a href="<?php echo site_url('language/index/chinese') ?>"><img
                            src="<?= base_url('assets/pages/img/chinese.png'); ?>" style="width: 20px" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- END BEGIN STYLE CUSTOMIZER -->

<!-- Header BEGIN -->
<div class="header header-mobi-ext">
    <div class="container">
        <div class="row">
            <!-- Logo BEGIN -->
            <div class="col-md-2 col-sm-2">
                <a class="scroll site-logo" href="#promo-block"><img src="<?php echo base_url(); ?>assets/pages/img/logo/logo.png" style="width: 110px"></a>
            </div>
            <!-- Logo END -->
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Navigation BEGIN -->
            <div class="col-md-10 pull-right">
                <ul class="header-navigation">
                    <li><a href="<?php echo site_url('welcome/') ?>"><?= $this->lang->line('home'); ?></a></li>
                    <li><a href="">About</a></li>
                    <li><a href="<?php echo site_url('welcome/page_product') ?>">Proudcts</a></li>
                    <li><a href="<?php echo site_url('user/user_dashbord') ?>">test</a></li>
                    <li><a href="<?php echo site_url('welcome/page_company') ?>">Company</a></li>
                    <?php if (isset($_SESSION["useremail"])) {?>
                        <li><a href="<?php echo site_url('user/user_dashbord') ?>">My account</a></li>
                        <li><a href="<?php echo site_url('user/user_dashbord') ?>"><i class="fa fa-fw fa-sign-out"></i> logout</a></li>
                   <?php }else{ ?>
                    <li><a href="" data-toggle="modal" data-target="#register"><?= $this->lang->line('person'); ?></a></li>
                    <?php }?>

                </ul>
            </div>
            <!-- Navigation END -->
        </div>
    </div>
</div>
<!-- Header END -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link " data-toggle="tab" href="#signin" role="tab"><i class="fa fa-user"></i>
                            Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#signup" role="tab"><i class="fa fa-users"></i>
                            Sign Up</a>
                    </li>
                </ul>

                <!-- Tab panels -->

                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in active" id="signin" role="tabpanel">
                        <form action="<?php echo site_url('user/user_signin') ?>" method="POST" id="user_login_form"
                              enctype="multipart/form-data">
                            <!--Body-->
                            <div class="signin">
                                <div class="modal-body mb-1">
                                    <div class="form-group">
                                        <label><?= $this->lang->line('email'); ?></label>
                                        <input type="email" class="form-control" name="account_name">
                                        <div class="text-danger" id='danger_account' style="display: none;"><strong>Please
                                                fill out form!</strong></div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?= $this->lang->line('password'); ?></label>
                                        <input type="password" class="form-control" id="exampleInputPassword"
                                               placeholder="Password" name="account_password">
                                        <div class="text-danger" id='danger_user_password' style="display: none;">
                                            <strong>Please fill out form!</strong></div>
                                    </div>
                                    <div class="text-center mt-2">
                                    <button type="button" class="btn btn-success" id="signin_button">Sign in</button>
<!--                                        <button class="btn btn-success" id="signin_button">Sign in</button>-->
                                    </div>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    <!--/.Panel 7-->
                    <!--Panel 8-->
                    <div class="tab-pane fade" id="signup" role="tabpanel">
                        <form action="<?php echo site_url('user/user_signup') ?>" method="POST" id="user_signup_form"
                              enctype="multipart/form-data">
                            <!--Body-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="text-danger" id='danger_empty'
                                         style="display: none;text-align: center;padding: 10px 0px "><strong>There are
                                            some empty fileds or email format is wrong!</strong></div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label><?= $this->lang->line('first_name'); ?></label>
                                            <input type="text" class="form-control" name="first_name">

                                        </div>
                                        <div class="form-group">
                                            <label><?= $this->lang->line('country'); ?></label>
                                            <input type="text" class="form-control" name="country">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?= $this->lang->line('postal_code'); ?></label>
                                            <input type="text" class="form-control" name="postal_code">

                                        </div>

                                        <div class="form-group">
                                            <label><?= $this->lang->line('password'); ?></label>
                                            <input type="password" class="form-control" name="user_password">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?= $this->lang->line('confirm'); ?></label>
                                            <input type="password" class="form-control" name="confirm">
                                            <div class="text-danger" id='danger_password'
                                                 style="display: none;text-align: center;padding: 10px 0px "><strong>Password
                                                    must be big than 6 and same!</strong></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label><?= $this->lang->line('last_name'); ?></label>
                                            <input type="text" class="form-control" name="last_name">

                                        </div>
                                        <div class="form-group">
                                            <label><?= $this->lang->line('city'); ?></label>
                                            <input type="text" class="form-control" name="city">

                                        </div>
                                        <div class="form-group">
                                            <label><?= $this->lang->line('email'); ?></label>
                                            <input type="email" class="form-control" name="user_email">

                                        </div>
                                        <div class="form-group">
                                            <label><?= $this->lang->line('gender'); ?></label>
                                            <select class="form-control" name="gender">
                                                <option value="Male"><?= $this->lang->line('man'); ?></option>
                                                <option value="Female"><?= $this->lang->line('woman'); ?></option>
                                                <option value="prefer no to say"><?= $this->lang->line('prefer_no_to'); ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Language</label>
                                            <select name="language" class="form-control">
                                                <option value="en"><?= $this->lang->line('english'); ?></option>
                                                <option value="zh-cn"><?= $this->lang->line('chines'); ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha"
                                                 data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                                            <div class="text-danger" id='danger_recaptcha_signup' style="display: none">
                                                <strong>Recaptcha error!</strong></div>
                                        </div>

                                    </div>
                                </div>


                                <div class="text-center form-sm mt-2">
                                    <button type="button" id='user_signup' class="btn btn-success">Sign up</button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    <!--/.Panel 8-->
                </div>


            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal HTML -->

<!--success modal-->
<div id="successModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xE876;</i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Great!</h4>
                <p id='success_modal_content'></p>
                <button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i
                            class="material-icons">&#xE5C8;</i></button>
            </div>
        </div>
    </div>
</div>
<!--warring modal-->
<div id="warringModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xe5cd;</i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Warring!</h4>
                <p id='warring_modal_content'></p>
                <button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i
                            class="material-icons">&#xE5C8;</i></button>
            </div>
        </div>
    </div>
</div>
<script>
    //using ajax submit company form
    $("#user_signup").click(function () {
        $('#danger_empty').css("display", "none");
//        start form validation
        var first_name = $("input[name='first_name']").val();
        var country = $("input[name='country']").val();
        var postal_code = $("input[name='postal_code']").val();
        var user_password = $("input[name='user_password']").val();
        var confirm = $("input[name='confirm']").val();
        var last_name = $("input[name='last_name']").val();
        var city = $("input[name='city']").val();


//        check mail
        var mail = $("input[name='user_email']").val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(mail)) {

            var mail_check = 'error';
        } else {

            var mail_check = 'ok';
        }
// password confirm
        if (user_password.length > 6 && user_password == confirm) {
            var check_password = 'ok';
            $('#danger_password').css("display", "none");
        } else {
            var check_password = 'error';
            $('#danger_password').css("display", "block");
        }

        if (first_name != '' && last_name != '' && country != '' && postal_code != '' && check_password == 'ok' && mail_check == 'ok' && city != '') {
            $('#danger_recaptcha_signup').css("display", "none");
            var form = $('#user_signup_form');
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    if (data == 'success') {
                        $('#success_modal_content').html('Signup success');
                        $("#register").modal('toggle');
                        $("#successModal").modal();
                    }
                    if (data == 'recaptcha_false') {
                        $('#danger_recaptcha_signup').css("display", "block");
                    }
                    if (data == 'user_exist') {
                        $('#warring_modal_content').html('The user exist already!');
                        $("#warringModal").modal();
                    }

                }
            });
        }
        else {
            $('#danger_empty').css("display", "block");
        }

    });

    //    user signin
    $("#signin_button").click(function () {
//        start form validation
        var account_name = $("input[name='account_name']").val();
        if (account_name == '') {
            $('#danger_account').css("display", "block");
        } else {
            $('#danger_account').css("display", "none");
        }

        var account_password = $("input[name='account_password']").val();
        if (account_password == '') {
            $('#danger_user_password').css("display", "block");
        } else {
            $('#danger_user_password').css("display", "none");
        }


        if (account_password != '' && account_name != '') {
            var form = $('#user_login_form');
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    console.log(data);
                    if (data == 'success') {
//                        $('#success_modal_content').html('Login success');
//                        $("#successModal").modal();
                        window.location.href = "<?php echo site_url('user/user_dashbord') ?>";

                    }
                    if (data == 'false') {
                        $('#warring_modal_content').html('The account is wrong!');
                        $("#warringModal").modal();
                    }

                }
            });
        }

    });
</script>