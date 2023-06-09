<div class="our-tools lg:container py-6 px-4 sm:px-6 md:py-14 sm:mx-auto md:mb-24">
    <h2 class="sm:text-4xl text-left font-bold text-secondary mb-4 sm:text-center">Tools to Compliment Your Trading</h2>
    <p class="text-xs sm:text-sm text-tertiary mb-8 text-left sm:text-center font-semibold">Access news & economic calendar, technical indicators & charts, Forex Calculators,<br> educational resources and many more tools to help you excel.</p>
    <div class="mt-12 flex flex-nowrap justify-center sm:justify-between space-x-0 sm:space-x-8 text-center overflow-auto sm:overflow-visible scrollbar-hide snap-x">
        <div class="feature-div ml-98 sm:ml-0 px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
            <?php
            $feature_1_image_id = esc_html(get_field('feature_1_image'));
            $feature_1_image_url = wp_get_attachment_image_src($feature_1_image_id, 'full')[0];

            // If the image URL is empty, use a default image.
            if (empty($feature_1_image_url)) {
                $feature_1_image_url = get_template_directory_uri() . '/assets/images/economic.png';
            }
            ?>
            <img src="<?php echo esc_url($feature_1_image_url); ?>" alt="Feature 1" class="mb-4 responsive">

            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Economic Calendar</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">Access all major events & economic news that impact financial markets.</p>
        </div>
        <div class="feature-div px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center border-4 border-solid border-primary rounded-3xl">
            <?php
            $feature_2_image_id = esc_html(get_field('feature_2_image'));
            $feature_2_image_url = wp_get_attachment_image_src($feature_2_image_id, 'full')[0];

            // If the image URL is empty, use a default image.
            if (empty($feature_2_image_url)) {
                $feature_2_image_url = get_template_directory_uri() . '/assets/images/trading.png';
            }
            ?>
            <img src="<?php echo esc_url($feature_2_image_url); ?>" alt="Feature 2" class="mb-4 responsive">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Trading Calculators</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">Make trading calculations in real-time & forecast the potential growth of your account.</p>
        </div>
        <div class="feature-div px-2 py-8 sm:px-4 mb-8 md:mb-0 flex flex-col items-center">
            <?php
            $feature_3_image_id = esc_html(get_field('feature_3_image'));
            $feature_3_image_url = wp_get_attachment_image_src($feature_3_image_id, 'full')[0];

            // If the image URL is empty, use a default image.
            if (empty($feature_3_image_url)) {
                $feature_3_image_url = get_template_directory_uri() . '/assets/images/educational.png';
            }
            ?>
            <img src="<?php echo esc_url($feature_3_image_url); ?>" alt="Feature 3" class="mb-4 responsive">
            <h3 class="text-lg sm:text-xl font-bold text-secondary mb-2">Educational Resources</h3>
            <p class="text-xs sm:text-sm text-quaternary px-4 sm:px-4 leading-5 sm:leading-6">From top tips & trading psychology to more ways to earn, we make learning more fun.</p>
        </div>
    </div>
</div>