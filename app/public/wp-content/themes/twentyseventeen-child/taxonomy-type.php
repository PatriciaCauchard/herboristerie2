<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blossom_Feminine
 */

get_header(); ?>
<?php //start by fetching the terms for the animal_cat taxonomy
    $terms = get_terms( 'type', array(
        'orderby'    => 'count',
        'hide_empty' => 0
    ) );
?>

<div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        if ( have_posts() ) : ?>
            
            <div class="posts-list">
            <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); ?>

                    <div class="card">
                        <figure class="card__thumb">
                            <img src="<?php the_post_thumbnail('post-list-thumb');?>" alt="Plante Remede" class="card__image">
                            <figcaption class="card__caption">
                            <a href="<?php the_permalink(); ?>" class="card__link"> <h2 class="card__title"><?php the_title();?></h2>
                            </a>
                            </figcaption>
                        </figure>
                    </div>
            <?php
                endwhile;
            ?>
            </div>
            
            <?php

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
