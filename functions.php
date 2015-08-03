<?php 
add_action( 'init', 'register_my_menus' );

// Add Menu/ Navigation option to site (back-end)

function register_my_menus() {
	register_nav_menus(
		array(
			'menu-main-navigation' => __( 'Main Navigation' ),
			'menu-top-quick-navigation' => __( 'Top Quick Navigation' )
			)
		);
}

// Add Menu/ Navigation to site (front-end)



// wp_nav_menu( array(
// 	'container' =>false,
// 	'menu_class' => 'f-menu',
// 	'echo' => true,
// 	'before' => '',
// 	'after' => '',
// 	'link_before' => '',
// 	'link_after' => '',
// 	'depth' => 0,
// 	'walker' => new description_walker())
// );



class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args)
	{
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li class="site-nav-item" id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$prepend = '';
		$append = '';
		$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

		if($depth != 0)
		{
			$description = $append = $prepend = "";
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

// Add sidebar (front-end)
/**
* Register our sidebars and widgetized areas.
*
*/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="sidebar-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// ************************************************************************************************//
