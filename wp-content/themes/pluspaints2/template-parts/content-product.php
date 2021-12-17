<div class="product-desc1">
    <div class="product-img">
        <img id="myImg6" src=" <?php echo  wp_get_attachment_url( get_post_thumbnail_id($id) ); ?>" alt="">
    </div>
    <div class="product-content">
        <?php if (have_rows('specifications',$id)): ?>
            <?php while (have_rows('specifications',$id)) : the_row(); ?>
                <div class="product-info">
                    <div class="labeli">
                        <?php the_sub_field('specification');?>
                    </div>
                    <div class="product-data">
                        <?php the_sub_field('description');?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>