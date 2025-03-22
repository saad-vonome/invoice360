<?php

/**
 * Title: Hero Section
 * Slug: invoice-360-vonome/hero-section
 * Categories: home
 * Block Types: core/template-part/hero-section
 * Description: Hero Section with Company Short Description.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<section class="hero-section">
	<div class="max-xl mx-auto pt-16 md:pt-14 text-center">
		<div class="hero-content mx-auto">
			<div class="notification">
				<button>New</button>
				<p>শীঘ্রই আরো নতুন ফিচারস যুক্ত হচ্ছে</p>
				<p><i class="fa-solid fa-angle-right"></i></p>
			</div>
			<h1>Invoice360 – দ্রুত, সহজ ও স্মার্ট ইনভয়েসিং সমাধান</h1>
			<p class="md:pt-6">
				💼 আপনার ব্যবসার হিসাব-নিকাশ ও লেনদেন ব্যবস্থাপনাকে আনুন সম্পূর্ণ ডিজিটাল প্ল্যাটফর্মে!<br />
				⚡ সেকেন্ডের মধ্যে ইনভয়েস তৈরি করুন, পাঠান, পেমেন্ট ট্র্যাক ও পেমেন্ট গ্রহণ করুন।
			</p>
			<div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 justify-center my-8">
				<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
				<a class="header-btn actionBtn" href="#">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
				</a>
			</div>
			<div class="grid grid-cols-2 md:grid-cols-4 items-center gap-3 justify-center features">
				<p>
					<i class="fa-regular fa-circle-check"></i>
					ইনভয়েস ম্যানেজমেন্ট
				</p>
				<p>
					<i class="fa-regular fa-circle-check"></i>
					কাস্টমার ডেটাবেস
				</p>
				<p>
					<i class="fa-regular fa-circle-check"></i>
					বিক্রয় ও ব্যয়ের ট্র্যাকিং
				</p>
				<p>
					<i class="fa-regular fa-circle-check"></i>
					সহজ রিপোর্টিং
				</p>
			</div>
		</div>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/invoice-preview.png" alt="Invoice preview" class="mx-auto" />
	</div>
</section>