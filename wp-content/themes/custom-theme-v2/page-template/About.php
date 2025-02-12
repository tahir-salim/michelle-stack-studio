<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>


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
<?php get_template_part("includes/moving-slider"); ?>
<?php get_footer(); ?>