<?php get_header(); ?>

<?php
          $home = esc_url( home_url( "/" ));
          $concept = esc_url( home_url( "/concept/" ));
          $menu = esc_url( home_url( "/menu/" ));
          $news = esc_url( home_url( "/news/" ));
          $shop = esc_url( home_url( "/shop/" ));
          $products = esc_url( home_url( "/products/" ));
          $contact = esc_url( home_url( "/contact/" ));
        ?>


<div class="loader-wrap">
      <div class="loader-img">
      <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/logo_dark.svg" alt="サイトロゴ">
      </div>
    </div><!-- /.loader-wrap -->

<main class="l-overflow">

  <div class="l-top-mv p-top-mv js-mv" >
    <div class="p-top-mv__wrapper">

      <aside class="p-top-mv__nav">
        <h1 class="p-top-mv__logo">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/logo_dark.svg" alt="サイトロゴ">
        </h1>
        <nav class="p-top-mv__nav">
          <ul class="p-top-mv__nav-items">
            <li class="p-top-mv__nav-item">
              <a href="<?php echo $home ?>">
                <span class="p-top-mv__nav-en">top</span>
                <span class="p-top-mv__nav-ja">トップ</span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $concept ?>">
                <span class="p-top-mv__nav-en">concept</span>
                <span class="p-top-mv__nav-ja">コンセプト</span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $menu ?>">
                <span class="p-top-mv__nav-en">menu</span>
                <span class="p-top-mv__nav-ja">メニュー</span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $news ?>">
                <span class="p-top-mv__nav-en">news</span>
                <span class="p-top-mv__nav-ja">ニュース</span></span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $shop ?>">
                <span class="p-top-mv__nav-en">shop</span>
                <span class="p-top-mv__nav-ja">店舗情報</span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $products ?>">
                <span class="p-top-mv__nav-en">gift</span>
                <span class="p-top-mv__nav-ja">ギフト・贈り物</span>
              </a>
              </li><!-- /.p-top-mv__nav-item -->
              <li class="p-top-mv__nav-item">
              <a href="<?php echo $contact ?>">
                <span class="p-top-mv__nav-en">contact</span>
                <span class="p-top-mv__nav-ja">お問い合わせ</span>
              </a>
            </li><!-- /.p-top-mv__nav-item -->
          </ul><!-- /.p-top-mv__nav-items -->
        </nav>
        <div class="p-top-mv__icons">
          <div class="p-top-mv__icon">
            <a href="">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_twitter-dark.png" alt="twitterアイコン">
            </a>
          </div><!-- /.p-top-mv__icon -->
          <div class="p-top-mv__icon">
            <a href="">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_instagram-dark.png" alt="instagramアイコン">
            </a>
          </div><!-- /.p-top-mv__icon -->
          <div class="p-top-mv__icon">
            <a href="">
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_youtube-dark.png" alt="youtubeアイコン">
            </a>
          </div><!-- /.p-top-mv__icon -->
       </div><!-- /.p-top-mv__icons -->
      </aside>
      
     

      <div class="swiper slider1">
        <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
             <div class="swiper-slide">
             <div class="p-top-mv__img">
             <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-pc1.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-sp1.jpg" alt="MV画像">
            </picture>
            </div><!-- /.p-top-mv__img -->
            </div>
            <div class="swiper-slide">
            <div class="p-top-mv__img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-pc2.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-sp2.jpg" alt="MV画像">
            </picture>
            </div><!-- /.p-top-mv__img -->
          </div>
          <div class="swiper-slide">
          <div class="p-top-mv__img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-pc3.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-sp3.jpg" alt="MV画像">
            </picture>
            </div><!-- /.p-top-mv__img -->
          </div>
        </div> <!-- Swiper-wrapper -->
        
        
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div> <!-- Swiper -->
    </div><!-- /.p-top-mv__wrapper -->

    
    <h2 class="p-top-mv__title">パスタとコーヒーが<br class="sp-only">とってもおいしい、<br>ほっと落ち着くのんびり空間。</h2><!-- /.p-mv__title -->
    <div class="l-inner">
      <div class="p-top-mv__body">
        
        <?php
$news_query = new WP_Query(
  array(
    'post_type'      => 'post', 
		'posts_per_page' => 1, 
    'tag_id' => 'pickup', 
    )
  );
  ?>
