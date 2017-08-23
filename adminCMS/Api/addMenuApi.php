<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addMenu.class.php");
$db=new Db();
$add=new AddMenu($db);
$res=$add->addMenu();
if ($res){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
}