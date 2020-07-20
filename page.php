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
/* フッター */

.site-header{
	display: none;
}

.content__background{
	width: 100%;
	height: 100vh;
    position: fixed;
	top: 0;
}

.site-footer .site-info {
	position: absolute;
	bottom : 0;
    padding: 28px 0;
    text-align: center;
    font-size: 15px;
    height: 30px;
    width: 100%;
}

.entry-footer{
	display: none;
}

/* 入力フォーム */
.hotel-booking-search {
    width: 50%;
    margin: auto;
    border: none;
    border-radius: 5px;
	background: #ffffff63;
	padding: 40px;
}


label{
	margin: 3px;
}

/* チェックアウト */
#secondary{
	display: none;
}
.content-area{
	margin: auto;
}
@media screen and (max-width:400px) {
/*　SPサイズ-限定　*/
.hotel-booking-search {
	width: 100%;
	padding: 30px;
}
.woocommerce-page img {
    height: 100vh;
    max-width: 100%;
}
.woocommerce {
    background: #ffffff85;
	padding: 10px;
}
.site-footer .site-info {
    display: none;
}
#payment ul.payment_methods li img {
    width: 38px;
    height: 24px;
}
/*　SPサイズ-限定-ここまで　*/
}

</style>
	<img class="content__background" src="http://localhost:8888/wp-content/uploads/2020/07/cork-scaled.jpg" alt="">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

if( $sidebar_layout == 'right-sidebar' ) 
get_sidebar(); 
get_footer();
