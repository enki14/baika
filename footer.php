    <footer>
        <section class="footer_img">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/request_txt.png" 
                class="f_txt" alt="お気軽にどうぞ">
            </div>
            <a href="#" class="claim_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/images/request_btn.png" alt="資料を請求する">
            </a>
            <a href="#" class="back_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/ft_btn_pagetop_pc.png" 
                class="f_btn" alt="トップへ戻るボタン">
            </a>
        </section>
        <section class="footer_link">
            <article>
                <dl>     
                    <dt>
                        <a href="<?php echo get_category_link(4); ?>">
                            <?php echo $cat_name = get_the_category_by_ID(4); ?>
                        </a>
                    </dt>
                    <?php 
                        $cat_posts = get_posts(array(
                            'post_type' => 'post',
                            'category' => 4,
                            'posts_per_page' => -1,
                            'orderby' => 'ID',
                            'order' => 'ASC'
                        ));
                        // array_sliceで投稿情報を別けている
                        // 親と子を分けた部分に関しては、あまり動的とは言えない...
                        $parent_posts = array_slice($cat_posts, 0, 3);
                        $child_posts = array_slice($cat_posts, 3, 6);
                        $back_posts = array_slice($cat_posts, 9);
                    ?>
                    <dd>
                        <ul>
                            <?php
                                global $post;
                                if($parent_posts): foreach($parent_posts as $post): setup_postdata($post);
                                
                            ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php 
                                if($child_posts): foreach($child_posts as $post): setup_postdata($post);
                            ?>
                            <li><a href="<?php the_permalink() ?>">- <?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                        <ul>
                            <?php 
                                if($back_posts): foreach($back_posts as $post): setup_postdata($post);
                                
                            ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </dd>
                   
                </dl>
                <div class="share">
                    <div class="baika_ft_logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ft_logo.png" 
                        alt="梅花大学ロゴ">
                    </div>
                    <div class="sns">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ft_btn_tw.png" alt="twitter">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ft_btn_line.png" alt="line">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ft_btn_fb.png" alt="facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ft_btn_ig.png" alt="ig">
                    </div>
                </div>
            </article>
            <article>
                <dl>
                    <dt>
                        <a href="<?php echo get_category_link(5); ?>">
                            <?php echo $cat_name = get_the_category_by_ID(5); ?>
                        </a>
                    </dt>
                    <?php 
                        $cat_posts = get_posts(array(
                            'post_type' => 'post',
                            'category' => 5,
                            'posts_per_page' => -1,
                            'orderby' => 'ID',
                            'order' => 'ASC'
                        ));
                    ?>
                    <dd>
                        <ul>
                        <?php
                            global $post;
                            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
                            
                        ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <a href="<?php echo get_category_link(6); ?>">
                            <?php echo $cat_name = get_the_category_by_ID(6); ?>
                        </a>
                    </dt>
                    <?php 
                        $cat_posts = get_posts(array(
                            'post_type' => 'post',
                            'category' => 6,
                            'posts_per_page' => -1,
                            'orderby' => 'ID',
                            'order' => 'ASC'
                        ));
                    ?>
                    <dd>
                        <ul>
                        <?php
                            global $post;
                            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
                            
                        ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </dd>
                    <dt>
                        <a href="<?php echo get_category_link(7); ?>">
                            <?php echo $cat_name = get_the_category_by_ID(7); ?>
                        </a>
                    </dt>
                    <?php 
                        $cat_posts = get_posts(array(
                            'post_type' => 'post',
                            'category' => 7,
                            'posts_per_page' => -1,
                            'orderby' => 'ID',
                            'order' => 'ASC'
                        ));
                    ?>
                    <dd>
                        <ul>
                        <?php
                            global $post;
                            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
                            
                        ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </dd>
                </dl>
            </article>
        </section>
        <section class="footer_btm">
            <div class="btm_width">
                <ul>
                    <li>
                        <a href="#">梅花女子大学サイト</a>
                    </li>
                    <li>
                        <a href="#">梅花歌劇団</a>
                    </li>
                    <li>
                        <a href="#">お知らせ</a>
                    </li>
                    <li>
                        <a href="#">交通アクセス</a>
                    </li>
                    <li>
                        <a href="#">教員紹介サイト</a>
                    </li>
                    <li>
                        <a href="#">サイトマップ</a>
                    </li>
                </ul>
                <p>Copyright(c) Baika Women’s University. All right reserved.</p>
            </div>
        </section>
        <script>
            jQuery(function(){
                let back_btn = $('.f_btn');
                back_btn.on('click', function(){
                    $('body, html').animate({scrollTop:0}, 500, 'swing');
                    return false;
                });
            });

            
        </script>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>