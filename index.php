<?php

include_once './config/config.php';
include_once './libs/sql.php';
include_once './libs/msql.php';
include_once './libs/postgresql.php';




//$pg = new PostgreSql(HOST, DBNAME_POSTGRE, USER_POSTGRE, PASSWORD_POSTGRE);
//$res = $pg->select("id, name")->from(TABLE_POSTGRE)->where('name' . ' = ' . '\'sasha\'')->exec();
//$res = $pg->insert(["id", "name"], [2, "test"])->from(TABLE_POSTGRE)->exec();
//$res = $pg->update(["name"], ["qwerty 21"])->from(TABLE_POSTGRE)->where('id=2')->exec();
//$res = $pg->delete()->from(TABLE_POSTGRE)->where('id=2')->exec();

$sql = new MySql(HOST, DBNAME, USER, PASSWORD);
$res = $sql->select('`key`')->from(TABLE_NAME)->where('`data`' . ' = ' . '"text text"')->exec();

//$res = $sql->delete()->from(TABLE_NAME)->where('`data`' . ' = ' . '"8888"')->exec();
//$res = $sql->insert(["`key`", "`data`"], ["test366", "qwerty2222"])->from(TABLE_NAME)->exec();
//$res = $sql->update(["`key`", "`data`"], ["test367", "qwerty2"])->from(TABLE_NAME)->where('id' . ' = ' . '21')->exec();
//echo $sql->result;
//echo '<br';

include_once 'templates/index.php';
