<div class="container">
    <div class="portfolio-item row">
        <?php
        $images = get_sub_field('gallery');
        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="item col-lg-3 col-md-4 col-6 col-sm">
                    <a href="<?php echo esc_url($image); ?>" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="<?php echo esc_url($image); ?>" alt="foto1">
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>





    </div>
</div>