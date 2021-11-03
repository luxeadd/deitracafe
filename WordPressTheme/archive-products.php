<?php get_header(); ?>
<main class="l-overflow">

<div class="p-sub-mv js-mv">
  <div class="p-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-gift-pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-gift-sp.jpg" alt="コンセプトMV画像">
    </picture>
  </div><!-- /.p-sub-mv__img -->
 <div class="p-sub-mv__title">
   <h1 class="p-sub-mv__title-en">gift</h1><!-- /.p-sub-mv__title-en -->
   <p class="p-sub-mv__title-jp">ギフト・贈り物</p><!-- /.p-sub-mv__title-jp -->
 </div><!-- /.p-sub-mv__title -->
</div><!-- /.p-sub-mv -->

<div class="l-inner-m">

<?php get_template_part( 'template-parts/c-breadcrumbs' ); ?>

<section class="l-sub-products p-sub-products">

     <div class="p-sub-products__body">
     <div class="p-sub-products__body-item  p-products-cards">

     <?php
  $args = [
    'post_type' => 'products', // カスタム投稿名が「」の場合
    'posts_per_page' => 30, // 表示する数
		  ];
	  $my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
	  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


    <article class="p-products-cards__item p-products-card">
        <div class="p-products-card__header">
          <figure class="p-products-card__figure">
            <<?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば大サイズで表示
                  the_post_thumbnail('large');
                  } 
                  ?>
          </figure>
        </div><!-- /.p-products-card__header -->
        <div class="p-products-card__body">
          <h3 class="p-products-card__title"><?php the_title(); //タイトルを表示 ?></h3>
        </div><!-- /.p-products-card__body -->
          <div class="p-products-card__footer">
            <p class="p-products-card__copy">
            <?php echo SCF::get( 'giftprice' );?>
            </p>
            <div class="p-products-card__btn c-btn-check">
              <a href="" class="c-btn-check__link">ショップで確認する</a><!-- /.c-btn-base__link -->
            </div>
         </div><!-- /.p-products-card__footer -->
    </article>

    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
  </div><!-- /.p-products-cards -->

<div class="p-sub-products__bottom">
     <div class="p-sub-products__bottom-item">
       <div class="p-sub-products__bottom-text-box">
         <div class="p-sub-products__bottom-title">
         ラッピングは無料でお付けいたします。<br class="pc-only"> お気軽にご相談ください。
         </div><!-- /.p-sub-products__bottom-title -->
         <div class="p-sub-products__bottom-text">
         テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。
         </div><!-- /.p-sub-products__bottom-text -->
       </div><!-- /.p-sub-products__bottom-text-box -->
       <div class="p-sub-products__bottom-img">
         <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/wrapping.jpg" alt="ラッピング画像">
       </div><!-- /.p-sub-products__bottom-img -->
     </div><!-- /.p-sub-products__bottom-item -->
</div><!-- /.p-products__bottom -->

     </div><!-- /.p-sub-products__body -->


</section><!-- /.p-sub-news -->


</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>