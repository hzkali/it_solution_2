<?php

/* Remove result count & product ordering & item product category..... */
function itfirm_cwoocommerce_remove_function() {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 0 );
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10, 0 );
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10, 0 );
	remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

	remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_title', 5 );
	remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_rating', 10 );
	remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_excerpt', 20 );
	remove_action( 'woocommerce_single_product_summary' , 'woocommerce_template_single_sharing', 50 );
}
add_action( 'init', 'itfirm_cwoocommerce_remove_function' );

/* Product Category */
add_action( 'woocommerce_before_shop_loop', 'itfirm_woocommerce_nav_top', 2 );
function itfirm_woocommerce_nav_top() {
	?>
	<div class="woocommerce-topbar">
		<div class="woocommerce-result-count">
			<?php woocommerce_result_count(); ?>
		</div>
		<div class="woocommerce-topbar-ordering">
			<?php woocommerce_catalog_ordering(); ?>
		</div>
	</div>
<?php }

add_filter( 'woocommerce_after_shop_loop_item', 'itfirm_woocommerce_product' );
function itfirm_woocommerce_product() {
	global $product;
	?>
	<div class="woocommerce-product-inner">
		<div class="woocommerce-product-header">
			<a class="woocommerce-product-details" href="<?php the_permalink(); ?>">
				<?php woocommerce_template_loop_product_thumbnail(); ?>
			</a>
			<div class="woocommerce-product-meta">
				<?php if ( ! $product->managing_stock() && ! $product->is_in_stock() ) { ?>
				<?php } else { ?>
					<div class="woocommerce-add-to-cart">
				    	<?php woocommerce_template_loop_add_to_cart(); ?>
					</div>
				<?php } ?>
				<?php if (class_exists('WPCleverWoosc')) { ?>
					<div class="woocommerce-compare">
				    	<?php echo do_shortcode('[woosc id="'.esc_attr( $product->get_id() ).'"]'); ?>
					</div>
				<?php } ?>
				<?php if (class_exists('WPCleverWoosw')) { ?>
					<div class="woocommerce-wishlist">
				    	<?php echo do_shortcode('[woosw id="'.esc_attr( $product->get_id() ).'"]'); ?>
					</div>
				<?php } ?>
				<?php if (class_exists('WPCleverWoosq')) { ?>
					<div class="woocommerce-quick-view">
						<?php echo do_shortcode('[woosq id="'.esc_attr( $product->get_id() ).'"]'); ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="woocommerce-product-content">
			<h4 class="woocommerce-product--title">
				<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
			</h4>
			<?php woocommerce_template_loop_price(); ?>
			<div class="woocommerce-product--rating">
				<?php woocommerce_template_loop_rating(); ?>
			</div>
		</div>
	</div>
<?php }


/* Add the custom Tabs Specification */
function itfirm_custom_product_tab_specification( $tabs ) {
	$product_specification = itfirm_get_page_opt( 'product_specification' );
	if(!empty($product_specification)) {
		$tabs['tab-product-feature'] = array(
			'title'    => esc_html__( 'Product Specification', 'itfirm' ),
			'callback' => 'itfirm_custom_tab_content_specification',
			'priority' => 10,
		);
		return $tabs;
	} else {
		return $tabs;
	}
}
add_filter( 'woocommerce_product_tabs', 'itfirm_custom_product_tab_specification' );

/* Function that displays output for the Tab Specification. */
function itfirm_custom_tab_content_specification( $slug, $tab ) { 
	$product_specification = itfirm_get_page_opt( 'product_specification' );
	$result = count($product_specification); ?>
	<div class="tab-content-wrap">
		<?php if (!empty($product_specification)) : ?>
			<div class="tab-product-feature-list">
				<?php for($i=0; $i<$result; $i+=2) { ?>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-12">
                        	<?php echo isset($product_specification[$i])?esc_html( $product_specification[$i] ):''; ?>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12">
                        	<?php echo isset($product_specification[$i+1])?esc_html( $product_specification[$i+1] ):''; ?>
                        </div>
                    </div>
                    <div class="line-gap"></div>
				<?php } ?>
			</div>
		<?php endif; ?>
	</div>
<?php }

/* Removes the "shop" title on the main shop page */
function itfirm_hide_page_title()
{
    return false;
}
add_filter('woocommerce_show_page_title', 'itfirm_hide_page_title');

/* Replace text Onsale */
add_filter('woocommerce_sale_flash', 'itfirm_custom_sale_text', 10, 3);
function itfirm_custom_sale_text($text, $post, $_product)
{
	$regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
	$sale_price = get_post_meta( get_the_ID(), '_sale_price', true);

	$product_sale = '';
	if(!empty($sale_price)) {
		$product_sale = intval( ( (intval($regular_price) - intval($sale_price)) / intval($regular_price) ) * 100);
		return '<span class="onsale">' .$product_sale. '%</span>';
	}
}

/* Show product per page */
function itfirm_loop_shop_per_page(){
	$product_per_page = itfirm_get_opt( 'product_per_page', '12' );

	if(isset($_REQUEST['loop_shop_per_page']) && !empty($_REQUEST['loop_shop_per_page'])) {
		return $_REQUEST['loop_shop_per_page'];
	} else {
		return $product_per_page;
	}
}
add_filter( 'loop_shop_per_page', 'itfirm_loop_shop_per_page' );

/**
 * Modify image width theme support.
 */
add_filter('woocommerce_get_image_size_gallery_thumbnail', function ($size) {
    $size['width'] = 250;
    $size['height'] = 285;
    $size['crop'] = 1;
    return $size;
});

/* Product Single: Summary */
add_action( 'woocommerce_before_single_product_summary', 'itfirm_woocommerce_single_summer_start', 0 );
function itfirm_woocommerce_single_summer_start() { ?>
	<?php echo '<div class="woocommerce-summary-wrap row">'; ?>
<?php }
add_action( 'woocommerce_after_single_product_summary', 'itfirm_woocommerce_single_summer_end', 5 );
function itfirm_woocommerce_single_summer_end() { ?>
	<?php echo '</div></div>'; ?>
<?php }


add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_product_title', 5 );
function itfirm_woocommerce_sg_product_title() { 
	global $product; 
	$product_title = itfirm_get_opt( 'product_title', false ); 
	if($product_title ) : ?>
		<div class="woocommerce-sg-product-title">
			<?php woocommerce_template_single_title(); ?>
		</div>
<?php endif; }

add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_product_rating', 10 );
function itfirm_woocommerce_sg_product_rating() { global $product; ?>
	<div class="woocommerce-sg-product-rating">
		<?php woocommerce_template_single_rating(); ?>
	</div>
<?php }

add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_product_price', 15 );
function itfirm_woocommerce_sg_product_price() { ?>
	<div class="woocommerce-sg-product-price">
		<?php woocommerce_template_single_price(); ?>
	</div>
<?php }

add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_product_excerpt', 20 );
function itfirm_woocommerce_sg_product_excerpt() { ?>
	<div class="woocommerce-sg-product-excerpt">
		<?php woocommerce_template_single_excerpt(); ?>
	</div>
<?php }

add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_product_button', 30 );
function itfirm_woocommerce_sg_product_button() { 
	global $product;
	?>
	<div class="woocommerce-sg-product-button">
		<?php if (class_exists('WPCleverWooscp')) { ?>
			<div class="woocommerce-compare">
		    	<?php echo do_shortcode('[woosc id="'.esc_attr( $product->get_id() ).'"]'); ?>
			</div>
		<?php } ?>
		<?php if (class_exists('WPCleverWoosw')) { ?>
			<div class="woocommerce-wishlist">
		    	<?php echo do_shortcode('[woosw id="'.esc_attr( $product->get_id() ).'"]'); ?>
			</div>
		<?php } ?>
	</div>
<?php }

add_action( 'woocommerce_single_product_summary', 'itfirm_woocommerce_sg_social_share', 40 );
function itfirm_woocommerce_sg_social_share() { 
	$product_social_share = itfirm_get_opt( 'product_social_share', false );
	if($product_social_share) : ?>
		<div class="woocommerce-social-share">
			<label><?php echo esc_html__('Share:', 'itfirm'); ?></label>
			<a class="fb-social" title="<?php echo esc_attr__('Facebook', 'itfirm'); ?>" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="caseicon-facebook"></i></a>
	        <a class="tw-social" title="<?php echo esc_attr__('Twitter', 'itfirm'); ?>" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>%20"><i class="caseicon-twitter"></i></a>
	        <a class="pin-social" title="<?php echo esc_attr__('Pinterest', 'itfirm'); ?>" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url($img_url[0]); ?>&description=<?php the_title(); ?>%20"><i class="caseicon-pinterest"></i></a>
	        <a class="lin-social" title="<?php echo esc_attr__('LinkedIn', 'itfirm'); ?>" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>%20"><i class="caseicon-linkedin"></i></a>
    </div>
<?php endif; }

/* Product Single: Gallery */
add_action( 'woocommerce_before_single_product_summary', 'itfirm_woocommerce_single_gallery_start', 0 );
function itfirm_woocommerce_single_gallery_start() { ?>
	<?php echo '<div class="woocommerce-gallery col-xl-6 col-lg-6 col-md-6">'; ?>
<?php }
add_action( 'woocommerce_before_single_product_summary', 'itfirm_woocommerce_single_gallery_end', 30 );
function itfirm_woocommerce_single_gallery_end() { ?>
	<?php echo '</div><div class="col-xl-6 col-lg-6 col-md-6">'; ?>
<?php }

/* Ajax update cart item */
add_filter('woocommerce_add_to_cart_fragments', 'itfirm_woo_mini_cart_item_fragment');
function itfirm_woo_mini_cart_item_fragment( $fragments ) {
	global $woocommerce;
	$product_subtitle = itfirm_get_page_opt( 'product_subtitle' );
    ob_start();
    ?>
    <div class="widget_shopping_cart">
    	<div class="widget_shopping_head">
	    	<div class="widget_shopping_title">
	    		<?php echo esc_html__( 'Cart', 'itfirm' ); ?>
	    	</div>
	    </div>
        <div class="widget_shopping_cart_content">
            <?php $cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0; ?>
            <ul class="cart_list product_list_widget">
				<?php if ( ! WC()->cart->is_empty() ) : ?>
					<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

							$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
							$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
							$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
							?>
							<li>
								<?php if(!empty($thumbnail)) : ?>
									<div class="cart-product-image">
										<a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">
											<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
										</a>
									</div>
								<?php endif; ?>
								<div class="cart-product-meta">
									<h3><a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>"><?php echo esc_html($product_name); ?></a></h3>
									<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
									<?php
										echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
											'<a href="%s" class="remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="caseicon-close"></i></a>',
											esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
											esc_attr__( 'Remove this item', 'itfirm' ),
											esc_attr( $product_id ),
											esc_attr( $cart_item_key ),
											esc_attr( $_product->get_sku() )
										), $cart_item_key );
									?>
								</div>	
							</li>
							<?php
						}
					}
				?>
			<?php else : ?>
				<li class="empty">
					<i class="caseicon-shopping-cart-alt"></i>
					<span><?php esc_html_e( 'Your cart is empty', 'itfirm' ); ?></span>
					<a class="btn btn-animate" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><?php echo esc_html__('Browse Shop', 'itfirm'); ?></a>
				</li>
			<?php endif; ?>
			</ul><!-- end product list -->
        </div>
        <?php if ( ! WC()->cart->is_empty() ) : ?>
			<div class="widget_shopping_cart_footer">
				<p class="total"><strong><?php esc_html_e( 'Subtotal', 'itfirm' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

				<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

				<p class="buttons">
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn btn-animate wc-forward"><?php esc_html_e( 'View Cart', 'itfirm' ); ?></a>
					<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn btn-animate checkout wc-forward"><?php esc_html_e( 'Checkout', 'itfirm' ); ?></a>
				</p>
			</div>
		<?php endif; ?>
    </div>
    <?php
    $fragments['div.widget_shopping_cart'] = ob_get_clean();
    return $fragments;
}

