<?php

/**
 * Title: Why Choose Us
 * Slug: invoice-360-vonome/why-choose-us
 * Categories: home
 * Block Types: core/template-part/why-choose-us
 * Description: Why Choose us section with our features.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "সহজ ব্যবহার",
		"description" => "ইউজার-ফ্রেন্ডলি ইন্টারফেস, ঝামেলামুক্ত অভিজ্ঞতা নিশ্চিত করে।",
		"image" => "easy-use.png"
	],
	[
		"title" => "পেমেন্ট ট্র্যাকিং",
		"description" => "বকেয়া ও পরিশোধিত ইনভয়েস সহজেই পর্যবেক্ষণ করুন।",
		"image" => "payment-tracking.png"
	],
	[
		"title" => "মাল্টিপল পেমেন্ট অপশন",
		"description" => "ব্যাংক, মোবাইল ব্যাংকিং ও অনলাইন পেমেন্ট সাপোর্ট।",
		"image" => "multi-payment-option.png"
	],
	[
		"title" => "বিস্তারিত রিপোর্টিং",
		"description" => "ব্যবসার রাজস্ব ও লেনদেনের বিশদ বিশ্লেষণ করুন।",
		"image" => "detailed-reporting.png"
	],
	[
		"title" => "মাল্টি-বিজনেস ম্যানেজমেন্ট",
		"description" => "একাধিক ব্যবসা একই প্ল্যাটফর্ম থেকে পরিচালনা করুন।",
		"image" => "multi-business.png"
	],
	[
		"title" => "২৪/৭ সাপোর্ট",
		"description" => "যে কোনো সময় দ্রুত ও বিশ্বস্ত কাস্টমার সাপোর্ট পান।",
		"image" => "support.png"
	]
];

?>
<section class="why-choose-us">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="md:flex items-center justify-between mb-10 md:mb-14">
			<h2>কেন Invoice360 আপনার জন্য সেরা পছন্দ?</h2>
			<p class="why-choose-details">
				আমাদের অত্যাধুনিক Invoice Management Software আপনার ব্যবসার লেনদেন সহজ, দ্রুত এবং নির্ভুলভাবে পরিচালনা করতে সাহায্য করবে।
			</p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap:6 md:gap-10">
			<!-- Easy Use -->
			<?php foreach ($features as $feature): ?>
				<div>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
					<h5 class="pt-6"><?php echo esc_html($feature['title']); ?></h5>
					<p><?php echo esc_html($feature['description']); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>