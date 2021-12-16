<section class="products">
    <div class="product container">
        <?php if (have_rows('products')): ?>
            <?php while (have_rows('products')) : the_row(); ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php the_sub_field('image');?>" alt="">
                    </div>
                    <div class="product-desc">
                        <p class="productinfo "><?php the_sub_field('title');?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>