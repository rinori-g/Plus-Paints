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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <div class="techsupport">
            <div class="support" onclick="document.getElementById('id01').style.display='block'">
                <div class="heading" id="myBtn">
                <?php pll_e('MBËSHTETJA TEKNIKE');?>
                </div>
                <div class="desc">
                <?php pll_e('Jeni përdorues profesionist apo keni nevojë për këshilla teknike?');?><strong> <?php pll_e('Na kontaktoni!');?></strong>
                </div>
            </div>
        </div>

        <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
  
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright" style="position:absolute; z-index:100; background:transparent;font-size:33px; color:white;padding: 8px 24px;">&times;</span>
        <div class="chatsupport">
          <div class="suppimage">
              <img src="<?php the_field('chat_support_image','option')?>" alt="">
              <div class="supportdesc">
                  <div class="heading">
                  <?php pll_e('MBËSHTETJA TEKNIKE');?> 
                  </div>
                  <div class="desc">
                  <?php pll_e('Si doni të na kontaktoni?');?>
                  </div>
              </div>
          </div>
          <div class="supoption">
              <div class="whatsapp">
                    <div class="heading">
                    <?php pll_e('NA SHKRUANI NË WHATSAPP');?>
                    
                    </div>
                    <div class="buttoni">
                        <a href="https://wa.me/<?php the_field('chat_support_number','option')?>"><button><i class="fa fa-whatsapp"></i><?php pll_e('NA KONTAKTONI');?></button></a>
                    </div>  
              </div>
              <div class="contact-form">
              <div class="heading">
                    <?php pll_e('PLOTËSONI FORMULARIN');?>
                    </div>
                    <div class="buttoni">
                        <a href="<?php the_field('chat_support_contact_page_'.get_bloginfo('language'),'option')?>"><button><i class="fa fa-envelope"></i><?php pll_e('NA KONTAKTONI');?></button></a>
                    </div>
              </div>
          </div>
          </div>
     
    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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
                    <a href="kontakt">  <button href=""><?php pll_e('Na kontaktoni!');?><span class="arrow"><i class="fa fa-chevron-right"></i></span></button></a>
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
                                  <a href="  <?php the_sub_field('url');?>" target="_blank" style="color:white;">
                                      <?php the_sub_field('icon');?>
                                  </a>
                              </div>
                          <?php endwhile; ?>
                      <?php endif; ?>

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
    <div class="modal" id="empModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                </div>

            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

</body>
</html>
