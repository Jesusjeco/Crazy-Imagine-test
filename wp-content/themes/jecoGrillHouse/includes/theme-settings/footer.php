<?php

add_action('get_footer', function(){
wp_enqueue_script('jQuery',SCRIPTS_PATH.'jquery.min.js');
wp_enqueue_script('Bootstrap',SCRIPTS_PATH.'bootstrap.min.js');
});