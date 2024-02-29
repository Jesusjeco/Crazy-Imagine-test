<?php

/*
* wp_footer actions
*/
add_action("wp_footer", function () {
    echo "Llega";
    wp_enqueue_script('jquery');
});
