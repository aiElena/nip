<?php

if (!defined("__IN_NIP__")) {
    exit();
}

require_once ("config.php");

class DataProvider {

    private $_link;

    function __construct() {
    }

    public function connect() {
        try {
            $this->_link = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
            if ($this->_link->connect_errno) {
                die('Could not connect: ' . mysqli_error());
            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function insertMail($address) {
        if ($this->_link) {
            if (!$this->_link->query('INSERT INTO subscribe(Email) VALUES ("'. $address .'")')) {
                echo("Error description: " . $this->_link->error);
            }
        }
    }

    function __destruct()  {
        if ($this->_link) {
            $this->_link->close();
        }
    }
}


?>