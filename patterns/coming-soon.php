<?php

/**
 * Title: Coming Soon Page
 * Slug: invoice-360-vonome/coming-soon
 * Categories: Coming Soon
 * Block Types: core/template-part/coming-soon
 * Description: Coming Soon Page.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}},{"background-color": #000;}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group container" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo /-->

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"100%"} -->
				<div class="wp-block-column text-center coming-soon" style="flex-basis:100%">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/coming-soon.jpg" alt="" srcset="">
					<p>আমরা কিছু অসাধারণ আপডেট ও নতুন ফিচার নিয়ে কাজ করছি! আমাদের নতুন পরিষেবা শীঘ্রই চালু হতে যাচ্ছে। নতুন অভিজ্ঞতা পেতে আমাদের সঙ্গে থাকুন!</p>
					<a class="btnPrimary" href="#">হোমপেজে ফিরে যান</a>
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:spacer {"height":"var:preset|spacing|40","width":"0px"} -->
					<div style="height:var(--wp--preset--spacing--40);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}},{"background-color": #000;}},"layout":{"type":"constrained"}} -->
<!-- /wp:group -->