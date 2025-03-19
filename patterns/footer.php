<?php

/**
 * Title: Footer
 * Slug: invoice-360-vonome/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}},{"background-color": #000;}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-area" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide container">
		<!-- wp:site-logo /-->

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group footer-widgets">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"100%"} -->
				<div class="wp-block-column" style="flex-basis:100%">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/invoice-360-logo.png" alt="" srcset="" class="footer-logo">
					<p class="mt-4">সহজ, দ্রুত ও স্মার্ট ব্যবসা<br />ব্যবস্থাপনা!</p>
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

			<!-- wp:columns -->
			<div class="wp-block-columns d-block">
				<!-- wp:column {"width":"100%"} -->
				<h5 class="pb-4">প্রধান বিভাগ</h5>
				<ul>
					<li><a href="/">হোম</a></li>
					<li><a href="/about-us">আমাদের সম্পর্কে</a></li>
					<li><a href="/features">ফিচারসমূহ</a></li>
					<li><a href="/blog">ব্লগ</a></li>
				</ul>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:columns -->
			<div class="wp-block-columns d-block">
				<!-- wp:column {"width":"100%"} -->
				<h5 class="pb-4">আমাদের সমাধান</h5>
				<ul>
					<li><a href="/">Smart Invoice - ফ্রিতে ব্যবহার করুন</a></li>
					<li><a href="/">Business Book - পূর্ণাঙ্গ ব্যবসা ব্যবস্থাপনা</a></li>
				</ul>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns d-block">
				<!-- wp:column {"width":"100%"} -->
				<h5 class="pb-4">সহায়তা ও সম্পদ</h5>
				<ul>
					<li><a href="/">প্রায়শই জিজ্ঞাসিত প্রশ্ন</a></li>
					<li><a href="/">ব্যবহার সহায়িকা</a></li>
					<li><a href="/">API তথ্য ও সহায়তা</a></li>
				</ul>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns d-block foo">
				<!-- wp:column {"width":"100%"} -->
				<h5 class="pb-4">যোগাযোগ করুন</h5>
				<ul>
					<li><a href="/">ফোনঃ +৮৮০ ১৭XXXXXXX</a></li>
					<li><a href="/">ইমেইলঃ support@invoice360.xyz</a></li>
				</ul>
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
<div class="wp-block-group copy-wtite-section">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide container copy-wtite-area">
		<p class="has-small-font-size text-center"> &#9400; <?php echo date("Y");
															esc_html_e(' Invoice360 | সকল স্বত্ব সংরক্ষিত'); ?></p>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->