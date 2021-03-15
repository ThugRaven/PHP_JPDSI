<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logowanie</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php print(_APP_ROOT); ?>/app/style.css"/>
</head>
<body>

<div class="content">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
    <legend>Logowanie</legend>
    <fieldset>
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
        <label for="id_pass">Hasło:</label>
        <input id="id_pass" type="password" name="pass" />
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php
if(isset($messages)){
    if(count($messages) > 0){
        echo '<ol class="message error-message">';
        foreach ($messages as $key => $msg ){
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

</div>	

</body>
</html>