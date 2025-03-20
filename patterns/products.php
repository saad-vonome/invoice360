<?php

/**
 * Title: Products Section
 * Slug: invoice-360-vonome/products
 * Categories: home
 * Block Types: core/template-part/products
 * Description: Products with features
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<section class="products">
	<div class="container max-xl mx-auto">
		<h2 class="text-center">আপনার ব্যবসার জন্য সঠিক সমাধান বেছে নিন!</h2>
		<div class="flex gap-12 mt-12 justify-center">
			<div class="product">
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/free.png" alt="Smart Invoice" />
				<h4>Smart Invoice – সহজযোগ্য ইনভয়েস</h4>
				<p>দ্রুত, পেশাদার ও সহজ ইনভয়েসিং সমাধান!</p>
				<div class="price">
					<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/check.svg" alt="একদম ফ্রি!" />
					<h6>একদম ফ্রি!</h6>
				</div>
			</div>

			<!-- Business Book -->
			<div class="product">
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/premium.png" alt="Smart Invoice" />
				<h4>Business Book – পূর্ণাঙ্গ ব্যবসা সমাধান</h4>
				<p>আপনার সমস্ত ব্যবসা একসাথে পরিচালনার জন্য!</p>
				<div class="price">
					<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/diamond.svg" alt="প্রিমিয়াম সমাধান!" />
					<h6>প্রিমিয়াম সমাধান!</h6>
				</div>
			</div>
		</div>
	</div>
</section>