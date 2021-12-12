<section id="contact" class="container">
    <div class="locations">
        <?php if (have_rows('locations')): ?>
            <?php while (have_rows('locations')) : the_row(); ?>
                <div class="contact-box">
                    <h2 class="contact-heading"><?php the_sub_field('title');?></h2>
                    <?php the_sub_field('content');?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1B5hMGztfngMuykp6nszZUGIA4DnzlvxL" width="100%" height="100%"></iframe>
    </div>
</section>