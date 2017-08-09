<?php

include_once './config/config.php';
include_once './libs/sql.php';
include_once './libs/msql.php';
//include_once './libs/postgresql.php';


//$pg = new PostgreSql(HOST, USER_POSTRE, PASSWORD_POSTRE,DBNAME);
//$res = $pg->select('data')->from(TABLE_NAME)->where('`key`' . ' = ' . '"Sasha"')->exec();


$sql = new MySql(HOST, USER, PASSWORD,DBNAME);
$res = $sql->select('key')->from(TABLE_NAME)->where('`data`' . ' = ' . '"text"')->exec();

include_once 'templates/index.php';
