
    <section class="index-content" id="about"style="margin-top:50px;">
        <div class="content container">
            <div class="text-content">
            
                <div class="desc">
                <?php the_sub_field('content')?>
                </div>
                <div class="brand-button lftbtt container" style="margin-top:10px!important;">
                <a href='<?php the_sub_field('buttonurl')?>'>  <button href=""><?php the_sub_field('button_name')?><span class="arrow"><i class="fa fa-chevron-right"></span></i></button></a>                
            </div>
            </div>
            <div class="image-content img-cnt">
                <img  src="<?php the_sub_field('image')?>" alt="">
            </div>
        </div>
        
    </section>