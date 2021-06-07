<?php
acf_form_head();
get_header();
$author_id = get_the_author_meta('ID');

$linkedin_link = get_field('lien_linkedin');
$twitter_link = get_field('lien_twitter');
$photo = get_field('avatar');

?>

<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
</br> </br>

<a href="<?php echo $linkedin_link; ?>">LinkedIn</a>
<a href="<?php echo $twitter_link; ?>">Twitter</a>

