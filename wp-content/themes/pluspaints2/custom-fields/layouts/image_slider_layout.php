<div class="container">
    <div class="gallery js-flickity"
         data-flickity-options='{ "wrapAround": true }'>
        <?php if (have_rows('partners')): ?>
            <?php while (have_rows('partners')) : the_row(); ?>
                <img  class="gallery-cell" src="../assets/images/aboutslide3.jpg" alt="">
            <?php endwhile; ?>
        <?php endif; ?>

        <img  class="gallery-cell" src="../assets/images/aboutslide2.jpg" alt="">
        <img class="gallery-cell" src="../assets/images/gallery/76.jpg" alt="">
        <img class="gallery-cell" src="../assets/images/gallery/54.jpg" alt="">

    </div>
</div>