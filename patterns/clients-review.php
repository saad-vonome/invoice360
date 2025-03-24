<?php

/**
 * Title: Client Review/Testimonials Section
 * Slug: invoice-360-vonome/clients-review
 * Categories: home
 * Block Types: core/template-part/clients-review
 * Description: Invoice 360 - Client Review/Testimonials.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

$testimonials = [
    [
        "name" => "নাফিসা সুলতানা",
        "designation" => "অনলাইন স্টোর মালিক",
        "reviewTitle" => '১০০% নিরাপদ লেনদেন নিশ্চিত!',
        "description" => "আমাদের গ্রাহকেরা Invoice360-এর মাধ্যমে অনলাইন পেমেন্ট করে, যা সম্পূর্ণ সুরক্ষিত। পেমেন্টের সময় কোনো ঝামেলা হয় না।",
        "image" => "nafisa.png"
    ],
    [
        "name" => "তাহসিন কবির",
        "designation" => "ফার্মেসি ব্যবসায়ী",
        "reviewTitle" => '৭৫% পর্যন্ত সময় সাশ্রয় করেছি!',
        "description" => "আগে ইনভয়েস তৈরি করতে অনেক সময় লাগত, কিন্তু এখন মাত্র কয়েক ক্লিকে ইনভয়েস পাঠাতে পারি। Invoice360-এর কারণে কাজের গতি অনেক বেড়েছে।",
        "image" => "tahsin.png"
    ],
    [
        "name" => 'রাশেদ হোসেন',
        "designation" => "রেস্টুরেন্ট মালিক",
        "reviewTitle" => 'বিক্রয় ২৫% পর্যন্ত বেড়েছে!',
        "description" => "Invoice360-এর বিশ্লেষণ ও রিপোর্টিং টুল আমাকে আমার বিক্রয় কৌশল পরিবর্তনে সাহায্য করেছে, যার ফলে বিক্রয় ২৫% পর্যন্ত বৃদ্ধি পেয়েছে।",
        "image" => "rashed.png"
    ],
    [
        "name" => 'নাফিসা সুলতানা',
        "designation" => "অনলাইন স্টোর মালিক",
        "reviewTitle" => '১০০% নিরাপদ লেনদেন নিশ্চিত!',
        "description" => "আমাদের গ্রাহকেরা Invoice360-এর মাধ্যমে অনলাইন পেমেন্ট করে, যা সম্পূর্ণ সুরক্ষিত। পেমেন্টের সময় কোনো ঝামেলা হয় না।",
        "image" => "nafisa.png"
    ],
];

?>


<section class="testimonials">
    <div class="container max-xl mx-auto">
        <div class="flex flex-col md:flex-row items-start justify-center md:justify-between">
            <h2>আমাদের গ্রাহকদের মতামত</h2>
            <div class="flex items-center gap-8">
                <button
                    class="ctrl-angle"
                    data-bs-target="#clientReviews"
                    data-bs-slide="prev">
                    <i class="fa-solid fa-angle-left fa-lg"></i>
                </button>
                <button
                    class="ctrl-angle"
                    data-bs-target="#clientReviews"
                    data-bs-slide="next">
                    <i class="fa-solid fa-angle-right fa-lg"></i>
                </button>
            </div>
        </div>

        <!-- Carousel -->
        <div id="clientReviews" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel for desktop  -->
            <div class="carousel-inner carousel-desktop">
                <?php
                // Split testimonials into chunks of 3 per slide
                $chunks = array_chunk($testimonials, 3);
                $isActive = 'active';

                foreach ($chunks as $chunk) : ?>
                    <div class="carousel-item <?php echo $isActive; ?>">
                        <div class="grid grid-cols-3 gap-10">
                            <?php foreach ($chunk as $testimonial) : ?>
                                <div>
                                    <div class="testimonial-card">
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/icons/qoutation.svg" alt="Qoutation" />
                                        <!-- Review Title and Description -->
                                        <div>
                                            <h4><?php echo esc_html($testimonial['reviewTitle']) ?></h4>
                                            <p class="desc"><?php echo esc_html($testimonial['description']) ?></p>
                                        </div>
                                        <!-- Client Informations -->
                                        <div class="flex items-center gap-3 testimonial-client">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $testimonial['image'] ?>" alt="<?php echo esc_attr($testimonial['name']); ?>">
                                            <div>
                                                <h5 class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></h5>
                                                <p class="testimonial-text"><?php echo esc_html($testimonial['designation']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php $isActive = '';
                    ?>
                <?php endforeach; ?>
            </div>

            <!-- Carousel for mobile -->
            <div class="carousel-inner flex md:hidden">
                <?php
                $isActive = 'active'; // Reset for mobile
                foreach ($testimonials as $testimonial) : ?>
                    <div class="carousel-item <?php echo $isActive; ?>">
                        <div class="testimonial-card">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/icons/qoutation.svg" alt="Qoutation" />
                            <div>
                                <h4><?php echo esc_html($testimonial['reviewTitle']) ?></h4>
                                <p class="desc"><?php echo esc_html($testimonial['description']) ?></p>
                            </div>
                            <div class="flex items-center gap-3 testimonial-client">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $testimonial['image'] ?>" alt="<?php echo esc_attr($testimonial['name']); ?>">
                                <div>
                                    <h5 class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></h5>
                                    <p class="testimonial-text"><?php echo esc_html($testimonial['designation']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $isActive = '';
                    ?>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>