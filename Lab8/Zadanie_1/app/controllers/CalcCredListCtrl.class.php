<?php

namespace app\controllers;

use app\forms\CalcCredListForm;
use PDOException;

class CalcCredListCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new CalcCredListForm();
    }

    public function getParams() {
        $this->form->amount = getFromRequest('amount');
    }

    public function validate() {
        return !getMessages()->hasErrors();
    }

    public function validateEdit() {
        $this->form->id = getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        return !getMessages()->hasErrors();
    }

    public function action_calcList() {
        $this->getParams();
        $this->validate();

        $search_params = [];
        if (isset($this->form->amount) && !empty($this->form->amount) && is_numeric($this->form->amount)) {
            $search_params['amount'] = $this->form->amount;
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where["ORDER"] = "date";

        try {
            $this->records = getDB()->select("calc_list", [
                "id_calc",
                "amount",
                "years",
                "interest",
                "monthly_rate",
                "date",
                    ], $where);
        } catch (PDOException $ex) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) {
                getMessages()->addError($ex->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_calcDelete() {
        if (!inRole('admin')) {
            getMessages()->addError('Tylko administrator może usuwać rekordy!');
        } else if ($this->validateEdit()) {
            try {
                getDB()->delete("calc_list", [
                    "id_calc" => $this->form->id
                ]);
                getMessages()->addInfo('Pomyślnie usunięto rekord');
            } catch (PDOException $ex) {
                getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
                if (getConf()->debug) {
                    getMessages()->addError($ex->getMessage());
                }
            }
        }

        forwardTo('calcList');
    }

    public function generateView() {
        getSmarty()->assign('header_description', 'Lista obliczeń');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('records', $this->records);
        if (isset($_SESSION['user'])) {
            getSmarty()->assign('user', unserialize($_SESSION['user']));
        } else {
            getSmarty()->assign('user', null);
        }

        getSmarty()->display('CalcCredListView.tpl');
    }

}
