<?php
	register_nav_menus();

	add_theme_support('post-thumbnails');

	add_filter('show_admin_bar', '__return_false');

    //添加index
    add_action( 'init', 'create_index_review' );
    function create_index_review() {
        register_post_type( 'index_reviews',
            array(
                'labels' => array(
                    'name' => 'index',
                    'singular_name' => 'index',
                    'add_new' => 'Add New',
                    'add_new_item' => 'Add New index Review',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit index Review',
                    'new_item' => 'New index Review',
                    'view' => 'View',
                    'view_item' => 'View index Review',
                    'search_items' => 'Search index Reviews',
                    'not_found' => 'No index Reviews found',
                    'not_found_in_trash' => 'No index Reviews found in Trash',
                    'parent' => 'Parent index Review'
                ),
     
                'public' => true,
                'menu_position' => 15,
                'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
                'taxonomies' => array( '' ),
                // 'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
                'has_archive' => true
            )
        );
    }
    //添加block
    add_action( 'init', 'create_block_review' );
    function create_block_review() {
        register_post_type( 'block_reviews',
            array(
                'labels' => array(
                    'name' => 'block',
                    'singular_name' => 'block',
                    'add_new' => 'Add New',
                    'add_new_item' => 'Add New block Review',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit block Review',
                    'new_item' => 'New block Review',
                    'view' => 'View',
                    'view_item' => 'View block Review',
                    'search_items' => 'Search block Reviews',
                    'not_found' => 'No block Reviews found',
                    'not_found_in_trash' => 'No block Reviews found in Trash',
                    'parent' => 'Parent block Review'
                ),
     
                'public' => true,
                'menu_position' => 15,
                'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
                'taxonomies' => array( '' ),
                // 'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
                'has_archive' => true
            )
        );
    }

   //创建一个操作函数，用来注册自定义分类法
	function my_index_taxonomy(){
	    $name = 'index_category';
	    $post_type = 'index_reviews';
	    $labels = array(
	        'name'                  => 'index_category',
	        'singular_name'         => 'index_category',
	        'search_items'          => '搜索index_category',
	        'popular_items'         => '热门index_category',
	        'all_items'             => '全部index_category',
	        'parent_item'           => '父级index_category',
	        'parent_item_colon'     => '父级index_category：',
	        'edit_item'             => '编辑index_category',
	        'update_item'           => '更新index_category',
	        'add_new_item'          => '新建index_category',
	        'new_item_name'         => 'index_category名称',
	        'add_or_remove_items'   => '添加或删除index_category',
	        'choose_from_most_used' => '从经常使用的index_category中选择',
	        'menu_name'             => 'index_category'
	    );
	    $args = array(
	        'labels'            => $labels,
	        'public'            => true,
	        'show_in_nav_menus' => true,
	        'hierarchical'      => true,
	        'show_ui'           => true,
	        'query_var'         => true,
	        'rewrite'           => true,
	        'show_admin_column' => true
	    );
	    register_taxonomy( $name, $post_type, $args );
	}
	add_action( 'init', 'my_index_taxonomy' );


?>