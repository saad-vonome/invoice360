<?php

/**
 * Title: Why Smart Invoice
 * Slug: invoice-360-vonome/why-smart-invoice
 * Categories: Smart Invoice
 * Block Types: core/template-part/why-smart-invoice
 * Description: Why Smart Invoice section with our features.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	[
		"title" => "ওয়েব ভার্সনের সব ফিচার মোবাইলে",
		"description" => "মোবাইল অ্যাপেও পাওয়া যাবে, ইনভয়েস তৈরি থেকে পেমেন্ট ট্র্যাকিং পর্যন্ত সবকিছু",
		"image" => "features.png"
	],
	[
		"title" => null,
		"description" => null,
		"image" => "why-smart-invoice.png"
	],
	[
		"title" => "অটোমেটিক পেমেন্ট ট্র্যাকিং",
		"description" => "কে কখন টাকা দিলো, সব রিপোর্ট এক জায়গায়, প্রতিটি লেনদেন সহজে পর্যবেক্ষণ করুন",
		"image" => "payment-success.png"
	],
	[
		"title" => "অটোমেটিক রিমাইন্ডার",
		"description" => "বিলের তারিখ পেরোলে নির্দিষ্ট সময়ে ক্লায়েন্টকে স্বয়ংক্রিয় নোটিফিকেশন পাঠান",
		"image" => "notification.png"
	],
	[
		"title" => "মাল্টি-কারেন্সি সাপোর্ট",
		"description" => "স্থানীয় ও আন্তর্জাতিক যেকোন লেনদেন করুন আরও সহজে",
		"image" => "money-exchange.png"
	],
	[
		"title" => "কাস্টম ইনভয়েস ডিজাইন",
		"description" => "আপনার ব্র্যান্ড অনুযায়ী ইনভয়েসকে নিজের মত করে সাজান",
		"image" => "custom-invoice.png"
	]
];

?>
<section class="why-smart-invoice">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="md:flex items-center justify-between mb-10 md:mb-14 gap-32">
			<div>
				<h2>কেন Smart Invoice?</h2>
				<p class="desc">
					ইনভয়েস তৈরি থেকে পেমেন্ট ট্র্যাকিং—সবকিছু এক প্ল্যাটফর্মে দ্রুত ও নির্ভরযোগ্যভাবে পরিচালনা করুন!
				</p>
			</div>
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/qoute line.png" alt="qoute line" class="hidden md:block" />
			<div class="flex items-center gap-6">
				<div class="w-[200px]">
					<h3>৩০ সেকেন্ডে</h3>
					<p>
						ইনভয়েস তৈরি করুন ও ব্যবসার কার্যক্ষমতা বাড়ান।
					</p>
				</div>
				<div class="w-[200px]">
					<h3>৯৯.৯%</h3>
					<p>
						ফ্রি! – ঝামেলা ছাড়াই আজই শুরু করুন!
					</p>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
			<?php foreach ($features as $feature): ?>
				<?php if ($feature['title']): ?>
					<div class="smart-feature-card">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
						<div>
							<h5><?php echo esc_html($feature['title']); ?></h5>
							<p class="pt-2"><?php echo esc_html($feature['description']); ?></p>
						</div>
					</div>
				<?php else: ?>
					<div>
						<img
							src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>"
							alt="<?php echo esc_attr($feature['title']) ?>"
							class="h-full hidden md:block" />
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>