<?php

abstract class Sql {

    protected $host;
    protected $userName;
    protected $password;
    protected $dbName;
    protected $select;
    protected $from;
    protected $where;
    protected $dbh;

    public function __construct($host, $dbName, $userName, $password) {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;

        $this->connect();
    }

    protected abstract function connect();

    public function select($str) {
        $this->select = $str;
        return $this;
    }

    public function from($str) {
        $this->from = $str;
        return $this;
    }

    public function where($str) {
        $this->where = $str;
        return $this;
    }

    public abstract function exec();
}