/* Ajax update cart total number */

add_filter( 'woocommerce_add_to_cart_fragments', 'itfirm_woocommerce_sidebar_cart_count_number' );
function itfirm_woocommerce_sidebar_cart_count_number( $fragments ) {
	ob_start();
	?>
	<span class="widget_cart_counter"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'itfirm' ), WC()->cart->cart_contents_count ); ?></span>
	<?php
	
	$fragments['span.widget_cart_counter'] = ob_get_clean();
	
	return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'itfirm_woocommerce_sidebar_cart_count_number_header' );
function itfirm_woocommerce_sidebar_cart_count_number_header( $fragments ) {
	ob_start(); ?>
	<span class="widget_cart_counter_header"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'itfirm' ), WC()->cart->cart_contents_count ); ?> - <span class="cart-total"><?php echo WC()->cart->get_cart_subtotal(); ?></span></span>
	<?php
	
	$fragments['span.widget_cart_counter_header'] = ob_get_clean();
	
	return $fragments;
}

add_filter( 'woocommerce_output_related_products_args', 'itfirm_related_products_args', 20 );
  function itfirm_related_products_args( $args ) {
	$args['posts_per_page'] = 4;
	$args['columns'] = 4;
	return $args;
}

/* Pagination Args */
function itfirm_filter_woocommerce_pagination_args( $array ) { 
	$array['end_size'] = 1;
	$array['mid_size'] = 1;
    return $array; 
}; 
add_filter( 'woocommerce_pagination_args', 'itfirm_filter_woocommerce_pagination_args', 10, 1 ); 

add_filter( 'woocommerce_checkout_before_order_review_heading', 'itfirm_checkout_before_order_review_heading', 10 );
  function itfirm_checkout_before_order_review_heading() {
	echo '<div class="ct-checkout-order-review">';
}
add_filter( 'woocommerce_checkout_after_order_review', 'itfirm_checkout_after_order_review', 20 );
  function itfirm_checkout_after_order_review() {
	echo '</div>';
}