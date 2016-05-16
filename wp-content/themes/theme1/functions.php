<?php

/**
 * Загружаемые скрипты и стили
 */
function load_style_script(){
    wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
    wp_enqueue_script('jqFancyTransitions', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');
    wp_enqueue_style('style' , get_template_directory_uri().'/style.css');
}

/**
 * Загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts' , 'load_style_script');

/**
 * Поддержка миниатюр
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);

/**
 * Добавляем виджеты
 */

register_sidebar(array('name' => 'Меню',
                        'id' => 'menu_header',
                        'before_widget'=>'',
                        'after_widget'=>''));

register_sidebar(array('name' => 'Sidebar',
                        'id' => 'sidebar',
                        'before_widget'=>'<div class="sidebar-widjet %2$s">',
                        'after_widget'=>'</div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'));

register_sidebar(array('name' => 'Footer',
                        'id' => 'footer',
                        'before_widget'=>'<div class="footer-info %2$s">',
                        'after_widget'=>'</div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'));