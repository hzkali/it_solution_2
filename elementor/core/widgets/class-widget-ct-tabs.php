<?php

class CT_CtTabs_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_tabs';
    protected $title = 'Case Tabs';
    protected $icon = 'eicon-tabs';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"section_tabs","label":"Tabs","tab":"content","controls":[{"name":"layout","label":"Layout","type":"select","options":{"1":"Layout 1","2":"Layout 2","3":"Layout 3"},"default":"1"},{"name":"active_tab","label":"Active Tab","type":"number","default":1,"separator":"after"},{"name":"wg_title","label":"Widget Title","type":"text","condition":{"layout":["2"]}},{"name":"wg_title_typography","label":"Widget Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-tabs .ct-widget-title","condition":{"layout":["2"]}},{"name":"wg_desc","label":"Widget Description","type":"textarea","condition":{"layout":["2"]}},{"name":"wg_desc_typography","label":"Widget Description Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-tabs .ct-widget-desc","condition":{"layout":["2"]}},{"name":"tabs","label":"Tabs Items","type":"repeater","controls":[{"name":"ct_icon","label":"Icon","type":"icons","fa4compatibility":"icon"},{"name":"tab_title","label":"Title","type":"text","default":"Tab Title","placeholder":"Tab Title","label_block":true},{"name":"content_type","label":"Content Type","type":"select","default":"text_editor","options":{"text_editor":"Text Editor","template":"Template"}},{"name":"tab_content","label":"Content","type":"wysiwyg","default":"Tab Content","placeholder":"Tab Content","show_label":false,"condition":{"content_type":"text_editor"}},{"name":"tab_content_template","label":"Template","type":"select","default":"","options":{"":"Select Template","2835":"Tab 3 - Using Softwares","2832":"Tab 2 - Awards Winner","2828":"Tab 1 - Company Mission","2256":"Tab 3 - Softwer Development","2253":"Tab 2 - IT Consulting","2250":"Tab 1 - General Question","6":"Default Kit"},"condition":{"content_type":"template"}}],"title_field":"{{{ tab_title }}}"},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-title .ct-tab-title":"color: {{VALUE}};"}},{"name":"title_active_color","label":"Title Active Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-title .ct-tab-title.active":"color: {{VALUE}};"},"condition":{"layout":["1"]}},{"name":"content_color","label":"Content Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-content .ct-tab-content":"color: {{VALUE}};"}}]},{"name":"section_animate","label":"Animate","tab":"content","controls":[{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-tabs-widget-js','ct-inline-css-js' );
}