<?php if ( $news_query->have_posts() ) : ?>
	<?php while ( $news_query->have_posts() ) : ?>
		<?php $news_query->the_post(); ?>
    
    <article class="p-top-mv__item p-news-card-long">
      <div class="p-top-mv__balloon">
        <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/mv-text.png" alt="吹き出し">
      </div><!-- /.p-top-mv__balloon -->
      <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
      <div class="p-news-card-long__header">
        <figure class="p-news-card-long__figure">
          <?php
                if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                } 
                ?>
              </figure>
            </div><!-- /.p-news-card__header -->
            <div class="p-news-card-long__body">
              <time class="p-news-card-long__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/m/j'); ?></time>
              <h3 class="p-news-card-long__title"><?php the_title(); //タイトルを表示 ?></h3>
            </div><!-- /.p-news-card-long__body -->
            <?php
                // カテゴリー１つ目の名前を表示
                $category = get_the_category();
                if ($category[0] ) {
                  echo '<div class="p-news-card-long__category">' . $category[0]->cat_name . '</div>';
                }
                ?>
          </a>
        </article>
        
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?> 
        
      </div><!-- /.p-mv__body -->
    </div><!-- /.l-inner -->
  </div><!-- /.l-top-mv p-top-mv -->
  
  
  <section class="l-concept p-concept">
    <div class="l-inner">
      <div class="p-concept__body">
        
        <div class="p-concept__text-body">
          <div class="p-concept__title  p-section-title">
            <h2 class="js-scrollAnimation">
              <span class="p-section-title__en">concept</span>
              <span class="p-section-title__jp">当店のこだわり</span>
            </h2><!-- /.p-section-title__en -->
          </div><!-- /.p-concept__title -->
          <h3 class="p-concept__sub-title js-scrollAnimation">
            最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ
          </h3><!-- /.p-concept__sub-title -->
          <p class="p-concept__text js-scrollAnimation">
            ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p><!-- /.p-concept__text -->
          <p class="p-concept__text js-scrollAnimation">
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p><!-- /.p-concept__text -->
          
          <div class="p-concept__btn c-btn-base js-scrollAnimation">
            <a href="<?php echo $concept ?>" class="c-btn-base__link">詳しくはこちら</a><!-- /.c-btn-base__link -->
          </div>
        </div>
        
        <div class="p-concept__img js-scrollAnimation">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/concept-img.jpg" alt="当店のこだわり画像">
        </div><!-- /.p-concept__img -->
        
      </div><!-- /.p-concept__body -->
    </div><!-- /.l-inner -->
  </section><!-- /.l-concept p-concept -->
  
  
  <section class="l-lunch p-lunch">
    <div class="p-lunch__title  p-section-title">
      <h2 class="js-scrollAnimation">
        <span class="p-section-title__en">special lunch set</span>
        <span class="p-section-title-__p">今月のスペシャルランチセット</span>
      </h2><!-- /.p-section-title__en -->
      <div class="p-lunch__balloon js-scrollAnimation">
            <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/lunch-text.png" alt="吹き出し">
          </div><!-- /.p-access__balloon -->
    </div><!-- /.p-lunch__title -->
    <div class="p-lunch__body">
      <div class="p-lunch__body-inner">
        <div class="p-lunch__sub-title-box js-scrollAnimation">
          <h3 class="p-lunch__sub-title">お好きなパスタをお選びください</h3><!-- /.p-lunch__sub-title -->
        </div><!-- /.p-lunch__body-inner -->
      </div><!-- /.p-lunch__sub-title -->
      <div class="p-lunch_body-box">

        <div class="p-lunch__body-items p-lunch-cards">
          
          <article class="p-lunch-cards__item p-lunch-card js-scrollAnimation">
          
              <div class="p-lunch-card__header">
                <figure class="p-lunch-card__figure">
                <img src="<?php $aLunchImage = scf::get('a-lunch-image'); echo wp_get_attachment_url( $aLunchImage ); ?>" alt="Aランチ画像" >
                </figure>
              </div><!-- /.p-lunch-card__header -->
              <div class="p-lunch-card__body">
                <div class="p-lunch-card__number">A</div><!-- /.p-lunch-card__number -->
                <h3 class="p-lunch-card__title"><?php echo SCF::get( 'a-lunch-title');?></h3>
              </div><!-- /.p-lunch-card__body -->
           
          </article>
          <article class="p-lunch-cards__item p-lunch-card js-scrollAnimation">
            
              <div class="p-lunch-card__header">
                <figure class="p-lunch-card__figure">
                  <img src="<?php $bLunchImage = scf::get('b-lunch-image'); echo wp_get_attachment_url( $bLunchImage ); ?>" alt="Bランチ画像" >
                </figure>
              </div><!-- /.p-lunch-card__header -->
              <div class="p-lunch-card__body">
                <div class="p-lunch-card__number">B</div><!-- /.p-lunch-card__number -->
                <h3 class="p-lunch-card__title"><?php echo SCF::get( 'b-lunch-title');?></h3>
              </div><!-- /.p-lunch-card__body -->
            
          </article>
        </article>
        <article class="p-lunch-cards__item p-lunch-card js-scrollAnimation">
        
            <div class="p-lunch-card__header">
              <figure class="p-lunch-card__figure">
                <img src="<?php $cLunchImage = scf::get('c-lunch-image'); echo wp_get_attachment_url( $cLunchImage ); ?>" alt="Cランチ画像" >
              </figure>
            </div><!-- /.p-lunch-card__header -->
            <div class="p-lunch-card__body">
              <div class="p-lunch-card__number">C</div><!-- /.p-lunch-card__number -->
              <h3 class="p-lunch-card__title"><?php echo SCF::get( 'c-lunch-title');?></h3>
            </div><!-- /.p-lunch-card__body -->
        
        </article>
      </article>
      <article class="p-lunch-cards__item p-lunch-card js-scrollAnimation">
       
          <div class="p-lunch-card__header">
            <figure class="p-lunch-card__figure">
              <img src="<?php $dLunchImage = scf::get('d-lunch-image'); echo wp_get_attachment_url( $dLunchImage ); ?>" alt="Dランチ画像" >
            </figure>
          </div><!-- /.p-lunch-card__header -->
          <div class="p-lunch-card__body">
            <div class="p-lunch-card__number">D</div><!-- /.p-lunch-card__number -->
            <h3 class="p-lunch-card__title"><?php echo SCF::get( 'd-lunch-title' );?></h3>
          </div><!-- /.p-lunch-card__body -->
       
      </article>
      
    </div><!-- /.p-lunch__body-items -->
  </div><!-- /.p-lunch_body-box -->
    
    <div class="p-lunch__footer">
      <div class="p-lunch__footer-items js-scrollAnimation">
        <div class="p-lunch__set-img">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/lunch.png" alt="">
        </div><!-- /.p-lunch__set-img -->
        <div class="p-lunch__set-box">
          <p class="p-lunch__set-text">スペシャルランチセット<br> <span>【選べる3品】</span> </p><!-- /.p-lunch__set-text -->
          <p class="p-lunch__set-price">1,280 yen</p><!-- /.p-lunch__set-price -->
        <p class="p-lunch__set-open">(11:00 AM〜14:00 PMまで)</p><!-- /.p-lunch__set-open -->
      </div><!-- /.p-lunch__set-price -->
    </div><!-- /.p-lunch__footer-items -->
  </div><!-- /.p-lunch__footer -->
