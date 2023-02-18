<?php
ct_add_custom_widget(
    array(
        'name' => 'ct_language_switcher',
        'title' => esc_html__('Case Language Switcher', 'itfirm'),
        'icon' => 'eicon-editor-list-ul',
        'categories' => array(Case_Theme_Core::CT_CATEGORY_NAME),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Content', 'itfirm'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'current',
                            'label' => esc_html__('Current Item', 'itfirm'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'current_item_typography',
                            'label' => esc_html__('Current Item Typography', 'itfirm' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .ct-language-switcher1 .current--item',
                        ),
                        array(
                            'name' => 'current_item_color',
                            'label' => esc_html__('Current Item Color', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .ct-language-switcher1 .current--item' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .ct-language-switcher1 .current--item svg' => 'fill: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'menu_item',
                            'label' => esc_html__('Item', 'itfirm'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'text',
                                    'label' => esc_html__('Text', 'itfirm'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Link', 'itfirm'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                            ),
                            'title_field' => '{{{ text }}}',
                        ),
                        array(
                            'name' => 'dropdown_position',
                            'label' => esc_html__('Dropdown Position', 'itfirm' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'dr-left' => 'Left',
                                'dr-right' => 'Right',
                            ],
                            'default' => 'dr-left',
                        ),
                    ),
                ),
            ),
        ),
    ),
    get_template_directory() . '/elementor/core/widgets/'
);