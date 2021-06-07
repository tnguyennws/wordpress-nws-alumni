<?php
 /*
 * Template Name: Custom Template
 * Custom template used for custom php code display
 * @package   Portafolio WordPress Theme
 * @author    Gufran Hasan
 * @copyright Copyright templatecustom.com
 * @link      http://www.templatecustom.com
 */
?>
<?php get_header(); ?>

<?php
    acf_form_head();
    get_header();
    $author_id = get_the_author_meta('ID');
    $avatar = get_field('avatar', 'user_'. $author_id );
    $linkedin_link = get_field('lien_linkedin', 'user_'. $author_id );
    $twitter_handle = get_field('lien_twitter', 'user_'. $author_id );

    echo 'Bonjour et bienvenue sur NWS Alumni';

    if ($role === "editor") {
        // Echo Form
        echo 'editor';
        } else {
        // Error Handling
        }

?>

    </br> </br>

    <img src="<?php echo $avatar_image['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
    <a href="<?php echo $linkedin_link; ?>">LinkedIn</a>
    <a href="https://twitter.com/<?php echo $twitter_handle; ?>">Twitter</a>

<?php get_footer(); ?>