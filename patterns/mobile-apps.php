<?php

/**
 * Title: Mobile Apps Section
 * Slug: invoice-360-vonome/mobile-apps
 * Categories: home
 * Block Types: core/template-part/mobile-apps
 * Description: Invoice 360 - Mobile Apps features.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$appfeatures = [
    [
        "title" => "ওয়েব ভার্সনের সব ফিচার মোবাইলে",
        "description" => "মোবাইল অ্যাপেও পাওয়া যাবে, ইনভয়েস তৈরি থেকে পেমেন্ট ট্র্যাকিং পর্যন্ত সবকিছু",
        "icon" => "features.svg"
    ],
    [
        "title" => "একাধিক ব্যবসা পরিচালনা করুন",
        "description" => "এক অ্যাকাউন্টে একাধিক ব্যবসা ও শাখা পরিচালনা করুন",
        "icon" => "multiple-business.svg"
    ],
    [
        "title" => "গ্রাহক ম্যানেজমেন্ট",
        "description" => "মোবাইল থেকেই গ্রাহকদের ইনভয়েস পাঠান এবং ট্র্যাক করুন",
        "icon" => "users.svg"
    ]
]

?>
<section class="moible-apps">
    <div class="container max-xl mx-auto py-24 md:py-32">
        <div class="apps-titledesc">
            <h2>আপনার ব্যবসা এখন আপনার পকেটে</h2>
            <p>
                আমাদের Invoice360 অ্যাপ, আপনার ব্যবসাকে সহজে ও দ্রুত পরিচালনা করতে সাহায্য করবে। অ্যাপটি ডিজাইন করা হয়েছে সব ধরনের ব্যবসার জন্য।
            </p>
            <button class="header-btn actionBtn block mx-auto">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google-play.png" alt="Get In On Google Play" class="google-play" />
                </a>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 app-features">
            <?php foreach ($appfeatures as $feature): ?>
                <div class="app-feature">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/' . $feature['icon']) ?>" alt="<?php echo esc_attr($feature['title']) ?>" />
                    <h5 class="pt-3 md:pt-6 pb-1 md:pb-2"><?php echo esc_html($feature['title']) ?></h5>
                    <p><?php echo esc_html($feature['description']) ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/mobile-apps-banner.png" alt="Moble Apps" />
    </div>
</section>