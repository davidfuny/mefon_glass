<!DOCTYPE html>
<html>
<head>
    <title>Google Recaptcha Code in Codeigniter 3 - ItSolutionStuff.com</title>
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />-->
<!--    <script src='https://www.google.com/recaptcha/api.js?hl=zh-CN'></script>-->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.min.js" type="text/javascript"></script>
<!--    <script src='https://recaptcha.net/recaptcha/api.js?hl=zh-CN'></script>-->
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            Google Recaptcha Code in Codeigniter 3 - ItSolutionStuff.com
        </div>
        <div class="card-body">
            <form id="theForm" action="<?php echo site_url('welcome/formPost') ?>" method="POST" enctype="multipart/form-data">
                <div class="text-danger"><strong><?=$this->session->flashdata('flashError')?></strong></div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
<!---->
<!--                <div class="g-recaptcha" data-sitekey="--><?php //echo $this->config->item('google_key') ?><!--"></div>-->
                <br/>
                <button type="button" id="target">Login</button>
            </form>
            <button >Login</button>
        </div>
    </div>
</div>

</body>
</html>
<script>
    $( "#target" ).click(function() {
//        const Http = new XMLHttpRequest();
//        const url='https://jsonplaceholder.typicode.com/posts';
//        Http.open("GET", url);
//        Http.send();
        window.location.href = "<?php echo site_url('user/user_dashbord') ?>"
    });
</script>
