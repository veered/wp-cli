<?php
	register_taxonomy( '{{slug}}', array( '{{post_types}}' ), array(
		'public'                  => {{public}},
		'show_in_nav_menus'       => {{show_in_nav_menus}},
		'show_ui'                 => {{show_ui}},
		'show_tagcloud'           => {{show_tagcloud}},
		'hierarchical'            => {{hierarchical}},
		'update_count_callback'   => '_update_post_term_count',
		'query_var'               => {{query_var}},
		'rewrite'                 => {{rewrite}},
		'capabilities'            => array (
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'                  => array(
			'name'                       =>  __( '{{label_plural_ucfirst}}', '{{textdomain}}' ),
			'singular_name'              =>  __( '{{label_ucfirst}}', '{{textdomain}}' ),
			'search_items'               =>  __( 'Search {{label_plural}}', '{{textdomain}}' ),
			'popular_items'              =>  __( 'Popular {{label_plural}}', '{{textdomain}}' ),
			'all_items'                  =>  __( 'All {{label_plural}}', '{{textdomain}}' ),
			'parent_item'                =>  __( 'Parent {{label}}', '{{textdomain}}' ),
			'parent_item_colon'          =>  __( 'Parent {{label}}:', '{{textdomain}}' ),
			'edit_item'                  =>  __( 'Edit {{label}}', '{{textdomain}}' ),
			'update_item'                =>  __( 'Update {{label}}', '{{textdomain}}' ),
			'add_new_item'               =>  __( 'New {{label}}', '{{textdomain}}' ),
			'new_item_name'              =>  __( 'New {{label}}', '{{textdomain}}' ),
			'separate_items_with_commas' =>  __( '{{label_plural_ucfirst}} separated by comma', '{{textdomain}}' ),
			'add_or_remove_items'        =>  __( 'Add or remove {{label_plural}}', '{{textdomain}}' ),
			'choose_from_most_used'      =>  __( 'Choose from the most used {{label_plural}}', '{{textdomain}}' ),
			'menu_name'                  =>  __( '{{label_plural_ucfirst}}', '{{textdomain}}' ),
		),
	) );