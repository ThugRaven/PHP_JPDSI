<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Kalkulator kredytowy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php print(_APP_ROOT); ?>/app/style.css"/>
        <noscript><link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/noscript.css" /></noscript>
    </head>

    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1 id="logo"><a href="<?php print(_APP_ROOT); ?>/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="<?php print(_APP_ROOT); ?>/index.php">Strona główna</a></li>
                        <?php
                        if (!empty($role)) {
                            echo '<li>Zalogowano jako ' . $role . '</li>';
                            echo '<li><a href="' . _APP_ROOT . '/app/security/logout.php" class="button primary">Wyloguj się</a></li>'; 

                        } else {
                            echo '<li><a href="#" class="button primary">Zaloguj się</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </header>

