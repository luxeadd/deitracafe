
jQuery(function ($) {

//ハンバーガーメニュー---------------
const jsHamburger = document.getElementById('js-hamburger');
const body = document.body;
const spHeaderMenu = document.getElementById('js-drawer-menu')
const drawerBackground = document.getElementById('js-header__overlay')
const drawerMenuItem = document.getElementById('js-drawer-menu__item')

//ハンバーガーメニュークリックアクション
jsHamburger.addEventListener('click', function() {
	body.classList.toggle('is-drawerActive')
	if (this.getAttribute('aria-expanded') == 'false') {
		this.setAttribute('aria-expanded', 'true');
		spHeaderMenu.setAttribute('area-hidden','false')
	} else {
		this.setAttribute('aria-expanded', 'false')
		spHeaderMenu.setAttribute('area-hidden','true')
	};
});
//ドラワーメニュー展開時背景クリックアクション
drawerBackground.addEventListener('click', () => {
	body.classList.remove('is-drawerActive')
	jsHamburger.setAttribute('aria-expanded', 'false')
	spHeaderMenu.setAttribute('area-hidden','true')
});
//ドラワーメニュー展開時リストクリックアクション
drawerMenuItem.addEventListener('click', () => {
	body.classList.remove('is-drawerActive')
	jsHamburger.setAttribute('aria-expanded', 'false')
	spHeaderMenu.setAttribute('area-hidden','true')
});


//スティッキーヘッダー=======================
//スクロールしたらheaderの色を変える
//headerにchange-colorクラスをつけ色を指定
jQuery(window).on('scroll', function () {
	var MV =  jQuery(".js-mv").innerHeight(); //headerの高さ取得 
	if (  MV <  jQuery(this).scrollTop()) { 
	jQuery('.p-header__drawer-top').addClass('display'); }
	else {
	jQuery('.p-header__drawer-top').removeClass('display'); } 
	});

jQuery(window).on('scroll', function () {

	if (  5 <  jQuery(this).scrollTop()) { 
	jQuery('.p-header__logo-top').addClass('logo-none'); }
	else {
	jQuery('.p-header__logo-top').removeClass('logo-none'); } 
	});


// ローディング判定
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});

var topBtn = $('#js-page-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });


	//swiper
	let slider1 = new Swiper ('.slider1', {
		//自動スライド
				autoplay: {
					delay: 2000,
				},
		 //切り替えエフェクトの指定
			//slide  fade  cube coverflow  flip
			effect: "fade",
		 
			//切り替わる速さ
			speed: 4000,
			
			//ループの有無
			loop: true,
		
			// If we need pagination
			pagination: {
			 el: '.swiper-pagination',
				clickable : true,
			 },
			
			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			 },
			// And if we need scrollbar
			// scrollbar: {
			// el: '.swiper-scrollbar',
			// },
		
		//ビューごとのスライド
		 // speed: 600,
			//loopedSlides: 6,
			//sp
			//spaceBetween: 24,
			//width: 274,
			//pc,tab
			//breakpoints: {
				//768: {
					//spaceBetween: 40,
					//width: 400,
				//}
		 //}
 });
 let slider2 = new Swiper ('.slider2', {
		//各種設定
 
 });
 let slider3 = new Swiper ('.slider3', {
		//各種設定
 
 });
 let slider4 = new Swiper ('.slider4', {
		//各種設定
 
 });


//スクロールして表示したらアニメーション開始
 let targets = document.querySelectorAll('.js-scrollAnimation');//アニメーションさせたい要素
let offset = 100;//アニメーションタイミング

window.addEventListener('scroll', function() {//スクロールしたとき

  var scroll = window.scrollY;//スクロール量を取得
  var h = window.innerHeight;//画面の高さを取得

  for(let target of targets) {
    var pos = target.getBoundingClientRect().top + scroll;//アニメーションさせたい要素の位置を取得
    if (scroll > pos - h + offset) {//スクロール量 > アニメーションさせたい要素の位置
      target.classList.add('is-animated');
    }
  }

});



//ローディングアニメーション制御
setTimeout(function() {
	$('.loader-wrap').fadeOut();
}, 1000);


});
