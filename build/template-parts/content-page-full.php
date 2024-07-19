<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Seblog
 */
$content_layout = 'left';
?>


<main class="flex-fill">
	<?php
	if ( is_front_page() ) :
		get_template_part( 'template-parts/content', 'front-page' );
	else :
		get_template_part( 'template-parts/content', 'single' );
	endif;
	?>
</main>
