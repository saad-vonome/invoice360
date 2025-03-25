<?php

/**
 * Title: Business Book Features
 * Slug: invoice-360-vonome/biz-features
 * Categories: Business Book
 * Block Types: core/template-part/biz-features
 * Description: Business Book Features
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "সম্পূর্ণ কাস্টমাইজেবল ইনভয়েসিং",
		"description" => "আপনার ব্যবসার ধরন অনুযায়ী ইনভয়েস ডিজাইন করুন। বিভিন্ন টেমপ্লেট, ব্র্যান্ডিং অপশন এবং অর্থপ্রদানের শর্তাবলী সেট করার সুযোগ পাবেন।",
		"image" => "invoice-template.png"
	],
	[
		"title" => "ই-কমার্স ও POS ইন্টিগ্রেশন",
		"description" => "Shopify, Woocomerce ও Facebook Shop-এর ইন্টিগ্রেশন করে অটো-ইনভয়েস তৈরি করুন এবং ফিজিক্যাল স্টোরের বিক্রয় ইনভয়েস সিস্টেমে সংযুক্ত করুন।",
		"image" => "business-platform-icons.png"
	],
	[
		"title" => "মাল্টি-বিজনেস ও মাল্টি-ব্রাঞ্চ ব্যবস্থাপনা",
		"description" => "একাধিক ব্যবসা ও শাখা পরিচালনা করতে পারবেন একই প্ল্যাটফর্ম থেকে। প্রতিটি ব্রাঞ্চের জন্য আলাদা রিপোর্টিং সুবিধা থাকবে।",
		"image" => "multi-business-ui.png"
	],
	[
		"title" => "ইনভেন্টরি ম্যানেজমেন্ট",
		"description" => "পণ্য স্টক ট্র্যাকিং এবং সাপ্লাই চেইন ম্যানেজমেন্ট নিশ্চিত করুন। মজুত ও বিক্রির তথ্য রিয়েল-টাইমে পর্যবেক্ষণ করুন।",
		"image" => "inventory-management.png"
	],
	[
		"title" => "অ্যাকাউন্টস ও ফিনান্স সাপোর্ট",
		"description" => "চার্ট অফ অ্যাকাউন্টস এবং লেজার ব্যবস্থাপনার মাধ্যমে হিসাব সংরক্ষণ করুন এবং সহজেই অডিট করুন।",
		"image" => "account-finance-support.png"
	],
	[
		"title" => "উন্নত রিপোর্টিং ও বিশ্লেষণ",
		"description" => "আয়, ব্যয়, মুনাফা, ট্যাক্স রিপোর্টসহ বিশদ বিশ্লেষণ পান এবং ব্যবসায়িক সিদ্ধান্ত নিন আরও দক্ষতার সাথে।",
		"image" => "register-reports.png"
	]
]

?>
<section class="biz-features">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="text-center">
			<h2>Business Book হল Smart Invoice-এর সব ফিচারের সাথে আরও উন্নত ও কাস্টমাইজেবল সমাধান</h2>
			<div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8">
				<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
				<a class="header-btn actionBtn" href="#">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
				</a>
			</div>
		</div>
		<!-- Feature first row -->
		<div class="flex flex-col md:flex-row gap-8 mt-14">
			<div class="biz-feature">
				<h4><?php echo esc_html($features[0]['title']) ?></h4>
				<p><?php echo esc_html($features[0]['description']) ?></p>
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $features[0]['image']); ?>" alt="<?php echo esc_attr($features[0]['title']) ?>">
			</div>
			<div class="flex flex-col gap-8">
				<div class="biz-feature">
					<h4><?php echo esc_html($features[1]['title']) ?></h4>
					<p><?php echo esc_html($features[1]['description']) ?></p>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $features[1]['image']); ?>" alt="<?php echo esc_attr($features[1]['title']) ?>">
				</div>
				<div class="biz-feature">
					<h4><?php echo esc_html($features[2]['title']) ?></h4>
					<p><?php echo esc_html($features[2]['description']) ?></p>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $features[2]['image']); ?>" alt="<?php echo esc_attr($features[2]['title']) ?>">
				</div>
			</div>
		</div>

		<!-- Second row -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
			<?php for ($i = 3; $i < 6; $i++) : ?>
				<div class="biz-feature">
					<h4><?php echo esc_html($features[$i]['title']) ?></h4>
					<p><?php echo esc_html($features[$i]['description']) ?></p>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $features[$i]['image']); ?>" alt="Feature <?php echo $i + 1; ?>">
				</div>
			<?php endfor; ?>
		</div>
</section>