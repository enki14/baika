<ul class="post_list">
    <?php
        $cat_posts = get_posts(array(
            'post_type' => 'post',
            'category' => 11,
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'ASC'
        ));
        global $post;
        if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
    ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
    <?php endforeach; ?>
</ul>
<?php wp_reset_postdata(); ?>
<?php endif; ?>