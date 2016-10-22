
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class="hero-header container rellax" data-rellax-speed="-7">
				<h1 class="hero-txt">Coding <span class="hero-amp">&amp;</span> Design <small>bludesign.pl</small></h1>
				<h2>Tworzenie stron internetowych to moja pasja,<br>
				skontaktuj się ze mną i wyróżnij się w sieci</h2>
				<a class="contactBtn" href="#ContactForm">Kontakt</a>
			</article>
			<article class=" entry-content">
				<header class="entry-header">
					<h2 class="sr-only">bludesign.pl</h2>
				</header><!-- .entry-header -->
				<section id="services" class="services container">
					<h2 class="section-heading">Usługi</h2>
					<p>Tylko najnowsze technologie i zoptymalizowane rozwiązania.
						Projektuję i wykonuję praktyczne i przyjazne użytkownikowi strony internetowe. W moich pracach stosuje najlepsze praktyki web designu ( min. <a href="https://pl.wikipedia.org/wiki/Responsive_Web_Design" target="_blank"> Responsive Web Design</a> ), a także najpopularniejsze rozwiązania ułatwiające dotarcie do klienta docelowego.
						<strong>Napisz do mnie by poznać nową jakość stron internetowych!</strong></p>
					<div class="pricing-boxes-container">
						<div class="box box-1">
							<div class="icon icon-streetsign"></div>
							<div class="box-content">
								<h3 class="box-heading">Pakiet podstawowy</h3>
								<h4 class="price">Cena od 499 zł brutto</h4>
								<ul class="box-desc">
									<li>Strony responsywne</li>
									<li>Strony wizytówki</li>
									<li>Landing Page</li>
								</ul>
							</div>
						</div>
						<div class="box box-2">
							<div class="icon icon-gears"></div>
							<div class="box-content">
								<h3 class="box-heading">Pakiet rozszerzony</h3>
								<h4 class="price">Cena od 999 zł brutto</h4>
								<ul class="box-desc">
									<li>Strony responsywne</li>
									<li>Konwersja z PSD do HTML</li>
									<li>Blogi firmowe i osobiste</li>
									<li>One page design</li>
								</ul>
							</div>
						</div>
						<div class="box box-3">
							<div class="icon icon-layers"></div>
							<div class="box-content">
								<h3 class="box-heading">Pakiet premium</h3>
								<h4 class="price">Cena od 1499 zł brutto</h4>
								<ul class="box-desc">
									<li>Strony responsywne, z wieloma podstronami</li>
									<li>Integracja z Wordpress</li>
									<li>Kodowanie w JavaScript/PHP</li>
									<li>Formularz kontaktowy</li>
								</ul>
							</div>
						</div>
						<div class="box box-4">
							<div class="icon icon-tools"></div>
							<div class="box-content">
								<h3 class="box-heading">Dodatki</h3>
								<h4 class="price">Cena do uzgodnienia</h4>
								<ul class="box-desc">
									<li>Aktualizacja i obsługa stron</li>
									<li>Szablony Allegro</li>
									<li>Formularz kontaktowy</li>
									<li>Hosting i domeny</li>
									<li>Mapy Google</li>
									<li>System CMS</li>
									<li>Newsletter</li>
									<li>Inne według potrzeb i wymagań</li>
								</ul>
							</div>
						</div>
					</div>
				</section><!-- .services -->
				<section id="projects" class="projects">
					<h2 class="section-heading">Projekty i realizacje</h2>
					<div class="projects-container">
						<?php
							//the_content();
						?>
						<figure class="projects-figure">
							<a href="/projects/hart-media/">
								<img src="dist/img/projects/hartx500.png" alt="Projekt i realizacja, strona firmowa agencji reklmaowej">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, strona firmowa agencji reklamowej</p>
								<a class="projects-readMore" href="/projects/hart-media/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
						<figure class="projects-figure">
							<a href="/projects/eurotrotter/">
								<img src="dist/img/projects/eurotx500.png" alt="Projekt i realizacja, strona dla podróżnika, eurotrotter.eu">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, strona dla podróżnika, eurotrotter.eu</p>
								<a class="projects-readMore" href="/projects/eurotrotter/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
						<figure class="projects-figure">
							<a href="/projects/uvdruk/">
								<img src="dist/img/projects/uvx500.png" alt="Projekt i realizacja, drukarnia, uvdruk.com">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, drukarnia, uvdruk.com</p>
								<a class="projects-readMore" href="/projects/uvdruk/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
						<figure class="projects-figure">
							<a href="/projects/sklep-dojazdowa/">
								<img src="dist/img/projects/sony-sklepx500.png" alt="Projekt i realizacja, sklep Woocommerce, Sony Centre Nowy Sącz, dojazdowa.pl">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, sklep Woocommerce, dojazdowa.pl</p>
								<a class="projects-readMore" href="/projects/dojazdowa/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
						<figure class="projects-figure">
							<a href="/projects/sony-centre/">
								<img src="dist/img/projects/sonyx500.png" alt="Projekt i realizacja, prezentacja produktów, Sony Centre Nowy Sącz, dojazdowa.pl">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, prezentacja produktów, dojazdowa.pl</p>
								<a class="projects-readMore" href="/projects/sony-centre/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
						<figure class="projects-figure">
							<a href="/projects/peanutbutter/">
								<img src="dist/img/projects/peanutx500.png" alt="Projekt i realizacja, strona firmowa producenta masła orzechowego">
							</a>
							<figcaption class="projects-caption">
								<p>Projekt i realizacja, strona producenta masła orzechowego</p>
								<a class="projects-readMore" href="/projects/peanutbutter/">Dowiedz się więcej</a>
							</figcaption>
						</figure>
					</div>
				</section><!-- .projects -->
				<section id="ContactForm" class="contact-form container">
					<h2 class="section-heading">Formularz kontaktowy</h2>
					<div class="form-container">
						<form action="form.php" method="post" class="form">
							<div class="input-container">
								<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="* Imię i nazwisko" />
								<label class="icon-profile-male" for="your-name"></label>
							</div>
							<div class="input-container">
								<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="* Email" />
								<label for="your-email" class="icon-envelope"></label>
							</div>
							<div class="input-container">
								<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="your-message" aria-invalid="false" placeholder="* Wiadomość"></textarea>
								<label for="your-message" class="icon-quote"></label>
							</div>
							<input type="submit" value="Wyślij" class="submit" />
							<div class="wpcf7-response-output wpcf7-display-none"></div>
						</form>
					</div><!-- .form-container -->
				</section><!-- .contact-form -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
