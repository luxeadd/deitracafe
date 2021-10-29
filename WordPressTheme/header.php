<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Damion&family=Noto+Serif+JP:wght@500;700&family=Patua+One&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo c-logo-w js-header">
        <a href="">  
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/logo_light.svg" alt="ロゴ">
        </a>
      </h1><!-- /.p-header__logo -->
      
      
      <!-- ドロワーアイコン  -->
      <button type="button" id="js-hamburger" class="p-header__drawer c-hamburger" aria-controls="js-drawer-menu" aria-expanded="false" area-label="メニューを開閉する">
        <span class="c-hamburger__line"></span>
      </button>

      <!-- ドロワーメニュー -->
      <div class=" p-header__drawer-menu  p-drawer-menu" id="js-drawer-menu" area-hidden="true">
        <div class="p-drawer-menu__logo c-logo-w">
          <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/logo_light.svg" alt="ロゴ">
        </div><!-- /.p-drawer-menu__logo -->
        <ul class="p-drawer-menu__items">
          <li id="js-drawer-menu__item" class="p-drawer-menu__item  "><a href="">top <span class="p-drawer-menu__span">トップ</span> </a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">concept <span class="p-drawer-menu__span" >コンセプト</span></a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">menu <span class="p-drawer-menu__span" >メニュー</span></a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">news <span class="p-drawer-menu__span" >お知らせ</span></a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">shop<span class="p-drawer-menu__span" >店舗情報</span></a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">gift <span class="p-drawer-menu__span" >ギフト・贈り物</span></a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="">contact<span class="p-drawer-menu__span" >お問い合わせ</span></a></li>
        </ul>

        <ul class="p-drawer-menu__icons">
           <li class="p-drawer-menu__icon">
             <a href="">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_twitter-light.svg" alt="twitterアイコン">
           </a>
          </li><!-- /.p-drawer-menu__icon -->
           <li class="p-drawer-menu__icon">
             <a href="">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_instagram-light.svg" alt="instagramアイコン">
           </a>
          </li><!-- /.p-drawer-menu__icon -->
           <li class="p-drawer-menu__icon">
             <a href="">
             <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/top/icon_youtube-light.svg" alt="youtubeアイコン">
           </a>
          </li><!-- /.p-drawer-menu__icon -->
        </ul><!-- /.p-drawer-menu__icons -->
      </div><!-- /.sheader-menu -->
      
      <!-- ドロワーメニュー展開時背景 -->
      <div class="p-header__overlay" id="js-header__overlay"></div>
      
      
    </div><!-- /.p-header__inner -->
    </header>