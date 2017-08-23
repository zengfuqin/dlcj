<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addLanmu.class.php");
include("../Common/function.php");
$db=new Db();
$add=new Lanmu($db);
if (isset($_GET['act'])) {
	// print_r($_POST);
	$res=$add->updateLanmu();
	if ($res) {
		if ($res['code']==9) {
			echo "<script>alert('".$res['msg']."');window.location.href='../View/editLanmu.php'</script>";
		}else{
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}
	}
}else{
	$row=$add->getMenuById();//本身的记录
	$rows=$add->getMenu();//全部记录
	$tree=getTree($rows);
}




