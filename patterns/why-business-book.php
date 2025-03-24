<?php

/**
 * Title: Why Business Book
 * Slug: invoice-360-vonome/why-business-book
 * Categories: Business Book
 * Block Types: core/template-part/why-business-book
 * Description: Why Business Book section with our features.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "সম্পূর্ণ কাস্টমাইজেবল ইনভয়েসিং",
		"description" => "আপনার ব্যবসার ধরন অনুযায়ী ইনভয়েস ডিজাইন করুন।",
		"icon" => "invoice.png"
	],
	[
		"title" => "মাল্টি-বিজনেস ম্যানেজমেন্ট ",
		"description" => "এক বা একাধিক ব্যবসা একই প্ল্যাটফর্ম থেকে পরিচালনা করুন।",
		"icon" => "multi-business.png"
	],
	[
		"title" => "ইনভেন্টরি ম্যানেজমেন্ট",
		"description" => "সব ধরণের পণ্যের স্টক ও সাপ্লাই চেইন ট্র্যাকিং করুন।",
		"icon" => "parcel.png"
	],
	[
		"title" => "অ্যাকাউন্টস ও ফিনান্স সাপোর্ট",
		"description" => "ব্যবসার জন্য চার্ট অফ অ্যাকাউন্টস ও লেজার ব্যবস্থাপনা করুন।",
		"icon" => "calculator.png"
	],
	[
		"title" => "উন্নত রিপোর্টিং ও বিশ্লেষণ",
		"description" => "ব্যবসার আয়, ব্যয়, লাভ এবং ট্যাক্স রিপোর্ট পান সহজে।",
		"icon" => "stats.png"
	],
	[
		"title" => "পেমেন্ট ট্র্যাকিং ও রিমাইন্ডার",
		"description" => "ইনভয়েসের বকেয়া ও পরিশোধিত পেমেন্ট সহজে পরিচালনা করুন।",
		"icon" => "payment-success.png"
	]
];

$businessBookSpecs = [
	[
		"title" => "৯৯%",
		"description" => "গ্রাহক সন্তুষ্টি"
	],
	[
		"title" => "৮৬+",
		"description" => "ইনভয়েস ফিচারস"
	],
	[
		"title" => "৭৫%",
		"description" => "সময় সাশ্রয়"
	],
	[
		"title" => "২৪/৭",
		"description" => "গ্রাহক সহায়তা"
	],
]

?>
<section class="why-smart-invoice">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="md:flex items-center justify-between mb-10 md:mb-14 gap-32">
			<h2>কেন Business Book ব্যবহার করবেন?</h2>
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/why-business-book.png" alt="কেন Business Book ব্যবহার করবেন?" />
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
			<?php foreach ($features as $feature): ?>
				<div class="biz-feature-card">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/' . $feature['icon']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
					<div>
						<h5><?php echo esc_html($feature['title']); ?></h5>
						<p><?php echo esc_html($feature['description']); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- Business Book Specs -->
		<div class="grid grid-cols-2 md:grid-cols-4 justify-between gap-6 md:gap-20 mt-20 md:mt-40 biz-specs text-center py-8 md:py-16 px-10 md:px-20">
			<?php foreach ($businessBookSpecs as $spec): ?>
				<div class="md:flex items-center gap-4 biz-spec">
					<h1><?php echo esc_html($spec['title']) ?></h1>
					<p><?php echo esc_html($spec['description']) ?></p>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>