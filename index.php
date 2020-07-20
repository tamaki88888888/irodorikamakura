<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body>
	
<!-- これが本物なので -->
<style>
	

/* top page */

.top__wrapper{
	height: 100vh;
	width: 100%;
}

.top__wrapper--center{
	background:url('../../../wp-content/uploads/2020/07/denim.png') no-repeat center ;
	background-size: cover;
  position: absolute;
	margin: auto;
	right: 0px;
  left: 0px;
  width: 30%;
}

.top__wrapper--left {
  background:url('../../../wp-content/uploads/2020/07/irodori-yado.jpg') no-repeat center ;
  position: absolute;
  width: 35%;
  left: 0px;
  background-size: 100% 100%;
}

.top__wrapper--right {
	background:url('../../../wp-content/uploads/2020/07/kamakura-samurai-tour-1.jpg') no-repeat center ;
	position:absolute;
  width: 35%;
  right: 0px;
  background-size: 100% 100%;
}

.logo__wrapper{
  position: absolute;
  margin: auto;
  top: 40vh;
  right: 0px;
  left: 0px;
  width: 200px;
  text-align: center;
  color: white;
}

.container {
    width: 100%;
}

.top-bar .page-header {
  text-align: center;
}

.hotel-booking-search{
	width: 50%;
	margin: auto;
	border: 1px solid #e0e0e0;
	border-radius: 13px;
}

/* sidebar */
.sidebar{
    position: fixed;
    width: 100%;
    bottom: 0px;
}

.sidebar__bg{
	background: url('../../uploads/2020/05/paper.png');
	background-size: 50%;
	height: 50px;
	background-color: #f6e8c8;
}
.sidebar__wrapper{
    justify-content: center;
    display: flex;
}

.sidebar__a{
    color: #694325;
    text-decoration: none;
}

.category__name{
    font-size: 15px;
    font-family: Hiragino Mincho ProN;
    border-right: 1px solid #694325;
    margin: 14px;
    padding: 0px 10px;
}
.top__logo{
    width:  100%;
}

.logo__wrapper--center{
    top: 19vh;
    width: 100%;
}

/* マージン取り消し */

body {
	margin: 0;
}
.sidebar{
	display: none;
}
.title__text{
	position: absolute;
	margin: auto;
    left: 0;
    right: 0;
    top: 460px;
    text-align: center;
    z-index: 100;
    letter-spacing: 31px;
	color: white;
	transition: all 0.4s 0.3s ease;
	opacity: 0;
}
.title__scroll{
	position: absolute;
    margin: auto;
    left: 0;
    right: 0;
	bottom: -90px;
}

