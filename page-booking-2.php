<link rel='stylesheet' id='contact-form-7-css'  href='https://kamakura-guesthouse.com/wp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1' type='text/css' media='all' />
<script type='text/javascript' src='https://kamakura-guesthouse.com/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://kamakura-guesthouse.com/wp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://kamakura-guesthouse.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://kamakura-guesthouse.com/wp/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://kamakura-guesthouse.com/wp/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.15" />
<link rel="canonical" href="https://kamakura-guesthouse.com/access/" />
<link rel='shortlink' href='https://kamakura-guesthouse.com/?p=16' />
<link rel="alternate" type="application/json+oembed" href="https://kamakura-guesthouse.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkamakura-guesthouse.com%2Faccess%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://kamakura-guesthouse.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkamakura-guesthouse.com%2Faccess%2F&#038;format=xml" />
<link rel="stylesheet" href="https://kamakura-guesthouse.com/css/style.css?20200224" />
<link rel="stylesheet" href="https://kamakura-guesthouse.com/css/lightbox.css" />
<link rel="stylesheet" type="text/css" href="https://kamakura-guesthouse.com/css/slick.css"/>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://kamakura-guesthouse.com/wp/wp-content/themes/kamakuraguesthouse/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

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




<div class="page-border">
  <div class="page-wrapper">
  <header class="header">
<p class="hlogo"><a href="https://kamakura-guesthouse.com/"><img src="https://kamakura-guesthouse.com/img/common/hlogo.png" alt="囲炉裏のある小さなお宿　ゲストハウス 彩(イロドリ)鎌倉" width="255" height="72"></a></p>	

<nav>
<p class="spreserve_btn"><a href="https://kamakura-guesthouse.com/booking"><span>BOOKING</span>宿泊予約</a></p>
<p class="hnavi_btn"><span class="menu-button"><i></i></span></p>
<div class="gnavi">
<ul>
<li><a href="/"><img src="https://kamakura-guesthouse.com/img/common/gnavi00.svg" alt="ホーム" width="55" height="14"></a></li>
<li><a href="/stay"><img src="https://kamakura-guesthouse.com/img/common/gnavi01.svg" alt="宿泊案内" width="77" height="18"></a></li>
<li><a href="/facility"><img src="https://kamakura-guesthouse.com/img/common/gnavi02.svg" alt="施設案内" width="77" height="18"></a></li>
<li><a href="/access"><img src="https://kamakura-guesthouse.com/img/common/gnavi03.svg" alt="アクセス" width="69" height="15"></a></li>
<li><a href="/booking-2"><img src="https://kamakura-guesthouse.com/img/common/gnavi04.svg" alt="ご予約" width="53" height="18"></a></li>
</ul>
<div class="select_lang">
<p style="display: none;">language</p>
<ul>
<li><a href="https://kamakura-guesthouse.com/">JPN</a></li>
<li><a href="https://kamakura-guesthouse.com/en">ENG</a></li>
<li><a href="https://kamakura-guesthouse.com/fr">FRA</a></li>
<li><a href="https://kamakura-guesthouse.com/tw">TWN</a></li>
</ul>
</div>
</div>
</nav>
</header>


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

<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script> 

  <script src="/wp-content/themes/mugu/js/main.js"></script>