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
$faqs = [
	[
		"id" => 1,
		"title" => "ফার্মেসি ও মেডিকেল শপ",
		"description" => "এক্সপায়ারি ট্র্যাকিং, মাল্টি-ব্র্যান্ড ওষুধ বিক্রি, দ্রুত স্ক্যানিং ও বিলিং, স্টক ও বিক্রয় রিপোর্টিং।",
		"image" => "pos-dasboard.png",
	],
	[
		"id" => 2,
		"title" => "ছোট ও মাঝারি ব্যবসা",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 3,
		"title" => "রেস্টুরেন্ট ও ক্যাফে",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 4,
		"title" => "গার্মেন্টস ও ফ্যাশন স্টোর",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 5,
		"title" => "ইলেকট্রনিক ও প্রযুক্তি ব্যবসা",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 6,
		"title" => "জুয়েলারি ও বিলাসবহুল পণ্য",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 7,
		"title" => "ফার্নিচার ও নির্মাণ ব্যবসা",
		"description" => "",
		"image" => "",
	],
	[
		"id" => 8,
		"title" => "ফ্রিল্যান্সার ও ডিজিটাল এজেন্সি",
		"description" => "",
		"image" => "",
	],
]

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
		<!-- Categories Accordion -->
		<div class="pos-categories-mobile">
			<div class="accordion" id="faqs">
				<?php foreach ($faqs as $faq): ?>
					<div class="accordion-item">
						<h5 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($faq['id']) ?>" aria-expanded="true" aria-controls="<?php echo esc_attr($faq['id']) ?>">
								<?php echo esc_html($faq['title']) ?>
							</button>
						</h5>
						<div id="<?php echo esc_attr($faq['id']) ?>" class="accordion-collapse collapse <?php if ($faq['id'] === 1) echo esc_attr('show') ?>" data-bs-parent="#faqs">
							<div class="accordion-body">
								<p><?php echo esc_html($faq['description']) ?></p>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $faq['image']) ?>" />
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>