<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $third_section = get_field('third_section');?>


<?php get_header(); ?>
<div class="mainBanner padding">
    <div class="container-fluid">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="sub-heading">
                        <span class="line"><?php echo $banner_section['heading'];?></span>
                    </span>
                    <h1 class="banner-heading"><?php echo $banner_section['sub_heading'];?></h1>
                    <p class="banner-text"><?php echo $banner_section['content'];?></p>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn bordered"><?php echo $banner_section['button_text'];?></a>
                    </div>
                </div>
                <div class="banner-img">
                    <img src="<?php echo $banner_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec2 padding">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sec2-img" data-aos="fade-right" data-aos-duration="1000">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-heading" data-aos="fade-left" data-aos-duration="1000">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/classes"); ?>

<section class="sec4 padding" id="porfolio">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="sec-heading" data-aos="fade-right" data-aos-duration="1000">
                    <span class="sub-heading"><?php echo $third_section['heading'];?></span>
                    <h2><?php echo $third_section['sub_heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-heading" data-aos="fade-left" data-aos-duration="1000">
                    <p><?php echo $third_section['content'];?></p>
                    <b><?php echo $third_section['para'];?></b>
                </div>
            </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-lg-6">
                <?php $box_list = $third_section['box_list'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="gallery-images">
                    <a data-fancybox="gallery" href="<?php echo $boxlist['image']; ?>" data-caption="Caption #1">
                        <img src="<?php echo $boxlist['image']; ?>">
                    </a>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-6">
            <?php $box_list = $third_section['box_list_2'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="gallery-images">
                    <a data-fancybox="gallery" href="<?php echo $boxlist['image']; ?>" data-caption="Caption #1">
                        <img src="<?php echo $boxlist['image']; ?>">
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/moving-slider"); ?>
<?php get_footer(); ?>