<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	));
}

?>
