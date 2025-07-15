<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();


$immagine_hero = get_field('immagine_hero');

?>

<div class="hero" style="background-image:url(<?php echo esc_url($immagine_hero['url']); ?>)">
	<h2 class="titolo-hero titolo-pagina">Studio fotografico</h2>
</div>

<div class="intro-wrapper">
	<div class="intro">
		<h3><?php the_field('titolo_intro'); ?></h3>
		<p><?php the_field('testo_intro'); ?></p>
	</div>
</div>

<div class="portfolio-wrapper">
	<h3><?php the_field('titolo_portfolio'); ?></h3>
	<div class="portfolio">
		<div class="folio">
			<h4 class="titolo-folio">Titolo 1</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div>
		<div class="folio">
			<h4 class="titolo-folio">Titolo 2</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div>
		<div class="folio">
			<h4 class="titolo-folio">Titolo 3</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div>
	</div>
</div>

<div class="recensioni-wrapper swiper">
	<h3>Recensioni</h3>
	<div class="recensioni swiper-wrapper">
		<div class="recensione swiper-slide">
			<h4>Recensione 1</h4>
			<div class="stelle">★★★★☆</div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
		<div class="recensione swiper-slide">
			<h4>Recensione 2</h4>
			<div class="stelle" data-stars="4"></div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
		<div class="recensione swiper-slide">
			<h4>Recensione 3</h4>
			<div class="stelle" data-stars="3"></div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
		<div class="recensione swiper-slide">
			<h4><?php the_field('titolo_recensione'); ?></h4>
			<div class="stelle" data-stars="<?php the_field('stelle'); ?>"></div>
			<div class="testo-recensione"><?php the_field('recensione'); ?></div>
			<p class="nome"><?php the_field('nome_recensore'); ?></p>
		</div>
	</div>
	<div class="swiper-pagination"></div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		let ratingElements = document.querySelectorAll('[data-stars]');

		//console.log(ratingElements);

		ratingElements.forEach(function(element) {

			const stelleMax = 5;
			let stelle = element.dataset.stars;
			let stelleVuote = stelleMax - stelle;
			// console.log(stelle);

			let stelleHTML = '';

			for (let i = 1; i <= stelle; i++) {
				stelleHTML += '★';
			}

			for (let i = 1; i <= stelleVuote; i++) {
				stelleHTML += '☆';
			}

			element.innerHTML = stelleHTML;
		});

	});
</script>

<link
	rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
	const swiper = new Swiper('.swiper', {
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			renderBullet: function(index, className) {
				return '<span class="' + className + '">' + (index + 1) + "</span>";
			},
		},

	});
</script>

<div class="cf-wrapper">
	<h3>Contact Form</h3>
	<form action="<?php echo get_stylesheet_directory_uri();?>/helpers/process-form.php" method="post" id="modulo-di-contatto">
		<label> <span class="label-text">Nome</span>
			<input type="text" name="nome" id="nome">
		</label>

		<label> <span class="label-text">Email</span>
			<input type="email" name="email" id="email">
		</label>

		<label> <span class="label-text">Numero di telefono</span>
			<input type="tel" name="tel" id="tel">
		</label>

		<label> <span class="label-text">Data presunta del matrimonio</span>
			<input type="date" name="data_matrimonio" id="data">
		</label>

		<label> <span class="label-text">Messaggio (optional)</span>
			<input type="text" name="messaggio" id="messaggio">
		</label>

		<label><input type="checkbox" name="consenso" id="consenso" style="min-width:20px;"> Acconsento al trattamento dei dati inviati
		</label>

		<input type="submit" value="invia">

	</form>

</div>

<?php get_footer(); ?>