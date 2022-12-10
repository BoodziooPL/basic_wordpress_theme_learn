<?php
//## funkcja do ustawienia np. tytuly strony, mozna dodac rowniez custom-header parametry ustawiamy w add_theme_support
function theme_setup(){
    add_theme_support( 'title-tag' );
    //dodaje możliwosc dodania wlasnego logo zamiast nazwy witryny
    add_theme_support( 'custom-logo');
}
// ## odpalenie funkcji wyżej, odpalana podczas ladowania strony po zainicjowaniu motywu.  
add_action( 'after_setup_theme','theme_setup');


//## poniższa funkcja dodaje style.css oraz dodatkowe cssy i js'a na stronę
function add_scripts( ){
    //## implementacja głównego CSS'a
    wp_enqueue_style( 'main-stylesheet',get_stylesheet_uri( ), array(), rand(111,9999), 'all' );
    
    
    //## dodajemy dodatkowy css
    wp_enqueue_style('magic', get_template_directory_uri('/css.animation.css'));

    // ## dodajemy js'a
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
}
//## odpalenie powyzszej funkcji 2 parametry wp_enqueue_script dla wp a drugi to nazwa funkcji
add_action('wp_enqueue_scripts','add_scripts');




//## funkcja, zwracajaca liczbę, dla "excerpt_length, ktory zmienia długość słow w wyswietlanym poscie."
function custom_excerpt(){
    return 15;
}
//## odpalenie funkcji "custom_excerpt"
add_action('excerpt_length','custom_excerpt');

//rejestracja menu navigacji dostep do konfiguracji menu z panelu admina
function register_my_menu(){
    register_nav_menus(
        array(
            // rejestracja glownego menu header, mozliwe dodanie rowniez footermenu
            'header-menu' =>__('Header Menu'),
        )
        );
}

add_action('init','register_my_menu');
?>