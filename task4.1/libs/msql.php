<?php

class MySQL extends Sql{

    protected function connect() {
        $this->dbh = mysql_connect(
                $this->host,
                $this->userName,
                $this->password);
        $dbConnect = mysql_select_db($this->dbName,$this->dbh);
        if(!$dbConnect){
            throw new Exception('Failed to select base'.$this->dbName.': ' . mysql_error());
        }
    }
    
    public function exec() {
        
        if(empty($this->select) || empty($this->from) || empty($this->where)){
            throw new Exception("not set");
        }

        $query =  "select `{$this->select}` from `{$this->from}` where {$this->where};";
        $res = mysql_query($query, $this->dbh);
        return mysql_fetch_array($res);
    }


}
