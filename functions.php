<?php

    function easy_contact_form_styles_func() {
        
        // bootstrap styles
        wp_enqueue_style( 'bootstrap-style', PLUGINS_URL( 'css/bootstrap.min.css', __FILE__ ) );

        // bootstrap jquery files
        wp_enqueue_script( 'bootstrap-scripts', PLUGINS_URL( 'js/bootstrap.min.js', __FILE__ ) );

    }
    add_action( 'wp_enqueue_scripts', 'easy_contact_form_styles_func' );