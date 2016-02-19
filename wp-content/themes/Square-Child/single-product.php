<?php
/**
 * The template for displaying all single posts.
 *
 * @package Square
 */

get_header(); ?>

<header class="sq-main-header">
	<div class="sq-container">
		<?php the_title( '<h1 class="sq-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="sq-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
			<div class="grid_4">
				<h1 class="product_title">
					<?php echo types_render_field("product-title", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				</div>

				<?php echo types_render_field("default-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
			
				<div id="more_product_images">
					<?php echo types_render_field("more-images", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				</div>

				<div id="product_description">
					<?php echo types_render_field("product-description", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
					<?php echo types_render_field("product-dimensions", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				</div>
			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>
