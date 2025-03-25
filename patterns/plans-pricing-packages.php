<?php

/**
 * Title: Pricing Plans Packages section
 * Slug: invoice-360-vonome/plans-pricing-packages
 * Categories: Plans & Pricing
 * Block Types: core/template-part/plans-pricing-packages
 * Description: Invoice 360 - Smart Invoice Hero Section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$products = [
	[
		"title" => "ফ্রি",
		"description" => "দ্রুত, পেশাদার ও সহজ ইনভয়েসিং সমাধান!",
		"product" => "Smart Invoice",
		"color" => "#A8E1B4",
		"price" => "০০",
		"specs" => [
			"ইনভয়েস তৈরি",
			"ইনভয়েস কাস্টমাইজেশন",
			"বেসিক রিপোর্টিং",
			"আয় ও ব্যায় হিসাব সংরক্ষণ",
			"ট্যাক্স ক্যালকুলেশন",
			"অটোমেটেড পেমেন্ট ট্র্যাকিং",
		],
		"ctaBtn" => "https://app.invoice360.xyz/"
	],
	[
		"title" => "প্রফেশনাল",
		"description" => "অতিরিক্ত ফিচারসহ পেশাদার ইনভয়েসিং ও রিপোর্টিং",
		"product" => "Business Book",
		"color" => "#FEA36B",
		"price" => "১৯৯৯",
		"specs" => [
			"মাল্টি-বিজনেস ম্যানেজমেন্ট",
			"ট্যাক্স ক্যালকুলেশন",
			"অটোমেটেড পেমেন্ট ট্র্যাকিং",
			"ইনভেন্টরি ম্যানেজমেন্ট",
			"মাল্টি-পেমেন্ট অপশন",
			"২৪/৭ কাস্টমার সাপোর্ট",
		],
		"ctaBtn" => "https://app.invoice360.xyz/"
	],
	[
		"title" => "প্রিমিয়াম",
		"description" => "মাল্টি-বিজনেস, মাল্টি-ব্রাঞ্চ ও অ্যাডভান্সড অটোমেশন",
		"product" => "Business Book",
		"color" => "#149E85",
		"price" => "২৯৯৯",
		"specs" => [
			"মাল্টি-ব্রাঞ্চ সাপোর্ট",
			"মাল্টি-বিজনেস ম্যানেজমেন্ট",
			"ইনভেন্টরি ম্যানেজমেন্ট",
			"মাল্টি-পেমেন্ট অপশন",
			"বিস্তৃত রিপোর্টিং ও অ্যানালিটিক্স",
			"২৪/৭ কাস্টমার সাপোর্ট",
		],
		"ctaBtn" => "https://app.invoice360.xyz/"
	],
	[
		"title" => "এন্টারপ্রাইজ",
		"description" => "বড় প্রতিষ্ঠানের জন্য কাস্টমাইজেবল ইনভয়েসিং ও অ্যাকাউন্ট ম্যানেজমেন্ট",
		"product" => "Business Book",
		"color" => "#6183FF",
		"price" => "৩৯৯৯",
		"specs" => [
			"মাল্টি-ব্রাঞ্চ সাপোর্ট",
			"মাল্টি-বিজনেস ম্যানেজমেন্ট",
			"POS ইনভয়েসিং সিস্টেম",
			"ইনভেন্টরি ম্যানেজমেন্ট",
			"কাস্টম ইন্টিগ্রেশন",
			"২৪/৭ কাস্টমার সাপোর্ট",
		],
		"ctaBtn" => "https://app.invoice360.xyz/"
	]
];

?>
<section class="plans-pricing-packages">
	<div class="container max-xl py-16 md:py-28">
		<h1>আপনার ব্যবসার জন্য সঠিক প্ল্যান নির্বাচন করুন</h1>
		<div class="flex flex-col md:flex-row gap-6 md:gap-7 mt-12 justify-center">
			<?php foreach ($products as $key => $product): ?>
				<div class="product pricing">
					<div class="flex items-end gap-3 justify-start md:justify-between">
						<div class="flex gap-3 items-start">
							<div class="plan-color" style="background-color: <?php echo esc_html($product['color']) ?>">
							</div>
							<h3><?php echo esc_html($product['title']) ?></h3>
						</div>
						<p class="product-name"><?php echo esc_html($product['product']) ?></p>
					</div>
					<p class="pricing-desc"><?php echo esc_html($product['description']) ?></p>
					<h4>৳<?php echo esc_html($product['price']) ?> <span class="billing-cycle">/প্রতি বছর</span></h4>
					<button class="getStartedBtn <?php if ($key === 2) echo esc_attr('btnActive') ?>">
						<a href="<?php echo esc_url($product['ctaBtn']) ?>">বিনা মূল্য শুরু করুন</a>
					</button>
					<hr />
					<div class="mt-8 specs">
						<?php foreach ($product['specs'] as $spec): ?>
							<p class="flex items-center gap-2.5">
								<i class="fa-regular fa-circle-check text-[#36A54F]"></i>
								<?php echo esc_html($spec); ?>
							</p>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>