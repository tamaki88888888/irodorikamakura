
<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
        endif;
        $news1url = get_field('news1-url');
        $news1name = get_field('news1-name');
        $news2url = get_field('news2-url');
        $news2name = get_field('news2-name');

        $title1 = get_field('title1');
        $text1 = get_field('text1');
        $img1 = get_field('img1');

        $title2 = get_field('title2');

        $title3 = get_field('title3');
        $text2 = get_field('text2');
        $img2 = get_field('img2');
        $img3 = get_field('img3');

        $title4 = get_field('title4');
        $img4 = get_field('img4');
        $img5 = get_field('img5');
        $text3 = get_field('text3');

        $title5 = get_field('title5');
        $img6 = get_field('img6');
        $img7 = get_field('img7');
        $text4 = get_field('text4');

        $text5 = get_field('text5');

	endwhile; // End of the loop.
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>【鎌倉ゲストハウス】囲炉裏のある小さなお宿</title>
<meta name="description" content="囲炉裏のある小さなお宿【鎌倉ゲストハウス】1泊3,500円。大きな囲炉裏とふっかふかのお布団。旅の宴を楽しんだり、縁側でひとり時間を楽しんだり。どうぞゆるりお過ごしください。" />
<meta name="Keywords" content="鎌倉,ゲストハウス,安宿,神奈川,湘南,kamakura,guesthouse,素泊まり,囲炉裏,ライダーハウス,チャリダー" />
<link rel="Shortcut Icon" type="image/x-icon" href="https://kamakura-guesthouse.com/img/favicon.png" />
<!--OGP開始-->
<meta property="fb:admins" content="" />
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="【鎌倉ゲストハウス】囲炉裏のある小さなお宿">
<meta property="og:url" content="https://kamakura-guesthouse.com/">
<meta property="og:site_name" content="【鎌倉ゲストハウス】囲炉裏のある小さなお宿">
<meta name="og:description" content="囲炉裏のある小さなお宿【鎌倉ゲストハウス】1泊3,500円。大きな囲炉裏とふっかふかのお布団。旅の宴を楽しんだり、縁側でひとり時間を楽しんだり。どうぞゆるりお過ごしください。" />
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
<link rel="canonical" href="https://kamakura-guesthouse.com/" />
<link rel='shortlink' href='https://kamakura-guesthouse.com/' />
<link rel="alternate" type="application/json+oembed" href="https://kamakura-guesthouse.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkamakura-guesthouse.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://kamakura-guesthouse.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkamakura-guesthouse.com%2F&#038;format=xml" />
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
<body class="top"
>
<div class="page_wrap">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=1726905147603949&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="wrap_top_header">
<header class="header">
<h1 class="hlogo"><img src="https://kamakura-guesthouse.com/img/common/hlogo.png" alt="囲炉裏のある小さなお宿　鎌倉ゲストハウス" width="255" height="72"></h1>

