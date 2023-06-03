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

<?php

get_footer();

?>
