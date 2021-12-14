<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

<div class="container">
    <div class="gallery js-flickity"
         data-flickity-options='{ "wrapAround": true }'>
        <?php if (have_rows('partners')): ?>
            <?php while (have_rows('partners')) : the_row(); ?>
                <img  class="gallery-cell" src="../assets/images/aboutslide3.jpg" alt="">
            <?php endwhile; ?>
        <?php endif; ?>
  <img  class="gallery-cell" src="http://pluspaints.com/assets/images/gallery/23.jpg" alt="">
  <img  class="gallery-cell" src="http://pluspaints.com/assets/images/gallery/23.jpg" alt="">
  <img class="gallery-cell" src="http://pluspaints.com/assets/images/gallery/23.jpg" alt="">
  <img class="gallery-cell" src="http://pluspaints.com/assets/images/gallery/23.jpg" alt="">

</div>
</div>  