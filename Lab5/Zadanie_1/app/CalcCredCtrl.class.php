<?php

require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcCredForm.class.php';
require_once $conf->root_path . '/app/CalcCredResult.class.php';

class CalcCredCtrl {

    private $messages;
    private $form_calc;
    private $result;

    public function __construct() {
        $this->messages = new Messages();
        $this->form_calc = new CalcCredForm();
        $this->result = new CalcCredResult();
    }

    public function getParams() {
        $this->form_calc->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form_calc->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form_calc->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
    }

    public function validate() {
        if (!(isset($this->form_calc->amount) && isset($this->form_calc->years) && isset($this->form_calc->interest))) {
            return false;
        }

        if ($this->form_calc->amount == "") {
            $this->messages->addError('Nie podano kwoty');
        }
        if ($this->form_calc->years == "") {
            $this->messages->addError('Nie podano lat');
        }
        if ($this->form_calc->interest == "") {
            $this->messages->addError('Nie podano oprocentowania');
        }

        if ($this->messages->hasErrors())
            return false;

        if (!is_numeric($this->form_calc->amount)) {
            $this->messages->addError('Pierwsza wartość nie jest liczbą całkowitą');
        }

        if (!is_numeric($this->form_calc->years)) {
            $this->messages->addError('Druga wartość nie jest liczbą całkowitą');
        }

        if (!is_numeric($this->form_calc->interest)) {
            $this->messages->addError('Trzecia wartość nie jest liczbą całkowitą');
        }

        return !$this->messages->hasErrors();
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
//            global $role;

            $this->form_calc->amount = intval($this->form_calc->amount);
            $this->form_calc->years = intval($this->form_calc->years);
            $this->form_calc->interest = floatval($this->form_calc->interest);

//            if ($this->form_calc->years > 10 && $role != 'admin') {
//                $messages[] = 'Tylko administrator może obliczać kredyt powyżej 10 lat!';
//                return false;
//            }

            $monthly = $this->form_calc->amount / ($this->form_calc->years * 12);
            $percent = $monthly * ($this->form_calc->interest / 100);
            $this->result->result = $monthly + $percent;
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('root_path', $conf->root_path);
        $smarty->assign('header_description', 'Szablonowanie Smarty');

        $smarty->assign('form_calc', $this->form_calc);
        $smarty->assign('result', $this->result->result);
        $smarty->assign('messages', $this->messages);
//        $smarty->assign('role', $role);

        $smarty->display($conf->root_path . '/app/calc_cred_view.tpl');
    }

}
