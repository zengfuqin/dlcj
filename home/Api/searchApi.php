<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/search.class.php");
$db=new Db();
$s=new Search($db);
$res=$s->searchKeys();
// print_r($res);


