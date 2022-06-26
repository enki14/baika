<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>梅花ライフマガジン | 学科紹介 | 梅花女子大学　受験生応援サイト</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="small_link">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blank.png" alt="大学サイトリンク">梅花女子大学サイト</a>
        </div>
        <div class="header_nav">
            <div class="baika_logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/hd_logo_pc.png" 
                    class="baikaLogo_1" alt="梅花女子大学">
                </a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hd_txt_founding.png" 
                class="baikaLogo_2" alt="梅花女子大ロゴ">
            </div>
            <nav>
                <ul>
                    <li id="gnav01" class="gnav">
                        <a href="<?php echo esc_url(get_category_link( 4 )); ?>">
                            入試情報
                        </a>
                    </li>
                    <li id="gnav02" class="gnav">
                        <a href="<?php echo esc_url( get_category_link( 5 ) ); ?>">
                            学科紹介
                        </a>
                    </li>
                    <li id="gnav03" class="gnav">
                        <a href="<?php echo esc_url( get_category_link( 6 ) ); ?>">
                            学費・バックアップ制度
                        </a>
                    </li>
                    <li id="gnav04" class="gnav">
                        <a href="<?php echo esc_url( get_category_link( 7 ) ); ?>">
                            イベント
                        </a>
                    </li>
                    <li id="gnav05" class="gnav">
                        <a href="<?php echo esc_url( get_category_link( 8 ) ); ?>">
                            先輩からのメッセージ
                        </a>
                    </li>
                    <li id="gnav06" class="gnav">
                        <a href="#"></a>
                    </li>
                    <li id="gnav07" class="gnav">
                        <a href="#"></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="img_top">
            <?php if(is_front_page()): ?>
                <div class="upper_layer">
                    <div class="upLayer_rela">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_tit_pc.png" 
                        class="magazine" alt="life magazine">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_dog_pc.png" 
                        class="umehana" alt="梅と花">
                    </div>
                </div>
            <?php elseif(is_category('4')): ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_cat4_pc.png" 
                        class="pink_box" alt="入試情報">
                    </div>
                </div>
            <?php elseif(is_category('5')): ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_cat5_pc.png" 
                        class="pink_box" alt="学科紹介">
                    </div>
                </div>
            <?php elseif(is_category('6')): ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_cat6_pc.png" 
                        class="pink_box" alt="学費・バックアップ制度">
                    </div>
                </div>
            <?php elseif(is_category('7')): ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                        <div class="event_2022">
                            <span>2022</span>
                            <span>open</span>
                            <span>campus</span>
                        </div>
                    </div>
                </div>
            <?php elseif(is_category('8')): ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/message_tit.png" 
                        class="pink_box" alt="先輩からのメッセージ">
                    </div>
                </div>
            <?php else: ?>
                <div class="post_layer">
                    <div class="upLayer_rela">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h1><?php the_category(); ?></h1>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            <?php endif; ?>
        </div>
    </header>