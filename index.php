<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baika</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blank.png" alt="大学サイトリンク">梅花女子大学サイト</a>
        <div class="header_nav">
            <div class="baika_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/hd_logo_pc.png" 
                class="baikaLogo_1" alt="梅花女子大学">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hd_txt_founding.png" 
                class="baikaLogo_2" alt="梅花女子大ロゴ">
            </div>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'baika_menu', 'menu_class' => 'baika_menu', 'container' => false, 'depth' => 1 ) ); ?>
            </nav>
        </div>
        <div class="img_top">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/fv_bg_pc.jpg" 
            class="header-img" alt="ヘッダーイメージ">
            <div class="upper_layer">
                <div class="upLayer_rela">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_tit_pc.png" 
                    class="magazine" alt="life magazine">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/index_dog_pc.png" 
                    class="umehana" alt="梅と花">
                </div>
            </div>
        </div>
    </header>
    <main>
        <h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/baika_txt_pc.png" 
            class="baika_text" alt="キャッチフレーズ">
        </h2>
        <section class="section_1">
            <div class="sub_sec">
                <div class="img_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/garden_img_pc.png" 
                    alt="ガーデンキャンパス">
                </div>
                <div class="side_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/garden_ttl_pc.png" 
                    class="garden_h" alt="ガーデンキャンパスの見出し">
                    <article class="side_catch">
                        <h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/garden_tit_pc.png" 
                            class="five_point" alt="梅ちゃんの5つ星ポイント">
                        </h4>
                        <p>
                            正門を入ると<br>そこは四季の花々であふれるガーデンキャンパス。<br>
                            川の流れる芝生広場。<br>5弁の花びらをかたどった敷石。<br>
                            本を読んだり、ランチをたべたりできる空間です。
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section_2">
            <div class="sub_sec">
                <div class="side_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/facility_ttl_pc.png" 
                    class="campus_h" alt="キャンパス設備">
                    <article>
                        <h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/facility_tit_pc.png" 
                            class="five_point" alt="花ちゃんの5つ星ポイント">
                        </h4>
                        <p>
                            梅花女子大学の魅力のひとつは、専門分野が深く学べるところ。<br>
                            最新の施設・設備が整っています。<br>
                            調理実習室、LDR完備の看護学科の実習室。<br>
                            口腔保健学科の臨床歯科実習室、保育実習室に、<br>
                            各種のピアノがずらりと並ぶピアノ実習室、バレエ、ダンスレッスン室。<br>
                            キャンパスの中で高い専門力を身につけることができます。
                        </p>
                    </article>
                </div>
                <div class="img_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/facility_img_pc.png" 
                    alt="聖堂">
                </div>
            </div>
        </section>
        <section class="section_3">
            <div class="sub_sec">
                <div class="img_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/cafeteria_img_pc.png" 
                    alt="カフェテリア">
                </div>
                <div class="side_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/cafeteria_ttl_pc.png" 
                    class="cafe_h" alt="食堂・カフェ">
                    <article>
                        <h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/cafeteria_tit_pc.png" 
                            class="five_point" alt="梅ちゃんの5つ星ポイント">
                        </h4>
                        <p>
                            食堂のフロアには書店やコンビニエンスストアもあります。<br>
                            人気のメニューの唐マヨ丼やカフェランチ、サラダ、スイーツをはじめ<br>
                            食文化学科学生のコラボメニューもあります。<br>
                            学生会館2Fには焼きたてパンやスイーツのあるカフェがあります。<br>
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section_4">
            <div class="sub_sec">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/library_ttl_pc.png" 
                class="lib_h" alt="図書館">
                <p>
                    梅花女子大学図書館には、約38万冊の図書と約3000種類の雑誌、そして約2万3000点の視聴覚資料(DVD、Blu-ray、CDとビデオ)などが所蔵されています。<br>
                    小説から専門書まで、新刊や話題になった本も読むことができます。
                </p>
                <div class="img_stn_4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/library_img_pc.png" 
                    class="lib_img" alt="図書館内">
                </div>
            </div>
            
        </section>
    </main>
    <footer></footer>
    <?php wp_footer(); ?>
</body>
</html>