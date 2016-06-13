<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Top Tabs',
		'id' => 'top_tabs',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="offscreen">',
		'after_title' => '</h2>',
	));
}
?>