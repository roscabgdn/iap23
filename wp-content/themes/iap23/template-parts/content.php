<div class="news_card">
    <div class="news_card-image">
        <a href="<?php the_permalink()?>">
            <?php the_post_thumbnail() ?>
        </a>
    </div>
    <div class="news_card-meta">
        by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            <?php echo get_the_author();?></a> 
        in <?php the_category(); ?>
        in data <?php echo get_the_date(); ?>
    </div>
    <div class="news_card-title">
        <a href="<?php the_permalink()?>" class="h1">
            <?php the_title(); ?>
        </a>
    </div>
</div>