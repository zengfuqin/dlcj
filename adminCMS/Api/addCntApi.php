<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addCnt.class.php");
include("../Common/function.php");
$db=new Db();
$c=new Cnt($db);
$rows=$c->getMenu();
$tree=getTree($rows);
if (isset($_GET['act']) ){
	$res=$c->addCnt();
	echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
}


