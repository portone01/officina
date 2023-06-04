<?php

namespace dao;

require_once 'DbDao.php';
require_once 'DaoException.php';
require_once 'bean/Cliente.php';

use bean\Cliente;

class ClientiDao {

    private $dbDao;

    public function __construct() {
        $this->dbDao = new DbDao();
    }

//    public function accesso($username) {
//        $con = null;
//        $rs = null;
//        $bean = null;
//        try {
//            $con = $this->dbDao->getConnection();
//
//            $query = 'select password from clienti where username=?';
//            $stmt = $con->prepare($query);
//            $stmt->bind_param('s', $username);
//            $stmt->execute();
//            $ret = $stmt->execute();
//            if ($con->errno != 0) {
//                throw new DaoException($con->errno, $con->error);
//            }
//        } catch (DaoException $ex) {
//            throw $ex;
//        } catch (Exception $ex) {
//            throw new DaoException($ex->getCode(), $ex->getMessage());
//        } finally {
//            $con->close();
//            $stmt->close();
//        }
//        return $ret;
//    }
        public function accesso($username, $password) {
        $con = null;
        $rs = null;
        $bean = null;
        try {
            $con = $this->dbDao->getConnection();

            $query = 'select password from clienti where username=? and password=?';
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
    
    private function createBeanCLiente($row) {
        $pers = new Cliente();
        $pers->setUsername($row["username"]);
        $pers->setPassword($row["password"]);
        return $pers;
    }

}
