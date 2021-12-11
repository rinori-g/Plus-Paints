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
        <ul class="nav__menu">
          <li class="dropdown"><a href="#" class="textcolor1" style="color: rgb(255, 255, 255);">PRODUKTET</a>
            <ul>
             
              <li class="dropdown second-level"><a href="#">Ngjyra për hekur</a>
                <ul>
                  <li class="dropdown third-level"><a href="#">Ngjyra likuide</a>
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
              <li class=""><a href="ambalazh.php">Produkte për ambalazhim</a>
              
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
          
        </ul>
      </nav>
  </div>
</header>


