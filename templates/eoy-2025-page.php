<?php 
/*Template Name: eoy-2025*/
get_header();?>

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