</div><!-- /.p-lunch__body -->
</section><!-- /.l-lunch p-lunch -->



<section class="l-menu p-menu">
  <div class="p-menu__leaf">
    <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/leaf2.png" alt="">
  </div><!-- /.p-menu__leaf -->
  <div class="l-inner">
  <div class="p-menu__title p-section-title">
      <h2 class="js-scrollAnimation">
        <span class="p-section-title__en">grand menu</span>
        <span class="p-section-title__jp">グランドメニュー</span>
      </h2><!-- /.p-section-title__en -->
    </div><!-- /.p-lunch__title -->
    <div class="p-menu__body">
      <div class="p-menu__body-item">
        <div class="p-menu__body-title-outline">
          <h3 class="p-menu__body-title js-scrollAnimation">パスタ</h3><!-- /.p-menu__body-title -->
        </div><!-- /.p-menu__body-title-outline -->
        <div class="p-menu__items  p-menu-cards">


        <?php
        $args = [
          'post_type' => 'menu', // カスタム投稿名が「」の場合
          'posts_per_page' => 3, // 表示する数
          'orderby' => 'rand',
          'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミー名を指定
                  'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                  'terms' => 'pasta',  //タクソノミーの値を指定
                  'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
             )
            ),
            ];
          $my_query = new WP_Query($args); ?>

          <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


          <article class="p-menu-cards__item js-scrollAnimation p-menu-card">
           
              <div class="p-menu-card__header">
                <figure class="p-menu-card__figure">
                <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
                </figure>
              </div><!-- /.p-menu-card__header -->
              <div class="p-menu-card__body">
                <h3 class="p-menu-card__title"><?php the_title(); //タイトルを表示 ?></h3>
              </div><!-- /.p-menu-card__body -->
                <div class="p-menu-card__footer">
                  <p class="p-menu-card__copy"><?php echo SCF::get( 'menuprice' );?></p>
              </div><!-- /.p-menu-card__footer -->
        
          </article>
          
    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>

        </div><!-- /.p-menu-cards -->
      </div><!-- /.p-menu__body-item -->
      <div class="p-menu__body-item">
        <div class="p-menu__body-title-outline">
          <h3 class="p-menu__body-title js-scrollAnimation">サラダ</h3><!-- /.p-menu__body-title -->
        </div><!-- /.p-menu__body-title-outline -->
        <div class="p-menu__items p-menu-cards">

        <?php
        $args = [
          'post_type' => 'menu', // カスタム投稿名が「」の場合
          'posts_per_page' => 3, // 表示する数
          'orderby' => 'rand',
          'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミー名を指定
                  'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                  'terms' => 'salada',  //タクソノミーの値を指定
                  'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
             )
            ),
            ];
          $my_query = new WP_Query($args); ?>

          <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


          <article class="p-menu-cards__item js-scrollAnimation p-menu-card">
         
              <div class="p-menu-card__header">
                <figure class="p-menu-card__figure">
                <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
                </figure>
              </div><!-- /.p-menu-card__header -->
              <div class="p-menu-card__body">
                <h3 class="p-menu-card__title"><?php the_title(); //タイトルを表示 ?></h3>
              </div><!-- /.p-menu-card__body -->
                <div class="p-menu-card__footer">
                  <p class="p-menu-card__copy"><?php echo SCF::get( 'menuprice' );?></p>
              </div><!-- /.p-menu-card__footer -->
           
          </article>
          
    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>

         
        
        </div><!-- /.p-menu-cards -->
      </div><!-- /.p-menu__body-item --><div class="p-menu__body-item">
        <div class="p-menu__body-title-outline">
          <h3 class="p-menu__body-title js-scrollAnimation">パン＆スイーツ</h3><!-- /.p-menu__body-title -->
        </div><!-- /.p-menu__body-title-outline -->
        <div class="p-menu__items p-menu-cards">

        <?php
        $args = [
          'post_type' => 'menu', // カスタム投稿名が「」の場合
          'posts_per_page' => 5, // 表示する数
          'orderby' => 'rand',
          'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミー名を指定
                  'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                  'terms' => 'sweets',  //タクソノミーの値を指定
                  'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
             )
            ),
            ];
          $my_query = new WP_Query($args); ?>

          <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


          <article class="p-menu-cards__item js-scrollAnimation p-menu-card">
         
              <div class="p-menu-card__header">
                <figure class="p-menu-card__figure">
                <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
                </figure>
              </div><!-- /.p-menu-card__header -->
              <div class="p-menu-card__body">
                <h3 class="p-menu-card__title"><?php the_title(); //タイトルを表示 ?></h3>
              </div><!-- /.p-menu-card__body -->
                <div class="p-menu-card__footer">
                  <p class="p-menu-card__copy"><?php echo SCF::get( 'menuprice' );?></p>
              </div><!-- /.p-menu-card__footer -->
          
          </article>
          
    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>

        </div><!-- /.p-menu-cards -->
      </div><!-- /.p-menu__body-item --><div class="p-menu__body-item">
        <div class="p-menu__body-title-outline">
          <h3 class="p-menu__body-title js-scrollAnimation">ドリンク</h3><!-- /.p-menu__body-title -->
        </div><!-- /.p-menu__body-title-outline -->
       
        <div class="p-menu__drink">
          <div class="p-menu__drink-img js-scrollAnimation">
            <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/drink1.jpg" alt="ドリンク画像">
          </div><!-- /.p-menu__drink-img -->
        <div class="p-menu__drink-body js-scrollAnimation">
          <h4 class="p-menu__drink-title">コーヒー</h4><!-- /.p-menu__drink-title -->
          <dl class="p-menu__drink-items">
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">ブレンド</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">カフェラテ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">豆乳ラテ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">カフェモカ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">キャラメルラテ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">バニララテ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
          </dl><!-- /.p-menu__drink-items -->
        </div><!-- /.p-menu__drink-body -->
        <div class="p-menu__drink-body js-scrollAnimation">
          <h4 class="p-menu__drink-title">紅茶</h4><!-- /.p-menu__drink-title -->
          <dl class="p-menu__drink-items">
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">ストレート</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">ミルク</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">アップル</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
          </dl><!-- /.p-menu__drink-items -->
        </div><!-- /.p-menu__drink-body -->
        <div class="p-menu__drink-body js-scrollAnimation">
          <h4 class="p-menu__drink-title">ソフトドリンク</h4><!-- /.p-menu__drink-title -->
          <dl class="p-menu__drink-items">
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">バナナ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">オレンジ</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">アップル</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">マンゴー</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
            <div class="p-menu__drink-item">
              <dt class="p-menu__drink-menu">ミックス</dt>
              <dd class="p-menu__drink-price">500 yen</dd>
            </div><!-- /.p-menu__drink-item -->
          </dl><!-- /.p-menu__drink-items -->
        </div><!-- /.p-menu__drink-body -->
        </div><!-- /.p-menu__drink -->
    </div><!-- /.p-menu__body -->

    <div class="p-menu__btn c-btn-base js-scrollAnimation">
      <a href="<?php echo $menu ?>" class="c-btn-base__link">その他のメニュー</a><!-- /.c-btn-base__link -->
    </div>

  </div><!-- /.l-inner -->
