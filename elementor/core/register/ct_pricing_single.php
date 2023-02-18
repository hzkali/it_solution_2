<?php
ct_add_custom_widget(
    array(
        'name' => 'ct_pricing_single',
        'title' => esc_html__('Case Pricing Single', 'itfirm'),
        'icon' => 'eicon-settings',
        'categories' => array(Case_Theme_Core::CT_CATEGORY_NAME),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Content', 'itfirm'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'layout',
                            'label' => esc_html__('Layout', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                '1' => 'Layout 1',
                                '2' => 'Layout 2',
                            ],
                            'default' => '1',
                        ),
                        array(
                            'name' => 'image',
                            'label' => esc_html__( 'Image', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => [
                                'layout' => '1',
                            ],
                        ),
                        array(
                            'name' => 'selected_icon',
                            'label' => esc_html__('Icon', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'fa4compatibility' => 'icon',
                            'condition' => [
                                'layout' => '1',
                            ],
                        ),
                        array(
                            'name' => 'title',
                            'label' => esc_html__('Title', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'placeholder' => esc_html__('Enter your title', 'itfirm' ),
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .ct-pricing-single1 .pricing--title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'itfirm' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .ct-pricing-single1 .pricing--title',
                        ),
                        array(
                            'name' => 'content_list',
                            'label' => esc_html__('Feature', 'itfirm'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'content',
                                    'label' => esc_html__('Content', 'itfirm'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                            ),
                            'title_field' => '{{{ content }}}',
                        ),
                        array(
                            'name' => 'feature_color',
                            'label' => esc_html__('Feature Color', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .ct-pricing-single1 .pricing--feature' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'feature_typography',
                            'label' => esc_html__('Feature Typography', 'itfirm' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .ct-pricing-single1 .pricing--feature',
                        ),
                        array(
                            'name' => 'price',
                            'label' => esc_html__('Price', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'price_color',
                            'label' => esc_html__('Price Color', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .ct-pricing-single1 .pricing--price' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'button_text',
                            'label' => esc_html__('Button Text', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                        ),
                        array(
                            'name' => 'button_link',
                            'label' => esc_html__('Link', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::URL,
                        ),
                        array(
                            'name' => 'hover_color',
                            'label' => esc_html__('Hover Color', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .ct-pricing-single2:hover .pricing--button .btn, {{WRAPPER}} .ct-pricing-single2:hover .pricing--price span, {{WRAPPER}} .ct-pricing-single2:hover .pricing--price::after' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '2',
                            ],
                        ),
                        array(
                            'name' => 'ct_animate',
                            'label' => esc_html__('Case Animate', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => itfirm_animate(),
                            'default' => '',
                        ),
                        array(
                            'name' => 'ct_animate_delay',
                            'label' => esc_html__('Animate Delay', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '0',
                            'description' => 'Enter number. Default 0ms',
                        ),
                    ),
                ),
            ),
        ),
    ),
    get_template_directory() . '/elementor/core/widgets/'
);