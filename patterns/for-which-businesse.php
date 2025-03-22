<?php

/**
 * Title: For Which Business
 * Slug: invoice-360-vonome/for-which-businesse
 * Categories: home
 * Block Types: core/template-part/for-which-businesse
 * Description: Invoice 360 - Perfect for your business.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$businesses = [
	[
		"title" => "ছোট ও মাঝারি ব্যবসা",
		"description" => "দোকান, স্টার্টআপ এবং ক্ষুদ্র ব্যবসার জন্য সহজ ও কার্যকর ইনভয়েসিং",
		"dot" => "dotviolet.svg"
	],
	[
		"title" => "রেস্টুরেন্ট ও ক্যাফে",
		"description" => "মেনু সেটআপ, অর্ডার ম্যানেজমেন্ট, বিলিং ও কাস্টমার ট্র্যাকিং",
		"dot" => "dotdanger.svg"
	],
	[
		"title" => "সুপার শপ ও খুচরা বিক্রেতা",
		"description" => "বারকোড স্ক্যানিং, স্টক ম্যানেজমেন্ট ও দ্রুত বিক্রয় হিসাব",
		"dot" => "dotprimary.svg"
	],
	[
		"title" => "ফার্মেসি ও মেডিকেল শপ",
		"description" => "মেডিসিন স্টক, মেয়াদ উত্তীর্ণ পণ্য চিহ্নিতকরণ ও বিক্রয় রিপোর্টিং",
		"dot" => "dotcyan.svg"
	],
	[
		"title" => "গার্মেন্টস ও ফ্যাশন স্টোর",
		"description" => "অর্ডার ভিত্তিক উৎপাদন, ইনভেন্টরি, অফার ও ডিসকাউন্টের অটোমেটিক হিসাব",
		"dot" => "dotsecondary.svg"
	],
	[
		"title" => "ইলেকট্রনিক ও প্রযুক্তি ব্যবসা",
		"description" => "ওয়ারেন্টি, সার্ভিস ট্র্যাকিং ও প্রোডাক্ট ক্যাটাগরি অনুযায়ী বিক্রয় বিশ্লেষণ",
		"dot" => "dotpurple.svg"
	],
	[
		"title" => "জুয়েলারি ও বিলাসবহুল পণ্য",
		"description" => "মূল্যবান পণ্যের সঠিক হিসাব, কাস্টম অর্ডার ও ইনভয়েস জেনারেশন",
		"dot" => "dotprimary.svg"
	],
	[
		"title" => "ফার্নিচার ও নির্মাণ ব্যবসা",
		"description" => "বৃহৎ ও কাস্টম প্রজেক্টের কোটেশন, সরবরাহ ও ইনভেন্টরি ট্র্যাকিং",
		"dot" => "dotgreen.svg"
	],
	[
		"title" => "ফ্রিল্যান্সার ও ডিজিটাল এজেন্সি",
		"description" => "কাজের ভিত্তিতে ইনভয়েস তৈরি ও ট্র্যাকিং, পেমেন্ট গেটওয়ে সাপোর্ট",
		"dot" => "dotviolet.svg"
	]
];

?>
<section class="which-businesse">
	<div class="container max-xl mx-auto py-24 md:py-32">
		<div class="md:flex items-center justify-between mb-10 md:mb-14">
			<div>
				<h2>Invoice360 যে সব ব্যবসার জন্য উপযোগী</h2>
				<p class="mt-4">
					সকল ধরণের ব্যবসার জন্য উপযুক্ত, ছোট উদ্যোগ থেকে<br />
					বড় প্রতিষ্ঠানের জন্য এটি আদর্শ সমাধান!
				</p>
			</div>
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/happy-business-owner.png" alt="সুখী ব্যবসায়ী" class="business-owner" />
		</div>
		<div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-12 which-businesse-details">
			<?php foreach ($businesses as $business): ?>
				<div class="which-businesse-single">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/' . $business['dot']) ?>" />
					<h5><?php echo esc_html($business['title']); ?></h5>
					<p><?php echo esc_html($business['description']); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 justify-center my-8">
			<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">বিজনেস বুকে বিস্তারিত দেখুন</a>
			<a href="https://app.invoice360.xyz/" class="btnPrimaryAlt actionBtn">ফ্রি ব্যবহার করুন</a>
		</div>
	</div>
</section>