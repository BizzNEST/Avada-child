<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        $parenthandle = 'Avada';
        $theme = wp_get_theme();
        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
            array(), // if the parent theme code has a dependency, copy it to here
            $theme->parent()->get('Version')
        );
        wp_enqueue_style( 'custom-style', get_stylesheet_uri(),
            array( $parenthandle ),
            $theme->get('Version') // this only works if you have Version in the style header
        );
        //all under here is for BENEFIT PAGE
        $theme_uri = get_stylesheet_directory_uri();

        //CSS
        wp_enqueue_style('sponsor-section', $theme_uri . '/assets/css/sponsor-section.css');
        wp_enqueue_style('benefit-info', $theme_uri . '/assets/css/benefit-info.css');
        wp_enqueue_style('statsbar', $theme_uri . '/assets/css/statsbar.css');
        wp_enqueue_style('global', $theme_uri . '/assets/css/global.css');
        wp_enqueue_style('donate-section', $theme_uri . '/assets/css/donate-section.css');
        wp_enqueue_style('mason-grid', $theme_uri . '/assets/css/mason-grid-section.css');

        //FONTS
        wp_enqueue_style('inglesa-font', 'https://fonts.googleapis.com/css2?family=Inglesa+Script:opsz,wght@6..72,400&display=swap');
        wp_enqueue_style('lato-font', 'https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');

        // Splide Carousel
        wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    }

    function enqueue_graph_script() {
        $theme_uri = get_stylesheet_directory_uri();
        wp_enqueue_script(
            'graph-js',                // $handle: A unique name for the script
            get_template_directory_uri().'-child/assets/js/graph.js', // $src: Path to the JavaScript file
            array('jquery'),           // $deps: Array of dependencies (e.g., 'jquery' if needed)
            null,                      // $ver: You can specify a version number or null to ignore it
            true                       // $in_footer: Load script in the footer (true)
        );

        //all under here for BENEFIT PAGE
        wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js', [], null, true);
        wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', [], null, true);

        // Custom JS files
        wp_enqueue_script('app-js', $theme_uri . '/assets/js/app.js', [], null, true);
        wp_enqueue_script('script-js', $theme_uri . '/assets/js/script.js', [], ['lottie'], null, true);
    }
    add_action('wp_enqueue_scripts', 'enqueue_graph_script');    
?>