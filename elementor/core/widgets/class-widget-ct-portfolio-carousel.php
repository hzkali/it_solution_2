<?php

class CT_CtPortfolioCarousel_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_portfolio_carousel';
    protected $title = 'Case Portfolio Carousel';
    protected $icon = 'eicon-posts-carousel';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/localhost\/ctthemes\/itsoft\/wp-content\/themes\/itsoft\/elementor\/templates\/widgets\/ct_portfolio_carousel\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/localhost\/ctthemes\/itsoft\/wp-content\/themes\/itsoft\/elementor\/templates\/widgets\/ct_portfolio_carousel\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"http:\/\/localhost\/ctthemes\/itsoft\/wp-content\/themes\/itsoft\/elementor\/templates\/widgets\/ct_portfolio_carousel\/layout-image\/layout3.jpg"}}}]},{"name":"section_style_general","label":"General","tab":"style","condition":{"layout":["1","2"]},"controls":[{"name":"color_gr_from","label":"Color Gradient From","type":"color"},{"name":"color_gr_to","label":"Color Gradient To","type":"color"}]},{"name":"source_section","label":"Source","tab":"content","controls":[{"name":"source","label":"Select Categories","type":"select2","multiple":true,"options":{"cloud-services|portfolio-category":"Cloud Services","cyber-security|portfolio-category":"Cyber Security","it-security|portfolio-category":"IT Security","networking|portfolio-category":"Networking"}},{"name":"orderby","label":"Order By","type":"select","default":"date","options":{"date":"Date","ID":"ID","author":"Author","title":"Title","rand":"Random"}},{"name":"order","label":"Sort Order","type":"select","default":"desc","options":{"desc":"Descending","asc":"Ascending"}},{"name":"limit","label":"Total items","type":"number","default":"6"}]},{"name":"display_section","label":"Display Options","tab":"content","controls":[{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height))."},{"name":"show_title","label":"Show Title","type":"switcher","default":"true","condition":{"layout":["1","2","3"]}},{"name":"show_category","label":"Show Categories","type":"switcher","default":"true","condition":{"layout":["1","3"]}},{"name":"show_address","label":"Show Address","type":"switcher","default":"true","condition":{"layout":["2"]}},{"name":"show_button","label":"Show Read More","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"button_text","label":"Button Text","type":"text","condition":{"show_button":"true","layout":"n"}},{"name":"show_excerpt","label":"Show Excerpt","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"num_words","label":"Number of Words","type":"number","default":25,"condition":{"show_excerpt":"true","layout":["1","2"]},"separator":"after"}]},{"name":"section_carousel_settings","label":"Carousel","tab":"content","controls":[{"name":"item_offset_right","label":"Item Offset Right","type":"slider","control_type":"responsive","size_units":["px"],"default":{"size":0},"range":{"px":{"min":0,"max":3000}},"selectors":{"{{WRAPPER}} .ct-portfolio-carousel2 .slick-list":"width: calc(100% + {{SIZE}}{{UNIT}});"},"condition":{"layout":["2"]}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6"}},{"name":"slides_to_scroll","label":"Slides to scroll","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6"}},{"name":"arrows","label":"Show Arrows","type":"switcher","default":"false"},{"name":"dots","label":"Show Dots","type":"switcher","default":"false"},{"name":"pause_on_hover","label":"Pause on Hover","type":"switcher","default":"false"},{"name":"autoplay","label":"Autoplay","type":"switcher","default":"false"},{"name":"autoplay_speed","label":"Autoplay Speed","type":"number","default":5000,"condition":{"autoplay":"true"}},{"name":"infinite","label":"Infinite Loop","type":"switcher","default":"false"},{"name":"speed","label":"Animation Speed","type":"number","default":500},{"name":"center","label":"Center","type":"switcher","default":"false"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-inline-css-js','jquery-slick','ct-post-carousel-widget-js' );
}