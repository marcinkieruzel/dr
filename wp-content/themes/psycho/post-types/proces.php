<?php

function proces_init() {
	register_post_type( 'proces', array(
		'labels'            => array(
			'name'                => __( 'Proces', 'fumi' ),
			'singular_name'       => __( 'Proces', 'fumi' ),
			'all_items'           => __( 'All Proces', 'fumi' ),
			'new_item'            => __( 'New proces', 'fumi' ),
			'add_new'             => __( 'Add New', 'fumi' ),
			'add_new_item'        => __( 'Add New proces', 'fumi' ),
			'edit_item'           => __( 'Edit proces', 'fumi' ),
			'view_item'           => __( 'View proces', 'fumi' ),
			'search_items'        => __( 'Search proces', 'fumi' ),
			'not_found'           => __( 'No proces found', 'fumi' ),
			'not_found_in_trash'  => __( 'No proces found in trash', 'fumi' ),
			'parent_item_colon'   => __( 'Parent proces', 'fumi' ),
			'menu_name'           => __( 'Proces', 'fumi' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'proces',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'proces_init' );

function proces_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['proces'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Proces updated. <a target="_blank" href="%s">View proces</a>', 'fumi'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'fumi'),
		3 => __('Custom field deleted.', 'fumi'),
		4 => __('Proces updated.', 'fumi'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Proces restored to revision from %s', 'fumi'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Proces published. <a href="%s">View proces</a>', 'fumi'), esc_url( $permalink ) ),
		7 => __('Proces saved.', 'fumi'),
		8 => sprintf( __('Proces submitted. <a target="_blank" href="%s">Preview proces</a>', 'fumi'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Proces scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview proces</a>', 'fumi'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Proces draft updated. <a target="_blank" href="%s">Preview proces</a>', 'fumi'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'proces_updated_messages' );
