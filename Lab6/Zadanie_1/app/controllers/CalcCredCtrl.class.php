<?php

require_once 'CalcCredForm.class.php';
require_once 'CalcCredResult.class.php';

class CalcCredCtrl {

    private $form_calc;
    private $result;

    public function __construct() {
        $this->form_calc = new CalcCredForm();
        $this->result = new CalcCredResult();
    }

    public function getParams() {
        $this->form_calc->amount = getFromRequest('amount');
        $this->form_calc->years = getFromRequest('years');
        $this->form_calc->interest = getFromRequest('interest');
    }

    public function validate() {
        if (!(isset($this->form_calc->amount) && isset($this->form_calc->years) && isset($this->form_calc->interest))) {
            return false;
        }

        if ($this->form_calc->amount == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form_calc->years == "") {
            getMessages()->addError('Nie podano lat');
        }
        if ($this->form_calc->interest == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        if (getMessages()->hasErrors())
            return false;

        if (!is_numeric($this->form_calc->amount)) {
            getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
        }

        if (!is_numeric($this->form_calc->years)) {
            getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
        }

        if (!is_numeric($this->form_calc->interest)) {
            getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
        }

        return !getMessages()->hasErrors();
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
        getSmarty()->assign('header_description', 'Szablonowanie Smarty');

        getSmarty()->assign('form_calc', $this->form_calc);
        getSmarty()->assign('result', $this->result->result);

        getSmarty()->display('CalcCredView.tpl');
    }

}
