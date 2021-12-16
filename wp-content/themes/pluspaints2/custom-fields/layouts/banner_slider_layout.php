<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><span class="indicatori">1</span></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><span class="indicatori">2</span></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><span class="indicatori">3</span></button>
        </div>
        <div class="carousel-inner">
            <?php if (have_rows('slides')): ?>
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="carousel-item <?php if(get_row_index() == 1) { echo 'active';}?>" style="background-image: url(  <?php the_sub_field('image');?>)">
                        <div class="carousel-caption">
                            <div class="textalign">
                                <?php the_sub_field('content');?>
                                <a href="<?php the_sub_field('button_url');?>"><button> <?php the_sub_field('button_text');?></button></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</header>
