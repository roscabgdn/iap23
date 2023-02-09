<?php
/**
 * The main template file
 */

get_header(); ?>
<div class="container container--small">
    <?php 
        if ( have_posts() ) : 
            // Start the loop.
            while ( have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content-single' ); 
                
            endwhile; 
        else : 
            get_template_part( 'content', 'none' ); 
        endif; 
    ?>
</div>
<?php 
get_footer();