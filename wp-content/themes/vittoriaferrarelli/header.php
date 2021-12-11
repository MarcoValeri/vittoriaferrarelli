<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vittoria Ferrarelli</title>

        <!-- 
            Add wp_head() that allows to include code in the head by 
            WordPress menu
        -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="navbar" role="navigation">
                <input id="show_menu" type="radio" class="navbar__input">
                <label for="show_menu" class="navbar__label">
                    <span class="navbar__bar"></span>
                    <span class="navbar__bar"></span>
                    <span class="navbar__bar"></span>
                </label>
                <section class="navbar__menu">
                    <?php
                        $args = [
                            'theme_location' => 'main-menu'
                        ];
                        wp_nav_menu($args);
                    ?>
                </section>
            </nav>
        </header>