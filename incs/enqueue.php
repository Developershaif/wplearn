<?php

/***************css js jquery encluding function here**************/ 

if(!function_exists('css_js_jquery_encluding_wplearn')){
    function css_js_jquery_encluding_wplearn(){

        //this main css including code here
        wp_enqueue_style('main_css_wplearn', get_stylesheet_uri());

        // custom css including code here
        /*
        wp_enqueue_style('custom_css_wplearn', get_template_directory_uri().'/assets/css/custom.css',array(), '1.0.0','all'); //previous including code
        */
        wp_enqueue_style('custom_css_by_wplearn', get_parent_theme_file_uri('assets/css/custom.css'), array(), wp_get_theme()->get('Version'), 'all'); //latest encluding code

        // inline style for this code
        // wp_add_inline_style('custom_css_by_wplearn','body{
        // background: red; }');

        /*script file include start here*/ 
        wp_enqueue_script('main_js', get_template_directory_uri()."/assets/js/main.js", array(), wp_get_theme()->get('Version'), 'all', true );

        // wp_enqueue_script('main_js', get_parent_theme_file_uri('assets/js/main.js'),array(), wp_get_theme()->get('Version'), 'all', true); //leatest code

        /*script file include end here*/ 


        // inline script
        //wp_add_inline_script('main_js', 'console.log("mohammad shaifuddin");');
    }
}

add_action('wp_enqueue_scripts','css_js_jquery_encluding_wplearn');