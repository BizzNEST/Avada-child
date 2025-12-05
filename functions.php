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

        if(is_page_template("templates/benefit-page.php")){
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
    }

    function enqueue_graph_script() {
        $theme_uri = get_stylesheet_directory_uri();
        
        // Enqueue jQuery first
        wp_enqueue_script('jquery');

        if(is_page_template("templates/benefit-page.php")){
            // Third-party scripts
            wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js', ['jquery'], null, true);
            wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', ['jquery'], null, true);
            
            
            // Custom scripts with correct path and dependencies
            wp_enqueue_script('app-js', $theme_uri . '/assets/js/app.js', ['jquery'], null, true);
            wp_enqueue_script('script-js', $theme_uri . '/assets/js/script.js', ['jquery', 'lottie'], null, true);
        }
        
        

        wp_enqueue_script(
            'graph-js',
            $theme_uri . '/assets/js/graph.js', // Fixed path
            ['jquery'],
            null,
            true
        );
    }
    add_action('wp_enqueue_scripts', 'enqueue_graph_script');

    function enqueue_anime_script(){
        if(is_page('eoy-2025')){
            wp_enqueue_script(
                'animejs', // Script handle (unique name)
                get_stylesheet_directory_uri() . '/scripts/anime.umd.min.js', // Full URI to the file
                array(), // Dependencies (none needed for animejs itself)
                '4.0.0', // Version number (or '1.0' or false)
                true // Load in the footer (recommended for performance)
            );
            wp_enqueue_script(
                'eoy-javascript',
                get_stylesheet_directory_uri() . '/scripts/eoy-javascript.js',
                array('animejs'), // DEPENDS on 'animejs' being loaded first
                '1.0',
                true 
            );
        }
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_anime_script' );
   function enque_pagination_script(){
        if(is_page('eoy-2025')){
            wp_enqueue_script(
                'paginationjs', // Script handle (unique name)
                get_stylesheet_directory_uri() . '/scripts/pagination.js', // Full URI to the file
                array(), // Dependencies (none needed for animejs itself)
                '4.0.0', // Version number (or '1.0' or false)
                true // Load in the footer (recommended for performance)
            );
            wp_enqueue_script(
                'eoy-javascript',
                get_stylesheet_directory_uri() . '/scripts/eoy-javascript.js',
                array('paginationjs'), // DEPENDS on 'animejs' being loaded first
                '1.0',
                true 
            );
        }
    }
    add_action( 'wp_enqueue_scripts', 'enque_pagination_script' );
    function eoy_2025_enqueue_section_styles() {
        $base_uri  = get_stylesheet_directory_uri() . '/assets/css/eoy-2025/';
        $base_path = get_stylesheet_directory() . '/assets/css/eoy-2025/';

        $sections = array( 'hero', 'toc', 'financial', 'effective', 'economic', 'donation', 'confidence' );

        if ( is_page( 'eoy-2025' ) ) {
            $main_style_file = 'eoy-2025.css';

            wp_enqueue_style(
                'eoy-2025-main',
                $base_uri . $main_style_file,
                array(),
                filemtime( $base_path . $main_style_file )
            );

            foreach ( $sections as $section ) {
                $handle = 'eoy-' . $section . '-section';
                $file   = $section . '-section.css';

                wp_enqueue_style(
                    $handle,
                    $base_uri . $file,
                    array(), 
                    filemtime( $base_path . $file )
                );
            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'eoy_2025_enqueue_section_styles' );

?>