<?php
// Hier werden die Custom Post Types indexiert. Einfach freischalten und Argumente austauschen.

// function create_post_type_Spectre()
// {
//     register_taxonomy_for_object_type('category', 'Spectre-blank'); // Register Taxonomies for Category
//     register_taxonomy_for_object_type('post_tag', 'Spectre-blank');
//     register_post_type('Spectre-blank', // Register Custom Post Type
//         array(
//         'labels' => array(
//             'name' => __('Custom Post Type', 'Spectreblank'), // Rename these to suit
//             'singular_name' => __('Custom Post Type', 'Spectreblank'),
//             'add_new' => __('Add New', 'Spectreblank'),
//             'add_new_item' => __('Add New Custom Post Type', 'Spectreblank'),
//             'edit' => __('Edit', 'Custom Post Type'),
//             'edit_item' => __('Edit Custom Post Type', 'Spectreblank'),
//             'new_item' => __('New Custom Post Type', 'Spectreblank'),
//             'view' => __('View Custom Post Type', 'Spectreblank'),
//             'view_item' => __('View Custom Post Type', 'Spectreblank'),
//             'search_items' => __('Search Custom Post Type', 'Spectreblank'),
//             'not_found' => __('No Custom Post Type found', 'Spectreblank'),
//             'not_found_in_trash' => __('No Custom Post Type found in Trash', 'Spectreblank')
//         ),
//         'public' => true,
//         'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
//         'has_archive' => true,
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail'
//         ), // Go to Dashboard Custom Spectre Blank post for supports
//         'can_export' => true, // Allows export in Tools > Export
//         'taxonomies' => array(
//             'post_tag',
//             'category'
//         ) // Add Category and Post Tags support
//     ));
// }
// add_action( 'init', 'create_post_type_Spectre', 20 );

?>
