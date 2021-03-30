<?php

require_once 'init.php';

switch ($action) {
    default:
        include_once '/app/controllers/CalcCredCtrl.class.php';
        $ctrl = new CalcCredCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        include_once '/app/controllers/CalcCredCtrl.class.php';
        $ctrl = new CalcCredCtrl();
        $ctrl->process();
        break;
}
