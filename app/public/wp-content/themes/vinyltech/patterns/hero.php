<?php
/**
 * Title: VinylTech Hero
 * Slug: vinyltech/hero
 * Categories: featured
 * Keywords: hero, banner, cover, call to action
 * Description: Hero section with editable background image, gradient overlay, text and button.
 */
?>

<!-- wp:cover {
	"url":"",
	"id":0,
	"dimRatio":0,
	"customOverlayColor":"#ffffff",
	"isUserOverlayColor":true,
	"minHeight":650,
	"minHeightUnit":"px",
	"gradient":"white-to-transparent",
	"contentPosition":"center left",
	"layout":{
		"type":"constrained",
		"justifyContent":"left"
	},
	"align":"full",
	"style":{
		"spacing":{
			"padding":{
				"top":"80px",
				"bottom":"80px",
				"left":"70px",
				"right":"40px"
			}
		}
	}
} -->
<div class="wp-block-cover alignfull vinyltech-hero" style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:70px;min-height:600px">

	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-white-to-transparent-gradient-background"></span>

	<div class="wp-block-cover__inner-container">

		<!-- wp:group {
			"layout":{
				"type":"constrained",
				"contentSize":"100%",
				"justifyContent":"left"
			}
		} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {
				"style":{
					"typography":{
						"textTransform":"uppercase",
						"fontSize":"small",
						"fontWeight":"600"
					}
				},
				"textColor":"primary"
			} -->
			<p class="has-primary-color has-text-color" style="font-size:medium;font-weight:700;text-transform:uppercase">Your Eyebrow Text</p>
			<!-- /wp:paragraph -->


			<!-- wp:heading {
				"level":1,
				"textAlign":"left",
				"style":{
					"typography":{
						"fontSize":"48px",
						"fontWeight":"700"
					}
				},
				"textColor":"black"
			} -->
			<h1 class="wp-block-heading has-text-align-left has-black-color has-text-color" style="font-size:48px;font-weight:700">Your Main Hero Headline Goes Here</h1>
			<!-- /wp:heading -->


			<!-- wp:paragraph {
				"textColor":"black",
				"fontSize":"medium"
			} -->
			<p class="has-black-color has-text-color has-medium-font-size">Add supporting hero copy here. Explain your product, service, or value proposition.</p>
			<!-- /wp:paragraph -->


			<!-- wp:buttons -->
			<div class="wp-block-buttons">

				<!-- wp:button {
					"backgroundColor":"primary",
					"textColor":"white"
				} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button">Learn More</a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->