<nav>
<p class="spreserve_btn"><a href="https://kamakura-guesthouse.com/booking"><span>BOOKING</span>宿泊予約</a></p>
<p class="hnavi_btn"><span class="menu-button"><i></i></span></p>
<div class="gnavi">
<ul>
<li><a href="https://kamakura-guesthouse.com/"><img src="https://kamakura-guesthouse.com/img/common/gnavi00.svg" alt="ホーム" width="55" height="14"></a></li>
<li><a href="https://kamakura-guesthouse.com/stay"><img src="https://kamakura-guesthouse.com/img/common/gnavi01.svg" alt="宿泊案内" width="77" height="18"></a></li>
<li><a href="https://kamakura-guesthouse.com/facility"><img src="https://kamakura-guesthouse.com/img/common/gnavi02.svg" alt="施設案内" width="77" height="18"></a></li>
<li><a href="https://kamakura-guesthouse.com/access"><img src="https://kamakura-guesthouse.com/img/common/gnavi03.svg" alt="アクセス" width="69" height="15"></a></li>
<li><a href="https://kamakura-guesthouse.com/booking"><img src="https://kamakura-guesthouse.com/img/common/gnavi04.svg" alt="ご予約" width="53" height="18"></a></li>
</ul>
<div class="select_lang">
<p>language</p>
<ul>
<li><a href="/">JPN</a></li>
<li><a href="/en">ENG</a></li>
</ul>
</div>
</div>
</nav>
</header>
</div>
<div class="top_mv">
<div id="youtube">
</div>
<ul id="slide_wrapp">
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
<li class="slide_item"></li>
</ul>
</div>
<div class="top_info">
<div class="info_cnt">
<p class="ttl"><a href="https://kamakura-guesthouse.com/info"><img src="https://kamakura-guesthouse.com/img/top/info_ttl.svg" alt="お知らせ" width="66" height="16"></a></p>
<ul class="cnt">
<li><span class="date"></span><span><a href="<?php $news1url ?>"><?php $news1name ?></a></span></li>
<li><span class="date"></span><span><a href="<?php $news2url ?>universaltourism/"><?php $news2name ?></a></span></li>
</ul>
</div>
</div>
<div class="top_lead">
<p class="copy vartical"><?php echo $title1 ?></p>
<div class="lead">
<?php echo $text1; ?>
</div>
    <p class="img">
        <?php if( $img1 ): ?>
            <img src="<?php the_field('img1'); ?>" alt="" width="590" height="395">
        <?php else: ?>
            <img src="https://kamakura-guesthouse.com/img/top/top_img01.jpg" alt="" width="590" height="395">
        <?php endif; ?>
    </p>
</div>


<section class="top_sec sec1">
<h2 class="top_sec_ttl"><p class="vartical copy2"><?php echo $title2 ?></p></h2>
<div class="sugoshikata_box">
<p class="copy vartical copy3"><?php echo $title3 ?></p>
<div class="cnt">


<p class="img">
    <?php if( $img2 ): ?>
        <img src="<?php the_field('img2'); ?>" alt="" width="600" height="400">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img02.jpg" alt="" width="600" height="400">
    <?php endif; ?>
    <?php if( $img3 ): ?>
        <img src="<?php the_field('img3'); ?>" alt="" width="600" height="400">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img02-2.jpg" alt="" width="300" height="300">
    <?php endif; ?>
</p>
<p class="onlySP spcopy">
    <img src="https://kamakura-guesthouse.com/img/top/sptop_copy1.svg" alt="" width="185" height="57">
</p>
<?php echo $text2; ?>
<p class="btn nohover"><a href="/facility">設備についてはこちら<span class="arrow_w"></span></a></p>
</div>
</div>

<div class="sugoshikata_box">
<p class="copy3 vartical"><?php echo $title4 ?></p>
<div class="cnt">
<p class="img">
    <?php if( $img4 ): ?>
        <img src="<?php the_field('img4'); ?>" alt="" width="600" height="400">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img03.jpg" alt="" width="600" height="400">
    <?php endif; ?>
    <?php if( $img5 ): ?>
        <img src="<?php the_field('img5'); ?>" alt="" width="300" height="300">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img03-2.jpg" alt="" width="300" height="300">
    <?php endif; ?>
</p>
<p class="onlySP spcopy"><img src="https://kamakura-guesthouse.com/img/top/sptop_copy2.svg" alt="" width="220" height="56"></p>
<?php echo $text3; ?>
<p class="btn nohover"><a href="/facility#cafe">地下BARについてはこちら<span class="arrow_w"></span></a></p>
</div>
</div>

<div class="sugoshikata_box">
<p class="copy4 vartical"><?php echo $title5 ?></p>
<div class="cnt">
<p class="img">
    <?php if( $img4 ): ?>
        <img src="<?php the_field('img4'); ?>" alt="" width="600" height="400">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img04.jpg" alt="" width="600" height="400">
    <?php endif; ?>
    <?php if( $img5 ): ?>
        <img src="<?php the_field('img5'); ?>" alt="" width="300" height="300">
    <?php else: ?>
        <img src="https://kamakura-guesthouse.com/img/top/top_img04-2.jpg" alt="" width="300" height="300">
    <?php endif; ?>
