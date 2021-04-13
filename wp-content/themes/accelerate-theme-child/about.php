<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

<div id="primary" class="about-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<div class="our-services">
	<h2>Our Services</h2>
	<p>We take pride in our clients and the content we create for them.</p>
	<p>Here's brief overview of our offered services.</p>
</div>

<section class="services">
	<div class="site-content">
		<?php query_posts('posts_per_page=4&post_type=services'); ?>
		<?php while (have_posts() ): the_post();
				$image = get_field('image');
				$size = 'medium';
				$description = get_field('description');
		?>
				<div class="full-width">
					<figure>
						<?php if($image) { ?> <img src="<?php echo $image; ?>" /> <?php } ?>
					</figure>
					<h3><?php the_title(); ?></h3>
					<p><?php echo $description; ?></p>
				</div>
			<?php endwhile; ?> 
		<?php wp_reset_query(); ?>
	</div>
</section>

<div class="contact">
	<h2>Interested in working with us? <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></h2>
</div>

<?php get_footer(); ?>
