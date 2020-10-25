<?php get_header(); ?>
<div id="menuclose-wrap">
<!--メインビジュアル-->
	<div class="main-visual">
		<div class="main-visual_content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/メロンカット切り抜き.png" alt="">
			<h1>夕張を、ほおばろう</h1>
			<h2>北海道の美味しさを夕張から全国へお届けします</h2>
		</div>
	</div>
	
<!--メインビジュアル-->
	
<!--新着情報-->
<div class="backgroundgray">
	
	<aside class="news">
		<p class="news-title">お知らせ</p>
		<span class="news-underline"></span>
		
		<ul class="news-line">
			<?php
				$args = array(
					'post_type' => 'news', //配列$argsで投稿タイプnewsを取得
				);
			?>
			<?php $my_query = new WP_Query( $args ); //WP_Queryクラスでループを作成 ?>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<?php if( empty($post->post_content) ) : //投稿の中に本文がなければリンクなし ?>
			<li>
				<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
				<p class="news-content"><?php the_title(); ?></p>
			</li>
			<?php elseif( empty($post->post_title) ) : //投稿の中にタイトルがなければ本文を頭から20文字だけ表示 ?>
			<li>
				<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
				<p class="news-content"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></a></p>
			</li>
			<?php else : //通常の投稿 ?>
			<li>
				<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
				<p class="news-content"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</li>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			
	<!--過去データ引き継ぎ-->
			<li>
				<p class="date">2020.9.18</p>
				<p class="news-content">ピュアホワイト販売終了</p>
			</li>
			<li>
				<p class="date">2020.9.5</p>
				<p class="news-content">令和2年産夕張メロン販売終了</p>
			</li>
			<li>
				<p class="date">2020.6.23</p>
				<p class="news-content">令和2年産夕張メロン販売開始</p>
			</li>
			<li>
				<p class="date">2020.6.20</p>
				<p class="news-content">オンラインストア開設</p>
			</li>
		</ul>
	


		<a href="<?php echo esc_url( get_option( 'storelink_section' )); ?>"><img src="<?php echo esc_url( get_option('banner_image')); ?>" alt="">
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
	
	<!--<div class="sns">
		<p>次期店長が更新中！</p>
	</div>-->
	
</div>
<?php get_footer(); ?>