
<footer>
		<h1 class="company-name">有限会社　夕張あきんど屋</h1>
		<p class="company-address">〒068-0531</p>
		<p class="company-address">北海道夕張市清水沢３丁目１３１番地</p>
		<ul class="footer-nav" id="footer-nav">
		<?php if (has_nav_menu( 'footer' )) : //footer引数を与えられたメニュー位置があるか判定（functions.phpで指定）?>
		<?php wp_nav_menu( array(
			'theme_location' => 'footer',
			'menu_class'		=> 'footer-nav',
			'container'		=> 'false',//<ul class="header-nav"></ul>をラップしない
			'items_wrap' => '%3$s',//自動生成される<ul>を削除する（管理画面メニュから追加するページとは別に<li>を挿入可能）
		)); ?>
		<?php endif; ?>
			<li><a href="<?php echo esc_url( get_option( 'storelink_section' )); ?>">オンラインストア</a></li>
		</ul>
		<p class="right">yubariakindoya.,Inc 2020. All Right Reserved.</p>
		
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
