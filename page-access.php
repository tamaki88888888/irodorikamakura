
<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
        endif;

        $text1 = get_field('text1');
        $img1 = get_field('img1');
        $title1 = get_field('title1');
        $img2 = get_field('img2');
        $img3 = get_field('img3');

        $img4 = get_field('img4');
        $text2 = get_field('text2');

	endwhile; // End of the loop.
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>アクセス | 【ゲストハウス 彩(イロドリ)鎌倉】囲炉裏のある小さなお宿</title>
<meta name="description" content="アクセス ｜ 囲炉裏のある小さなお宿【ゲストハウス 彩(イロドリ)鎌倉】1泊3,500円。大きな囲炉裏とふっかふかのお布団。旅の宴を楽しんだり、縁側でひとり時間を楽しんだり。どうぞゆるりお過ごしください。" />
<meta name="Keywords" content="鎌倉,ゲストハウス,安宿,神奈川,湘南,kamakura,guesthouse,素泊まり,囲炉裏,ライダーハウス,チャリダー" />
<link rel="Shortcut Icon" type="image/x-icon" href="https://kamakura-guesthouse.com/img/favicon.png" />
<!--OGP開始-->
<meta property="fb:admins" content="" />
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="アクセス | 【ゲストハウス 彩(イロドリ)鎌倉】囲炉裏のある小さなお宿">
<meta property="og:url" content="https://kamakura-guesthouse.com/access/">
<meta property="og:site_name" content="【ゲストハウス 彩(イロドリ)鎌倉】囲炉裏のある小さなお宿">
<meta name="og:description" content="アクセス ｜ 囲炉裏のある小さなお宿【ゲストハウス 彩(イロドリ)鎌倉】1泊3,500円。大きな囲炉裏とふっかふかのお布団。旅の宴を楽しんだり、縁側でひとり時間を楽しんだり。どうぞゆるりお過ごしください。" />
<meta property="og:image" content="https://kamakura-guesthouse.com/img/ogp.jpg">
<!--OGP完了-->
<link rel='dns-prefetch' href='//s.w.org' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/kamakura-guesthouse.com\/wp\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.15"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7300433-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7300433-2');
</script>

</head>
<body class="page-template-default page page-id-16 page-access">
<div class="page_wrap">

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
<p>language</p>
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
<div class="sub_mv access">
<h1>アクセス</h1>
</div>
<div class="pan">
<ul>
<li><a href="https://kamakura-guesthouse.com/">ホーム</a></li>
<li>アクセス</li>
</ul>
</div>

<main class="main_contents access">
<p class="main_copy">ACCESS</p>
<p class="main_lead"><?php echo $text1 ?></p>

<p class="around_map">
    <?php if( $img1 ): ?>
        <img src="<?php echo $img1; ?>" alt="" width="720" height="">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/access/around_map.jpg" alt="" width="720" height="">
    <?php endif; ?>
</p>

<section class="map">
<h2 class="sec_ttl"><?php echo $title1 ?></h2>
<div class="area_map">
<?php if( $img2 ): ?>
        <img src="<?php echo $img2; ?>" alt="" width="862" height="439" class="onlyPC">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/access/map.png" alt="" width="862" height="439" class="onlyPC">
    <?php endif; ?>
    <?php if( $img3 ): ?>
        <img src="<?php echo $img3; ?>" alt="" width="720" height="">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/access/around_map.jpg" alt="" width="720" height="">
    <?php endif; ?>
</section>

<section class="transports">
<h2 class="sec_ttl">公共交通機関でお越しの方</h2>
<p class="sec_lead">ご利用になる駅をお選びください。</p>
<ul class="select_station">
<li><a href="#kamakura">鎌倉駅</a></li>
<li><a href="#ofuna">大船駅</a></li>
<li><a href="#fujisawa">藤沢駅</a></li>
<li><a href="#enoshima">江ノ島</a></li>
<li><a href="#daibutsu">大仏・長谷寺</a></li>
</ul>
<h3 id="kamakura">鎌倉駅</h3>
<p class="txt">鎌倉駅からはバスがご利用いただけます。</p>
<div class="way">
<h4 class="bus">バス</h4>
<div class="way_table">
<div class="in">
<p>東出口：1番バス乗り場</p>
<p><strong>江ノ電バス：藤沢行き/桔梗山行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>バス停：梶原口</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで2分。</p>
</div>
</div>
</div>

<h3 id="ofuna">大船駅</h3>
<p class="txt">大船駅からは湘南モノレールとバスがご利用いただけます。</p>
<div class="way">
<h4 class="bus">バス</h4>
<div class="way_table">
<div class="in">
<p>東出口：東口交通広場から3番バス乗り場</p>
<p><strong>鎌倉行き/梶原行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>バス停：梶原口</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで2分。</p>
</div>
</div>

