<?php get_header(); ?>

<div class="l-top-mv p-top-mv">
  <div class="p-top-mv__img">
  <picture>
    <source srcset="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-pc1.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/mv-sp1.jpg" alt="MV画像">
</picture>
  </div><!-- /.p-top-mv__img -->
</div><!-- /.l-top-mv p-top-mv -->

<?php get_footer(); ?>