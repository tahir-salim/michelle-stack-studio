<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header padding">

            <div class="container-fluid">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <a href="<?php echo site_url();?>" class="logo">
                            <!-- <img src="assets/images/logo.svg" alt=""> -->
                            <h2>Logo Here</h2>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about-us.php">About</a>
                            </li>
                            <li>
                                <a href="artwork.php">Artwork</a>
                            </li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                            <!-- <ul class="menu btns">

                            <li>
                                <a href="contact-us.php" class="header-btn">Contact Us</a>
                            </li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 2', 'menu_class'=> 'menu btns' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <div class="mainBanner padding aboutus-page">
            <div class="container-fluid">
                <div class="banner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                            <span class="sub-heading"><?php echo $banner_section['heading'];?></span>
                            <h1 class="banner-heading">
                                <?php echo $banner_section['sub_heading'];?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>