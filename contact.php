<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<main >
	<div class="form">
	</div>
	
		<h1 class="page-title"><?php the_title(); ?></h1>

		<article class="page-text"><?php the_content(); ?></article>

	<div class="phone-button">
		<a class="phone-link" href="tel:0123593504"></a>
	
	<div class="phone-wrapper">
		<p class="phoneicon"><img class="phone" alt="phone" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"></p>
		<div class="phone-text" ><span>電話</span><br>0123-59-3504
		</div>
	</div>
</div>
</main>

<?php get_footer(); ?>
	