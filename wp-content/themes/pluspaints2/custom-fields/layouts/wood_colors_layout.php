
<div class="slideshow-container">
    <?php if (have_rows('color_blocks')): ?>
        <?php while (have_rows('color_blocks')) : the_row(); ?>
        <div class="mySlides fade">
            <div class="allwood">
                <?php if (have_rows('colors')): ?>
                    <?php while (have_rows('colors')) : the_row(); ?>
                        <div class="wood">
                            <img src="<?php the_sub_field('image')?>" alt="Photo not found" style="width:100%; height:100%;" class="opac">
                            <div class="text"><?php the_sub_field('title')?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-arrow-left"></i></a>
    <a class="next" onclick="plusSlides(1)"><i class="fa fa-arrow-right"></i></a>
</div>
<br>

<div class="activedot" style="text-align:center">
    <?php if (have_rows('color_blocks')): ?>
        <?php while (have_rows('color_blocks')) : the_row(); ?>
            <span class="dot" onclick="currentSlide(<?php echo get_row_index();?>)"></span> 
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

