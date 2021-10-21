<?php
if (function_exists('register_sidebar'))
{
    // DEFINIERE WIDGETBEREICH 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'Spectreblank'),
        'description' => __('Description for this widget-area...', 'Spectreblank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // DEFINIERE WIDGETBEREICH 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'Spectreblank'),
        'description' => __('Description for this widget-area...', 'Spectreblank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
?>
