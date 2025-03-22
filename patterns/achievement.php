<?php

/**
 * Title: Achievement Section
 * Slug: invoice-360-vonome/achievement
 * Categories: home
 * Block Types: core/template-part/achievement
 * Description: Invoice 360 -Achievement with Statistics.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<section class="achievements">
    <div class="container max-xl mx-auto py-24 md:py-32">
        <h2>আমাদের অর্জনসমূহ</h2>
        <div class="md:flex items-center gap-8 hidden">
            <img
                src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/achievement-1.png"
                alt="আমাদের অর্জনসমূহ"
                class="flex-1" />
            <!-- Client Satisfaction -->
            <div class="achievement w-full md:w-[410px]">
                <h1>৯৯%</h1>
                <div>
                    <h5>গ্রাহক সন্তুষ্টি</h5>
                    <p>সময় সাশ্রয় স্বয়ংক্রিয় ইনভয়েস ও পেমেন্ট ম্যানেজমেন্টের মাধ্যমে</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-8">
            <!-- Client Satisfaction -->
            <div class="achievement achievement-exeption">
                <h1>৯৯%</h1>
                <div>
                    <h5>গ্রাহক সন্তুষ্টি</h5>
                    <p>সময় সাশ্রয় স্বয়ংক্রিয় ইনভয়েস ও পেমেন্ট ম্যানেজমেন্টের মাধ্যমে</p>
                </div>
            </div>
            <!-- Features count -->
            <div class="achievement">
                <h1>৮৬+</h1>
                <div>
                    <h5>ফিচার</h5>
                    <p>ইনভয়েস, একাউন্টিং, রিপোর্টিং, মাল্টি-ব্রাঞ্চ সাপোর্ট ইত্যাদি</p>
                </div>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/achievement-2.png" alt="আমাদের অর্জনসমূহ" class="min-h-[200px]" />
            <!-- Time Saving -->
            <div class="achievement">
                <h1>৭৫%</h1>
                <div>
                    <h5>সময় সাশ্রয়</h5>
                    <p>স্বয়ংক্রিয় ইনভয়েস ও পেমেন্ট ম্যানেজমেন্টের পরিষেবার মাধ্যমে</p>
                </div>
            </div>
        </div>
    </div>
</section>