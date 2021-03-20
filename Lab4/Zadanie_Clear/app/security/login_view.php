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

            <!-- Main -->
            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2>Kalkulator kredytowy</h2>
                        <p>Logowanie</p>
                    </header>

                    <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
                        <div class="pure-g">
                            <div class="pure-u-2-5">
                                <label for="id_login" class="label">Login:</label>
                                <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
                                <label for="id_pass" class="label">Hasło:</label>
                                <input id="id_pass" type="password" name="pass" />
                                <br />
                                <ul class="actions">
                                    <li><input type="submit" value="Zaloguj" class="primary"></li>
                                    <!--<li><input type="reset" value="Reset"></li>-->
                                </ul>
                            </div>
                        </div>
                    </form>	

                    <?php
                    if (isset($messages)) {
                        if (count($messages) > 0) {
                            echo '<ol class="message error-message">';
                            foreach ($messages as $key => $msg) {
                                echo '<li>' . $msg . '</li>';
                            }
                            echo '</ol>';
                        }
                    }
                    ?>

                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://github.com/ThugRaven/PHP_JPDSI" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Kamil Wesołowski. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrolly.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.dropotron.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/jquery.scrollex.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/browser.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/breakpoints.min.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/util.js"></script>
        <script src="<?php print(_APP_ROOT); ?>/assets/js/main.js"></script>

    </body>
</html>