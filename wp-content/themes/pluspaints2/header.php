<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pluspaints
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
-->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<header class="fx" id="colorheader">
  <div class="nav__container">
    <div class="nav__mobile">
      <div class="nav__logo">
		  <a href="index.php">
			  <img src="<?php the_field('header_logo','option')?>" class="logo1" alt="">
			  <img src="<?php the_field('bottom_image_header_logo','option')?>" alt="" class="logo2">
          </a>
    </div>
			<a href="index.php"></a>
			<div class="nav__btn"><a href="index.php">
        </a><a aria-label="Mobile menu" class="nav-toggle fade"><span></span><span class="mrg"></span><span class="mrg"></span></a>
      </div>
    </div>
      <nav class="menu-toggle">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'nav__menu'
          ));
          ?>
          <!--<ul class="nav__menu">
              <?php /*foreach (aa1_get_header_menu() as $item) : */?>
                    <li class="<?php /*if(count($item['sub'])){ echo 'dropdown';}*/?>">
                        <a href="<?/*= $item['url'] */?>"><?php /*echo $item['name'];*/?></a>
                        <?php /*if (count($item['sub'])): */?>
                            <ul>
                                <?php /*foreach ( $item['sub'] as $subItem ) : */?>
                                    <a href="<?/*= $subItem['url'] */?>"><?php /*echo $subItem['depth'];*/?></a>
                                <?php /*endforeach; */?>
                            </ul>
                        <?php /*endif; */?>

                    </li>
              <?php /*endforeach; */?>
          </ul>-->


        <!--<ul class="nav__menu">
          <li class="dropdown">
              <a href="#" class="textcolor1" style="color: rgb(255, 255, 255);">PRODUKTET</a>
            <ul>
              <li class="dropdown second-level"><a href="#">Ngjyra për hekur</a>
                <ul>
                  <li class="dropdown third-level">
                  <a href="#">Ngjyra likuide</a>
                    <ul>
                      <li><a href="polistuccolors.php">Polistuc</a></li>
                      <li><a href="ibavet.php">Ibavet</a></li>

                     </ul>
                  </li>
                  <li class="dropdown third-level"><a href="#">Ngjyra Pluhur</a>
                    <ul>
                      <li><a href="ibakimyacolors.php">Ibakimya</a></li>
                     
                      
                     </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown second-level"><a href="#">Ngjyra për dru</a>
                <ul>
                  <li><a href="icacolors.php">ICA</a></li>
                  <li><a href="valresacolors.php">Valresa</a></li>
                  <li><a href="ibavet.php">Ibavet</a></li>
                  <li><a href="sircacolors.php">Sirca</a></li>
                </ul>
              </li>
              <li class="dropdown second-level"><a href="#">Ngjyra për vetura</a>
                <ul>
                  <li><a href="profix.php">Profix Multichem</a></li>
                </ul>
              </li>
              <li class="">
                  <a href="ambalazh.php">Produkte për ambalazhim</a>
              </li>
              <li class="dropdown second-level"><a href="#">Pompa për ngjyrosje</a>
                <ul>
                  <li class="dropdown third-level thirdd"><a href="#">Pompa për ngjyrosje me pluhur</a>
                    <ul>
                      <li><a href="sameskremlin.php">Sames Kremlin</a></li>
                      <li><a href="electron.php">Electron</a></li>
                      
                     </ul>
                  </li>
             
                  <li class="dropdown third-level thirdd"><a href="#">Pompa për ngjyrosje me likuid</a>
                    <ul>
                    
                      <li><a href="sameskremlin.php">Sames Kremlin</a></li>
                     
                      
                     </ul>
                  </li>
               
                </ul>
              </li>
              <li class="dropdown second-level"><a href="#">Ngjitës</a>
                <ul>
                  <li><a href="dunlop.php">Dunlop</a></li>
                  <li><a href="jowatglue.php">Jowat</a></li>
              
                </ul>
              </li>
              <li class="dropdown second-level"><a href="#">Letra grrithëse abrazive</a>
                <ul>
                  <li><a href="napoleon.php">Napoleon</a></li>
                
              
                </ul>
              </li>
        
            </ul>
          </li>
          <li><a href="sherbimet.php" class="textcolor1" style="color: rgb(255, 255, 255);">SHËRBIMET</a></li>
          <li><a href="brands.php" class="textcolor1" style="color: rgb(255, 255, 255);">BRENDET</a></li>
          <li><a href="aboutus.php" class="textcolor1" style="color: rgb(255, 255, 255);">RRETH NESH</a></li>
          <li class="nzc"><a href="contact.php" class="textcolor1" style="color: rgb(255, 255, 255);">KONTAKTI</a></li>
          <li><a href="en" class="textcolor1" style="color: rgb(255, 255, 255);">EN</a></li>
          
        </ul>-->
      </nav>
  </div>
</header>


<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="133" height="104" viewBox="0 0 133 104">
  <defs>
    <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 375 51">
      <image width="375" height="51" xlink:href="data:image/png;base64,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"/>
    </pattern>
  </defs>
  <rect id="smalllogo" width="133" height="19" transform="translate(0 85)" fill="url(#pattern)"/>
  <image id="headerlogo" width="70" height="70" transform="translate(32)" xlink:href="data:image/png;base64,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"/>
</svg> -->
