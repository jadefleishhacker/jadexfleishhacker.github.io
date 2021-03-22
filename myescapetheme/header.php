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

<head>
    <meta charset=" utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="Jade's WordPress Theme: My Escape Theme">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/myescapetheme/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ukr2ody.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'style.css'; ?>">

</head>

<body>
    <nav>
        <h1 class="site-title" href="<?php echo home_url('/'); ?>">A Day in the Life of Jade</h1>
        <ul class="menu">
            <li><a class="active-menu" href="index.html">Home</a></li>
            <li><a href="#jade">Jade</a></li>
            <li><a href="#lifeblogs">Life Blogs</a>
                <ul>
                    <li><a href="#lifeblogs#blogs">Blogs</a></li>
                    <li><a href="#lifeblogs#explore">Explore</a></li>
                </ul>
            </li>
            <li><a href="#foodblogs">Food Blogs</a>
                <ul>
                    <li><a href="#foodblogs#blogs">Blogs</a></li>
                    <li><a href="#foodblogs#explore">Explore</a></li>
                </ul>
            </li>
            <li><a href="#photoalbum">Photo Album</a></li>
        </ul>
    </nav>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <ul>
                <li><a class="active-menu" href="index.html">Home</a></li>
                <li><a href="jade.html">Jade</a></li>
                <li><a href="lifeblogs.html">Life Blogs</a></li>
                <li><a href="foodblogs.html">Food Blogs</a></li>
                <li><a href="photoalbum.html">Photo Album</a></li>
            </ul>
        </div>
    </div>

    <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>