</p>
<p class="onlySP spcopy"><img src="https://kamakura-guesthouse.com/img/top/sptop_copy3.svg" alt="" width="255" height="54"></p>
<?php echo $text4; ?>
<p class="btn nohover"><a href="/stay"><span class="arrow_w"></span></a></p>
</div>
</div>
</section>

<section class="top_sec sec2">
<h2 class="top_sec_ttl"><p class="copy3 vartical">日々の<br>鎌倉ゲストハウス</p></h2>
<div class="timeline">
<div class="tw">
<a class="twitter-timeline" data-width="490" data-height="350" href="https://twitter.com/kamagesu?ref_src=twsrc%5Etfw">Tweets by kamagesu</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="fb">
<div class="fb-page" data-href="https://www.facebook.com/kamakuraguesthouse/" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kamakuraguesthouse/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kamakuraguesthouse/">鎌倉ゲストハウス-Kamakura Guesthouse-</a></blockquote></div>
</div>
</div>
<div class="ig" id="ig">
</div>
<ul class="sns_link">
<li><a href="https://twitter.com/kamagesu" target="_blank"><img src="https://kamakura-guesthouse.com/img/top/tw.svg" alt="twitter" width="77" height="18"></a></li>
<li><a href="https://www.facebook.com/kamakuraguesthouse/" target="_blank"><img src="https://kamakura-guesthouse.com/img/top/fb.svg" alt="facebook" width="99" height="19"></a></li>
<li><a href="https://www.instagram.com/kamakuraguesthouse" target="_blank"><img src="https://kamakura-guesthouse.com/img/top/ig.svg" alt="instagram" width="107" height="23"></a></li>
</ul>
</section>
    <script>
$(function() {
    $.ajax({
        url: '/wp/wp-content/themes/kamakuraguesthouse/instagram.php',
        dataType: 'json',
        success: function(data) {
            var insert = '<ul>';
                for (var i = 0; i < data.length; i++) {
                    insert += '<li>';
                        // 画像とリンク先
                        insert += '<a href="' + data[i]['permalink'] + '" target="_blank">';
                            insert += '<img src="' + data[i]['media_url'] + '" class="instagram-image" />';
                        insert += '</a>';
                            insert += '<p>' + data[i]['caption'] + '</p>';
 
                        insert += '<div class="instagram-data">';
                            // 日付
                            var d = new Date(data[i]['timestamp']);
                            var year  = d.getFullYear();
                            var month = d.getMonth() + 1;
                            var day  = d.getDate();
                            insert += '<div class="date">' + year + '/' + month + '/' + day + '</div>';
                        insert += '</div>';
                    insert += '</li>';
                };
            insert += '</ul>';
            $('#ig').append(insert);
        }
    });
});
    </script>
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
TEL 0467-67-6078<br>
E-mail　<br class="pcn"><a href="mailto:kamakuraguesthouse@gmail.com">kamakuraguesthouse@gmail.com</a></p>
</div>
<ul class="faward">
<li><img src="https://kamakura-guesthouse.com/img/common/tripadvisor.jpg" alt="" width="264" height="198"></li>
<li><img src="https://kamakura-guesthouse.com/img/common/booking.jpg" alt="" width="396" height="198"></li>
<li><img src="https://kamakura-guesthouse.com/img/common/agoda.jpg" alt="" width="131" height="198"></li>
</ul>
</div>
<p class="copyright">© kamakura guesthouse.</p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/spslide.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/youtube.js"></script>
<script type="text/javascript" src="https://kamakura-guesthouse.com/js/instafeed.min.js"></script>
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
<style>
    .vartical{
        writing-mode: vertical-rl;
    }
    .copy{
        font-size: 24px;
        display: inline;
    }
    .copy2{
        margin: auto;
    }
    .copy3{
        display: inline;
        font-size: 32px;
    }
    .copy4{
        display: inline;
        font-size: 32px;
        margin-left: 264px;
    }
</style>
</body>
</html>