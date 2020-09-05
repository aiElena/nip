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
            $this->_link->set_charset("utf8");

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

    public function insertQuestios($name, $email, $phone, $message) {
        if (!$this->_link) {
            $this->connect();
        }

        if ($this->_link) {
            if (empty($phone)) {
                $phone = '';
            }

            $command = sprintf('INSERT INTO questions (name, email, phone, message) VALUES ("%s", "%s", "%s", "%s")', $name, $email, $phone, $message);
            return $this->_link->query($command);
        } else {
            return false;
        }
    }

    public function insertRegister($refid, $email, $password, $phone, $notify, $reports, $news, $confirmcode) {
        if (!$this->_link) {
            $this->connect();
        }
        if ($this->_link) {
            $command = sprintf('INSERT INTO users(refid, email, password, phone, notify, reports, news, confirmcode) VALUES ("%s", "%s", "%s", "%s", %s, %s, %s, "%s")',
                $refid, $email, $password, $phone, $notify == 'true' ? 1 : 0, $reports == 'true' ? 1 : 0, $news == 'true' ? 1 : 0, $confirmcode);
            return $this->_link->query($command);
        } else {
            return false;
        }
    }

    public function getTheUserByCode($code) {
        if (!$this->_link) {
            $this->connect();
        }
        if ($this->_link) {
            $command = sprintf("SELECT * FROM users WHERE refid='%s'", $code);
            $result = $this->_link->query($command);
            $responce = mysqli_fetch_assoc($result);
            return $responce;
        } else {
            return false;
        }
    }

    public function completeRegister($refCode, $parentRef, $lastName, $firstName, $thirdName, $confirmCode) {
        if (!$this->_link) {
            $this->connect();
        }
        if ($this->_link) {
            $command = sprintf("SELECT * FROM users WHERE refid='%s'", $parentRef);
            $result = $this->_link->query($command);
            if (mysqli_num_rows($result) == 0) {
                return "__PARENT_NOT_EXISTS__";
            }

            $command = sprintf("SELECT * FROM users WHERE refid='%s'", $refCode);
            $result = $this->_link->query($command);
            if ($result) {
                $responce = mysqli_fetch_assoc($result);
                $code = $responce['confirmcode'];
                if ($code == $confirmCode) {
                    $command = sprintf("UPDATE users SET confirmed=TRUE, parentRef='%s', lastName='%s', firstName='%s', thirdName='%s' WHERE refid='%s'", $parentRef, $lastName, $firstName, $thirdName, $refCode);
                    $result = $this->_link->query($command);
                    return "__COMPLETE__";
                } else {
                    return "__INCORRECT_CODE__";
                }
            }
        } else {
            return false;
        }
    }

    public function getUserPerEmail($email, $password) {
        if (!$this->_link) {
            $this->connect();
        }
        if ($this->_link) {
            $command = sprintf("SELECT * FROM users WHERE email='%s'", $email);
            $result = $this->_link->query($command);
            while($row = mysqli_fetch_array($result)) {
                if ($row['password'] == $password) {
                    return $row['id'];
                }
            }

            return false;
        } else {
            return false;
        }
    }

    public function investig($user, $number, $name, $ideaName, $description) {
        if (!$this->_link) {
            $this->connect();
        }
        if ($this->_link) {
            //INSERT INTO `invest`(`id`, `user_id`, `number`, `Industry`, `Descriptions`, `Needed`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
            $command = sprintf("INSERT INTO invest(user_id, number, Industry, Descriptions, Needed) VALUES (%s, '%s', '%s', '%s', '%s')", $user, $number, $name, $ideaName, $description);
            $result = $this->_link->query($command);
            if ($result) {
                return true;
            }

            return false;
        } else {
            return false;
        }
    }

    function __destruct()  {
        if ($this->_link) {
            $this->_link->close();
        }
    }
}


?>