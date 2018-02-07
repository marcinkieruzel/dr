<?php

function product_init() {
	register_post_type( 'product', array(
		'labels'            => array(
			'name'                => __( 'Products', 'fumi' ),
			'singular_name'       => __( 'Product', 'fumi' ),
			'all_items'           => __( 'All Products', 'fumi' ),
			'new_item'            => __( 'New product', 'fumi' ),
			'add_new'             => __( 'Add New', 'fumi' ),
			'add_new_item'        => __( 'Add New product', 'fumi' ),
			'edit_item'           => __( 'Edit product', 'fumi' ),
			'view_item'           => __( 'View product', 'fumi' ),
			'search_items'        => __( 'Search products', 'fumi' ),
			'not_found'           => __( 'No products found', 'fumi' ),
			'not_found_in_trash'  => __( 'No products found in trash', 'fumi' ),
			'parent_item_colon'   => __( 'Parent product', 'fumi' ),
			'menu_name'           => __( 'Products', 'fumi' ),
		),
		'public'            => true,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'product',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'product_init' );

function product_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['product'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Product updated. <a target="_blank" href="%s">View product</a>', 'fumi'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'fumi'),
		3 => __('Custom field deleted.', 'fumi'),
		4 => __('Product updated.', 'fumi'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Product restored to revision from %s', 'fumi'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Product published. <a href="%s">View product</a>', 'fumi'), esc_url( $permalink ) ),
		7 => __('Product saved.', 'fumi'),
		8 => sprintf( __('Product submitted. <a target="_blank" href="%s">Preview product</a>', 'fumi'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Product scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview product</a>', 'fumi'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Product draft updated. <a target="_blank" href="%s">Preview product</a>', 'fumi'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'product_updated_messages' );
