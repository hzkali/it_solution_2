<?php

class CT_CtImageBeforeAfter_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_image_before_after';
    protected $title = 'Image Before After';
    protected $icon = 'eicon-image-rollover';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/localhost\/ctthemes\/bxlo\/wp-content\/themes\/bxlo\/elementor\/templates\/widgets\/ct_image_before_after\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/localhost\/ctthemes\/bxlo\/wp-content\/themes\/bxlo\/elementor\/templates\/widgets\/ct_image_before_after\/layout-image\/layout2.jpg"}}}]},{"name":"section_content","label":"Content","tab":"content","controls":[{"name":"before_image","label":"Before Image","type":"media"},{"name":"after_image","label":"After Image","type":"media"},{"name":"before_text","label":"Before Text","type":"text","condition":{"layout":"1"}},{"name":"after_text","label":"After Text","type":"text","condition":{"layout":"1"}},{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).","condition":{"layout":"1"}},{"name":"selected_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"layout":"2"}},{"name":"title","label":"Title","type":"text","label_block":true,"condition":{"layout":"2"}},{"name":"year","label":"Year","type":"text","condition":{"layout":"2"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'event-move','twentytwenty','ct-twentytwenty' );
}