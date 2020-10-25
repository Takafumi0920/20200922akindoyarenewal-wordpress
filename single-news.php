
<!--個別記事の生成-->
<?php get_header(); ?>


<?php while ( have_posts() ) : //投稿ループ開始?>

	<?php the_post(); ?>

<div id="menuclose-wrap">
	<div class="container-wrap">
		<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="page-content">	
				<?php the_content(); ?>
			</div>
	</div>



<?php endwhile; //get_footerの前?>

<?php get_footer();
