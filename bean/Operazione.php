<?php

namespace bean;

class Operazione {

    private $id;
    private $dataAcc;
    private $dataPre;
    private $dataRic;
    private $targa;
    private $stato;
    
    public function getId() {
        return $this->id;
    }

    public function getDataAcc() {
        return $this->dataAcc;
    }

    public function getDataPre() {
        return $this->dataPre;
    }

    public function getDataRic() {
        return $this->dataRic;
    }

    public function getTarga() {
        return $this->targa;
    }

    public function getStato() {
        return $this->stato;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDataAcc($dataAcc) {
        $this->dataAcc = $dataAcc;
    }

    public function setDataPre($dataPre) {
        $this->dataPre = $dataPre;
    }

    public function setDataRic($dataRic) {
        $this->dataRic = $dataRic;
    }

    public function setTarga($targa) {
        $this->targa = $targa;
    }

    public function setStato($stato) {
        $this->stato = $stato;
    }


}
