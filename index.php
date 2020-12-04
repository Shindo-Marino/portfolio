<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Master's Kitchen 宮崎の料理教室</title>

    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css"
    />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/main.js">
      $4
    </script>

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>

  </head>


  <body>
    <header class="header">
      <div class="header-logo">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/headerlogo.png" alt="logo" /></a>
      </div>
      <ul class="header-nav-list">
        <div class="header-nav-small">
          <li class="nav-title"><a href="<?php bloginfo('url'); ?>">Home</a></li>
          <li class="nav-subtitle"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
        </div>
        <div class="header-nav-small">
          <li class="nav-title"><a href="<?php bloginfo( 'url' ); ?>/lesson/">Lesson</a></li>
          <li class="nav-subtitle"><a href="<?php bloginfo('url'); ?>/lesson/">レッスン案内</a></li>
        </div>
        <div class="header-nav-small">
          <li class="nav-title"><a href="<?php bloginfo('url'); ?>/school/">About School</a></li>
          <li class="nav-subtitle"><a href="<?php bloginfo('url'); ?>/school/">教室の様子</a></li>
        </div>
        <div class="header-nav-small">
          <li class="nav-title"><a href="<?php bloginfo('url'); ?>/map/">Access</a></li>
          <li class="nav-subtitle"><a href="<?php bloginfo('url'); ?>/map/">アクセス</a></li>
        </div>
        <div class="header-nav-small">
          <li class="nav-title"><a href="<?php bloginfo( 'url' ); ?>/review/">Customer Reviews</a></li>
          <li class="nav-subtitle"><a href="<?php bloginfo( 'url' ); ?>/review/">お客様の声</a></li>
        </div>
        <div class="hum-contact">
          <li class="nav-subtitle hum-tel"><a href="">TEL<br />0985-123-4567</a></li>
          <li class="nav-subtitle hum-mail"><a href="<?php bloginfo( 'url' ); ?>/contact/">お問い合わせ<br />お申し込み</a></li>
        </div>
      </ul>
      <div class="header-contact">
        <div class="tel">
          <div class="tel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_tel.png" alt="電話" />
          </div>
          <div class="telno header-nav-list"><a href="">0985-123-4567</a></div>
        </div>
        <div class="mail">
          <div class="mail-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_mail.png" alt="メール" />
          </div>
          <div class="mailadd"><a href="<?php bloginfo( 'url' ); ?>/contact/">お問い合わせ・お申し込み</a></div>
        </div>
      </div>

      <div id="js-nav-open" class="humberger hum-index">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </header>

    <main class="main">
     <div class="hero-text">
      <section class="hero slider">
        <div class="hero-img-1"><img src="<?php echo get_template_directory_uri(); ?>/images/maintop3.png"></div>
        <div class="hero-img-2"><img src="<?php echo get_template_directory_uri(); ?>/images/spainfood1.png"></div>
        <div class="hero-img-3"><img src="<?php echo get_template_directory_uri(); ?>/images/maintop1.png"></div>
        <div class="hero-img-4"><img src="<?php echo get_template_directory_uri(); ?>/images/maintop2.png"></div>
        <div class="hero-img-5"><img src="<?php echo get_template_directory_uri(); ?>/images/top5.png"></div>
        <div class="hero-img-6"><img src="<?php echo get_template_directory_uri(); ?>/images/top6.png"></div>
      </section>
      <h1 class="hero-title">Master's Kitchen</h1>
    </div>

      <section class="concept">
        <h1 class="title">Concept</h1>
        <p class="concept-text-top">
          宮崎駅からバスで５分。少人数でとってもアットホームな料理教室です。
          “みんな違うけれどみんな笑顔になれる”空間作りを目指しています
        </p>
        <div class="concept-img-block">
        <div class="concept-img-woman">
          <img
            class="concept-img"
            src="<?php echo get_template_directory_uri(); ?>/images/concept.png"
            alt="料理している女性"
          />
        </div>
        <p class="concept-text-bottom">
          日々の暮らしに料理で彩りを。初心者の方から本格的なコースを習いたい方まで楽しく学んでいただけます。普段お料理をされない方も、お一人様での参加も大歓迎です。
          皆さまにお会い出来る事、心より楽しみにお待ちしております。
        </p>
        </div>
      </section>

      <section class="contents">
        <h1 class="title">Contents</h1>
      <div class="contents-block fadein">
          <div>
            <a href="<?php bloginfo( 'url' ); ?>/lesson/"><img
              class="contents-img"
              src="<?php echo get_template_directory_uri(); ?>/images/japfood@2x.png"
              alt="日本料理の写真"
            /></a>
          </div>

          <div class="contents-text">
            <div class="contents-text-title">
               <h2 class="contents-text-entitle">Lesson</h2>
              <p class="contents-text-jatitle">レッスン案内</p>
            </div>
            <p class="contents-subtitle">カラダの内側からキレイになるレシピ</p>
            <p class="contents-read">
              おうちのごはんや、ホームパーティーのお料理をグレードアップしてみませんか？
              Master’s
              Kitchenでは提携農家から送られてくる旬の食材を使って「内臓からキレイになるごはん」をコンセプトに様々なレシピをご提供しております。
              普段のお料理がグッと美味しくなるプロのコツを、三つ星レストランシェフ経験者の講師が丁寧にお教えします。
            </p>
            <a class="course" href="<?php bloginfo( 'url' ); ?>/lesson/">コース案内はこちら</a>
          </div>
        </div>

        <div class="contents-block school fadein">
          <div>
            <a href="<?php bloginfo('url'); ?>/school/"><img
              class="contents-img"
              src="<?php echo get_template_directory_uri(); ?>/images/school.png"
              alt="料理している女性"
            /></a>
          </div>

          <div class="contents-text school-contents">
            <div class="contents-text-title school-title">
              <h2 class="contents-text-entitle">School</h2>
              <p class="contents-text-jatitle">教室の様子</p>
            </div>
            <p class="contents-subtitle school-text-title">
              学ぶ誰もが笑顔になる空間づくり
            </p>
            <p class="contents-read school-text-index">
              自分や大切な人を笑顔にできる、料理にはその力があります。日々の暮らしを丁寧に、自分や周りを元気に幸せにするコツを、アットホームな空間でご提供します。初心者の方も上級者の方も関係なく、上手になりたいと思う誰もが笑顔で楽しくステップアップできるための笑顔あふれる楽しい空間をトコトン追求しています。
            </p>
            <a class="course school-click" href="<?php bloginfo('url'); ?>/school/">教室の様子はこちら</a>
          </div>
        </div>

        <div class="contents-block reviews-last fadein">
          <div>
            <a href="<?php bloginfo( 'url' ); ?>/review/"><img
              class="contents-img"
              src="<?php echo get_template_directory_uri(); ?>/images/review.png"
              alt="キッチンの写真"
            /></a>
          </div>

          <div class="contents-text">
            <div class="contents-text-title">
              <h2 class="contents-text-entitle">Reviews</h2>
              <p class="contents-text-jatitle">お客様の声</p>
            </div>
            <p class="contents-subtitle">実際に感じたこと</p>
            <p class="contents-read">
              Master’s
              Kitchenには初心者の方から上級者の方までたくさんの方にお越しいただいています。今まで通ってくださった方々の声をあつめました。
            </p>
            <div class="reviews">
              <p class="reviews-title">30代　女性（K.Hさん）</p>
              <p class="reviews-text">
                先生が明るく気さくでどんな質問にも答えていただけるので毎回通うのが楽しいです。きめ細かに教えていただけるので、初心者の方でも、安心して受講できます！
              </p>
            </div>
            <a class="course" href="<?php bloginfo( 'url' ); ?>/review/">お客様の声はこちら</a>
          </div>
        </div>
      </section>

      <div class="index-video">
      <video src="<?php echo get_template_directory_uri(); ?>/images/cookingschoolmovie.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/youtube.png" controls></video>
      </div>

      <section class="category">
        <div class="home-blog">
          <div class="home-blog-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/blogphoto.png" alt="ブログ写真"/></a>
            <p class="home-blog-title">Blog</p>
          </div>
          <div class="pc-home-blog-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pcblog.png" alt="ブログ写真"/></a>
            <p class="home-blog-title">Blog</p>
          </div>
        </div>
        <div class="home-photo">
          <div class="home-photo-img">
            <a href=""
              ><img src="<?php echo get_template_directory_uri(); ?>/images/peartart.png" alt="フォトギャラリーの写真"
            /></a>
            <p class="home-photo-title">Photo Gallery</p>
          </div>
          <div class="pc-home-photo-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pcgallery.png" alt="ブログ写真"/></a>
            <p class="home-photo-title">Photo Gallery</p>
          </div>       
        </div>
        <div class="home-recipe recipe-last">
          <div class="home-recipe-img">
            <a href=""
              ><img
                src="<?php echo get_template_directory_uri(); ?>/images/originalrecipe.png"
                alt="オリジナルレシピの写真"
            /></a>
            <p class="home-recipe-title">Original Recipe</p>
          </div>
          <div class="pc-home-recipe-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pcrecipe.png" alt="ブログ写真"/></a>
            <p class="home-recipe-title">Original Recipe</p>
          </div>         
        </div>
      </section>

      <h1 class="title">News</h1>

      <?php
        $args = array(
        'paged' => $paged,
        'post_type' => 'post',
        'category_name' => 'news',
        'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

      
      <section class="news">
        <dl class="news-contents">
          
          <div class="news-small">
            <dt class="news-time"><span><?php the_time( 'Y' ); ?></span><?php the_time( '.n.j' ); ?> 
            </dt>
            <dd class="news-cat">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </dd>
          </div>
          
        </dl>
      </section>

      <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>

    </main>
    <!-- ↑main↑ -->

    <p id="page-top"><a href="#wrap">PAGE TOP</a></p>

<?php get_footer(); ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
        });
      });
    </script>
    

  </body>
  
</html>

