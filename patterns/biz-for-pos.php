<?php

/**
 * Title: Business Book for All kind of POS
 * Slug: invoice-360-vonome/biz-for-pos
 * Categories: Business Book
 * Block Types: core/template-part/biz-for-pos
 * Description: Business Book for All kind of POS
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "দ্রুত ও সহজ বিলিং",
		"description" => "মাত্র কয়েক সেকেন্ডেই ইনভয়েস জেনারেট ও প্রিন্ট করুন।",
		"image" => "fat-easy-billing.png"
	],
	[
		"title" => "Sunmi POS টার্মিনাল সাপোর্ট",
		"description" => "মোবাইল, ট্যাব ও বড় ডিসপ্লেতে নির্বিঘ্নে পরিচালনা করুন।",
		"image" => "sunmi-pos-terminal.png"
	],
	[
		"title" => "অটোমেটেড হিসাব ও ডেইলি রিপোর্টিং",
		"description" => "বিক্রয়, ইনভেন্টরি ও পেমেন্ট ট্র্যাকিং প্ল্যাটফর্মেই পরিচালনা করুন।",
		"image" => "automated-calculation-reporting.png"
	]
];

?>
<section class="biz-all-pos">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="md:flex items-center justify-between mb-10 md:mb-14">
			<h2>সব ধরনের ব্যবসার জন্য POS ইনভয়েসিং সিস্টেম</h2>
			<p class="biz-pos-desc">
				Business Book নিয়ে এলো ব্যবসা অনুযায়ী POS (Point of Sale) ইন্টারফেস, দ্রুত বিক্রয়, ইনভয়েস তৈরি, স্টক ম্যানেজমেন্ট এবং পেমেন্ট প্রসেসিং—সবকিছু একই প্ল্যাটফর্মে!
			</p>
		</div>
		<div class="flex items-center gap-20 pos-feature-image">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/pos-categories.png" alt="সব ধরনের ক্যাটেগরি" />
			<div class="pos-dashbaord-img">
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/pos-dasboard.png" alt="পস ড্যাশবোর্ড" />
			</div>
		</div>
		<div class="pos-card-wrapper">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
				<?php foreach ($features as $feature): ?>
					<div class="biz-all-pos-card">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
						<div>
							<h5><?php echo esc_html($feature['title']); ?></h5>
							<p><?php echo esc_html($feature['description']); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>