<?php
// header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/case.class.php");
$db=new Db();
$c=new Cases($db);
$c->checkPage();
$res=$c->getCntPage();
$link=$c->makeNumLinks();
// if (isset($_GET['id'])) {
// 	$c->getIndex();
// 	$c->makeLinks();
// 	$row=$c->getDetailById();
// }




