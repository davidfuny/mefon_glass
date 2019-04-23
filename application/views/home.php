<?php
require('layout/header.php')
?>


<!-- Promo block BEGIN -->
<div class="promo-block" id="promo-block">
    <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-one active">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                Our product <span class="color-red">Mefon </span> is best!
                            </h2>
                            <div class="animated flipInX">
                                <i class="promo-like fa fa-bitcoin"></i>
                                <div class="promo-like-text">
                                    <h2>Let's start our deal</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing<br> elit amet sed diam nonummy nibh <a href="javascript:void(0);">dolore</a></p>
                                </div>
                            </div>
                            <div>
                                <a class="btn-video-text js-gevent-explainer-ordering" data-toggle="modal" data-target="#explainder">How it works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second slide -->
            <div class="item carousel-item-two">
                <h2 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                    world <span class="color-red">Best </span> service
                </h2>
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <div>
                                <a class="btn-video-text js-gevent-explainer-ordering" data-toggle="modal" data-target="#explainder">How it works</a>
                            </div>
                        </div>

                    </div>
                </div>

                <img class="carousel-position-two car_image animate-delay" src="<?php echo base_url(); ?>assets/pages/img/slider/Slide2_iphone_left.png" alt="Iphone" data-animation="animated fadeInDown">
                <img class="carousel-position-three hidden-sm hidden-xs  car_image animate-delay" src="<?php echo base_url(); ?>assets/pages/img/slider/Slide2_iphone_right.png" alt="Iphone" data-animation="animated fadeInUp">
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-three">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h3 class="margin-bottom-20 animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing <br/> elit amet sed diam nonummy nibh.
                            </h3>
                            <span class="carousel-subtitle-v1">Micle Jacson</span>
                            <div>
                                <a class="btn-video-text js-gevent-explainer-ordering" data-toggle="modal" data-target="#explainder">How it works</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- Promo block END -->

<!-- About block BEGIN -->
<div class="about-block content content-center" id="about">
    <div class="container">
        <h2><strong>Mefon</strong> Inspires</h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="ab-trio">
            <img src="<?php echo base_url(); ?>assets/pages/img/trio2.png" alt="" class="img-responsive">
            <div class="ab-cirlce ab-cirle-blue">
                <i class="fa fa-phone-square"></i>
                <strong>Best service</strong>
            </div>
            <div class="ab-cirlce ab-cirle-red">
                <i class="fa fa-home"></i>
                <strong>High quantity</strong>
            </div>
            <div class="ab-cirlce ab-cirle-green">
                <i class="fa fa-paypal"></i>
                <strong>Lower price</strong>
            </div>
        </div>
    </div>
</div>
<!-- About block END -->

<!-- Services block BEGIN -->
<div class="services-block content content-center" id="services">
    <div class="container">
        <h2>Our <strong>services</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-adjust"></i>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-heart"></i>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-bullhorn"></i>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-star"></i>
                <h3>PLorem ipsum</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
        </div>
    </div>
</div>
<!-- Services block END -->
    <!-- MODAL START-->
    <div class="modal fade" id="explainder" tabindex="-1" role="dialog" style="z-index: 100000"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header" style="border-bottom: 0px">
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </a>
                    <!--<span aria-hidden="true" class="white-text">&times;</span>-->
                    </a>
                </div>
                <!--Body-->
                <div class="modal-body" >
                    <!--                <iframe  src="//player.youku.com/embed/XMTU0NjU1MzMzMg==" frameborder="0" allowfullscreen=""></iframe>-->
                    <iframe  src="//www.youtube.com/embed/EtENQieKn_k?rel=0&autoplay=1&html5=1" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
<!--Register modal start-->


<script>
    $('#explainder').on('hide.bs.modal', function(e) {
        var $if = $(e.delegateTarget).find('iframe');
        var src = $if.attr("src");
        $if.attr("src", '');

    });
    $('#explainder').on('show.bs.modal', function(e) {
        var $if = $(e.delegateTarget).find('iframe');
        var src = $if.attr("src");
//            $if.attr("src", '//player.youku.com/embed/XMTU0NjU1MzMzMg==');
        $if.attr("src", '//www.youtube.com/embed/EtENQieKn_k?rel=0&autoplay=1&html5=1');
    });
</script>
<?php
require('layout/footer.php')
?>