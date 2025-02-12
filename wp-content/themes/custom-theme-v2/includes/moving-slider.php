<?php $fourth_section = get_field('fourth_section',8);?>
<?php $fifth_section = get_field('fifth_section',8);?>

<section class="sec5 webdesignSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-heading center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-heading sub-heading2">
                        <span class="double-line">
                            <?php echo $fourth_section['heading'];?>
                        </span>
                    </span>
                    <h2><?php echo $fourth_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>
    </div>

    <ul class="design-card-list">
        <?php $box_list = $fourth_section['box_list'];?>
        <?php foreach ($box_list as $boxlist) {?>
        <li>
            <a data-fancybox="gallery" href="<?php echo $boxlist['image']; ?>" data-caption="Caption #1">
                <img src="<?php echo $boxlist['image']; ?>">
            </a>
        </li>
        <?php }?>
    </ul>
</section>

<section class="sec6 padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-heading center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-heading sub-heading2">
                        <span class="double-line">
                        <?php echo $fifth_section['heading'];?>
                        </span>
                    </span>
                    <h2 class="fs-30"><?php echo $fifth_section['sub_heading'];?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="form">
                    <?php echo do_shortcode('[email-subscribers-form id="1"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>