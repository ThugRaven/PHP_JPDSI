<!DOCTYPE HTML>
<html>
    <head>
        <title>Kalkulator kredytowy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/grids-responsive-min.css" />
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style.css"/>
        <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
    </head>

    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1 id="logo"><a href="{$conf->app_url}/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="{$conf->app_url}/index.php">Strona główna</a></li>
                            {if !empty($user->role)}
                            <li>Zalogowano jako {$user->role}</li>
                            <li><a href="{$conf->action_url}logout" class="button primary">Wyloguj się</a></li>
                            {else}
                            <li><a href="{$conf->action_url}login" class="button primary">Zaloguj się</a></li>
                            {/if}
                    </ul>
                </nav>
            </header>

            {block name=content} Domyślna treść zawartości... {/block}

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://github.com/ThugRaven/PHP_JPDSI" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Kamil Wesołowski. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="blank">HTML5 UP</a></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
        <script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
        <script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
        <script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
        <script src="{$conf->app_url}/assets/js/browser.min.js"></script>
        <script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
        <script src="{$conf->app_url}/assets/js/util.js"></script>
        <script src="{$conf->app_url}/assets/js/main.js"></script>

    </body>
</html>