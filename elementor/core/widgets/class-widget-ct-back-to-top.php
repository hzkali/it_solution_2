<?php

class CT_CtBackToTop_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_back_to_top';
    protected $title = 'Case Back To Top';
    protected $icon = 'eicon-arrow-up';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"content_section","label":"Content","tab":"content","controls":[{"name":"btt_text","label":"Text","type":"text","label_block":true},{"name":"btt_text_color","label":"Text Color","type":"color","selectors":{"{{WRAPPER}} .ct-wg-backtotop .ct-wg-backtotop-inner":"color: {{VALUE}};","{{WRAPPER}} .ct-wg-backtotop .ct-wg-backtotop-inner svg":"fill: {{VALUE}};"}},{"name":"btt_bg_color","label":"Box Color","type":"color","selectors":{"{{WRAPPER}} .ct-wg-backtotop .ct-wg-backtotop-inner":"background-color: {{VALUE}};"}},{"name":"text_typography","label":"Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-wg-backtotop .ct-wg-backtotop-inner"},{"name":"align","label":"Alignment","type":"choose","control_type":"responsive","options":{"flex-start":{"title":"Left","icon":"fa fa-align-left"},"center":{"title":"Center","icon":"fa fa-align-center"},"flex-end":{"title":"Right","icon":"fa fa-align-right"}},"selectors":{"{{WRAPPER}} .ct-wg-backtotop":"justify-content: {{VALUE}};"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}