<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php print(_APP_ROOT); ?>/app/style.css"/>
</head>
<body>

<div class="menu">
    Zalogowano jako <?php out($role) ?>
    <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button button">Inna strona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active button">Wyloguj</a>
</div>

<div class="content">

<form action="<?php print(_APP_ROOT); ?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
    <legend>Kalkulator kredytowy</legend>
    <fieldset>
        <label for="id_amount">Kwota: </label>
        <input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" />
        <label for="id_years">Liczba lat: </label>
        <input id="id_years" type="text" name="years" value="<?php out($years) ?>" />
        <label for="id_interest">Oprocentowanie: </label>
        <input id="id_interest" type="text" name="interest" value="<?php out($interest) ?>" />
    </fieldset>	
    <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
if(isset($messages)) {
    if(count($messages) > 0){
        echo '<ol class="message error-message">';
        foreach ( $messages as $key => $msg ) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if(isset($result)){ ?>
<div class="message success-message">
<?php echo 'Miesięczna rata: ' . round($result, 2) . ' zł'?>
</div>
<?php } ?>

</div>

</body>
</html>