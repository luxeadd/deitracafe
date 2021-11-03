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

<section class="l-sub-news p-sub-news">
    <div class="p-sub-news__bodies">
      <div class="p-sub-news__body">
        <h2 class="p-sub-news__title"><?php single_cat_title(); ?></h2><!-- /.p-sub-news__title -->
      <div class="p-sub-news__body-inner">
        <div class="p-sub-news__items">

       
        <?php if(have_posts()): while(have_posts()):the_post(); ?>

          <article class="p-sub-news__item p-news-card">
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
          
        </div><!-- /.p-sub-news__items -->
      </div><!-- /.p-sub-news__body-inner -->
      <div class="p-sub-news__pagination">
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </div><!-- /.p-sub-news__pagenation -->
      
    </div><!-- /.p-sub-news__body -->
      

  




      <aside class="p-sub-aside">
        <div class="p-sub-aside__body">
          
          <h2 class="p-sub-aside__title">最新の記事</h2><!-- /.p-sub-news__aside-title -->
          <div class="p-sub-aside__items">

          <?php
            $news_query = new WP_Query(
              array(
                'post_type'      => 'post', 
                'orderby' => 'date',
                'posts_per_page' => 5, 
              )
            );
            ?>
          <?php if ( $news_query->have_posts() ) : ?>
            <?php while ( $news_query->have_posts() ) : ?>
              <?php $news_query->the_post(); ?>

            <article class="p-sub-aside__item p-news-card-long">
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
                  <h3 class="p-news-card-long__title">
                  <?php the_title(); //タイトルを表示 ?>
                  </h3>
                  <time class="p-news-card-long__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y/m/j'); ?></time>
                </div><!-- /.p-news-card-long__body -->
              </a>
            </article>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?> <!-- post_typeなどを強制的に上書きしているため初期化 -->
                      
          </div><!-- /.p-sub-news__aside-body -->
        </div><!-- /.p-sub-aside__body -->
        
        
        <div class="p-sub-aside__body">
          <h2 class="p-sub-aside__title">カテゴリ</h2><!-- /.p-sub-news__aside-title -->
          <ul class="p-sub-aside__categories">

          <?php
                // 親カテゴリーのものだけを一覧で取得
                $args = array(
                  'parent' => 0,
                  'orderby' => 'term_order',
                  'order' => 'ASC'
                );
                $categories = get_categories( $args );
              ?>

              <?php foreach( $categories as $category ) : ?>
                <li class="p-sub-aside__category">
                  <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
                </li>
              <?php endforeach; ?>

          </ul><!-- /.p-sub-aside__categories -->
        </div><!-- /.p-sub-aside__body -->
      </aside>
      
      
  </div><!-- /.p-sub-news__bodies -->
</section><!-- /.p-sub-news -->


</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>