<?php
  
register_nav_menus(
  array(
    "principal" => "Principal"
  )
);


function fgf_widgets_init() {

	register_sidebar( array(
		'name' => 'Barra lateral direita',
		'id' => 'sidebar_right',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'fgf_widgets_init' );

?>