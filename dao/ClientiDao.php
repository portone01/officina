<?php

namespace dao;

require_once 'DbDao.php';
require_once 'DaoException.php';
require_once 'bean/Cliente.php';
require_once 'bean/Veicolo.php';

use bean\Cliente;
use bean\Veicolo;

class ClientiDao {

    private $dbDao;

    public function __construct() {
        $this->dbDao = new DbDao();
    }

    public function accesso($username, $password) {
        $con = null;
        $rs = null;
        $bean = null;
        try {
            $con = $this->dbDao->getConnection();

            $query = 'select * from clienti where username=? and password=?';
            $stmt = $con->prepare($query);
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $rs = $stmt->get_result();
            if ($row = $rs->fetch_array()) {
                $bean = $this->createBeanCliente($row);
            }
        } catch (DaoException $ex) {
            throw $ex;
        } catch (Exception $ex) {
            throw new DaoException($ex->getCode(), $ex->getMessage());
        } finally {
            $rs->free();
            $con->close();
        }
        return $bean;
    }

    public function insertCliente($username, $password, $nome, $cognome, $codFiscale) {
        $con = null;
        $rs = null;
        $bean = null;
        try {
            $con = $this->dbDao->getConnection();

            $query = 'insert into clienti values(?,?,?,?,?)';
            $stmt = $con->prepare($query);
            $stmt->bind_param('sssss', $codFiscale, $nome, $cognome, $username, $password);
            $ret = $stmt->execute();
            if ($con->errno != 0) {
                throw new DaoException($con->errno, $con->error);
            }
        } catch (DaoException $ex) {
            throw $ex;
        } catch (Exception $ex) {
            throw new DaoException($ex->getCode(), $ex->getMessage());
        } finally {
            $con->close();
            $stmt->close();
        }
        return $ret;
    }

    private function createBeanCliente($row) {
        $pers = new Cliente();
        $pers->setUsername($row["username"]);
        $pers->setPassword($row["password"]);
        $pers->setCodFiscale($row["codFiscale"]);
        return $pers;
    }

    public function findStorico($codFiscale) {
        $con = null;
        $rs = null;
        $lista = array();

        try {
            $con = $this->dbDao->getConnection();

            $query = "select v.targa as targa, marca, modello, anno, cfCliente from veicoli v inner join operazioni o on v.targa = o.targa where cfCliente='$codFiscale'";
            $rs = $con->query($query);
            if ($con->errno != 0) {
                throw new DaoException($con->errno, $con->error);
            }
            
            while ($row = $rs->fetch_array()) {
                $lista[] = $this->createBeanVeicolo($row);
            }
            
        } catch (DaoException $ex) {
            throw $ex;
        } catch (Exception $ex) {
            throw new DaoException($ex->getCode(), $ex->getMessage());
        } finally {
            $con->close();
        }
        return $lista;
    }


    private function createBeanVeicolo($row) {
        $vei = new Veicolo();
        $vei->setTarga($row["targa"]);
        $vei->setMarca($row["marca"]);
        $vei->setModello($row["modello"]);
        $vei->setAnno($row["anno"]);
        $vei->setcfCliente($row["cfCliente"]);
        return $vei;
    }

}
