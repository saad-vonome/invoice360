<?php

/**
 * Title: Products Section
 * Slug: invoice-360-vonome/products
 * Categories: home
 * Block Types: core/template-part/products
 * Description: Products with specs
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$products = [
	[
		"image" => "free.png",
		"title" => "Smart Invoice – সহজযোগ্য ইনভয়েস",
		"description" => "দ্রুত, পেশাদার ও সহজ ইনভয়েসিং সমাধান!",
		"priceImage" => "check.svg",
		"priceText" => "একদম ফ্রি!",
		"specs" => [
			"এক ক্লিকে ইনভয়েস তৈরি – সহজ ও দ্রুত ইনভয়েস জেনারেশন",
			"কাস্টমাইজেবল ইনভয়েস টেমপ্লেট ইনভয়েস ডিজাইন",
			"পেমেন্ট ট্র্যাকিং ও রিমাইন্ডার – বিল পরিশোধের জন্য স্বয়ংক্রিয় নোটিফিকেশন",
			"কাস্টমাইজেবল ইনভয়েস টেমপ্লেট – ব্র্যান্ডিং ও লোগোসহ ইনভয়েস ডিজাইন করুন",
			"মাল্টিপল কারেন্সি সাপোর্ট – আন্তর্জাতিক গ্রাহকদের জন্য বিভিন্ন মুদ্রা সমর্থন",
			"মোবাইল ও ওয়েব সাপোর্ট – যেকোনো ডিভাইস থেকে সহজে পরিচালনা করুন",
			"রিপোর্টিং ও বিশ্লেষণ – আয়-ব্যয়ের বিস্তারিত রিপোর্ট এবং ড্যাশবোর্ড"
		],
		"detailsUrl" => "/https://app.invoice360.xyz/"
	],
	[
		"image" => "premium.png",
		"title" => "Business Book – পূর্ণাঙ্গ ব্যবসা সমাধান",
		"description" => "আপনার সমস্ত ব্যবসা একসাথে পরিচালনার জন্য!",
		"priceImage" => "diamond.svg",
		"priceText" => "প্রিমিয়াম সমাধান!",
		"specs" => [
			"Smart Invoice – এর সব ফিচার্স",
			"সম্পূর্ণ কাস্টমাইজেবল ইনভয়েসিং – ব্যবসার ধরন অনুযায়ী",
			"মাল্টি-বিজনেস ও মাল্টি-ব্রাঞ্চ ব্যবস্থাপনা",
			"অটোমেটেড হিসাব রক্ষণাবেক্ষণ – খরচ, লাভ, এবং লেনদেনের স্বয়ংক্রিয় হিসাব",
			"ইনভেন্টরি ম্যানেজমেন্ট – পণ্যের স্টক ও সাপ্লাই চেইন ট্র্যাকিং",
			"অ্যাকাউন্টস ও ফিনান্স সাপোর্ট – চার্ট অফ অ্যাকাউন্টস ও লেজার ব্যবস্থাপনা",
			"উন্নত রিপোর্টিং ও বিশ্লেষণ – আয়, ব্যয়, লাভ এবং ট্যাক্স রিপোর্ট"
		],
		"detailsUrl" => "/https://app.invoice360.xyz/"
	]
];

?>

<section class="products">
	<div class="container max-xl mx-auto">
		<h2 class="text-center">আপনার ব্যবসার জন্য সঠিক সমাধান বেছে নিন!</h2>
		<div class="flex gap-12 mt-12 justify-center">
			<?php foreach ($products as $product): ?>
				<div class="product">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>" />
					<h4><?php echo esc_html($product['title']); ?></h4>
					<p><?php echo esc_html($product['description']); ?></p>
					<div class="price">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $product['priceImage']); ?>" alt="<?php echo esc_attr($product['priceText']); ?>" />
						<h6><?php echo esc_html($product['priceText']); ?></h6>
					</div>
					<div class="mt-8 specs">
						<?php foreach ($product['specs'] as $spec): ?>
							<p>
								<i class="fa-solid fa-circle-check"></i>
								<?php echo esc_html($spec); ?>
							</p>
						<?php endforeach; ?>
					</div>
					<button class="pt-12 pb-6">
						<a href="<?php echo esc_url($product['detailsUrl']) ?>" class="w-full btnPrimary">আরো বিস্তারিত দেখুন</a>
					</button>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>