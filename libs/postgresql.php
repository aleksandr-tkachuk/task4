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

        if (!isset($this->select) || !isset($this->from) || empty($this->where)) {
            throw new Exception("not set");
        }

        $query = "select {$this->select} from {$this->from} where {$this->where};";
        $res = pg_query($this->dbh, $query);
        return pg_fetch_assoc($res);
    }

}
