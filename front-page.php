<?php get_header(); ?>
<div id="menuclose-wrap">
<!--メインビジュアル-->
	<div class="main-visual">
		<div class="main-visual_content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/メロンカット切り抜き.png" alt="">
			<h1>夕張を、ほおばろう。</h1>
			<h2>北海道の美味しさを夕張から全国へお届けします</h2>
		</div>
	</div>
	
<!--メインビジュアル-->
	
<!--新着情報-->
<div class="backgroundgray">
	
	<aside class="news">
		<p class="news-title">お知らせ</p>
		<span class="news-underline"></span>
		<p>2020.6.20 オンラインストア開設</p>
		<p>2020.6.23 メロン販売開始</p>
		<a href="<?php echo esc_url( get_option( 'storelink_section' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/あきんどやメロン開始バナー.jpg" alt="令和２年度夕張メロンご購入はこちら">
		</a>
	</aside>
	
<!--新着情報-->
	
<!--コンテンツ１-->
	<div class="pcwidth">
	
		<div class="main-content_wrapper">
			<section>
			<div class="main-content_thumbnail_L">
				<div class="content-image1">
				<h1>夕張メロン販売実績30年以上</h1>
				<p>正真正銘の夕張メロンご購入は当店へ<br>ギフトにも大変好評です</p>
				</div>
			</div>
		<p class="main-content_text">夕張あきんど屋は創業以来、夕張メロンの販売に力を入れてきました。おかげさまで現在ではリピーター様に愛され、大変好評です。日持ちのしないフルーツですので、朝一番で仕入れて食べ頃一歩手前で販売しています。店頭での販売はもちろん、オンラインストアでもご注文いただけます。</p>
		<p id="readmore" class="readmore"><a href="<?php
				 $page_id = get_option( 'content_section1' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">続きはこちら</a></p>
			</section>
		</div>
	
<!--コンテンツ１-->
	
<!--コンテンツ２-->
	
		<div class="main-content_wrapper">
			<section>
			<div class="main-content_thumbnail_R">
				<div class="content-image2">
				<h1>品質に自信アリ！社長自ら買付け</h1>
				<p>経験豊富なベテラン社長が<br>厳選して仕入れます</p>
				</div>
			</div>
		<p class="main-content_text">市場では厳しく、そして大胆に競り落とします。良いものを少しでも多くのお客様に届けるため、朝一番の競りは少しも手を抜けません。その日の品揃えに大きく影響するため、普段は笑顔の社長もこの時ばかりは鋭い目に。
		</p>
		<p class="readmore"><a href="<?php
				 $page_id = get_option( 'content_section2' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">続きはこちら</a></p>
			</section>
		</div>
	
<!--コンテンツ２-->
	</div>
	
	<div class="pcwidth">
<!--コンテンツ３-->
	
		<div class="main-content_wrapper">
			<section>
			<div class="main-content_thumbnail_L">
				<div class="content-image3">
				<h1>北海道の味にこだわり抜く</h1>
				<p>美味しさを探し求めて<br>北海道中を駆け回っています</p>
				</div>
			</div>
			<p class="main-content_text">美味しさにこだわり、実際に畑を尋ねることも。市場では出回らないような野菜は、生産者と真摯に向き合い信頼関係を築くことで、当店から販売させてもらっています。どこの八百屋よりも美味しいものをお届けしたいから、あきんど屋はこだわり続けます。</p>
			<p class="readmore"><a href="<?php
				 $page_id = get_option( 'content_section3' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">続きはこちら</a></p>
			</section>
		</div>
	
<!--コンテンツ３-->
	
<!--コンテンツ４-->
	
		<div class="main-content_wrapper">
			<section>
			<div class="main-content_thumbnail_R">
				<div class="content-image4">
				<h1>メディア紹介多数！絶品じゃがバター</h1>
				<p>９種類のトッピングとバターの組み合わせ！<br>全国各地のイベントで販売中</p>
				</div>
			</div>
			<p class="main-content_text">特大のジャガイモと独創的なトッピングの数々で、いつも行列が絶えません！！社長のイチオシは、イカの塩辛のせじゃがバター！もちろん食材は全て北海道産ですよ。さあ、あなたは何をトッピングしてみますか？出店イベントはスケジュールからご確認ください！</p>
			<p class="readmore"><a href="<?php
				 $page_id = get_option( 'content_section4' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">続きはこちら</a></p>
			</section>
		</div>
	
<!--コンテンツ４-->
	</div>
	
	<div class="contact-image">
		<p class="contact-text"><a href="<?php
				 $page_id = get_option( 'contact_section' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">お問い合わせ</a></p>
	</div>
	
	<div class="sns">
		<p>次期店長が更新中！</p>
	</div>
	
</div>
<?php get_footer(); ?>