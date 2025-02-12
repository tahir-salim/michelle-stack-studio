<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer class="padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <a href="<?php echo site_url();?>" class="logo">
                    <!-- <img src="assets/images/logo.svg" alt=""> -->
                    <h2 class="text-white">Logo Here</h2>
                </a>
            </div>
            <div class="col-lg-3">
                <div class="footer-main-heading">
                    <h3>Address</h3>
                    <p><?php echo $options['address'];?></p>

                    <a href="" class="geting-here">Getting Here</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-main-heading">
                    <h3>Hours</h3>
                    <p><?php echo $options['timing'];?></p>
                </div>
                <div class="footer-main-heading">
                    <h3 class="top-margin">Social Media</h3>
                    <ul class="social-icons">
                        <li>
                            <a href="<?php echo $options['facebook'];?>" class="">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $options['instagram'];?>" class="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $options['twitter'];?>" class="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $options['linkedin'];?>" class="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-main-heading">
                    <h3>Contact Us</h3>
                    <a href="tel:<?php echo $options['phone_number'];?>" class="">Call:
                        <?php echo $options['phone_number'];?></a>
                    <a href="mailto:<?php echo $options['email'];?>" class="">Email: <?php echo $options['email'];?></a>
                </div>
            </div>
        </div>

    </div>

</footer>

<div class="copyright-text padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <p><?php echo $options['copyright'];?></p>
                    <!-- <ul class="f-link">
                        <li class="first">
                            <a href="terms.php">Terms of Services</a>
                        </li>
                        <li class="last">
                            <a href="privacy-policy.php">Privacy Policy</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-link' ) ); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>