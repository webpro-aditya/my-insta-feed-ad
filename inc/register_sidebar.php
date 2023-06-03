<?php

function function_widgets_init()
{
    $args = array(
        'name'          => 'Awesome Sidebar',
        'id'            => 'awesome-sidebar',
        'description'   => 'The Awesome Sidebar is shown on the left hand side of blog pages in this theme',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' 
      );
      register_sidebar( $args );
}