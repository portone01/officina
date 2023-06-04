<?php

namespace bean;

class Veicolo {

    private $targa;
    private $marca;
    private $modello;
    private $anno;
    private $cfCliente;

    public function getTarga() {
        return $this->targa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModello() {
        return $this->modello;
    }

    public function getAnno() {
        return $this->anno;
    }

    public function getCfCliente() {
        return $this->cfCliente;
    }

    public function setTarga($targa) {
        $this->targa = $targa;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModello($modello) {
        $this->modello = $modello;
    }

    public function setAnno($anno) {
        $this->anno = $anno;
    }

    public function setCfCliente($cfCliente) {
        $this->cfCliente = $cfCliente;
    }

}
