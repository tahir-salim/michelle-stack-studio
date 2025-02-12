<?php $second_section = get_field('second_section',8);?>
<section class="sec3 padding bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="sec-heading" data-aos="fade-right" data-aos-duration="1000">
                        <span class="sub-heading"><?php echo $second_section['heading'];?></span>
                        <h2><?php echo $second_section['sub_heading'];?></h2>
                        <p><?php echo $second_section['content'];?></p>
                    </div>
                    <div class="btn-wrap">
                        <a href="<?php echo $second_section['button_link'];?>" class="theme-btn bordered"><?php echo $second_section['button_text'];?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec2-img" data-aos="fade-left" data-aos-duration="1000">
                        <img src="<?php echo $second_section['image'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>