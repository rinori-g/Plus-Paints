<section class="ourwork">
    <div class="ourwork_content container">
        <div class="heading">
            <?php the_sub_field('content');?>
        </div>
        <div class="ourwork_images ">
            <?php if (have_rows('featured_images')): ?>
                <?php while (have_rows('featured_images')) : the_row(); ?>
                    <div class="work_image">
                        <img src="<?php the_sub_field('image');?>" alt="">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="<?php the_sub_field('more_work_page'); ?>"><?php the_sub_field('more_work_button_text'); ?></a>
    </div>
</section>