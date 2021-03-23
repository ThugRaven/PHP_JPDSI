<?php

require_once dirname(__FILE__) . '/../config.php';

require_once $conf->root_path . '/app/CalcCredCtrl.class.php';

$ctrl = new CalcCredCtrl();
$ctrl->process();
