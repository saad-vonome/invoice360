<?php

/**
 * Title: Business Book New Generation Business Management Software
 * Slug: invoice-360-vonome/new-gen-biz-management
 * Categories: Business Book
 * Block Types: core/template-part/new-gen-biz-management
 * Description: Business Book New Generation Business Management Software
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
$features = [
    [
        "title" => "২৪/৭ ক্লাউড অ্যাক্সেস",
        "description" => "যেকোনো সময়, যেকোনো ডিভাইস থেকে ব্যবসা পর্যবেক্ষণ করুন।",
        "image" => "cloud-db.png"
    ],
    [
        "title" => "মাল্টি-লেভেল অ্যাক্সেস",
        "description" => "মালিক, ম্যানেজার ও কর্মচারীদের জন্য আলাদা অনুমতি নির্ধারণ করুন।",
        "image" => "access-key.png"
    ]
]

?>
<section class="new-gen-biz-management">
    <div class="container max-xl mx-auto py-24 md:py-36">
        <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-6 md:gap-32">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/new-gen-business-management.png" alt="নতুন প্রজন্মের ব্যবসা ব্যবস্থাপনা সফটওয়্যার" />
            <div>
                <h2>নতুন প্রজন্মের ব্যবসা ব্যবস্থাপনা সফটওয়্যার</h2>
                <p class="pb-8">
                    আপনার ব্যবসার প্রতিটি খুঁটিনাটি এখন একটি প্ল্যাটফর্মেই সহজভাবে পরিচালনা করুন! Business Book শুধু ইনভয়েস তৈরি নয়, এটি একটি পূর্ণাঙ্গ ব্যবসা ব্যবস্থাপনা সফটওয়্যার।
                </p>
                <a href="https://app.invoice360.xyz/" class="btnPrimary actionBtn trial-btn">ফ্রি ট্রায়াল ব্যবহার করুন</a>
                <div class="grid grid-cols-1 gap-4 mt-14">
                    <?php foreach ($features as $feature): ?>
                        <div class="flex items-start gap-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $feature['image']) ?>" />
                            <div>
                                <h4><?php echo esc_html($feature['title']) ?></h4>
                                <p><?php echo esc_html($feature['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>