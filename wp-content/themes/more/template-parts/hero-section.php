<div class="hero-section px-4 sm:px-4 py-6 mx-auto overflow-hidden flex-col sm:flex-row">
    <div class="flex flex-col md:flex-row flex-wrap md:container md:mx-auto">
        <div class="w-full lg:w-1/3 flex justify-center flex-col items-start mx-auto">
                <h1 class="font-bold text-secondary text-xl md:text-2xl mb-7">Tighter Spreads & Faster Execution</h1>
                <p class="text-tertiary leading-none md:leading-9 text-m md:text-lg mt-2 font-bold">With Forex Bros you trade with the best in the biz! With quality execution and some of the best trading conditions in the industry, your trading experience will be none other than epic.</p>
                <ul class="text-tertiary font-normal leading-none my-7">
                    <li class="text-m sm:text-lg">No dealing desk or requotes</li>
                    <li class="text-m sm:text-lg">Commissions as low as $0</li>
                </ul>
        </div>
        <div class="w-full lg:w-2/3 mb-30 mx-auto mt-8 sm:mt-0">
            <?php
            $hero_image_id = get_field('hero');
            $hero_image_url = wp_get_attachment_image_src($hero_image_id, 'full')[0];

            // If the image URL is empty, use a default image.
            if (empty($hero_image_url)) {
                $hero_image_url = get_template_directory_uri() . '/assets/images/hero-header.png';  // Path to your default image.
            }
            ?>
            <img src="<?php echo esc_url($hero_image_url); ?>" alt="Hero Image" class="h-auto">
        </div>

    </div>
</div>