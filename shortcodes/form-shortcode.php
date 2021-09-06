<?php

    /**
     * All styles and script files
     * -- bootstrap style files
     * -- bootstrap script files
     */
    function easy_contact_form_styles_func() {
            
        // bootstrap styles
        wp_enqueue_style( 'bootstrap-style', PLUGINS_URL( 'css/bootstrap.min.css', __FILE__ ) );

        // bootstrap jquery files
        wp_enqueue_script( 'bootstrap-scripts', PLUGINS_URL( 'js/bootstrap.min.js', __FILE__ ), '', ['jquery'] );

    }
    add_action( 'wp_enqueue_scripts', 'easy_contact_form_styles_func' );

    function easy_contact_form_shortcode_func() { ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <div style="width: 500px; margin: auto;" class="mt-5 mb-5">
            <h2 class="text-center">Get A Quote</h2>
            <form action="" method="POST">
                
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" id="full_name">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                
                <label>Gender</label>
                <div class="form-check">
                    <label for="men" class="form-check-label">Men</label>
                    <input type="radio" class="form-check-input" id="men" name="form-check-inputs">
                </div>
                <div class="form-check">
                    <label for="women" class="form-check-label">Women</label>
                    <input type="radio" class="form-check-input" id="women" name="form-check-inputs">
                </div>
                <div class="form-check">
                    <label for="others" class="form-check-label">Others</label>
                    <input type="radio" class="form-check-input" id="others" name="form-check-inputs">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary mt-3">Submit</button>
                </div>
            </form>
        </div>

    <?php }
    add_shortcode( 'easy-contact-form', 'easy_contact_form_shortcode_func' );

?>