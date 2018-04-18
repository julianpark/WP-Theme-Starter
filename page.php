<?php
get_header();

echo '<h1>' . get_the_title() . '</h1>' . "\n";

the_post();
the_content();

get_footer();
?>
