<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div>
        <?php if(the_content()): the_content(); endif; ?>
    </div>
<?php endwhile; endif; ?>