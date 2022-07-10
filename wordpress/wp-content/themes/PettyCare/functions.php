<?php
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function collectiveray_theme_scripts_function() {
    wp_enqueue_script ('fichier-js', get_template_directory_uri (). '/js/main.js');
  }
  add_action('wp_enqueue_scripts','collectiveray_theme_scripts_function');

?>