<?php
/* Template Name: Landing Page */

get_header();

?>

<div class="hero-section py-6 mx-auto overflow-hidden flex">
    <div class="flex flex-wrap md:container md:mx-auto">
        <div class="w-90vw md:w-1/3 flex justify-center flex-col items-start mx-auto">
            <div>
                <h1 class="font-bold text-secondary text-xl md:text-2xl mb-7">Tighter Spreads & Faster Execution</h1>
                <p class="text-tertiary leading-none md:leading-9 text-m md:text-lg mt-2 font-bold">With Forex Bros you trade with the best in the biz! With quality execution and some of the best trading conditions in the industry, your trading experience will be none other than epic.</p>
                <ul class="text-tertiary font-normal leading-none my-7">
                    <li class="text-m sm:text-lg">No dealing desk or requotes</li>
                    <li class="text-m sm:text-lg">Commissions as low as $0</li>
                </ul>
            </div>
        </div>
        <div class="w-full md:w-2/3 mb-30 md:mx-auto mt-8 sm:mt-0">
            <?php
            $hero_image_id = get_field('hero');
            $hero_image_url = wp_get_attachment_image_src($hero_image_id, 'full')[0];
            ?>
            <img src="<?php echo esc_url($hero_image_url); ?>" alt="Hero Image" class="h-auto">
        </div>
    </div>
</div>

<div class="our-tools container py-10 px-0 sm:px-6 md:py-14 sm:mx-auto mb-24">
    <h2 class="sm:text-4xl text-left font-bold text-secondary mb-4 sm:text-center">Tools to Compliment <br> Your Trading</h2>
    <p class="text-xs sm:text-sm text-tertiary mb-8 text-left sm:text-center font-semibold">Access news & economic calendar, technical indicators & charts, Forex Calculators,<br> educational resources and many more tools to help you excel.</p>
    <div class="mt-12 flex flex-nowrap justify-center sm:justify-between space-x-0 sm:space-x-8 text-center overflow-auto sm:overflow-visible scrollbar-hide snap-x">
        <div class="feature-div sm:hidden lg:hidden px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
        
        </div>
        <div class="feature-div sm:hidden lg:hidden px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
                    </div>
        <div class="feature-div px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
            <?php
            $feature_1_image_id = get_field('feature_1_image');
            $feature_1_image_url = wp_get_attachment_image_src($feature_1_image_id, 'full')[0];
            ?>
            <img src="<?php echo esc_url($feature_1_image_url); ?>" alt="Feature 1" class="mb-4">

            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Economic Calendar</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">Access all major events & economic news that impact financial markets.</p>
        </div>
        <div class="feature-div px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center border-4 border-solid border-primary rounded-3xl">
            <?php
            $feature_2_image_id = get_field('feature_2_image');
            $feature_2_image_url = wp_get_attachment_image_src($feature_2_image_id, 'full')[0];
            ?>
            <img src="<?php echo esc_url($feature_2_image_url); ?>" alt="Feature 2" class="mb-4">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Trading Calculators</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">Make trading calculations in real-time & forecast the potential growth of your account.</p>
        </div>
        <div class="feature-div px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
            <?php
            $feature_3_image_id = get_field('feature_3_image');
            $feature_3_image_url = wp_get_attachment_image_src($feature_3_image_id, 'full')[0];
            ?>
            <img src="<?php echo esc_url($feature_3_image_url); ?>" alt="Feature 3" class="mb-4">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Educational Resources</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">From top tips & trading psychology to more ways to earn, we make learning more fun.</p>
        </div>
    </div>
</div>

<?php

get_footer();

?>