<section id="brendet">
    <div class="brendet">
        <div class="brendet-content container">
            <div class="heading" style="text-align:left!important;">
                <p>  <?php the_sub_field('title')?></p>
            </div>
            <div class="logot">
                <?php if (have_rows('partners')): ?>
                    <?php while (have_rows('partners')) : the_row(); ?>
                        <div class="logo">
                            <a href="ibavet.php"> <img src="./assets/images/ibavet.png" alt=""></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
