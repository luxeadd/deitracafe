<?php get_header(); ?>
<main class="l-overflow">

<div class="p-sub-mv js-mv">
  <div class="p-sub-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-contact-pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
      <img src="<?php echo get_template_directory_uri( ) ?>/assets/img/sub/sub-mv-contact-sp.jpg" alt="コンセプトMV画像">
    </picture>
  </div><!-- /.p-sub-mv__img -->
 <div class="p-sub-mv__title">
   <h1 class="p-sub-mv__title-en">contact</h1><!-- /.p-sub-mv__title-en -->
   <p class="p-sub-mv__title-jp">お問い合わせ</p><!-- /.p-sub-mv__title-jp -->
 </div><!-- /.p-sub-mv__title -->
</div><!-- /.p-sub-mv -->

<div class="l-inner-m">

<?php get_template_part( 'template-parts/c-breadcrumbs' ); ?>

<section class="l-sub-contact p-sub-contact">
   <h2 class="p-sub-contact__title">お問い合わせフォーム</h2>
   <p class="p-sub-contact__text">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p><!-- /.p-sub-contact__text -->
     
   <div class="p-sub-contact__form">
   <?php echo do_shortcode(' [contact-form-7 id="127" title="コンタクトフォーム 1"]'); ?>
  

   </div><!-- /.p-sub-contact__form -->
</section><!-- /.p-sub-news -->


</div><!-- /.l-inner2 -->


<?php get_template_part( 'template-parts/p-access' ); ?>
</main>
<?php get_footer(); ?>