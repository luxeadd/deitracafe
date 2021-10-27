
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
	jQuery('.js-header').addClass('change-color'); }
	else {
	jQuery('.js-header').removeClass('change-color'); } 
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
});
