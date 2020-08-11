<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,  initial-scale=1, minimum-scale=0.5, maximum-scale=2">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<?php wp_head(); ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mugu
 */


$sidebar_layout = mugu_sidebar_layout();

get_header(); ?>

</head>

<body>
    <!-- Ready to use Font Awesome. Activate interlock. Dynotherms - connected. Infracells - up. Icons are go! -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0" nonce="Olsdcl7o"></script>

<header class="pc-none">
  <div class="header__logo"><img class="header__img" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori-logo_white.png"></div>
  <div class="header__toggle">
  <p class="menu-trigger">
      <span></span>
      <span></span>
      <span></span>
    </p>
  </div>
  <div class="header__booking">
    <p class="header__text">BOOKING</p>
    <p class="header__text">宿泊予約</p>
  </div>
</header>
<header class="pc-header sp-none">
<div class="header-box"><img class="header__img" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori-logo_white.png"></div>
  <div class="pc-flex">
    <a href="/"><p class="text-nav">ホーム</p></a>
    <a href="/stay"><p class="text-nav">宿泊案内</p></a>
    <a href="/facility"><p class="text-nav">施設案内</p></a>
    <a href="/access"><p class="text-nav">アクセス</p></a>
    <a href="/hotel-search"><p class="text-nav">ご予約</p></a>
  </div>
</header>

<div class="nav">
  <div class="nav__cell"></div>
  <div class="nav__cell"></div>
  <div class="nav__cell"></div>
  <div class="nav__cell"></div>
</div>

<div class="page-border">
  <div class="page-wrapper">
    <section class="stay__top">
      <div class="stay__topkv">
        <p class="stay__title">ご予約</p>
      </div>
    </section>
    <section class="message">
      <div class="message__text">
        <p>請求先及び、個人情報の入力をお願いいたします。</p>
      </div>
      <div class="booking page-border booking-wide">
	    	<?php
	    			while ( have_posts() ) : the_post();

	    				get_template_part( 'template-parts/content', 'page' );

	    				// If comments are open or we have at least one comment, load up the comment template.
	    				if ( comments_open() || get_comments_number() ) :
	    					comments_template();
	    				endif;

	    			endwhile; // End of the loop.
	    	?>
      </div>
    </section>
    <section class="footer">
      <div class="booking-btn__wrapper">
        <a href="/hotel-search" class="deco-none"><p class="btn btn--footer">宿泊予約はこちら</p></a>
      </div>
      <div class="footer__info">
        <div class="footer__logo"><img src="http://irodorikamakura.com/wp-content/uploads/2020/07/irodori-logo_white.png" alt=""></div>
        <p class="footer__name">ゲストハウス彩（イロドリ）鎌倉</p>
        <p>〒248-0014</p>
        <p>神奈川県, 鎌倉市, 由比ガ浜2-4-23</p>
        <p>TEL&nbsp;0467-37-9471</p>
        <p>E-mail</p>
        <p>irodorikamakura@gmail.com</p>
      </div>
    </section>
  </div>
</div>

<!-- これが本物なので -->
<style>
#masthead{
	display: none;
}
.top-bar{
	display: none;
}
.site-footer{
	display: none;
}
.hb_input_field {
  width: 100%;
}
#hotel-booking-results > h3 {
  font-size: 20px;
  text-align:center;
}
.hb-room-info{
  background: #ffffff;
  padding: 30px;
}
#hotel-booking-results .hb-search-results > .hb-room .hb-room-name {
  font-size: 20px;
  margin-bottom: 15px;
}
.hb-room-meta li{
  margin-bottom: 10px;
}
.hb_view_price{
  display: none;
}
.woocommerce img, .woocommerce-page img {
    height: auto;
    max-width: 100%;
    width: auto;
}
.cart-subtotal{
  display: none;
}
.woocommerce img, .woocommerce-page .header__img {
  height: 100%;
  width: auto;
}
.product-name strong{
  display: none;
}




@media (max-width: 780px){}
  #hotel-booking-results .hb-search-results > .hb-room .hb-room-info {
    background: #ffffff;
    padding: 30px;
  }
}
</style>

  <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script> 

  <script src="/wp-content/themes/mugu/js/main.js"></script>
</body>
