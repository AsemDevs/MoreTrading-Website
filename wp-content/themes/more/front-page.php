<?php
/* Template Name: Landing Page */

get_header();

?>


<div class="container hero-section mx-auto">

  <div class="flex justify-between items-center py-12 px-6">
    <div class="flex-1">
      <h1 class="text-3xl font-bold text-secondary">Tighter Spreads & Faster Execution</h1>
      <p class="text-xl text-tertiary mt-2">With Forex Bros you trade with the best in the biz! With quality execution and some of the best trading conditions in the industry, your trading experience will be none other than epic.</p>
      <ul class=" text-tertiary">
        <li>No dealing desk or requotes</li>
        <li>Commissions as low as $0</li>
      </ul>
    </div>
    <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-header.png' ?>" alt="Hero Image" class="w-1/2 h-auto">
  </div>
</div <?php

      get_footer();

      ?>