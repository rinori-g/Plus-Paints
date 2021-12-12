<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pluspaints
 */

?>


<div class="techsupport">
        <div class="support" onclick="document.getElementById('id01').style.display='block'">
            <div class="heading" id="myBtn">
            MBËSHTETJA TEKNIKE
            </div>
            <div class="desc">
            Jeni përdorues profesionist apo keni nevojë për këshilla teknike?<strong> Na kontaktoni!</strong>
            </div>
        </div>
    </div>

    <section class="footer11">
        <div class="footer-content ">
            <div class="footer-content1">
                <div class="footercontact">
                    <div class="footercontact1 container">
                    <div class="footerheading ">
                        <p>
                        <?php pll_e('Jeni konfuz se kush do të kujdeset për punën tuaj?');?>
                        </p>
                    </div>
                    <div class="footerbtt ">
                    <div class="brand-button ">
                    <a href="contact.php">  <button href=""><?php pll_e('Na kontaktoni!');?><span class="arrow"><i class="fas fa-chevron-right"></i></span></button></a>
                     </div>
                    </div>
                </div>
                </div>
                <div class="footerabout">
                    <div class="about container">
                    <div class="aboutcompany">
                        <div class="heading">
                        <?php pll_e('Rreth kompanisë');?>
                        </div>
                        <div class="desc">
                        Që nga viti 2008, ne jemi të përkushtuar në ofrimin e produkteve dhe shërbimeve më të mira të ngjyrosjes, që ta lëmë botën më me ngjyra sesa e kemi gjetur.
                        </div>
                    </div>
                    <div class="company">
                    <div class="heading">
                     <?php pll_e('Linqet e shpejta');?>
                        </div>
                        <div class="desc desc5">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-1',
                                'container' => false // Removes the container, leaving just the ul element
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="company com2">
                    <div class="heading">
                        <?php pll_e('Linqe');?>
                        </div>
                        <div class="desc">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-2',
                                'container' => false // Removes the container, leaving just the ul element
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="social">
                         <div class="heading">
                            <p><?php pll_e('Na ndiqni');?></p>
                        </div>
                        <div class="social-logo">

                  <div class="icons">
                      <?php if (have_rows('footer_social_media','option')): ?>
                          <?php while (have_rows('footer_social_media','option')) : the_row(); ?>
                              <div class="icon">
                                  <a href="https://www.facebook.com/pluspaintss" target="_blank">
                                      <i class="fab fa-facebook-f" style="color:white;"></i>
                                  </a>
                              </div>
                          <?php endwhile; ?>
                      <?php endif; ?>


                    <div class="icon">
                        <a href="https://www.instagram.com/plus_paints/" target="_blank">
                        <i class="fab fa-instagram" style="color:white;"></i>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="https://www.linkedin.com/company/74482555" target="_blank">
                        <i class="fab fa-linkedin" style="color:white;"></i>
                        </a>
                    </div>

                </div>
                        </div>
                    </div>
                </div>

                </div>
                <div class="copyright">
                    <div class="copyrt container">
                        <p><?php pll_e('Copyright © 2021 All rights Reserved by Plus Paints');?></p>
                    </div>
                    </div>
                   </div>
        </div>
    </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
