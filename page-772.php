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

if ( ! defined( 'ABSPATH' ) ) {
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
		<h3><?php the_field('titolo_intro');?></h3>
		<p><?php the_field('testo_intro');?></p>
	</div>
</div>

<div class="portfolio-wrapper">
	<h3><?php the_field('titolo_portfolio');?></h3>
	<div class="portfolio">
		<div class="folio">
			<h4 class="titolo-folio">Titolo 1</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div><div class="folio">
			<h4 class="titolo-folio">Titolo 2</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div><div class="folio">
			<h4 class="titolo-folio">Titolo 3</h4>
			<img src="/wp-content/uploads/2025/07/g20e056230c3ce6b7db9a67e8ec74283d35b59cccea725d7b8de5a66d179d65c5bf6bbb1e90f4c6021e904f942c6d3840_1280-443600.jpg" alt="rova" class="folio">
			<p class="folio-description">Ciao ciao</p>
		</div>
	</div>
</div>

<div class="recensioni-wrapper">
	<h3>Recensioni</h3>
	<div class="recensioni">
		<div class="recensione">
			<h4>Recensione 1</h4>
			<div class="stelle">★★★★☆</div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
		<div class="recensione">
			<h4>Recensione 2</h4>
			<div class="stelle" data-stars="4" ></div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
		<div class="recensione">
			<h4>Recensione 3</h4>
			<div class="stelle" data-stars="3" ></div>
			<div class="testo-recensione">Ottimo servizio</div>
			<p class="nome">Pinco Palla</p>
		</div>
	</div>
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

<?php get_footer(); ?>