<h4 class="mono">湘南モノレール</h4>
<div class="way_table">
<div class="in">
<p><strong>湘南モノレール：江ノ島行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>湘南深沢駅</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで徒歩9分。</p>
</div>
</div>
</div>


<h3 id="fujisawa">藤沢駅</h3>
<p class="txt">藤沢駅からはバスがご利用いただけます。</p>
<div class="way">
<h4 class="bus">バス</h4>
<div class="way_table">
<div class="in">
<p>南口：南口ターミナルから1番バス乗り場</p>
<p><strong>江ノ電バス：藤沢行き/桔梗山行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>バス停：梶原口</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで2分。</p>
</div>
</div>
</div>


<h3 id="enoshima">江ノ島駅</h3>
<p class="txt">江ノ島駅からは湘南モノレールがご利用いただけます。</p>
<div class="way">
<h4 class="mono">湘南モノレール</h4>
<div class="way_table">
<div class="in">
<p><strong>湘南モノレール：大船行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>湘南深沢駅</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで徒歩9分。</p>
</div>
</div>
</div>


<h3 id="daibutsu">長谷寺・大仏を見てから…</h3>
<p class="txt">長谷観音／大仏前のバス停からバスがご利用いただけます</p>
<div class="way">
<h4 class="bus">バス</h4>
<div class="way_table">
<div class="in">
<p><strong>江ノ電バス：藤沢行き</strong>または<br><strong>湘南京急：大船行き</strong>に乗車</p>
</div>
<div class="out">
<P><strong>バス停：梶原口</strong>下車。</P>
<p>ゲストハウス 彩(イロドリ)鎌倉まで2分。</p>
</div>
</div>
</div>

</section>


<div class="col2">
<div class="colL">
<p class="img"><img src="<?php echo $img4; ?>" alt="" width="490" height="327"></p>
</div>
<div class="colR gaikan_txt">
<?php echo $text2; ?>
</div>

<div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23120.30103105794!2d139.50875334312323!3d35.325364739721785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184f7ed37731c7%3A0x69a9f3771d8af403!2z44CSMjQ4LTAwMjIg56We5aWI5bed55yM6Y6M5YCJ5biC5bi455uk77yS77yX77yT4oiS77yT!5e0!3m2!1sja!2sjp!4v1542876347498" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<p class="btn"><a href="https://goo.gl/maps/T3E4zueqLck" target="_blank">GoogleMapで見る<span class="arrow_w"></span></a></p>
</div>

</main>
<div class="freserve">
<p class="ttl"><img src="https://kamakura-guesthouse.com/img/common/fcopy.svg" alt="どうぞゆるりと" width="202" height="32"></p>
<p class="btn nohover"><a href="/booking">宿泊予約はこちら<span class="arrow_w"></span></a></p>
</div>
<footer class="wrap_footer">
<div class="footer">
<div class="fcnt">
<p class="flogo"><img src="https://kamakura-guesthouse.com/img/common/hlogo.png" alt="" width="286" height="72"></p>
<p class="fname"><img src="https://kamakura-guesthouse.com/img/common/flogo.svg" alt="" width="187" height="26"></p>
<p class="faddress">〒248-0022　<br class="pcn">神奈川県鎌倉市常盤273-3<br>
TEL 0467-37-9471<br>
E-mail　<br class="pcn"><a href="mailto:irodorikamakura@gmail.com">irodorikamakura@gmail.com</a></p>
</div>
<ul class="faward">
<li><img src="https://kamakura-guesthouse.com/img/common/tripadvisor.jpg" alt="" width="264" height="198"></li>
<li><img src="https://kamakura-guesthouse.com/img/common/booking.jpg" alt="" width="396" height="198"></li>
<li><img src="https://kamakura-guesthouse.com/img/common/agoda.jpg" alt="" width="131" height="198"></li>
</ul>
</div>
<p class="copyright">© guesthouse irodori  kamakura.</p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/slick.min.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/lightbox.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/base.js"></script>
<script>
$(function(){
    var $setElm = $('.slide_img'),
    fadeSpeed = 2500,
    switchDelay = 5000;
 
    $setElm.each(function(){
        var targetObj = $(this);
        var findUl = targetObj.find('ul');
        var findLi = targetObj.find('li');
        var findLiFirst = targetObj.find('li:first');
 
        findLi.css({display:'block',opacity:'0',zIndex:'99'});
        findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);
 
        setInterval(function(){
            findUl.find('li:first-child').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(findUl).css({zIndex:'99'});
        },switchDelay);
    });
});
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/kamakura-guesthouse.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://kamakura-guesthouse.com/wp/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1'></script>
<script type='text/javascript' src='https://kamakura-guesthouse.com/wp/wp-includes/js/wp-embed.min.js?ver=4.9.15'></script>
</body>
</html>
