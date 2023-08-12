<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2.3.4', true );
	wp_enqueue_script( 'svg', get_template_directory_uri() . '/js/svg.js', array(), true, true );
	/*wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/cookie.js', array(), true, true );*/
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
}

add_image_size('brend_cards', 1100, 750, true );
add_image_size('pay_cards', 400, 300, true );
add_image_size('image_play', 1280, 700, true );

add_action( 'init', 'register_post_types' );
function register_post_types() {
    register_post_type( 'Bonuses', [
        'label'  => null,
		'labels' => [
			'name'               => 'Bonuses', 
			'singular_name'      => 'Бонус', 
			'add_new'            => 'Добавить бонус', 
			'add_new_item'       => 'Добавление бонусов', 
			'edit_item'          => 'Редактирование бонусов', 
			'new_item'           => 'Новый бонус', 
			'view_item'          => 'Смотреть бонусы', 
			'search_items'       => 'Искать бонусы',
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Бонусы',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true, 
		'capability_type' 	  => 'post',
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
		'hide_empty'          => true,
    ]);

    register_post_type( 'Slots', [
		'label'  => null,
		'labels' => [
			'name'               => 'Slots', 
			'singular_name'      => 'Слот', 
			'add_new'            => 'Добавить слот', 
			'add_new_item'       => 'Добавление слотов', 
			'edit_item'          => 'Редактирование слота', 
			'new_item'           => 'Новый слот', 
			'view_item'          => 'Смотреть слоты', 
			'search_items'       => 'Искать слоты', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Слоты',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

add_action( 'init', 'create_taxonomy' );
function create_taxonomy() {
	register_taxonomy( 'pay', [ 'post' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Pay',
			'singular_name'     => 'Pay',
			'search_items'      => 'Search pay',
			'all_items'         => 'All pay',
			'view_item '        => 'View pay',
			'parent_item'       => 'Parent pay',
			'parent_item_colon' => 'Parent pay:',
			'edit_item'         => 'Edit pay',
			'update_item'       => 'Update pay',
			'add_new_item'      => 'Add New pay',
			'new_item_name'     => 'New pay Name',
			'menu_name'         => 'Pay',
		],
		'description'           => '', 
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false, 
		'show_in_rest'          => true, 
		'rest_base'             => null, 
	] );
	
	register_taxonomy( 'providers', [ 'post' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Providers',
			'singular_name'     => 'Providers',
			'search_items'      => 'Search providers',
			'all_items'         => 'All providers',
			'view_item '        => 'View providers',
			'parent_item'       => 'Parent providers',
			'parent_item_colon' => 'Parent providers:',
			'edit_item'         => 'Edit providers',
			'update_item'       => 'Update providers',
			'add_new_item'      => 'Add New providers',
			'new_item_name'     => 'New providers Name',
			'menu_name'         => 'Providers',
		],
		'description'           => '', 
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false, 
		'show_in_rest'          => true, 
		'rest_base'             => null, 
	] );

	register_taxonomy( 'country', [ 'post' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Country',
			'singular_name'     => 'Country',
			'search_items'      => 'Search country',
			'all_items'         => 'All country',
			'view_item '        => 'View country',
			'parent_item'       => 'Parent country',
			'parent_item_colon' => 'Parent country:',
			'edit_item'         => 'Edit country',
			'update_item'       => 'Update country',
			'add_new_item'      => 'Add New country',
			'new_item_name'     => 'New country Name',
			'menu_name'         => 'Country',
		],
		'description'           => '', 
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false, 
		'show_in_rest'          => true, 
		'rest_base'             => null, 
	] );

	register_taxonomy( 'currency', [ 'post' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Сurrency',
			'singular_name'     => 'Сurrency',
			'search_items'      => 'Search currency',
			'all_items'         => 'All currency',
			'view_item '        => 'View currency',
			'parent_item'       => 'Parent currency',
			'parent_item_colon' => 'Parent currency:',
			'edit_item'         => 'Edit currency',
			'update_item'       => 'Update currency',
			'add_new_item'      => 'Add New currency',
			'new_item_name'     => 'New currency Name',
			'menu_name'         => 'Сurrency',
		],
		'description'           => '', 
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false, 
		'show_in_rest'          => true, 
		'rest_base'             => null, 
	] );

}

add_action('add_meta_boxes', function () {
	add_meta_box( 'post_review', 'Обзоры', 'post_review_metabox', 'bonuses', 'side', 'low'  );
}, 1);

function post_review_metabox( $post ) {
	$reviews = get_posts(array( 'post_type'=>'post', 'posts_per_page'=>-1, 'orderby'=>'post_title', 'order'=>'ASC' ));

	if( $reviews ){
		echo '
		<div style="max-height:200px; overflow-y:auto;">
			<ul>
		';	

		foreach( $reviews as $review ){
			echo '
			<li><label>
				<input type="radio" name="post_parent" value="'. $review->ID .'" '. checked($review->ID, $post->post_parent, 0) .'> '. esc_html($review->post_title) .'
			</label></li>
			';
		}
		echo '</ul>
		</div>';
	}
	else
		echo 'Обзоры не найдены...';
}

function true_breadcrumbs(){
 
	// получаем номер текущей страницы
	$page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
	$separator = ' / '; //  разделяем обычным слэшем, но можете чем угодно другим
 
	// если главная страница сайта
	if( is_front_page() ){
 
		if( $page_num > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
		} else {
			echo 'Вы находитесь на главной странице';
		}
 
	} else { // не главная
 
		echo '<a href="' . site_url() . '">Главная</a>' . $separator;
 
		if( is_singular( $post_type_name ) ) {
			the_title();
		} elseif ( is_page() ){ // страницы WordPress 

			global $post;
		// если у текущей страницы существует родительская
		if ( $post->post_parent ) {
		
			$parent_id  = $post->post_parent; // присвоим в переменную
			$breadcrumbs = array(); 
		
			while ( $parent_id ) {
				$page = get_page( $parent_id );
				$breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
				$parent_id = $page->post_parent;
			}
		
			echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;
		
		}
 
			the_title();
 
		} elseif ( is_category() ) {
 
			single_cat_title();
 
		} elseif( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // архивы (по дням)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // архивы (по месяцам)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // архивы (по годам)
 
			echo get_the_time( 'Y' );
 
		} elseif ( is_author() ) { // архивы по авторам
 
			global $author;
			$userdata = get_userdata( $author );
			echo 'Опубликовал(а) ' . $userdata->display_name;
 
		} elseif ( is_404() ) { // если страницы не существует
 
			echo 'Ошибка 404';
 
		}
 
		if ( $page_num > 1 ) { // номер текущей страницы
			echo ' (' . $page_num . '-я страница)';
		}
 
	}

	if( is_tax( $taxonomy_name ) ) {
		$current_term = get_queried_object();
		// если родительский элемент таксономии существует
		if( $current_term->parent ) {
			echo get_term_parents_list( $current_term->parent, $taxonomy_name, array( 'separator' => $separator ) ) . $separator;
		}
		single_term_title();
	}
 
}