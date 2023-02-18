<?php

class CT_CtVideoPlayer_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_video_player';
    protected $title = 'Case Video Player';
    protected $icon = 'eicon-play';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"icon_section","label":"Video Player","tab":"content","controls":[{"name":"image_type","label":"Image Type","type":"select","options":{"none":"None","img":"Image","bg":"Background"},"default":"none"},{"name":"image","label":"Image","type":"media","condition":{"image_type":["img","bg"]}},{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).","condition":{"image_type":"img"}},{"name":"image_height","label":"Image Height","type":"slider","description":"Enter number.","condition":{"image_type":"bg"},"range":{"px":{"min":0,"max":3000}},"control_type":"responsive","selectors":{"{{WRAPPER}} .ct-video-player .ct-video-image-bg":"height: {{SIZE}}{{UNIT}};"}},{"name":"video_link","label":"Link","type":"text"},{"name":"btn_video_style","label":"Button Video Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1"},{"name":"button_text","label":"Button Video Text","type":"text","condition":{"btn_video_style":["style2"]}},{"name":"button_text_typography","label":"Button Text Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-video-button.style2 .ct-video-text","condition":{"btn_video_style":["style2"]}},{"name":"button_text_color","label":"Button Text Color","type":"color","selectors":{"{{WRAPPER}} .ct-video-button.style2 .ct-video-text":"color: {{VALUE}};"},"condition":{"btn_video_style":["style2"]}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}