<?php get_header(); ?>
	
<div id="content">
	<main id="main" role="main">
				
		<?php get_template_part( 'parts/hero', 'home' ); ?>
		
		<section class="intro">
			<div class="row">
				<div class="large-7 large-centered columns">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>					
	</main> <!-- end #main -->
</div> <!-- end #content -->

<?php get_footer(); ?>