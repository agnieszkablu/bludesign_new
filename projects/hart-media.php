<?php require('inc/header.php'); ?>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
				<?php require('inc/section-header.php'); ?>
					
				<section class="page-show-case main-content">
					<header>
						<h2 class="content__heading">Hart media</h2>
					</header>
					<div class="row">
						<div class="col-6">
							<a href="http://hartmedia.pl/">
								<img src="dist/img/projects/hart-ipad.jpg" alt="Design and coding for a marketing agency">
							</a>
						</div><!-- .col-6 -->
						<div class="col-6">
							<h2>Webpage for hartmedia.pl - marketing agency</h2>
							<p><a href="http://hartmedia.pl/">hartmedia.pl</a> is a simple onepage design with presentation of choosen projects</p>
							<h3>Main features:</h3>
							<ul>
								<li>developed with Wordpress (custom theme based on <a href="https://github.com/agnieszkablu/wp_basic">my basic theme boilerplate</a> on GitHub)</li>
								<li>project uses bootstrap and jquery as dependencies</li>
								<li>graphic design based on clients materials</li>
								<li>Grunt used for compiling sass files, minifying, adding prefixes and browsersync.</li>
							</ul>
						</div><!-- .col-6 -->
					</div><!-- .row -->
				</section>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php require('inc/footer.php'); ?>