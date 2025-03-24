<?php

/**
 * Title: Smart Business Management
 * Slug: invoice-360-vonome/smart-business-management
 * Categories: Smart Invoice
 * Block Types: core/template-part/smart-business-management
 * Description: Smart Business Management
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "গ্রাহক ম্যানেজমেন্ট",
		"description" => "ক্লায়েন্টদের তথ্য সংরক্ষণ করুন, নির্দিষ্ট গ্রাহকের ইনভয়েস ও পেমেন্ট রিপোর্ট দেখুন, এবং লয়াল্টি ট্র্যাকিং চালু রাখুন।",
		"image" => "customer-management.png"
	],
	[
		"title" => "আইটেম ম্যানেজমেন্ট",
		"description" => "স্টক পর্যবেক্ষণ, দাম নির্ধারণ ও ডিসকাউন্ট সেট করুন, এবং স্বয়ংক্রিয়ভাবে স্টক আপডেট ও রিপোর্ট তৈরি করুন।",
		"image" => "item-management.png"
	],
	[
		"title" => "পেমেন্ট ম্যানেজমেন্ট",
		"description" => "ডিজিটাল, ক্যাশ ও ব্যাংক পেমেন্ট ম্যানেজ করুন, বকেয়া ইনভয়েস ট্র্যাক করুন, এবং স্বয়ংক্রিয় রিমাইন্ডার পাঠান।",
		"image" => "payment-management.png"
	],
	[
		"title" => null,
		"description" => null,
		"image" => "invoice-dashboard.png"
	],
	[
		"title" => "আয় ও ব্যয় ব্যবস্থাপনা",
		"description" => "ক্যাটাগরি অনুযায়ী আয় ও ব্যয় ট্র্যাক করুন, মাসিক বা বার্ষিক বিশ্লেষণ দেখুন, এবং ইনভয়েস ও অন্যান্য সোর্স থেকে রিপোর্ট সংগ্রহ করুন।",
		"image" => "income-expense-management.png"
	]
]

?>
<section class="smart-business-management">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="text-center">
			<h2>ব্যবসার আর্থিক ব্যবস্থাপনা এখন আরও সহজ!</h2>
			<p>Smart Invoice-এর মাধ্যমে ইনকাম, এক্সপেন্স, ইনভয়েস, পেমেন্ট, এবং গ্রাহক ম্যানেজমেন্ট করুন এক প্ল্যাটফর্মে! </p>
			<div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8 my-8">
				<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
				<a class="header-btn actionBtn" href="#">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
				</a>
			</div>
		</div>
		<!-- Feature two item in a row -->
		<div class="flex flex-col md:flex-row gap-8 mt-11 md:mt-14">
			<?php foreach (array_slice($features, 0, 2) as $feature): ?>
				<div class="feature">
					<h4><?php echo esc_html($feature['title']) ?></h4>
					<p><?php echo esc_html($feature['description']) ?></p>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
				</div>
			<?php endforeach ?>
		</div>
		<!-- Feature three item in a row -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5">
			<?php foreach (array_slice($features, 2, 5) as $feature): ?>
				<div class="feature <?php if ($feature['title'] === null) echo esc_attr('smart-feature-only-image') ?>">
					<h4><?php echo esc_html($feature['title']) ?></h4>
					<p><?php echo esc_html($feature['description']) ?></p>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>