</section><!-- /.l-menu p-menu -->





<section class="l-gallery p-gallery">
  <div class="l-inner">
  <div class="p-gallery__title p-section-title ">
      <h2 class="js-scrollAnimation">
        <span class="p-section-title__en">gallery</span>
        <span class="p-section-title__jp">ギャラリー</span>
      </h2><!-- /.p-section-title__en -->
      <div class="p-gallery__balloon js-scrollAnimation">
        <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/gallery-text.png" alt="吹き出し">
      </div><!-- /.p-access__balloon -->
    </div><!-- /.p-lunch__title -->
    <div class="p-gallery__body">
      <ul class="p-gallery__items">
        <li class="p-gallery__item js-scrollAnimation">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/gallery1.jpg" alt="ギャラリー画像1">
        </li><!-- /.p-gallery__item -->
        <li class="p-gallery__item js-scrollAnimation">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/gallery2.jpg" alt="ギャラリー画像2">
        </li><!-- /.p-gallery__item -->
        <li class="p-gallery__item js-scrollAnimation">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/gallery3.jpg" alt="ギャラリー画像2">
        </li><!-- /.p-gallery__item -->
        <li class="p-gallery__item js-scrollAnimation">
          <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/top/gallery4.jpg" alt="ギャラリー画像2">
        </li><!-- /.p-gallery__item -->
      </ul><!-- /.p-gallery__items -->
    </div><!-- /.p-gallery__body -->
   <div class="p-gallery__btn c-btn-base js-scrollAnimation">
      <a href="" class="c-btn-base__link">インスタグラムを見る</a><!-- /.c-btn-base__link -->
    </div>
  </div><!-- /.l-inner -->