/*スクロールアニメーション*/
.logo__wrapper--center a {
  padding-top: 70px;
  color: #fff;
    font: normal 400 20px/1 'Josefin Sans', sans-serif;
    letter-spacing: .1em;
    text-decoration: none;
}
.logo__wrapper--center a span {
  position: absolute;
  bottom: -110px;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
  -webkit-animation: sdb06 1.5s infinite;
  animation: sdb06 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb06 {
  0% {
    -webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb06 {
  0% {
    transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}

.about__container{
	max-width: 800px;
	margin: auto;
	text-align: center;
	font-size: 10px;
	color: #717171;
}

.about__container--top p{
	margin: 2px;
}

.about__container--middle p{
	margin: 2px;
}

.about__container--bottom p{
	margin: 2px;
}

.about__container--bottom, .about__container--middle, .about__container--top{
	margin: 20px 0px;
}


/* 予約ボタン */
.booking-btn{
  background: #4c4cff;
  width: 100px;
  height: 100px;
  border-radius: 100px;
  box-shadow: 0 10px 25px 0 rgba(0, 0, 0, .5);
}
.booking-btn__text{
  color: white;
  font-size: 12px;
  text-align: center;
  padding-top:15px;
  margin-bottom: 0px;
}
.bed-img{
  width: 40px;
  margin: 0px 30px 10px;
}
.booking-btn__a{
	position: fixed;
    bottom: 60px;
    right: 60px;
}

@media screen and (min-width:700px) {
/*　PCサイズ-ここから　*/
.about__container{
	font-size: 15px;
	position: relative;
}
.about__container--top p {
    margin: 12px;
}
.about__container--middle p {
    margin: 12px;
}
.about__container--bottom p {
    margin: 12px;
}
.about__container--welcome p {
    top: 1260px;
    position: absolute;
    width: 700px;
    left: 0px;
    right: 0px;
    margin: auto;
}
.top__image{
    position: absolute;
    width: 500px;
    transform: translate3d(-483px, 470px, 0px);
}
.middle__image {
    position: absolute;
	width: 500px;
	transform: translate3d(-23px, 776px, 0px);
}
.bottom__image {
    top: 1381px;
    position: absolute;
    width: 700px;
    left: 0px;
    right: 0px;
    margin: auto;
}
.about__container--top{
    top: 100px;
    position: absolute;
    width: 700px;
    left: 0px;
    right: 0px;
    margin: auto;
}
.about__container--middle{
	position: absolute;
    width: 700px;
    transform: translate3d(-243px, 892px, 0px);
}
.about__container--bottom{
    position: absolute;
    width: 500px;
    transform: translate3d(457px, 377px, 0px);
}
.opening{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: black;
	top: 0;
    transition: all 3s 1s cubic-bezier(1, 0.04, 0.5, 0.91);
    opacity: 1;
}
.takano-voice {
    margin: auto;
    margin-top: 45vh;
	text-align: center;
	color: white;
	opacity: 0;
	transition: all 0.3s ease;
}

/*　PCサイズ-ここまで　*/
}


@media screen and (max-width:400px) {
/*　SPサイズ-限定　*/


.takano-voice{
	opacity: 1;
    font-size: 15px;
    letter-spacing: 8px;
    margin: 45vh 10px 0;
	line-height: 36px;
	margin: auto;
    width: 350px;
}
.top__wrapper--center {
    background: url(../../../wp-content/uploads/2020/07/kamakura-samurai-tour.png) no-repeat center;
    background-size: cover;
    position: absolute;
    margin: auto;
    right: 0px;
    left: 0px;
    width: 100%;
}
.top__wrapper--left {
    background: url(../../../wp-content/uploads/2020/07/irodori-yado.jpg) no-repeat center;
    display: none;
}
.booking-btn__a {
    position: fixed;
    bottom: 30px;
    right: 30px;
}
.hotel-booking-search {
	width: 100%;
	padding: 0px;
}

/*　SPサイズ-限定-ここまで　*/
}


</style>
<script>


function opening(){
	$(".takano-voice").css("opacity","1")
	$(".opening").css("opacity","0")
	$(".title__text").css("opacity","1")
}
function deleteLayer(){
	$(".opening").css("display","none")
}
window.onload = function(){
	opening()
}
setTimeout(deleteLayer, 4000);
</script>

<section class="top__wrapper">
 	<div class="top__wrapper top__wrapper--right">
		<div class="logo__wrapper">
			<div class="title__logo"></div>
			<div class="title__text"></div>
		</div>
		<a href="<?php bloginfo('wpurl'); ?>/hotel-search/">
	 	 <div class="top__wrapper">
 	 	 </div>
		</a>
	</div>

	<div class="top__wrapper top__wrapper--center">
		<div class="logo__wrapper logo__wrapper--center">
			<div class="title__logo"><img class="top__logo" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori-logo_white.png"></div>
			<div class="title__scorll"><a href="#section07"><span></span></a></div>
		</div>
		<div class="top__wrapper">
 		</div>
	</div>

	<div class="top__wrapper top__wrapper--left">
	 	<div class="logo__wrapper">
	 	 	<div class="title__logo"></div>
	 	 	<div class="title__text"></div>
	 	</div>
		<a href="<?php bloginfo('wpurl'); ?>/hotel-search/">
	 	 	<div class="top__wrapper">
 			</div>
		</a>
	</div>
</section>
<section class="about__wrapper">
	<div class="about__container">
		<div class="about__container--top">
			<p>鎌倉に新しい彩をもたらす宿</p>
			<p>武士がオーナーの不思議な宿</p>

			<p>2017年10月15日のオープンしたこの宿</p>
			<p>「彩」はカラフルという意味の下</p>
			<p>多種多様な人が旅人として行き交う場所になりました。</p>
		</div>
		<img class="top__image" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori3.jpg">
		<div class="about__container--middle">
			<p>全ての人に日本において、鎌倉において</p>
			<p>和の体験をしてほしい</p>
			<p>そう願うオーナーの気持ち</p>

			<p>旅において、障がい、病気のある人も関係なく楽しめる</p>
			<p>多種多様な人が旅人として行き交う場所になりました。</p>
		</div>
		<img class="middle__image" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori2.jpg">
		<div class="about__container--bottom">
			<p>このゲストハウスは築90年の小さな古民家</p>
			<p>数年前に亡くなったオーナーさんは図書館員で</p>
			<p>60年前にイギリスに</P>
			<p>図書館のシステムを勉強のため留学されました。</p>

			<p>クラウドファンディングでの支援によって</p>
			<p>最初は、"コストだけかかる"と言われた夢だったけれど、</p>
			<p>こんな小さい古民家ながら、大きな夢をもった皆さんが集う</p>
			<p>珍しい場所となりました</p>
		</div>
		<img class="bottom__image" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori1.jpg">
		<div class="about__container--welcome">
			<p>ようこそ、鎌倉、ようこそ、彩へ。</p>
		</div>
	</div>
	<a class="booking-btn__a" href="<?php bloginfo('wpurl'); ?>/hotel-search/">
		<div class="booking-btn">
  			<p class="booking-btn__text">予約する</p>
	  		<img class="bed-img"src="http://irodorikamakura.com/wp-content/uploads/2020/07/bed.png" alt="">
		</div>	
	</a>
</section>

<section class="opening">
	<h2 class="takano-voice">「すべての人が共創する世界は、バラエティでカラフルだ」</h2>
</section>
<div class="title__text">&nbsp;irodori</div>

<style>









</style>



<section class="sidebar">
	<div class="sidebar__bg">
		<div class="sidebar__wrapper">
			<a class="sidebar__a" href="#">
				<div class="category__box">
					<p class="category__name category__name--about">irodori とは</p>
				</div>
			</a>
		</div>			
	</div>
</section>



<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>

</body>