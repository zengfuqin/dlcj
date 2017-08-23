<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addCnt.class.php");
$db=new Db();
$c=new  Cnt($db);
$res=$c->getCnt();
