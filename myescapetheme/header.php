<?php
/**
 * Header Template
 * 
 * The header template is generally used on every page of your site. Nearly all other templates call is somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the footer.php file. It also executes key functions needed by the theme, child themes, and plugins.
 * 
 * @package My Escape Theme
 * @subpackage Template
 */
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset=" utf-8">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="My Escape Theme">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    </head>
<body>
    <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('discription'); ?></h2>