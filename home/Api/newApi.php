<?php
// header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/new.class.php");
$db=new Db();
$n=new News($db);
$type=$n->checkDate();
$res=$n->listDate();





