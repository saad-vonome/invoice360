<?php

/**
 * Title: Smart Invoice Income Expense
 * Slug: invoice-360-vonome/smart-income-expense
 * Categories: Smart Invoice
 * Block Types: core/template-part/smart-income-expense
 * Description: Smart Invoice Income Expense
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
	["title" => "প্রতিটি লেনদেন স্বয়ংক্রিয়ভাবে সংরক্ষণ ও ক্যাটাগরাইজ করুন।"],
	["title" => "যেকোন খরচ, বিল, ইনভেন্টরিসহ বিভিন্ন ব্যয় আলাদা করুন।"],
	["title" => "মাসিক, ত্রৈমাসিক ও বাৎসরিক আয়-ব্যয়ের বিশদ রিপোর্ট পান।"],
	["title" => "প্রতিটি লেনদেনের উপর নির্ভুল ট্যাক্স ক্যালকুলেশন করুন।"]
]

?>
<section class="smart-income-expense">
	<div class="container max-xl mx-auto py-24 md:py-36">
		<div class="md:flex items-center justify-between">
			<div>
				<h2>আয় ও ব্যয়ের সম্পূর্ণ নিয়ন্ত্রণ – সহজ হিসাব, স্মার্ট সিদ্ধান্ত</h2>
				<p>Invoice360-এর <strong>Income & Expense Management</strong> ফিচার আপনাকে স্বয়ংক্রিয় হিসাব, বিশ্লেষণ ও রিপোর্টিং সুবিধা দিয়ে আপনার ব্যবসার আয়-ব্যয়ের স্বচ্ছতা নিশ্চিত করতে সাহায্য করবে।</p>
				<div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 my-8">
					<a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn">ফ্রি ব্যবহার করুন</a>
					<a class="header-btn actionBtn" href="#">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
					</a>
				</div>
				<div class="my-10 md:my-14">
					<hr />
				</div>
				<div class="grid grid-cols-2 gap-4 md:gap-8 income-expense-feature">
					<!-- features -->
					<?php foreach ($features as $feature): ?>
						<p class="flex items-start gap-2 md:gap-4">
							<i class="fa-solid fa-square-check text-[#149E85]"></i>
							<?php echo esc_html($feature['title']) ?>
						</p>
					<?php endforeach ?>
				</div>
			</div>
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/smart-income-expense.png" alt="Income Expense Features" />
		</div>
	</div>
</section>