<?php /** * Template Name: Art Work Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="sec4 padding" id="porfolio">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="sec-heading" data-aos="fade-right" data-aos-duration="1000">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-heading" data-aos="fade-left" data-aos-duration="1000">
                    <p><?php echo $first_section['content'];?></p>
                    <b><?php echo $first_section['para'];?></b>
                </div>
            </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-lg-6">
                <?php $box_list = $first_section['box_list'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="gallery-images">
                    <a data-fancybox="gallery" href="<?php echo $boxlist['image']; ?>" data-caption="Caption #1">
                        <img src="<?php echo $boxlist['image']; ?>">
                    </a>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-6">
            <?php $box_list = $first_section['box_list_2'];?>
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