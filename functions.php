<?php

function dodaj_moj_styl() {
    wp_enqueue_style('nazwa-mojego-stylu', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'dodaj_moj_styl');

?>