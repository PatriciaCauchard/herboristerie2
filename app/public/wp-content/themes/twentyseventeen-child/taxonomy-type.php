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
        <main id="main" class="site-main">

        <div class="posts-list">
            <?php
            if ( have_posts() ) :
                ?>
                <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="card__link">
                        <div class="card">
                            <figure class="card__thumbnail">
                                <div class="card__image"><?php the_post_thumbnail('post-list-thumb');?></div>
                                <span class="card__title"><?php the_title();?></span>
                            </figure>
                        </div>
                    </a>

                 <?php endwhile;?>
        </div>
            
            <?php

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
  
    <?php
get_footer();
