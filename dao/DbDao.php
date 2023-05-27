<?php
namespace dao;

require_once 'DaoException.php';
/**
 * Description of DbDao
 *
 * @author utente
 */
class DbDao {
    private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct() {
        $config=parse_ini_file('database/config.ini');
        $this->host=$config['host'];
        $this->user=$config['user'];
        $this->password=$config['password'];
        $this->database=$config['database'];
    }
    function getConnection() {
        $con= new \mysqli($this->host, $this->user, $this->password, $this->database);
        if ($con->connect_errno!=0) {
            throw new DaoException($con->errno,$con->error);
        }
        return $con;        
    }
    
    
}
