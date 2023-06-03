<?php
/* Template Name: Landing Page */

get_header();

?>

<div class="container hero-section py-6 mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3 flex justify-center flex-col items-start">
            <div>
                <h1 class="font-bold text-secondary text-xl md:text-2xl mb-7">Tighter Spreads & Faster Execution</h1>
                <p class="text-tertiary leading-none md:leading-9 text-m md:text-lg mt-2 font-bold">With Forex Bros you trade with the best in the biz! With quality execution and some of the best trading conditions in the industry, your trading experience will be none other than epic.</p>
                <ul class="text-tertiary font-normal leading-none my-7">
                    <li class="text-lg">No dealing desk or requotes</li>
                    <li class="text-lg">Commissions as low as $0</li>
                </ul>
            </div>
        </div>
        <div class="w-full md:w-2/3">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-header.png' ?>" alt="Hero Image" class="h-auto">
        </div>
    </div>
</div>

<div class="our-tools container py-8 px-4 sm:px-6 md:py-12 mx-auto">
    <h2 class="text-3xl sm:text-4xl font-bold text-secondary mb-4 text-center">Tools to Compliment <br> Your Trading</h2>
    <p class="text-xs sm:text-sm text-tertiary mb-8 text-center font-semibold">Access news & economic calendar, technical indicators & charts, Forex Calculators,<br> educational resources and many more tools to help you excel.</p>
    <div class="flex flex-wrap -mx-2 sm:-mx-4 text-center">
        <div class="w-full md:w-1/3 px-2 sm:px-6 mb-8 md:mb-0 flex flex-col items-center">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/economic.png' ?>" alt="Feature 1" class="mb-4">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Economic Calendar</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-16 leading-5 sm:leading-6">Access all major events & economic news that impact financial markets.</p>
        </div>
        <div class="w-full md:w-1/3 px-2 sm:px-6 mb-8 md:mb-0 flex flex-col items-center">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/trading.png' ?>" alt="Feature 2" class="mb-4">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Trading Calculators</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-16 leading-5 sm:leading-6">Make trading calculations in real-time & forecast the potential growth of your account.</p>
        </div>
        <div class="w-full md:w-1/3 px-2 sm:px-6 mb-8 md:mb-0 flex flex-col items-center">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/educational.png' ?>" alt="Feature 3" class="mb-4">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Educational Resources</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-16 leading-5 sm:leading-6">From top tips & trading psychology to more ways to earn, we make learning more fun.</p>
        </div>
    </div>
</div>

<?php

get_footer();

?>