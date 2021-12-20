<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
        <?php if (have_rows('slides')): ?>
            <?php while (have_rows('slides')) : the_row(); ?>
                <li data-target="#demo"data-bs-slide-to="<?php echo get_row_index();?>" data-slide-to="<?php echo get_row_index();?>" class="<?php if(get_row_index() == 1) { echo 'active';}?>"><span class="indicatori"><?php echo get_row_index();?></span></li>
            <?php endwhile; ?>
        <?php endif; ?>
  </ul>
  <div class="carousel-inner">
        <?php if (have_rows('slides')): ?>
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="carousel-item <?php if(get_row_index() == 1) { echo 'active';}?>" style="background-image: url(  <?php the_sub_field('image');?>)">
                        <div class="carousel-caption">
                            <div class="textalign">
                                <?php the_sub_field('content');?>
                                <a href="<?php the_sub_field('button_url');?>" ><button> <?php the_sub_field('button_text');?></button></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br>    
<br>