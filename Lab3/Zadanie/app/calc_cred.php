<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$years,&$interest){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$amount,&$years,&$interest,&$messages){
    if(!(isset($amount) && isset($years) && isset($interest))){
        return false;
    }

    if($amount == ""){
        $messages[] = 'Nie podano kwoty';
    }
    if($years == ""){
        $messages[] = 'Nie podano lat';
    }
    if($interest == ""){
        $messages[] = 'Nie podano oprocentowania';
    }

    if(count($messages) != 0) return false;

    if(!is_numeric($amount)){
        $messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if(!is_numeric($years)){
        $messages[] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if(!is_numeric($interest)){
        $messages[] = 'Trzecia wartość nie jest liczbą całkowitą';
    }

    if(count($messages) != 0) return false;
    else return true;
}

function process(&$amount,&$years,&$interest,&$messages,&$result){
    global $role;

    $amount = intval($amount);
    $years = intval($years);
    $interest = floatval($interest);

    if($years > 10 && $role != 'admin'){
        $messages[] = 'Tylko administrator może obliczać kredyt powyżej 10 lat!';
        return false;
    }

    $monthly = $amount / ($years * 12);
    $percent = $monthly * ($interest / 100);
    $result = $monthly + $percent;
}

$amount = null;
$years = null;
$interest = null;
$result = null;
$messages = array();

getParams($amount,$years,$interest);
if(validate($amount,$years,$interest,$messages)){
    process($amount,$years,$interest,$messages,$result);
}

include 'calc_cred_view.php';