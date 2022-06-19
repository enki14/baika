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
                <div class="img_stn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/library_img_pc.png" 
                    class="lib_img" alt="図書館内">
                    <article class="side_catch">
                        <h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/library_tit_pc.png" 
                            class="five_point" alt="花ちゃんの5つ星ポイント">
                        </h4>
                        <p>
                            図書館は、贅沢な、芸術空間<br>
                            「リフレッシュルーム」「パウダールーム」女子大学ってすごい！
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="two_block">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/book_img01_pc.png" 
                class="library_block" alt="6階建ての図書館">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/book_img02_pc.png" 
                class="library_block" alt="図書館情報誌">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/book_img03_pc.png" 
                class="library_block" alt="各学科・専門書">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/book_img04_pc.png" 
                class="library_block" alt="読書キャンペーン">
            </div>
        </section>
        <section class="baika_event">
            <div class="event_sec">
                <article>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/foppery_ttl_pc.png" alt="おしゃれの日">
                        <p>
                            梅花女子大学では、大学での学びを通じて学生が「仕事力あるおしゃれな女性」として
                            他者への配慮や気配りができる品性あるエレガントでスマートな女性として生涯輝き続けることを
                            願っています。毎月1日は「おしゃれの日」。おしゃれを楽しむ日ですが、
                            ただおしゃれをするだけではありません。学生も教職員も、いつも以上に身だしなみに気を遣い美しいマナーを心がけましょう
                            という意味がこめられているのです。“美しい姿勢と美しい歩き方”“いつも晴れやかな笑顔”など毎月テーマを決めて、
                            外見への意識とともに内面のちょっとした心がけを貼りだしているのも取り組みのひとつ。
                            髪型、鞄やアクセサリーなどワンポイントからでも、おしゃれをしようと意識するだけでなんだかステキな気持ちになります。
                        </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/foppery_img_pc.png" alt="おしゃれのイメージ">
                    </div>
                </article>
                <article>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/impression_img_pc.png" alt="校内">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/impression_ttl_pc.png" alt="感動の日">
                        <p>
                            梅花女子大学では、毎月15日を「感動の日」とし、日本一感動あふれるキャンパスをめざしています。
                            私達の感性を豊かにしてくれる、四季の花々が咲き乱れるガーデンキャンパス。
                            9学科と多彩な学びが揃い、クラブ活動も盛んな本学では日々いろいろな感動が生みだされています。
                            学生や教職員が、学園内外で起きている様々な感動を共有することで、
                            新たな発見をし、自身の世界観を広げることができたらと願っています。
                        </p>
                    </div>
                </article>
                <article class="maner_area">
                    <div class="maner_head">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mannerproject_ttl_pc.png" alt="梅花マナープロジェクト">
                            <p>
                                「梅花マナープロジェクト」とは、2010年後期学生総会で学生自治会から提案された、学生発のマナー向上プロジェクトです。
                                学生自身が梅花の学生としてふさわしいマナーを自分たちで考え、ポスターや常に携帯するカードを全学生に配布しました。
                            </p>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mannerproject_img_pc.png" alt="女子力はマナーから">
                        </div>
                    </div>
                    <div class="maner_event">
                        <div class="maner_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mannerproject_img01_pc.jpg" alt="マナー講座">
                            <div class="pink">
                                <p class="pink_word">マナー講座・講習・検定</p>
                                <p>ホテルの接客やヘアメイクなどについて専門講師をお招きしてマナーやおしゃれの大切さを学びます。</p>
                            </div>
                        </div>
                        <div class="maner_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mannerproject_img02_pc.jpg" alt="クリーンキャンペーン">
                            <div class="pink">
                                <p class="pink_word">クリーンキャンペーン</p>
                                <p>学内食堂やスクールバス乗車地周辺をのべ110人が清掃します。街の方々から励ましの言葉をいただくこともあります。</p>
                            </div>
                        </div>
                        <div class="maner_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mannerproject_img03_pc.jpg" alt="あいさつ運動">
                            <div class="pink">
                                <p class="pink_word">あいさつ運動</p>
                                <p>学内食堂前やスクールバス乗車地周辺でクラブ・サークルの学生を中心にのべ300人が大きな声であいさつをします。</p>
                            </div>
                        </div>
                    </div>
                    <p class="bottom_P">
                        マナーは、人から言われて、人から教わるだけで身につくものではありません。学生自ら、マナーの向上をめざし、考え、行動し、
                        一人ひとりの持っているものを学生生活のなかでさらに磨き、自律した芯から美しい女性をめざす。
                        　それでこそ、梅花女子！　美しく、梅花女子。
                    </p>
                </article>
                <article class="umehana_area">
                    <div class="dog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_dog_pc.png" alt="梅と花">
                        <a href="#" class="twitter">
                            <div>
                                <p>セラピー犬 梅ちゃんのTwitterもご覧ください </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/bakai_btn01_pc.png" alt="ツイッターボタン">
                            </div>
                        </a>
                    </div>
                    <div class="intro_dog">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_ttl_pc.png" alt="セラピー犬の梅と花">
                        <p class="therapy_desc">
                            梅花女子大学には、セラピー犬の梅ちゃん・花ちゃんという大切なパートナーがいます。<br>
                            私達の心を癒し、元気にしてくれる梅ちゃん・花ちゃん。毎朝、私たちのお出迎えをしてくれます。
                        </p>
                        <div class="dogs">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_dog01_pc.png" alt="梅ちゃんのイメージ">
                            <div class="dog_spec">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_name01_pc.png" alt="梅ちゃん">
                                <p>
                                    スタンダードプードルの女の子<br>
                                    心理学科アニマルセラピーコース新設に伴い2012年5月に入学。笑顔がかわいい人気者
                                </p>
                            </div>
                        </div>
                        <div class="dogs">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_dog02_pc.png" alt="花ちゃんのイメージ">
                            <div class="dog_spec">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/animaltherapy_name02_pc.png" alt="花ちゃん">
                                <p>
                                    スタンダードプードルの女の子<br>
                                    とっても明るい花ちゃん、みんなが大好き
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
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
                    <dt><a href="#">入試情報</a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">入試情報index</a></li>
                            <li><a href="#">入試のポイント</a></li>
                            <li><a href="#">入試制度一覧</a></li>
                            <li><a href="#">入試カレンダー</a></li>
                            <li><a href="#">募集人員募集人員募集人員募集人員募集人員募集人員</a></li>
                            <li><a href="#">入試カレンダー</a></li>
                            <li><a href="#">募集人員</a></li>
                            <li><a href="#">入試Q&A</a></li>
                            <li><a href="#">入試結果</a></li>
                            <li><a href="#">過去問題と解答例</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">入試情報index</a></li>
                            <li><a href="#">入試のポイント</a></li>
                            <li><a href="#">入試制度一覧</a></li>
                            <li><a href="#">入試カレンダー</a></li>
                            <li><a href="#">募集人員募集人員募集人員募集人員募集人員募集人員</a></li>
                            <li><a href="#">入試カレンダー</a></li>
                            <li><a href="#">募集人員</a></li>
                            <li><a href="#">入試Q&A</a></li>
                            <li><a href="#">入試結果</a></li>
                            <li><a href="#">過去問題と解答例</a></li>
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
                    <dt><a href="#">学科紹介</a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">学科紹介index</a></li>
                            <li><a href="#">梅花の魅力</a></li>
                            <li><a href="#">梅花女子大学のエレガンス科目</a></li>
                            <li><a href="#">情報メディア学科</a></li>
                            <li><a href="#">日本文化学科</a></li>
                        </ul>
                    </dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt><a href="#">学費・バックアップ制度</a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">学費・バックアップ制度index</a></li>
                            <li><a href="#">特待生制度</a></li>
                            <li><a href="#">入学検定料免除制度・S(スカラシップ)チャレンジ制度</a></li>
                            <li><a href="#">入学手続方法・入学手続時納付金・学費</a></li>
                            <li><a href="#">学費振替制度</a></li>
                        </ul>
                    </dd>
                    <dt><a href="#">イベント情報</a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">オープンキャンパス</a></li>
                            <li><a href="#">進学相談会</a></li>
                            <li><a href="#">入試説明会</a></li>
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