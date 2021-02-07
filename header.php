<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header>

<h1> <a href="<?= home_url(); ?>"><?php bloginfo('name'); ?> </a> </h1>
<h2> <?php bloginfo('description'); ?> </h2>

<nav>
<?php 
$args = array('theme_location' => 'main_menu');
wp_nav_menu($args); 
?>
</nav>
<div id="search_form">
    <?php get_search_form() ?>
</div>
<div class="clear"></div>

</header>
    
