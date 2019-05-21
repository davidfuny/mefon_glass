<?php
require('layout/header.php')
?>
<!-- Promo block BEGIN -->
<div class="promo-block" id="promo-block">
    <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-four active">
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Promo block END -->
<!-- Choose us block BEGIN -->
<div class="choose-us-block content text-left margin-bottom-90" id="benefits">
    <div class="container">
        <h2><?= $this->lang->line('our'); ?> <strong><?= $this->lang->line('goal'); ?></strong></h2>
        <h4 class="text-left"><?= $this->lang->line('key_definition'); ?> <a href="https://patentscope.wipo.int/search/en/detail.jsf?docId=WO2017136940&redirectedID=true"><?= $this->lang->line('wipo'); ?></a></h4>

    </div>
</div>
<!-- Choose us block END -->
<div class="prices-block content text-center" >
    <div class="container">
        <h2><?= $this->lang->line('why'); ?> <strong><?= $this->lang->line('is_keyfone'); ?></strong></h2>
        <h4 class="text-left"><?= $this->lang->line('why_content'); ?>
        </h4>

        <div class="padding-top-60" >
            <img src="<?php echo base_url(); ?>assets/pages/img/about_image.jpg" style="margin: auto" class="img-responsive">
        </div>

    </div>
</div>

<!-- Choose us block BEGIN -->
<div class="choose-us-block content text-left margin-bottom-90" id="benefits">
    <div class="container">
        <h2>our <strong>secret</strong></h2>
        <h4 class="text-left">KeyFone can instantly upload authentic image/video to the specified cloud space without saving on local devices. This is especially vital for vulnerable people even if their KeyFone device or smart phone is robbed, lost or stolen etc. the data can still be safe with KeyFone patented features for cases like unwanted (sexual) harassment, traffic accidents, bulling or violence and/or any disadvantaged situations can be recorded without any hand held phone taken out not on time! Its facial recognition can even warn its users upfront whom is interacted before fraud/cheating happens, provided its users have paid the respective authorities extra monthly or annual fees, e. g. the most wanted or criminals on the run or even missing people within other kinds of databases customized differently each other. KeyFone is therefore SMARTER, SAFER, more SECURED & ACCURATE than failed Google Glass. With KeyFone standby in Voice Commanded mode these things can’t happen without being simultaneously recorded and uploaded or even shared among relatives and close friends simultaneously if any KeyFone user thinks necessary to record and upload authentic evidences promptly.</h4>

    </div>
</div>
<?php
require('layout/footer.php')
?>
