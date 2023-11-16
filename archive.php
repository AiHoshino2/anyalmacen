<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Expert Healthcare
 */

get_header();

$column = get_theme_mod( 'expert_healthcare_archive_layout', 'column-1' );
?>
<section class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row">
			<div class="<?php esc_attr(expert_healthcare_post_layout()); ?>">
				<div class="">
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div class="expert-healthcare-archive-layout grid-layout <?php echo esc_attr( $column ); ?>">
								<?php get_template_part('template-parts/content/content','post'); ?>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<?php get_template_part('template-parts/content/content','none'); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>