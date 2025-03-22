<?php

/**
 * Title: Features Section
 * Slug: invoice-360-vonome/features
 * Categories: home
 * Block Types: core/template-part/features
 * Description: Invoice 360 -Features in details.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$features = [
    [
        "title" => "পেমেন্ট সংগ্রহ ও ট্র্যাকিং",
        "description" => "গ্রাহকের জন্য সহজে পেমেন্ট লিংক তৈরি করুন, মোবাইল বা ইমেইলে পাঠান এবং ক্যাশ, ব্যাংক ট্রান্সফার বা ডিজিটাল পেমেন্টসহ সব লেনদেন ট্র্যাক করুন।",
        "image" => "feature-payment.png"
    ],
    [
        "title" => "রিপোর্টিং ও অ্যানালিটিক্স",
        "description" => "ইনকাম, ব্যয়, লভ্যাংশের রিপোর্ট দেখুন, প্রয়োজন অনুযায়ী কাস্টম রিপোর্ট তৈরি ও ডাউনলোড করুন এবং গুরুত্বপূর্ণ ব্যবসায়িক ডেটা লাইভ ড্যাশবোর্ডে মনিটর করুন।",
        "image" => "feature-reporting.png"
    ],
    [
        "title" => "ইনভয়েস ম্যানেজমেন্ট",
        "description" => "আপনার ব্র্যান্ডিং অনুসারে ইনভয়েস ডিজাইন করুন এবং স্থানীয় ও আন্তর্জাতিক গ্রাহকদের জন্য মুদ্রা ব্যবহার করুন।",
        "image" => "feature-invoice-management.png"
    ],
    [
        "title" => "ই-কমার্স ও POS ইন্টিগ্রেশন",
        "description" => "Shopify ও Facebook Shop-এর ইন্টিগ্রেশন করে অটো-ইনভয়েস তৈরি করুন এবং ফিজিক্যাল স্টোরের বিক্রয় ইনভয়েস সিস্টেমে সংযুক্ত করুন।",
        "image" => "feature-ecom-pos.png"
    ],
    [
        "title" => "নির্ভুল একাউন্টিং সমাধান",
        "description" => "প্রতিদিনের আয় ও ব্যয়ের রেকর্ড, ক্যাটাগরি ভিত্তিক শ্রেণীবদ্ধকরণ ও মাসিক/বাৎসরিক রিপোর্ট স্বয়ংক্রিয়ভাবে সংরক্ষণ করুন।",
        "image" => "feature-accounting.png"
    ]
]

?>
<section class="features">
    <div class="container max-xl mx-auto py-24 md:py-32">
        <div class="block mx-auto text-center">
            <h2>Invoice360-এর শক্তিশালী ফিচারসমূহ – ব্যবসা ব্যবস্থাপনা আরও সহজ!</h2>
            <a href="https://app.invoice360.xyz/login" class="btnPrimary">ফ্রি ব্যবহার করুন</a>
        </div>
        <!-- Feature two item in a row -->
        <div class="flex flex-col md:flex-row gap-8 mt-11 md:mt-14">
            <?php foreach (array_slice($features, 0, 2) as $feature): ?>
                <div class="feature">
                    <h4><?php echo esc_html($feature['title']) ?></h4>
                    <p><?php echo esc_html($feature['description']) ?></p>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
                </div>
            <?php endforeach ?>
        </div>
        <!-- Feature three item in a row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5">
            <?php foreach (array_slice($features, 2, 5) as $feature): ?>
                <div class="feature">
                    <h4><?php echo esc_html($feature['title']) ?></h4>
                    <p><?php echo esc_html($feature['description']) ?></p>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>