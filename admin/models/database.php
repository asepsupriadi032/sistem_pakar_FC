<?php
class Database {
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;

    function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database) or die (mysqli_error());
        if(!$this->conn) {
            return false;
        } else {
            return true;
        }
    }
}
?>