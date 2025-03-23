<?php

/**
 * Title: FAQs Section
 * Slug: invoice-360-vonome/faqs
 * Categories: home
 * Block Types: core/template-part/faqs
 * Description: Invoice 360 - Frequently Asked Questions Section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$faqs = [
    [
        "id" => 1,
        "question" => "Invoice360 কি বিনামূল্যে ব্যবহার করা যাবে?",
        "answer" => "Invoice360 এর দুটি ভার্সন আছে। স্মার্ট ইনভয়েস এবং বিজনেস বুক। স্মার্ট ইনভয়েস সম্পুর্ণ বিনামূল্যে ব্যবহার করার যাবে। বিসনেসবুক মান্থলি সাবস্ক্রিপশনে ব্যবহার করা যাবে।",
    ],
    [
        "id" => 2,
        "question" => "Invoice360 কীভাবে আমার ব্যবসার জন্য উপকারী?",
        "answer" => "Invoice360 ব্যবসার ফিনান্স ম্যানেজমেন্ট সহজ ও স্বয়ংক্রিয় করে। এটি পেমেন্ট সংগ্রহ ও ট্র্যাকিং, কাস্টম ইনভয়েস ডিজাইন, ই-কমার্স ও POS ইন্টিগ্রেশন, রিপোর্টিং ও অ্যানালিটিক্স, এবং নির্ভুল একাউন্টিং সুবিধা প্রদান করে, যা আপনার ব্যবসার সময় ও খরচ সাশ্রয় করবে।",
    ],
    [
        "id" => 3,
        "question" => "Invoice360 কি আমার ব্যবসার জন্য উপযোগী?",
        "answer" => "আমাদের সফটওয়্যারটি রেস্টুরেন্ট, সুপার শপ, ফার্মেসি, ই-কমার্স, ফ্রিল্যান্সার, আইনজীবী, ডাক্তারসহ সব ধরনের ব্যবসার জন্য উপযুক্ত।",
    ],
    [
        "id" => 4,
        "question" => "আমি কি মোবাইল ও কম্পিউটার উভয় ডিভাইসে ব্যবহার করতে পারব?",
        "answer" => "হ্যাঁ, Invoice360 মোবাইল ও কম্পিউটার উভয় ডিভাইসে ব্যবহার করা যায়। এটি ক্লাউড-ভিত্তিক হওয়ায় আপনি যে কোনো সময়, যে কোনো ডিভাইস থেকে সহজেই অ্যাক্সেস করতে পারবেন।",
    ],
    [
        "id" => 5,
        "question" => "আমার ইনভয়েস কি কাস্টমাইজ করা যাবে?",
        "answer" => "হ্যাঁ, আপনি ইনভয়েস তৈরি করার পর এটি কাস্টমাইজ করতে পারবেন। মূল্য, ট্যাক্স, ডিসকাউন্ট, পণ্য পরিবর্তন এবং গ্রাহকের নাম ও ঠিকানা সংশোধন করার সুবিধা রয়েছে।",
    ]
]

?>
<section class="faqs">
    <div class="container max-xl mx-auto py-24 md:py-32">
        <h2>প্রায়শই জিজ্ঞাসিত প্রশ্ন</h2>

        <div class="accordion" id="faqs">
            <?php foreach ($faqs as $faq): ?>
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($faq['id']) ?>" aria-expanded="true" aria-controls="<?php echo esc_attr($faq['id']) ?>">
                            <?php echo esc_html($faq['question']) ?>
                        </button>
                    </h4>
                    <div id="<?php echo esc_attr($faq['id']) ?>" class="accordion-collapse collapse <?php if ($faq['id'] === 3) echo esc_attr('show') ?>" data-bs-parent="#faqs">
                        <p class="accordion-body">
                            <?php echo esc_html($faq['answer']) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>