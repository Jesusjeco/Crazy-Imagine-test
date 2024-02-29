<?php

function short_menu_shortcode($args)
{
    ob_start();
    get_template_part("blocks/short-menu/short_menu", "shortcode", $args);
    return ob_get_clean();
}
add_shortcode('short_menu_shortcode', 'short_menu_shortcode');