</section><!-- /.l-gallery p-gallery -->





<section class="l-news p-news">
  <div class="l-inner">
  <div class="p-news__title p-section-title">
      <h2 class="js-scrollAnimation">
        <span class="p-section-title__en">news</span>
        <span class="p-section-title__jp">お知らせ</span>
      </h2><!-- /.p-section-title__en -->
    </div><!-- /.p-news__title -->

    <div class="p-news__body">

      <div class="p-news__body-item p-news-cards">

      <?php
  $args = [
    'post_type' => 'post', // カスタム投稿名が「」の場合
    'posts_per_page' => 5, // 表示する数
  
		  ];
	  $my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
	  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <article class="p-news-cards__item js-scrollAnimation p-news-card">
          <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <div class="p-news-card__header">
          <figure class="p-news-card__figure">
          <?php
              if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
              } 
              ?>
          </figure>
        </div><!-- /.p-news-card__header -->
        <div class="p-news-card__body">
          <h3 class="p-news-card__title"><?php the_title(); //タイトルを表示 ?></h3>
          <p class="p-news-card__copy"> <?php if(SCF::get( 'news-main-text' )) { echo mb_substr(SCF::get( 'news-main-text' ),0,100);} ?></p>
        </div><!-- /.p-news-card__body -->
        <div class="p-news-card__footer">
          <time class="p-news-card__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/m/j'); ?></time>
        </div><!-- /.p-news-card__footer -->
        <?php
                // カテゴリー１つ目の名前を表示
                $category = get_the_category();
                if ($category[0] ) {
                echo '<div class="p-news-card__category">' . $category[0]->cat_name . '</div>';
                }
                ?>
      </a>
    </article>

   

		<?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>

  </div><!-- /.p-news-cards -->
</div><!-- /.p-news__body -->
<div class="p-news__btn c-btn-base js-scrollAnimation">
      <a href="<?php echo $news ?>" class="c-btn-base__link">過去のお知らせ</a><!-- /.c-btn-base__link -->
    </div>
</div><!-- /.l-inner -->
</section><!-- /.l-news p-news -->



<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>