<?php
// make some configs
if(!function_exists('itfirm_configs')){
    function itfirm_configs($value){
         
        $configs = [
            'theme_colors' => [
                'primary'   => [
                    'title' => esc_html__('Primary', 'itfirm').' ('.itfirm_get_opt('primary_color', '#0f67f6').')', 
                    'value' => itfirm_get_opt('primary_color', '#0f67f6')
                ],
                'secondary'   => [
                    'title' => esc_html__('Secondary', 'itfirm').' ('.itfirm_get_opt('secondary_color', '#191919').')', 
                    'value' => itfirm_get_opt('secondary_color', '#191919')
                ],
                'third'   => [
                    'title' => esc_html__('Third', 'itfirm').' ('.itfirm_get_opt('third_color', '#08d9ff').')', 
                    'value' => itfirm_get_opt('third_color', '#08d9ff')
                ]
            ],
            'link' => [
                'color' => itfirm_get_opt('link_color', ['regular' => '#0f67f6'])['regular'],
                'color-hover'   => itfirm_get_opt('link_color', ['hover' => '#1227b8'])['hover'],
                'color-active'  => itfirm_get_opt('link_color', ['active' => '#1227b8'])['active'],
            ],
            'gradient' => [
                'color-from' => itfirm_get_opt('gradient_color', ['from' => '#006cff'])['from'],
                'color-to' => itfirm_get_opt('gradient_color', ['to' => '#1227b8'])['to'],
            ],
               
        ];
        return $configs[$value];
    }
}
if(!function_exists('itfirm_inline_styles')) {
    function itfirm_inline_styles() {  
        
        $theme_colors      = itfirm_configs('theme_colors');
        $link_color        = itfirm_configs('link');
        $gradient_color        = itfirm_configs('gradient');
        ob_start();
        echo ':root{';
            
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color: %2$s;', str_replace('#', '',$color),  $value['value']);
            }
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color-rgb: %2$s;', str_replace('#', '',$color),  itfirm_hex_rgb($value['value']));
            }
            foreach ($link_color as $color => $value) {
                printf('--link-%1$s: %2$s;', $color, $value);
            } 
            foreach ($gradient_color as $color => $value) {
                printf('--gradient-%1$s: %2$s;', $color, $value);
            }
            foreach ($gradient_color as $color => $value) {
                printf('--gradient-%1$s-rgb: %2$s;', $color, itfirm_hex_rgb($value));
            }
        echo '}';

        return ob_get_clean();
         
    }
}
 