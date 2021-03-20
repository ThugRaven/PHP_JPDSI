<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form_calc){
    $form_calc['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form_calc['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $form_calc['interest'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$form_calc,&$messages){
    if(!(isset($form_calc['amount']) && isset($form_calc['years']) && isset($form_calc['interest']))){
        return false;
    }

    if($form_calc['amount'] == ""){
        $messages[] = 'Nie podano kwoty';
    }
    if($form_calc['years'] == ""){
        $messages[] = 'Nie podano lat';
    }
    if($form_calc['interest'] == ""){
        $messages[] = 'Nie podano oprocentowania';
    }

    if(count($messages) != 0) return false;

    if(!is_numeric($form_calc['amount'])){
        $messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if(!is_numeric($form_calc['years'])){
        $messages[] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if(!is_numeric($form_calc['interest'])){
        $messages[] = 'Trzecia wartość nie jest liczbą całkowitą';
    }

    if(count($messages) != 0) return false;
    else return true;
}

function process(&$form_calc,&$messages,&$result){
    global $role;

    $form_calc['amount'] = intval($form_calc['amount']);
    $form_calc['years'] = intval($form_calc['years']);
    $form_calc['interest'] = floatval($form_calc['interest']);

    if($form_calc['years'] > 10 && $role != 'admin'){
        $messages[] = 'Tylko administrator może obliczać kredyt powyżej 10 lat!';
        return false;
    }

    $monthly = $form_calc['amount'] / ($form_calc['years'] * 12);
    $percent = $monthly * ($form_calc['interest'] / 100);
    $result = $monthly + $percent;
}

$form_calc = array();
$result = null;
$messages = array();

getParams($form_calc);
if(validate($form_calc,$messages)){
    process($form_calc,$messages,$result);
}

include 'calc_cred_view.php';