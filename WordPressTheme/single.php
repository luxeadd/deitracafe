<?php get_header(); ?>
<main class="l-overflow">

<div class="p-sub-mv js-mv">
  <div class="p-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-news-pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-news-sp.jpg" alt="コンセプトMV画像">
    </picture>
  </div><!-- /.p-sub-mv__img -->
 <div class="p-sub-mv__title">
   <h1 class="p-sub-mv__title-en">news</h1><!-- /.p-sub-mv__title-en -->
   <p class="p-sub-mv__title-jp">お知らせ</p><!-- /.p-sub-mv__title-jp -->
 </div><!-- /.p-sub-mv__title -->
</div><!-- /.p-sub-mv -->
<div class="l-inner-m">

<?php get_template_part( 'template-parts/c-breadcrumbs' ); ?>

<section class="l-news-single p-news-single">
   <div class="p-news-single__body">
     <div class="p-news-single__img">
     <?php
        if (has_post_thumbnail() ) {
        // アイキャッチ画像が設定されてれば大サイズで表示
        the_post_thumbnail('large');
        } 
      ?>
     </div><!-- /.p-news-single__img -->
     <h1 class="p-news-single__title">
       <?php the_title(); //タイトルを表示 ?>
     </h1><!-- /.p-news-single__title -->
     <div class="p-news-single__info">
       <div class="p-news-single__time-box">
       <time class="p-news-single__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/m/j'); ?></time>
       </div><!-- /.p-news-single__time -->
       <div class="p-news-single__category-box">
       <?php
              // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0] ) {
              echo '<div class="p-news-single__category">' . $category[0]->cat_name . '</div>';
              }
              ?>
       </div><!-- /.p-news-single__category -->
     </div><!-- /.p-news-single__info -->
      <div class="p-news-single__text">
        <p><?php $newsMainText = scf::get('news-main-text'); echo nl2br( $newsMainText ); ?></p>
      </div><!-- /.p-new-single__text -->
       
       <div class="p-news-single__img p-news-single__img--second">
         <img src="<?php $newsImage = scf::get('news-image'); echo wp_get_attachment_url( $newsImage ); ?>" alt="お知らせ詳細画像">
       </div><!-- /.p-news-single__img -->
       <div class="p-news-single__text">
        <p>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
      </div><!-- /.p-new-single__text -->
      
   </div><!-- /.p-news-single__body -->

   <?php $news_other = SCF::get('news-other'); ?>
      <?php foreach ($news_other as $fields ) :?>
 
 <div class="p-news-single__body">
   <div class="p-news-single__title">
       <?php echo $fields['news-other-title']; ?>
    </div><!-- /.p-news-single__title -->
    <div class="p-news-single__text p-news-single__text--sub">
      <p><?php echo $fields['news-other-text']; ?></p>
    </div><!-- /.p-new-single__text -->
  </div><!-- /.p-news-single__body -->
  
     <?php endforeach ?>



   <div class="p-news-single__list-box">
     <ul  class="p-news-single__lists">
  
     <?php $news_other_lists = SCF::get('news-other-lists'); ?>
      <?php foreach ($news_other_lists as $list ) :?>
      
        <li class="p-news-single__list"><?php echo $list['news-other-list']; ?></li><!-- /.p-news-single__list -->
        
        <?php endforeach ?>
     </ul>
   </div><!-- /.p-news-single__list-box -->
  

   <div class="p-news-single__quote">
      <p class="p-news-single__quote-text">
      <?php $newsQuoteText = scf::get('news-quote-text'); echo nl2br( $newsQuoteText ); ?>
      </p><!-- /.p-news-single__quote-text -->
      <p class="p-news-single__quote-text-under">
      <?php echo SCF::get( 'news-quote' );?>
      </p><!-- /.p-news-single__quote-text -->
   </div><!-- /.p-news-single__quote -->



   <!-- pagination -->
   <?php
 $previous_post = get_previous_post();
 $previous_id = $previous_post->ID;
 $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
 $next_post = get_next_post();
 $next_id = $next_post->ID;
 $next_date = mysql2date('Y.m.d', $next_post->post_date);
 ?>

<div class='p-news-single__navigation p-navigation'>
  <!-- 前に記事がなければ非表示 -->
  <?php if( $previous_post ): ?>    
    <a class="previouspostslink" rel="prev" href="<?php the_permalink( $previous_id ); ?>">＜ 前の記事</a>
    <?php endif; ?>
    
    <?php $news = esc_url( home_url( "/news/" )); ?>
    <a href="<?php echo $news ?>" class="p-navigation-home">記事一覧</a>
    


    <!-- 次にに記事がなければ非表示 -->
    <?php if( $next_post ): ?>  
      <a class="nextpostslink" rel="next" href="<?php the_permalink( $next_id ); ?>">次の記事 ＞</a>
      <?php endif; ?>
		</div>
    
    
    <!-- 関連記事 -->
    <div class="p-news-single__related">
      <h2 class="p-news-single__related-title">関連記事</h2><!-- /.p-news-single__related-title -->
      <div class="p-news-single__related-body">
        <div class="p-news-single__related-item p-related-cards">
          
        <?php
          // 同じカテゴリから記事を6件呼び出す
          $categories = get_the_category($post->ID);
          
          $category_ID = array();
          
          foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
          endforeach ;
          
          $args = array(
            // 今読んでいる記事を除く
            'post__not_in' => array($post -> ID),
            'posts_per_page'=> 6,
            'category__in' => $category_ID,
            // ランダムに記事を選ぶ
            'orderby' => 'rand',
          );
          $query = new WP_Query($args);
          if( $query -> have_posts() ):
            while ($query -> have_posts()) :
            $query -> the_post();
          ?>
         

           <article class="p-related-cards__item p-news-card">
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

          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
          
        </div><!-- /.p-news-single__related-item -->
      </div><!-- /.p-news-single__related-body -->
    </div><!-- /.p-news-single__related -->
      


    
  </section><!-- /.p-sub-news -->
</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>