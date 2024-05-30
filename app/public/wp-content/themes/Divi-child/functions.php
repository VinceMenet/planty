<?php
function mon_theme_enfant_enqueue_styles() {
    $parent_style = 'parent-style'; // Utilise le handle du thème parent

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_enfant_enqueue_styles');

// Lien Admin à la connexion d'un utilisateur

function add_admin_link_to_menu( $items, $args ) {
    // Vérifie si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Crée le lien "Admin"
        $admin_link = '<li><a href="' . admin_url() . '">' . __( 'Admin' ) . '</a></li>';
        
        // Ajoute le lien "Admin" aux éléments du menu
        $items .= $admin_link;
    }
    
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

?>
