<?php get_header(); ?>
    <main>
        <section class="sec_cat">
            <div class="sub_sec">
                <?php 
                    // 条件の合う親カテゴリーから、さらにget_postsで子カテゴリーを取得する
                    if(is_category('4')):
                        include(TEMPLATEPATH . '/category-eleven.php');
                ?>
                
                <?php else: 
                        include(TEMPLATEPATH . '/category-other.php');
                ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>