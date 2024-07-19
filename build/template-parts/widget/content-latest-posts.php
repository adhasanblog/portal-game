<?php
/**
 * Template part for displaying latest posts in front page
 *
 * @package Seblog
 * @since 1.0.0
 */

$latest_posts = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 5,
) );

if ( $latest_posts->have_posts() ) :
	?>
    <div class="latest-posts">
        <h2 class="fs-4 fw-bold">Latest Products</h2>
        <hr/>
        <div class="post-loop">
			<?php
			while ( $latest_posts->have_posts() ) :
				$latest_posts->the_post();
				?>
                <div class="post-loop-item">
                    <div class="card vertical mb-4">
						<?php
						if ( has_post_thumbnail() ) :
							?>
                            <a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium', array( 'class' => 'card-image' ) ); ?>
                            </a>
						<?php
						endif;
						?>
                        <div class="card-body">
                            <a class="card-link  text-dark fw-bold "
                               href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
                            </a>
                            <p class="card-text">
                                <small class="text-body-secondary">
									<?php seblog_date_formatted(); ?> - by <?php the_author_link(); ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
			<?php
			endwhile;
			?>
        </div>
    </div>
<?php
endif;

