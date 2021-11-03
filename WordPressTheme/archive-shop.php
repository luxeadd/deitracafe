<?php get_header(); ?>
<main class="l-overflow">

<div class="p-sub-mv js-mv">
  <div class="p-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-shop-pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-shop-sp.jpg" alt="コンセプトMV画像">
    </picture>
  </div><!-- /.p-sub-mv__img -->
 <div class="p-sub-mv__title">
   <h1 class="p-sub-mv__title-en">shop</h1><!-- /.p-sub-mv__title-en -->
   <p class="p-sub-mv__title-jp">店舗一覧</p><!-- /.p-sub-mv__title-jp -->
 </div><!-- /.p-sub-mv__title -->
</div><!-- /.p-sub-mv -->

<div class="l-inner-m">

<?php get_template_part( 'template-parts/c-breadcrumbs' ); ?>



<section class="l-sub-shop p-sub-shop">
     <?php
  $args = [
    'post_type' => 'shop', // カスタム投稿名が「」の場合
    'posts_per_page' => 99, // 表示する数
		  ];
	  $my_query = new WP_Query($args); ?>

		<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
	  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <div class="p-sub-shop__item p-map">
    <h2 class="p-map__title"><?php the_title(); //タイトルを表示 ?></h2><!-- /.p-map__title -->
  <div class="p-map__iframe">
  <?php $newsTextSub = scf::get('map'); echo nl2br( $newsTextSub ); ?>
  </div><!-- /.p-map_iframe -->
  <div class="p-map__body">

    <dl class="p-map__explain">
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">住所</dt>
        <dd class="p-map__explain__description"><?php $newsTextSub = scf::get('address'); echo nl2br( $newsTextSub ); ?></dd>
      </div>
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">TEL</dt>
        <dd class="p-map__explain__description"><?php echo SCF::get( 'tel' );?></dd>
      </div>
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">Mail</dt>
        <dd class="p-map__explain__description"><?php echo SCF::get( 'mail' );?></dd>       
      </div>
    </dl>
    <dl class="p-map__explain">
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">営業時間</dt>
        <dd class="p-map__explain__description"><?php $newsTextSub = scf::get('open'); echo nl2br( $newsTextSub ); ?></dd>
      </div>
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">定休日</dt>
        <dd class="p-map__explain__description"><?php echo SCF::get( 'closed' );?></dd>
      </div>
      <div class="p-map__explain__block">
        <dt class="p-map__explain__header">座席</dt>
        <dd class="p-map__explain__description"><?php echo SCF::get( 'sheet' );?></dd>
      </div>
    </dl>
  </div><!-- /.p-map__body -->
  </div><!-- /.p-map -->

   

    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
  
   

</section><!-- /.p-sub-news -->


</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>