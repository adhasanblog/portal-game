<?php
/**
 * Template part for displaying page content with sidebar in page.php
 *
 * @package Seblog
 */
$content_layout = 'right';
$content_full   = true;
$reverse        = ( $content_layout === 'left' ) ? 'flex-row-reverse' : 'flex-row';
$container      = $content_full ? 'container-fluid' : 'container mx-auto';
?>
<div id="content" class="<?php echo esc_attr( $container ) ?> page-sidebar">
    <main class=" ">
        <section class="">
			<?php
			if ( is_front_page() ) :
				get_template_part( 'template-parts/content-front', 'page' );
			else :
				get_template_part( 'template-parts/content', 'single' );
			endif;
			?>
        </section>
        <aside>
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
        </aside>
    </main>
</div>
