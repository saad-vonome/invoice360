<?php

/**
 * Title: Business Book Hero Section
 * Slug: invoice-360-vonome/biz-hero-section
 * Categories: Business Book
 * Block Types: core/template-part/biz-hero-section
 * Description: Invoice 360 - Business Book Hero Section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<section class="biz-hero-section">
	<div class="container max-xl pt-12 md:pt-20">
		<div class="biz-hero-content flex flex-col md:flex-row items-center justify-between">
			<h1>Business Book – সব ধরনের ব্যবসার সম্পূর্ণ ইনভয়েসিং সল্যুশন!</h1>
			<div class="biz-hero-desc">
				<p>
					Business Book হলো স্মার্ট ইনভয়েস-এর সমস্ত ফিচারের পাশাপাশি আরও উন্নত ও কাস্টমাইজেবল ব্যবসায়িক সমাধান, যা আপনাকে সম্পূর্ণ ফিনান্স ও অ্যাকাউন্ট ম্যানেজমেন্টের স্বাধীনতা দেবে।
				</p>
				<div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 mt-7 mb-4">
					<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
					<a class="header-btn actionBtn" href="#">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
					</a>
				</div>
				<div class="flex items-center gap-4">
					<p class="flex items-center gap-2">
						<i class="fa-regular fa-circle-check"></i>
						৭ দিনের ফ্রি ট্রাইল
					</p>
					<p class="flex items-center gap-2">
						<i class="fa-regular fa-circle-check"></i>
						পেমেন্ট করার দরকার নাই
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col md:flex-row items-center justify-center gap-10 md:gap-20 biz-hero-book-video">
			<!-- wp:pattern {"slug":"invoice-360-vonome/demo-video"} /-->
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/business-book-home.png" alt="Business Book Apps home page" />
		</div>
	</div>
</section>