<?php 
/*
 * Plugin Name: CB Disable Comment URL
 * Description: Easy to disable URL Field from comment box
 * Version: 1.0
 * Author: Md Abul Bashar
 * Author URI: http://www.codingbank.com
 */



// URL Field Remove from comment form

function cb_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','cb_disable_comment_url');




?>