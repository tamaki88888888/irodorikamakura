<!-- これが本物なので -->
<style>
	

/* top page */

.top__wrapper{
	height: 100vh;
	width: 100%
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
	background:url('../../../wp-content/uploads/2020/07/kamakura-samurai-tour.jpg') no-repeat center ;
  position: absolute;
  width: 35%;
  left: 0px;
}

.top__wrapper--right {
	background:url('../../../wp-content/uploads/2020/07/irodori-yado.jpg') no-repeat center ;
	position:absolute;
  width: 35%;
  right: 0px;
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

.top__wrapper--hover-white{
	background: #070e6d38;
	transition: all 0.5s ease;
}

.top__wrapper--hover-white:hover{
	background: #b7b6b554;
}

.top__wrapper--hover-black{
	background: #c1bbae42;
	transition: all 0.5s ease;
}

.top__wrapper--hover-black:hover{
	background: #00000073;
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
    top: 29vh;
    width: 300px
}

/* マージン取り消し */

body {
	margin: 0;
}

</style>
<section class="top__wrapper">
 	<div class="top__wrapper top__wrapper--right">
		<div class="logo__wrapper logo__wrapper--hover-slidein">
			<div class="title__logo">ロゴ</div>
			<div class="title__text">体験予約</div>
		</div>
		<a href="<?php bloginfo('wpurl'); ?>/hotel-search/">
	 	 <div class="top__wrapper top__wrapper--hover-black">
 	 	 </div>
		</a>
	</div>

	<div class="top__wrapper top__wrapper--center">
		<div class="logo__wrapper logo__wrapper--center">
			<div class="title__logo"><img class="top__logo" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2020/07/irodori-logo_white.png"></div>
            <div class="title__text">&nbsp;irodori</div>
		</div>
		<div class="top__wrapper top__wrapper--hover-white">
 		</div>
	</div>

	<div class="top__wrapper top__wrapper--left">
	 	<div class="logo__wrapper logo__wrapper--hover-slidein">
	 	 	<div class="title__logo">ロゴ</div>
	 	 	<div class="title__text">宿泊予約</div>
	 	</div>
		<a href="<?php bloginfo('wpurl'); ?>/hotel-search/">
	 	 	<div class="top__wrapper top__wrapper--hover-black">
 			</div>
		</a>
	</div>
</section>



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





