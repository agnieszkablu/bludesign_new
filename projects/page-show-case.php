<?php require('inc/header.php'); ?>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<article class="hero-header container rellax" data-rellax-speed="-7">
					<h1 class="hero-txt " >
					Coding <span class="hero-amp">&amp;</span> Design <small>bludesign.pl</small></h1>
				</article>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php require('inc/footer.php'); ?>