<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addMenu.class.php");
$db=new Db();
$add=new AddMenu($db);
$res=$add->getFormData();
if ($res) {
	echo "<script>alert('{$res['msg']}');window.history.go(-1);</script>";
}else{
	if ($add->addFormData()>0) {
		echo "<script>alert('添加菜单成功！');window.history.go(-1)</script>";
	}else{
		echo "<script>alert('添加菜单失败！');window.history.go(-1)</script>";
	}
}
