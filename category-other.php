<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <tr><td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td></tr>
    <?php endwhile; ?>
<?php else: ?>
    <h3>投稿はありません。</h3>
<?php endif; ?>