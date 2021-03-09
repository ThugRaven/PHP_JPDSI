<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
	<label for="id_amount">Kwota: </label>
	<input id="id_amount" type="text" name="amount" value="<?php if(isset($amount)) print($amount); ?>" /><br />
        <label for="id_years">Liczba lat: </label>
	<input id="id_years" type="text" name="years" value="<?php if(isset($years)) print($years); ?>" /><br />
        <label for="id_interest">Oprocentowanie: </label>
	<input id="id_interest" type="text" name="interest" value="<?php if(isset($interest)) print($interest); ?>" /><br />

	<input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>