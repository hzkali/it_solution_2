<?php

class CT_CtPricingSingle_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_pricing_single';
    protected $title = 'Case Pricing Single';
    protected $icon = 'eicon-settings';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"section_list","label":"Content","tab":"content","controls":[{"name":"layout","label":"Layout","type":"select","options":{"1":"Layout 1","2":"Layout 2"},"default":"1"},{"name":"image","label":"Image","type":"media","condition":{"layout":"1"}},{"name":"selected_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"layout":"1"}},{"name":"title","label":"Title","type":"text","placeholder":"Enter your title","label_block":true},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-pricing-single1 .pricing--title":"color: {{VALUE}};"}},{"name":"title_typography","label":"Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-pricing-single1 .pricing--title"},{"name":"content_list","label":"Feature","type":"repeater","controls":[{"name":"content","label":"Content","type":"text","label_block":true}],"title_field":"{{{ content }}}"},{"name":"feature_color","label":"Feature Color","type":"color","selectors":{"{{WRAPPER}} .ct-pricing-single1 .pricing--feature":"color: {{VALUE}};"}},{"name":"feature_typography","label":"Feature Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-pricing-single1 .pricing--feature"},{"name":"price","label":"Price","type":"text"},{"name":"price_color","label":"Price Color","type":"color","selectors":{"{{WRAPPER}} .ct-pricing-single1 .pricing--price":"color: {{VALUE}};"}},{"name":"button_text","label":"Button Text","type":"text","default":""},{"name":"button_link","label":"Link","type":"url"},{"name":"hover_color","label":"Hover Color","type":"color","selectors":{"{{WRAPPER}} .ct-pricing-single2:hover .pricing--button .btn, {{WRAPPER}} .ct-pricing-single2:hover .pricing--price span, {{WRAPPER}} .ct-pricing-single2:hover .pricing--price::after":"background-color: {{VALUE}};"},"condition":{"layout":"2"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}