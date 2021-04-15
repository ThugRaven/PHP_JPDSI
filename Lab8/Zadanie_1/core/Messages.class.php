<?php

namespace core;

class Messages {

    private $infos = array();
    private $errors = array();

    public function addError($message) {
        $this->errors[] = $message;
    }

    public function addInfo($message) {
        $this->infos[] = $message;
    }

    public function isEmpty() {
        return (count($this->infos) + count($this->errors)) == 0;
    }

    public function hasErrors() {
        return count($this->errors) > 0;
    }

    public function hasInfos() {
        return count($this->infos) > 0;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getInfos() {
        return $this->infos;
    }

    public function clear() {
        $this->errors = array();
        $this->infos = array();
    }

}
