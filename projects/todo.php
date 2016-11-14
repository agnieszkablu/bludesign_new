<?php require('inc/header.php'); ?>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
				<?php require('inc/section-header.php'); ?>
				
				<section class="page-show-case main-content">
					<header>
						<h2 class="content__heading">ToDo app</h2>
					</header>
					<div class="row">
						<div class="col-6">
							<a href="/apps/todo/todo.html">
								<img src="dist/img/projects/todo-ipad.jpg" alt="Design and coding, todo app">
							</a>
						</div><!-- .col-6 -->
						<div class="col-6">
							<h2>Simple todo list</h2>
							<p><a href="/apps/todo/todo.html">todo app</a> was created as a JavaScript excercise.</p>
							<h3>Main features:</h3>
							<ul>
								<li>developed with pure HTML5, CSS3 and Sass and plain JavaScript</li>
								<li>icons from <a href="http://icomoon.io">icomoon.io</a></li>
								<li>colors and styles based on Google's material design</li>
								<li>Grunt used for compiling sass files, minifying, adding prefixes and browsersync.</li>
								<li><a href="https://github.com/agnieszkablu/app_todo">Repository on GitHub</a></li>
							</ul>
						</div><!-- .col-6 -->
					</div><!-- .row -->
				</section>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php require('inc/footer.php'); ?>