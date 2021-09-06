<?php

    /**
     * Plugin Name: Easy Contact Form
     * Plugin URI: http://.shemantabhowmik.com
     * Description: Very easy to use contact form for non-techy persons. Just copy and paste shortcode system plugin.
     * Version: 1.0
     * Author: Shemanta Bhowmik
     * Author URI: http://shemantabhowmik.com
     */

    function easy_contact_form_func() {

        // shortcode file
        require_once( 'shortcodes/form-shortcode.php' );

    }
    add_action( 'init', 'easy_contact_form_func' );