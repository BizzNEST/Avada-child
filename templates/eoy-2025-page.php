<?php 
/*Template Name: eoy-2025*/
get_header();?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
<div id='primary' class='content-area'>
    <?php
        $sections = array('hero', 'toc', 'economic', 'confidence', 'effective', 'financial', 'donation');
        foreach ($sections as $section){
            get_template_part('templates/template-parts/eoy', $section);
        }
    ?>
</div>

<?php
get_footer();