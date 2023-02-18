<?php
// Register Call To Action Widget
ct_add_custom_widget(
    array(
        'name' => 'ct_cta',
        'title' => esc_html__('Case Call To Action', 'itfirm' ),
        'icon' => 'eicon-call-to-action',
        'categories' => array( Case_Theme_Core::CT_CATEGORY_NAME ),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'itfirm' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'author_image',
                            'label' => esc_html__('Author Image', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                        ),
                        array(
                            'name' => 'author_title',
                            'label' => esc_html__('Author Title', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'author_position',
                            'label' => esc_html__('Author Position', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'wg_title',
                            'label' => esc_html__('Widget Title', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'btn_text',
                            'label' => esc_html__('Button Text', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'btn_link',
                            'label' => esc_html__('Button Link', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::URL,
                        ),
                        array(
                            'name' => 'ct_animate',
                            'label' => esc_html__('Case Animate', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => itfirm_animate(),
                            'default' => '',
                        ),
                    ),
                ),
            ),
        ),
    ),
    get_template_directory() . '/elementor/core/widgets/'
);