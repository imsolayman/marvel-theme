<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marvel_creative_WordPress_theme
 */
?>

<?php
$company_phone_number = cs_get_option('company_phone_number');
$company_phone_icon = cs_get_option('company_phone_icon');
$footer_social_info = cs_get_option('footer_top_social');
$company_address = cs_get_option('company_address');
$company_location_icon = cs_get_option('company_location_icon');
$footer_copyright_text = cs_get_option('footer_copyright_text');
?>

    </div><!-- #content -->

    <!--Footer-area start-->
    <footer>
        <div class="footer-area wow bounceInLeft">
            <div class="footer-top">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4"> 
                            <?php

                            if (($company_phone_number & $company_phone_icon) == TRUE) { ?>
                            <div class="footer-widget-one">
                                 <i class="<?php echo $company_phone_icon ?>" aria-hidden="true"></i><p><?php echo $company_phone_number ?></p>
                            </div>
                            <?php
                                } else{ 
                                    dynamic_sidebar('footer_one');
                                } ?>                             
                        </div>
                        
                        <div class="col-md-4"> 
                            <?php 
                            if ($footer_social_info == TRUE) { ?>
                            <div class="footer-widget-two">
                            <?php
                                foreach($footer_social_info as $company_social_info) { ?>
                                    <a href="<?php echo $company_social_info['footer_social_top_link'] ?>"><i class="<?php echo $company_social_info['footer_top_social_icon'] ?>" aria-hidden="true"></i></a>
                            <?php } ?>
                            </div>
                            <?php }else { 
                                dynamic_sidebar('footer_two');
                                } ?>                             
                        </div>
                         <div class="col-md-4">
                            <?php

                            if (($company_address & $company_location_icon) == TRUE) { ?>
                            <div class="footer-widget-one">
                                 <i class="<?php echo $company_location_icon ?>" aria-hidden="true"></i><p><?php echo $company_address ?></p>
                            </div>
                            <?php
                                } else{ 
                                    dynamic_sidebar('footer_three');
                                } ?>                             
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="copywrite-text">
                                <p><?php echo $footer_copyright_text ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer-area end-->
</div><!-- #page -->

<?php
wp_footer(); ?>

</body>
</html>
