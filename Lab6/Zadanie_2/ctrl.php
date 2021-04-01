<?php

require_once 'init.php';

switch ($action) {
    default:
        $ctrl = new app\controllers\CalcCredCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        $ctrl = new app\controllers\CalcCredCtrl();
        $ctrl->process();
        break;
}
