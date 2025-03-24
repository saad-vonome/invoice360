<?php

/**
 * Title: Smart Invoice Free Solution
 * Slug: invoice-360-vonome/smart-free-solution
 * Categories: Smart Invoice
 * Block Types: core/template-part/smart-free-solution
 * Description: Smart Invoice Free Solution.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$smartSpecs = [
	[
		"problem" => "ইনভয়েস তৈরি করতে অনেক সময় লাগে?",
		"solution" => "মাত্র ৩০ সেকেন্ডে ইনভয়েস তৈরি করুন!"
	],
	[
		"problem" => "পেমেন্ট ট্র্যাক করতে সমস্যা হচ্ছে?",
		"solution" => "আমরা দিচ্ছি স্বয়ংক্রিয় ট্র্যাকিং ও রিপোর্টিং সিস্টেম।"
	],
	[
		"problem" => "ক্লায়েন্টকে বিল পেমেন্টের জন্য মনে করিয়ে দিতে হয়?",
		"solution" => "অটোমেটেড রিমাইন্ডার পাঠান ও সময় বাঁচান।"
	],
	[
		"problem" => "কাগজের বিল হারিয়ে যায়?",
		"solution" => "রয়েছে ক্লাউড-ভিত্তিক সংরক্ষণ ও ব্যাকআপ সুবিধা।"
	],
	[
		"problem" => "পেমেন্ট প্রক্রিয়া জটিল?",
		"solution" => "রয়েছে একাধিক পেমেন্ট গেটওয়ে ও ট্র্যাকিং সিস্টেম।"
	]
];

?>
<section class="smart-free-solution">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="flex flex-col md:flex-row items-center justify-between">
			<h2>আপনার সমস্যার সমাধান—একমাত্র আমরাই দিচ্ছি ফ্রিতে!</h2>
			<p class="smart-free-solution-desc">স্মার্ট ইনভয়েস সিস্টেমের মাধ্যমে আপনার ব্যবসা সহজ, দ্রুত ও নিরাপদ করুন—সময় বাঁচান, পেমেন্ট ট্র্যাক করুন, এবং ক্লায়েন্টদের সাথে সম্পর্ক মজবুত করুন!</p>
		</div>
		<div class="flex flex-col md:flex-row items-center gap-6 md:gap-0 justify-center mt-11 md:mt-10">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/call-to-action.png" alt="Call to action image" />
			<div class="product smart-solution-specs">
				<?php foreach ($smartSpecs as $spec): ?>
					<div class="spec">
						<p class="others-problem">
							<i class="fa-regular fa-circle-question text-[#FEA36B]"></i>
							<?php echo esc_html($spec['problem']); ?>
						</p>
						<p class="smart-solution">
							<i class="fa-regular fa-circle-check text-[#149E85]"></i>
							<?php echo esc_html($spec['solution']); ?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>