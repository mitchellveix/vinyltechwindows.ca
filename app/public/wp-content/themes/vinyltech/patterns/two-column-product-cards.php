<?php
/**
 * Title: Two Column Product Cards
 * Slug: your-theme/two-column-product-cards
 * Categories: featured, call-to-action
 * Description: Two responsive image and content cards with a centered section heading.
 */
?>

<!-- wp:group {"align":"wide","className":"product-cards-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide product-cards-pattern">

	<!-- wp:group {"className":"product-cards-pattern__header","layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group product-cards-pattern__header">

		<!-- wp:paragraph {"align":"center","className":"product-cards-pattern__eyebrow"} -->
		<p class="has-text-align-center product-cards-pattern__eyebrow">Explore Our Products</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">Windows and Doors Designed for Your Home</h2>
		<!-- /wp:heading -->

	</div>
	<!-- /wp:group -->


	<!-- wp:columns {"className":"product-cards-pattern__columns"} -->
	<div class="wp-block-columns product-cards-pattern__columns">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"className":"product-card","layout":{"type":"default"}} -->
			<div class="wp-block-group product-card">

				<!-- wp:image {"sizeSlug":"large","className":"product-card__image"} -->
				<figure class="wp-block-image size-large product-card__image">
					<img
						src="https://placehold.co/800x800"
						alt=""
					/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"className":"product-card__content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group product-card__content">

					<!-- wp:paragraph {"className":"product-card__eyebrow"} -->
					<p class="product-card__eyebrow">Windows</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Style, efficiency and performance.</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>From classic to contemporary, our windows are built to enhance your view and improve your comfort.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"product-card__cta"} -->
					<p class="product-card__cta">
						<a href="#">View All Windows <span aria-hidden="true">→</span></a>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->


		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"className":"product-card","layout":{"type":"default"}} -->
			<div class="wp-block-group product-card">

				<!-- wp:image {"sizeSlug":"large","className":"product-card__image"} -->
				<figure class="wp-block-image size-large product-card__image">
					<img
						src="https://placehold.co/800x800"
						alt=""
					/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"className":"product-card__content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group product-card__content">

					<!-- wp:paragraph {"className":"product-card__eyebrow"} -->
					<p class="product-card__eyebrow">Doors</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Make a lasting first impression.</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Entry, patio and garden doors crafted for security, durability and beautiful design.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"product-card__cta"} -->
					<p class="product-card__cta">
						<a href="#">View All Doors <span aria-hidden="true">→</span></a>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->