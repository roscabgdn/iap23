<?php
/**
 * The main template file
 */

get_header(); ?>
<div class="container container--small">
    <div class="h1">
        <?php
            /* translators: %s: Search query. */
            printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() );
        ?>
    </div>
    <?php 
        if ( have_posts() ) : 
            // Start the loop.
            while ( have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content' ); 
                
            endwhile; 
        else : 
            get_template_part( 'content', 'no-results' ); 
        endif; 
    ?>
    <?php wp_pagenavi(); ?>
</div>
<?php 
get_footer();