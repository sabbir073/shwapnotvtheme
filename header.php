<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shwapno_TV
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
<div class="zmovo-main dark-img">
<header class="zmovo-header zmovo-header3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 zmovo-logos">
                        <div class="zmovo-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-lg-8 zmovo-menus">
                        <div class="main-menu">
                            <div class="navigation">
                                <div class="menu-container">
                                    <div id="navigation">
                                        <ul>
                                            <li class="active has-sub"><span class="submenu-button"></span><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="trailor.html">Trailor</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Product</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Grid view</a>
                                                        <ul>
                                                            <li><a href="grid.html">4 column</a></li>
                                                            <li><a href="grid-left.html">Left Side</a></li>
                                                            <li><a href="grid-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">List view</a>
                                                        <ul>
                                                            <li><a href="list.html">one column</a></li>
                                                            <li><a href="list-left.html">Left Side</a></li>
                                                            <li><a href="list-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product-single.html">Single Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Page</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Login</a>
                                                        <ul>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="ragister.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">blog</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Page</a>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Left</a></li>
                                                            <li><a href="blog-2.html">Blog Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Single</a>
                                                        <ul>
                                                            <li><a href="blog-details.html">Blog Single 1</a></li>
                                                            <li><a href="blog-details-2.html">Blog Single 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 zmovo-t-right">
                        <div class="zmovo-header-right">
                            <div class="zmovo-top-search">
                                <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                                <div class="zmovo-hidden-search" id="opensearch">
                                    <input type="search" placeholder="Enter the movie Name">
                                </div>
                            </div>
                            <div class="zmovo-login">
                                <a href="login.html" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
