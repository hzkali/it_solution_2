<?php
$default_settings = [
    'style' => '',
];
$settings = array_merge($default_settings, $settings);
extract($settings); ?>
<div class="ct-nav-carousel <?php echo esc_attr($style); ?>">
    <div class="nav-slick nav-prev"><i class="caseicon-angle-arrow-left"></i></div>
    <div class="nav-slick nav-next"><i class="caseicon-angle-arrow-right"></i></div>
</div>