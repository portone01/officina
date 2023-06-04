<?php

namespace bean;

class Cliente {

    private $username;
    private $password;
    private $codFiscale;
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getCodFiscale() {
        return $this->codFiscale;
    }

    public function setCodFiscale($codFiscale) {
        $this->codFiscale = $codFiscale;
    }


}
