<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <a href="#" id="menu-icon">Menu</a>     
            <nav class="clearfix main-navigation-container mobile-menu">

           <?php
                wp_nav_menu( $arg = array (
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
    </header>