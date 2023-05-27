<?php
namespace dao;

/**
 * Eccezione che segnala un errore nell'accesso ai dati
 *
 * @author utente
 */
class DaoException extends \Exception{
    
    function __construct($errno,$error) {
        die('DaoException: '.$errno.'-'.$error);
    }

}
