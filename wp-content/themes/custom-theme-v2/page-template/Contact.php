<?php /** * Template Name: Contact Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="sec5 webdesignSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-heading center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="sub-heading sub-heading2">
                        <?php echo $first_section['heading'];?>
                    </span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-12">
                
                <?php echo do_shortcode('[contact-form-7 id="14000cd" title="Contact form 1"]');?>

            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/moving-slider"); ?>

<?php get_footer(); ?>