<?php

/**
 * Title: Smart Invoice Hero Section
 * Slug: invoice-360-vonome/smart-hero-section
 * Categories: Smart Invoice
 * Block Types: core/template-part/smart-hero-section
 * Description: Invoice 360 - Smart Invoice Hero Section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<section class="smart-hero-section">
	<div class="container max-xl py-16 md:py-28 flex flex-col md:flex-row items-center gap-10 md:gap-20">
		<div class="smart-hero-content">
			<p class="hero-notification">
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/flame.png" alt="Fire/Flame Image" />
				একদম ফ্রি!
			</p>
			<h1>Smart Invoice – সহজ, দ্রুত ও পেশাদার ইনভয়েস ম্যানেজমেন্ট</h1>
			<p class="md:pt-6">
				আপনার ব্যবসার জন্য সহজ ও পেশাদার ইনভয়েস তৈরি করুন মাত্র মাত্র ৩০ সেকেন্ডে! Smart Invoice দিয়ে ইনভয়েস ম্যানেজমেন্ট হবে আরও স্বয়ংক্রিয়, সুরক্ষিত ও দ্রুত।
			</p>
			<div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 my-8">
				<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
				<a class="header-btn actionBtn" href="#">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
				</a>
			</div>
		</div>
		<!-- wp:pattern {"slug":"invoice-360-vonome/demo-video"} /-->
	</div>
</section>