<?php


add_theme_support("title-tag");

function menus()
{
  $locations = array(
    "primary" => "Desktop primary left sidebar",
    "footer" => "Footer menu items"
  );

  register_nav_menus($locations);
}

add_action('init', 'menus');


function registerStyles()
{
  $version = wp_get_theme()->get('version');
  wp_enqueue_style("bootstrap", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), "4.4.1", "all");
  wp_enqueue_style("fontAwesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
  wp_enqueue_style("yinonStyle", get_template_directory_uri() . "/style.css", array(), $version, "all");
}

add_action("wp_enqueue_scripts", 'registerStyles');


function registerScripts()
{
  wp_enqueue_script("bootstrapScripts", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
  wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "3.4.1", true);
  wp_enqueue_script("stackpath", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "3.4.1", true);
  wp_enqueue_script("mainJs", get_template_directory_uri() . "assets/js/main.js", array(), "3.4.1", true);
}

add_action("wp_enqueue_scripts", 'registerScripts');
