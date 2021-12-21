<?php
/**
 * Template Name: Liste des Plantes
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

        <main id="main" class="site-main" role="main">
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
            the_posts_pagination(
                array(
                    'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                    'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                )
            );

        else :

            get_template_part( 'template-parts/post/content', 'none' );

        endif;
        ?>

        </main><!-- #main -->

<?php
get_footer(); 