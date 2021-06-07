<?php
 /*
 * Template Name: Edit Profile Template
 * Custom template used for custom php code display
 * @package   Portafolio WordPress Theme
 * @author    Gufran Hasan
 * @copyright Copyright templatecustom.com
 * @link      http://www.templatecustom.com
 */
?>
<?php get_header(); ?>

<?php

if (is_user_logged_in())
{
    acf_form_head();
    get_header();
    global $current_user;
    $user = wp_get_current_user();
    $role = ( array )$user->roles;
    $role = $role[0];
    if ($role === "editor" || $role === "administrator") {
        $options = array(
            'post_id' => 'user_' . $current_user->ID,
            'field_groups' => array(
            8
            ) ,
            'submit_value' => 'Update Profile',
            'form' => true
            );
            
        acf_form($options);
    } else {
        echo "Vous n'êtes pas connecté";
    }  
}

?>