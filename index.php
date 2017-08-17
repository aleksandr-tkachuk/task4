<?php

include_once './config/config.php';
include_once './libs/sql.php';
include_once './libs/msql.php';
include_once './libs/postgresql.php';




$pg = new PostgreSql(HOST, DBNAME_POSTGRE, USER_POSTGRE, PASSWORD_POSTGRE);
$res = $pg->select('id')->from(TABLE_NAME)->where('name' . ' = ' . '\'Sasha\'')->exec();


//$sql = new MySql(HOST, DBNAME, USER, PASSWORD);
//$res = $sql->select('key')->from(TABLE_NAME)->where('`data`' . ' = ' . '"text"')->exec();
include_once 'templates/index.php';
