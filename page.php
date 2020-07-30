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
<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script>
$(function() {
  //$('input').attr("autocomplete", 'off');
});
</script>
<style>


</style>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0" nonce="Olsdcl7o"></script>

<header class="">
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
      <div class="message__title text-center">
	  <p>ご予約</p>
      </div>
      <div class="message__text">
        <p>ご予約は、お電話もしくはメールフォームより受け付けております。</p>
		<p>空き状況を確認いたしますので、宿泊予定日を入力ください。</p>
		<p>（前日・当日のご予約はお電話にてお願いします。）</p>
      </div>
    </section>
	<section class="booking">
		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
	</section>
    <section class="footer">
      <div class="booking-btn__wrapper">
        <p class="btn btn--footer">宿泊予約はこちら</p>
      </div>
      <div class="footer__info">
        <div class="footer__logo"><img src="http://irodorikamakura.com/wp-content/uploads/2020/07/irodori-logo_white.png" alt=""></div>
        <p class="footer__name">ゲストハウス彩（イロドリ）鎌倉</p>
        <p>〒248-0022</p>
        <p>神奈川県, 鎌倉市, 由比ガ浜2-4-23</p>
        <p>TEL&nbsp;0467-37-9471</p>
        <p>E-mail</p>
        <p>kamakuraguesthouse@gmail.com</p>
      </div>
    </section>
  </div>
</div>

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
</style>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

if( $sidebar_layout == 'right-sidebar' ) 
get_sidebar(); 
get_footer();
