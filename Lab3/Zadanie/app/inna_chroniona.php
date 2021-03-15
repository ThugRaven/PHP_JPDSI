<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chroniona strona</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php print(_APP_ROOT); ?>/app/style.css"/>
</head>
<body>

<div class="menu">
    <a href="<?php print(_APP_ROOT); ?>/app/calc_cred.php" class="pure-button button">Powrót do kalkulatora</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active button">Wyloguj</a>
</div>

<div class="content">
    <p>To jest inna chroniona strona aplikacji internetowej</p>
</div>	

</body>
</html>