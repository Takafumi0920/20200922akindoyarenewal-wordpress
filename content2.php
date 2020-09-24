<?php
/*
Template Name: content2
*/
?>

<?php get_header(); ?>
<div class="content-wrap">

		<div class="image-background2">
			<h1>こだわりの仕入れ</h1>
		</div>
		<div class="homelink"><p><a href="<?php echo home_url(); ?>"><span><img alt="home" src="<?php echo get_template_directory_uri(); ?>/images/home.svg"></span>Home</a></p></div>
		<div class="content-text">
		<p>当店では仕入れは社長自らが行います。農産物は自然の恵みですので、品質は必ずしも安定はしません。よって品質にこだわり続ける当店では、必ず現物を確認してから仕入れます。お客様からの信頼を裏切ることのないよう、商品の品質管理にはより一層注力しています。</p>

		<figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/content2-1.jpg"><figcaption>競り中は指でサインを出して値段をアピールします。</figcaption></figure>
		<p>朝7時半から始まる競りには、その日入荷した野菜・果物がたくさん並びます。店頭に何を並べるかイメージしつつ、品揃えに足りないものを買い付け、お客様から注文をいただいた商品を探し歩いたりします。時には買い手のつかない野菜たちを大胆に競り落としたりもします。こうして仕入れが済んだら、車に積んで、すぐにお店に戻って開店準備です。</p>
		<figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/content2-2.jpg"></figure>
		<p>夕張あきんど屋は町の八百屋として地域のみなさまにご利用いただいている一方で、一部商品はオンラインストアでも販売しております。良品質なものをリーズナブルな価格で販売できるよう日々精進して参りますので、ぜひご注目ください。</p>
		<figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/content2-3.jpg"></figure>

		</div>
		<div class="onlinestorelink">
			<img src="<?php echo get_template_directory_uri(); ?>/images/storelink.jpg" alt="">
			<p>今日も元気に営業中！</p>

			<div class="storelink-btn">
				<p><a href="<?php echo esc_url( get_option( 'storelink_section' )); ?>">夕張あきんど屋online store<span><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/openlink.svg"></span></a></p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>