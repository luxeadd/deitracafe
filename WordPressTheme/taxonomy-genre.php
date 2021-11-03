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

<section class="l-sub-menu p-sub-menu">
    <div class="p-sub-menu__head">
      <ul class="p-sub-menu__tabs">

      <?php
          $menu_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
          foreach ( $menu_terms as $menu_term ) :
        ?>

        <li class="p-sub-menu__tab c-btn-tab 
        <?php  //この部分から付与する
            $cat = get_queried_object(); //現在表示のタクソノミー情報を取得変数に格納
            $cat_name = $cat -> name;//その変数からnameのみ引出し、変数に格納
            if( $cat_name == esc_html( $menu_term->name )) {
            echo "is-genre-active"; }//表示中のnameとカテゴリnameが一致したらクラス付与
            ?>">
	          <a href="<?php echo esc_url( get_term_link( $menu_term, 'genre' ) ); ?>" class="c-btn-tab__link"><?php echo esc_html( $menu_term->name ); ?></a><!-- /.c-btn-base__link -->
        </li><!-- /.p-sub-menu__tab -->
        
        <?php
          endforeach;
          ?>

      </ul><!-- /.p-sub-menu__tabs -->
    </div><!-- /.p-sub-menu__head-->
    



     <div class="p-sub-menu__body">
     <div class="p-sub-menu__body-item  p-sub-menu-cards">

     <?php
     //記事があればentriesブロック以下を表示
     if ( have_posts() ) : ?>
        <?php
        //記事数ぶんループ
        while ( have_posts() ) :
        the_post(); ?>

    <article class="p-sub-menu-cards__item p-menu-card">
        <div class="p-menu-card__header">
          <figure class="p-menu-card__figure">
            <<?php
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
            <p class="p-menu-card__copy">
            <?php echo SCF::get( 'menuprice' );?>
            </p>
         </div><!-- /.p-menu-card__footer -->
    </article>

    <?php
      endwhile;
      ?>      
      <?php endif; ?>
  
  </div><!-- /.p-menu-cards -->
     </div><!-- /.p-sub-menu__body -->




</section><!-- /.p-sub-news -->


</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>