<?php
add_theme_support('title-tag');

// thumbnail set up code here

 /*
add_theme_support('post-thumbnails', array('post')); //this is one stay for thumbnail image support
add_image_size('post-thumbnails', 970, 350, true); //this is one stay for thumbnail image support
 */

 if(!function_exists('thumbnail_added_wplearn')){
    function thumbnail_added_wplearn(){

        // the hook is working for tranlates
                //load_text_domain('wplearn', array());

        // this hook is for thumbnails supported
        add_theme_support('post-thumbnails', array('post', 'page'));

        //this hook for port format
        add_theme_support('post-formats',array('aside','image','gallery','video','audio', 'quote','link', 'status','chat'));
    }
 }
 add_action('after_setup_theme', 'thumbnail_added_wplearn');
