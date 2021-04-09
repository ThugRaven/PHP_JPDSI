<?php

require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default:
        control(null, 'CalcCredCtrl', 'generateView', ['user', 'admin']);
    case 'calcCompute':
        control(null, 'CalcCredCtrl', 'process', ['user', 'admin']);
    case 'login':
        control(null, 'LoginCtrl', 'doLogin');
    case 'logout':
        control(null, 'LoginCtrl', 'doLogout', ['user', 'admin']);
}
