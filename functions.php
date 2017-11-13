<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage ulm_theme
 */

add_theme_support('title-tag'); // теперь тайтл управляется самим вп

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

// register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
// 	'name' => 'Сайдбар', // Название в админке
// 	'id' => "sidebar", // идентификатор для вызова в шаблонах
// 	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
// 	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
// 	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
// 	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
// 	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
// ));

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_scripts() { // добавление скриптов
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
	    wp_deregister_script('jquery'); // выключаем стандартный jquery
	    wp_enqueue_script('jquery-3', get_template_directory_uri().'/js/jquery-3.2.1.min.js','','',true); // бутстрап
	    // wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','','',true); // бутстрап
	    wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.js','','',true); // и скрипты шаблона
	    wp_enqueue_script('iscroll', get_template_directory_uri().'/js/iscroll.min.js','','',true); // и скрипты шаблона
	    wp_enqueue_script('drawer', get_template_directory_uri().'/js/drawer.min.js','','',true); // и скрипты шаблона
	    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
	}
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles() { // добавление стилей
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
	    // wp_enqueue_style( 'bs', get_template_directory_uri().'/css/bootstrap.min.css' ); // бутстрап
	    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' ); // main style
	    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css' ); // slick (slider)
	    wp_enqueue_style( 'media-main', get_template_directory_uri().'/css/media-main.css' ); // main style mobile
	    wp_enqueue_style( 'drawer', get_template_directory_uri().'/css/drawer.min.css' ); // main style mobile
		// wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
	}
}
?>
