<div class="news_card">
    <div class="news_card-image">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="news_card-meta">
        by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            <?php echo get_the_author();?></a> 
        in <?php the_category(); ?>
        in data <?php echo get_the_date(); ?>
    </div>
    <div class="news_card-title">
        <div class="h1"><?php the_title(); ?></div>
    </div>
    <div class="news_card-content">
        <?php the_content(); ?>
    </div>
</div>