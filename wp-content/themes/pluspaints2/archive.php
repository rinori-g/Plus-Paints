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

<main id="primary" class="site-main">


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <ul class="nav nav-pills">
                    <?php foreach ($subCategories as $key => $category):?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#productTab<?php echo $key;?>" role="tab" aria-controls="pills-flamingo" aria-selected="true"><?php echo $category->name;?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="tab-content mt-3">
                    <?php foreach ($subCategories as $key=>  $category):?>
                        <div class="tab-pane fade" id="productTab<?php echo $key;?>" role="tabpanel" aria-labelledby="">


                        </div>
                    <?php endforeach; ?>

                    <!--<div class="tab-pane fade show active" id="flamingo" role="tabpanel" aria-labelledby="flamingo-tab">
                        Flamingos usually stand on one leg while the other is tucked beneath their bodies. The reason for this behaviour is not fully understood. One theory is that standing on one leg allows the birds to conserve more body heat, given that they spend a significant amount of time wading in cold water.
                    </div>
                    <div class="tab-pane fade" id="cuckoo" role="tabpanel" aria-labelledby="profile-tab">
                        The cuckoos are generally medium-sized slender birds. Most species live in trees, though a sizeable minority are ground-dwelling. The family has a cosmopolitan distribution, with the majority of species being tropical.
                    </div>
                    <div class="tab-pane fade" id="ostrich" role="tabpanel" aria-labelledby="ostrich-tab">
                        The common ostrich is farmed around the world, particularly for its feathers, which are decorative and are also used as feather dusters. Its skin is used for leather products and its meat is marketed commercially, with its leanness a common marketing point.
                    </div>
                    <div class="tab-pane fade" id="tropicbird" role="tabpanel" aria-labelledby="tropicbird-tab">
                        Tropicbirds range in size from 76 cm to 102 cm in length and 94 cm to 112 cm in wingspan. Their plumage is predominantly white, with elongated central tail feathers. The three species have different combinations of black markings on the face, back, and wings. Their bills are large, powerful and slightly decurved.
                    </div>-->
                </div>
            </div>
        </div>
    </div>


</main>

<?php

get_footer();
