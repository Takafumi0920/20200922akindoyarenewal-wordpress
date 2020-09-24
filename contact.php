<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="container-wrap">
			<?php if ( have_posts() ) : /** ループ開始 */
				while ( have_posts() ) : the_post(); ?>
		<!--<div class="bread">
		<ol>
			<li><a href="<?php echo esc_url( home_url() ); ?>">トップ</a></li>
			<li><a href="#"><?php the_title(); ?></a></li>
			</ol>
		</div>-->
				<h1>
					お問い合わせ
				</h1>
			<p>ご不明点等ございましたら、下のフォームからお気軽にご連絡ください。</p>
			<article class="contact-body">
				<?php the_content(); ?>
			</article>

			<article class="contact-wrap">
				<div class="icon">
					
					<a href="tel:0123593504">
						<span class="fas fa-phone"></span>
					</a>
					<p>0123-59-3504</p>
					
				</div>
					<p>受付時間　10:00~18:00</p>
				
				
			</article>
			<?php endwhile;
			else : ?>
				<article class="contact-body">
					<h3>準備中でございます。</h3>
					<p>ご迷惑をおかけしています。メロンの仕入れから戻ってくるまでお待ちください。</p>
				</article>
	<?php endif; /** ループ終了 */ ?>
</div>
	<?php get_footer(); ?>