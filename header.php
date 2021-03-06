<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>夕張あきんど屋</title>
<meta name="keywords" content="夕張メロン,じゃがバター,清水沢,八百屋">
<meta name="Description" content="夕張メロン・農水産物専門店　地元夕張で北海道の絶品グルメを販売しています。オンラインストアから全国発送承ります。">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<link rel="shortcut icon" href="file:///Macintosh HD/Applications/MAMP/htdocs/wordpress/wp-content/themes/akindorenewal/yubariakindoya.jp">

<!--OGP情報-->
    <meta property="og:title" content="夕張あきんど屋">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fabicon.jpg">
    <meta property="og:description" content="夕張メロン・農水産物専門店　地元夕張で北海道の絶品グルメを販売しています。オンラインストアから全国発送承ります。">
    <meta property="og:url" content="https://yubariakindoya.jp">
    <meta property="og:site_name" content="夕張メロン・農水産物専門店">
    <meta property="og:email" content="support@yubariakindoya.jp">
    <meta property="og:phone_number" content="0123-59-3504">
  <!--OGP情報-->
	
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/normalize.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/contactform7.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon-192x192.png">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>


<!--font awesome library-->
<script src="https://kit.fontawesome.com/f8312f0c83.js" crossorigin="anonymous"></script>
	
<!--fontlibrary-->

<script>
  (function(d) {
    var config = {
      kitId: 'fkd0ttn',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	
<script>
	//php対応できないためjqueryの外部ファイルでの記述はしない 
	//↓ハンバーガーメニューバツ切り替え


$(function(){
	var duration = 300;
	
	var $js__open = $('#js__open');
	
	var $closewrap = $('#menuclose-wrap');
	
	var $menubtn = $('#menu-btn');
//↓ナビエリア外をクリックして閉じさせる（クラスの除去、animateの初期化）
	$closewrap
	.on('click',function(){
		$menubtn.find('#panel-btn-icon').removeClass('switch');
		$js__open.removeClass('nav-open');
		
		if($menubtn.find('#panel-btn-icon').hasClass('switch')){
		$menubtn.find('p > img')
		.attr('src','<?php echo get_template_directory_uri(); ?>/images/close.svg');
	}else{
		$menubtn.find('p > img')
		.attr('src', '<?php echo get_template_directory_uri(); ?>/images/menu.svg');
	}
//↑↑
	if($js__open.hasClass('nav-open')){
		$js__open.stop(true).animate({
			right: '0px'
		},duration);
		
	}else{
		$js__open.stop(true).animate({
			right: '-63vw'
		},duration);
	}
	});
	
//↓メニュクリックしてナビ展開
	$menubtn
	.on('click',function(){
		$(this).find('#panel-btn-icon').toggleClass('switch');
		$js__open.stop(true).toggleClass('nav-open');
	

//↓menu,close表示切り替え
	if($menubtn.find('#panel-btn-icon').hasClass('switch')){
		$menubtn.find('p > img')
		.attr('src','<?php echo get_template_directory_uri(); ?>/images/close.svg');
	}else{
		$menubtn.find('p > img')
		.attr('src', '<?php echo get_template_directory_uri(); ?>/images/menu.svg');
	}
//↑↑
	if($js__open.hasClass('nav-open')){
		$js__open.stop(true).animate({
			right: '0px'
		},duration);
		
	}else{
		$js__open.stop(true).animate({
			right: '-63vw'
		},duration);
	}
	});
	
	
//↓続きボタン
	$('.main-content_wrapper').find('.readmore > a')
	.on('mouseover',function(){
		$(this).stop(true).animate({
			backgroundColor: '#1E2633',
			color: '#ffffff'
		},duration);
	})
	.on('mouseout',function(){
		$(this).stop(true).animate({
			backgroundColor: '#F8F4F4',
			color: '#1E2633'
		},duration);
	});
	
//↓↓sticky-header
	$('.header-navwrap').each(function(){
		
		var $window = $(window),
			$header = $(this),
			//ヘッダーデフォルト位置を取得
			headerOffsetTop = $header.offset().top;
		
		$window.on('scroll',function(){
			
			if($window.scrollTop() > headerOffsetTop) {
				$header.addClass('sticky');
			} else {
				$header.removeClass('sticky');
			}
		});
		
		$window.trigger('scroll');
	});
});
//↑↑

</script>
	
<style>
	.content-image1 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/melon2.jpg");
	}
	
	.content-image2 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/melon-looking.jpg");
	}
	
	.content-image3 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/mrzyochi.jpg");
	}
	
	.content-image4 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/siokara-jagabutter.jpg");
	}
	
	.contact-image {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/negi-field.jpg");
	}
	
	.image-background1 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/contenttop1.jpg");
	}
	
	.image-background2 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/contenttop2.jpg");
	}
	
	.image-background3 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/contenttop3.jpg");
	}
	
	.image-background4 {
		background-image: url("<?php echo get_template_directory_uri(); ?>/images/contenttop4.jpg");
	}
	
</style>
	
	<?php wp_head(); ?>
</head>

<body>

	<header role="banner">
		<div class="header-navwrap">
		<h1 class="header-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mainlogo.png" width="197" height="23" alt="夕張あきんど屋"></a></h1>
			
			<nav class="topnav" id="js__open">
				<ul class="header-nav" id="header-nav">
				<?php if (has_nav_menu( 'global' )) : ?>
	  
		<?php wp_nav_menu( array(
			'theme_location' => 'global',
			'menu_id'		=> 'header-nav',
			'menu_class'		=> 'header-nav',
			'container'		=> 'false',//<ul class="header-nav"></ul>をラップしない
			'items_wrap' => '%3$s',//自動生成される<ul>を削除する（管理画面メニュから追加するページとは別に<li>を挿入可能）
 
		)); ?>
				
		<?php endif; ?>
				
					<li><a href="<?php echo esc_url( get_option( 'storelink_section' )); ?>">オンラインストア</a></li>
				</ul>
			</nav>
			<div class="menu-btn" id="menu-btn">
			<a href="#" id="panel-btn" class="panel-btn"><span id="panel-btn-icon" class="panel-btn-icon"></span></a>
			<p><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="MENU"></p>
			</div>
		</div>
	</header>