<?php
acf_form_head();
get_header();
$author_id = get_the_author_meta('ID');
$avatar_image= get_field('avatar', 'user_'. $author_id );
$linkedin_link= get_field('lien_linkedin', 'user_'. $author_id );
$twitter_handle= get_field('lien_twitter', 'user_'. $author_id );
?>

<img src="<?php echo $avatar_image['url']; ?>" alt="<?php echo $avatar_image['alt']; ?>" />
<a href="<?php echo $linkedin_link; ?>">LinkedIn</a>
<a href="https://twitter.com/<?php echo $twitter_handle; ?>">Twitter</a>