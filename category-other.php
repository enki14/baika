<ul class="post_list">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
<?php else: ?>
</ul>
<h3 class="cat_h3">投稿はありません。</h3>
<?php endif; ?>