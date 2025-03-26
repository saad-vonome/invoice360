<?php

/**
 * Title: Invoice 360 - Package features section
 * Slug: invoice-360-vonome/package-features
 * Categories: Plans & Pricing
 * Block Types: core/template-part/package-features
 * Description: Invoice 360 - Package features section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$plans = [
	[
		"title" => "ইনভয়েস তৈরি",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "ইনভয়েস কাস্টমাইজেশন",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "বেসিক রিপোর্টিং",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "আয় ও ব্যায় হিসাব সংরক্ষণ",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "ট্যাক্স ক্যালকুলেশন",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "অটোমেটেড পেমেন্ট ট্র্যাকিং",
		"isFree" => true,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "মাল্টি-ব্রাঞ্চ সাপোর্ট",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "মাল্টি-বিজনেস ম্যানেজমেন্ট",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "POS ইনভয়েসিং সিস্টেম",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "ইনভেন্টরি ম্যানেজমেন্ট",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "কাস্টম ইন্টিগ্রেশন",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "মাল্টি-পেমেন্ট অপশন",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "বিস্তৃত রিপোর্টিং ও অ্যানালিটিক্স",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "চার্টঅফ একাউন্টিংস ও জার্নাল",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	],
	[
		"title" => "২৪/৭ কাস্টমার সাপোর্ট	",
		"isFree" => false,
		"isProfessional" => true,
		"isPremium" => true,
		"isEnterprice" => true
	]
];
?>
<section class="package-features">
	<div class="container max-xl py-16 md:py-28">
		<h2 class="text-center text-2xl font-bold mb-6">আমাদের মূল পরিকল্পনা ও ফিচার</h2>
		<div class="overflow-x-auto sticky-parent">
			<table class="w-full mx-auto border-collapse feature-table">
				<thead>
					<tr class="text-white">
						<th class="p-2 md:p-4 text-left name-col name-header">প্ল্যানের নাম</th>
						<th class="p-2 md:p-4 text-center">ফ্রি</th>
						<th class="p-2 md:p-4 text-center">প্রফেশনাল</th>
						<th class="p-2 md:p-4 text-center">প্রিমিয়াম</th>
						<th class="p-2 md:p-4 text-center">এন্টারপ্রাইজ</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($plans as $plan): ?>
						<tr>
							<th class="p-2 md:p-4 text-left name-col name-title"><?php echo esc_html($plan['title']) ?></th>
							<td class="p-2 md:p-4 text-center">
								<?php echo $plan['isFree'] ? '<i class="fa-solid fa-circle-check"></i>' : '<i class="fa-solid fa-circle-xmark"></i>'; ?>
							</td>
							<td class="p-2 md:p-4 text-center">
								<?php echo $plan['isProfessional'] ? '<i class="fa-solid fa-circle-check"></i>' : '<i class="fa-solid fa-circle-xmark"></i>'; ?>
							</td>
							<td class="p-2 md:p-4 text-center">
								<?php echo $plan['isPremium'] ? '<i class="fa-solid fa-circle-check"></i>' : '<i class="fa-solid fa-circle-xmark"></i>'; ?>
							</td>
							<td class="p-2 md:p-4 text-center">
								<?php echo $plan['isEnterprice'] ? '<i class="fa-solid fa-circle-check"></i>' : '<i class="fa-solid fa-circle-xmark"></i>'; ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

	</div>
</section>