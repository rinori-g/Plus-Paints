<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

<div class="container">
    <div class="gallery js-flickity"
         data-flickity-options='{ "wrapAround": true }'>
        <?php if (have_rows('images')): ?>
            <?php while (have_rows('images')) : the_row(); ?>
                <img  class="gallery-cell" src="<?php the_sub_field('image');?>" alt="">
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>  