<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST['amount'];
$years = $_REQUEST['years'];
$interest = $_REQUEST['interest'];

if (!(isset($amount) && isset($years) && isset($interest))) {
	$messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($amount == ""){
	$messages[] = 'Nie podano kwoty';
}
if ($years == ""){
	$messages[] = 'Nie podano liczby lat';
}
if ($interest == ""){
	$messages[] = 'Nie podano oprocentowania';
}

if (empty($messages)) {
	if (!is_numeric($amount)){
		$messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (!is_numeric($years)){
		$messages[] = 'Druga wartość nie jest liczbą całkowitą';
	}
        
        if (!is_numeric($interest)){
		$messages[] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
}


if (empty($messages)) {
	$amount = intval($amount);
	$years = intval($years);
        $interest = intval($interest);

	$monthly = $amount / ($years * 12);
        $percent = $monthly * ($interest / 100);
        $result = $monthly + $percent;
}

include 'calc_cred_view.php';