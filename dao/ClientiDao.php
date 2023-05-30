<?php

namespace dao;

require_once 'DbDao.php';
require_once 'DaoException.php';
require_once 'bean/cliente.php';

use bean\cliente;

class ClientiDao {

    private $dbDao;

    public function __construct() {
        $this->dbDao = new DbDao();
    }

    public function accesso($username) {
        $con = null;
        $rs = null;
        $bean = null;
        try {
            $con = $this->dbDao->getConnection();

            $query = 'select password from clienti where username=?';
            $stmt = $con->prepare($query);
            $stmt->bind_param('s', $username);
            $stmt->execute();
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

}
