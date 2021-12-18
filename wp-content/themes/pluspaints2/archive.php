<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pluspaints
 */

get_header();

$subCategories = get_terms( 'category', array(
    'child_of'    => get_queried_object_id(),
    'hide_empty' => false
) );
?>

<div style="height : 500px;"></div>
<main id="primary " class="site-main">

    <ul class="nav nav-pills container filter-cont">
        <li class="nav-item">
            <a class="nav-link active btn99" data-toggle="pill" href="#productTabMain" role="tab" aria-controls="pills-flamingo" aria-selected="true">Te gjitha</a>
        </li>
        <?php foreach ($subCategories as $key => $category):?>
            <li class="nav-item">
                <a class="nav-link btn99" data-toggle="pill" href="#productTab<?php echo $key;?>" role="tab" aria-controls="pills-flamingo" aria-selected="true"><?php echo $category->name;?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="productTabMain" role="tabpanel" aria-labelledby="flamingo-tab">
            <?php

            $posts = get_posts([
                'category' => get_queried_object_id()
            ]);
            ?>
            <section class="products">

                <div class="product container">
                    <?php foreach ($posts as $post):?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id(get_sub_field('product')) ); ?>" alt="" data-id="1" class="polistucinfo ">
                            </div>
                            <div class="product-desc">
                                <p data-id="<?php echo $post->ID; ?>" class="product-info-description "><?php echo get_the_title($post->ID)?></p>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

            </section>


        </div>
        <?php foreach ($subCategories as $key=>  $category):?>
            <div class="tab-pane fade" id="productTab<?php echo $key;?>" role="tabpanel" aria-labelledby="">
                <?php

                $posts = get_posts([
                    'category' => $category->term_id
                ]);
                ?>


                <section class="products">

                    <div class="product container">
                        <?php foreach ($posts as $post):?>
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id(get_sub_field('product')) ); ?>" alt="" data-id="1" class="polistucinfo ">
                                </div>
                                <div class="product-desc">
                                    <p data-id="<?php echo $post->ID; ?>" class="product-info-description "><?php echo get_the_title($post->ID)?></p>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>

                </section>

            </div>
        <?php endforeach; ?>


    </div>

</main>

<?php

get_footer();
