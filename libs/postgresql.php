<?php

class PostgreSql extends Sql {

    protected function connect() {

        $this->dbh = pg_connect(
                "host=$this->host  " .
                "dbname=$this->dbName " .
                "user=$this->userName " .
                "password=$this->password ");
        if (!$this->dbh) {
            throw new Exception(pg_last_error());
        }
    }

    public function exec() {
        parent::exec();
        $res = pg_query($this->dbh, $this->query);
        return (!empty($this->select)) ? pg_fetch_all($res) : $res;
    }

}
