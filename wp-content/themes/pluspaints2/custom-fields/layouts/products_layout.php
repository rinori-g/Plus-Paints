<section class="products" >
    <div class="brand-name container">
        <p><?php the_sub_field('title');?></p>
    </div>
    <div class="product container" >
        <?php if (have_rows('products')): ?>
            <?php while (have_rows('products')) : the_row(); ?>
                <div class="product-card" >
                    <div class="product-image">
                        <img src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id(get_sub_field('product')) ); ?>" alt="" id="myBtn" class="myBtn">
                    </div>
                    <div class="product-desc">
                        <p><a href="#"><?php echo get_the_title(get_sub_field('product'));?></a></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="brand-button container">
        <a href="<?php the_sub_field('url');?>"> <button ><?php the_sub_field('button_text');?><span class="arrow"><i class="fa fa-chevron-right"></span></i></button></a>
    </div>
</section>

