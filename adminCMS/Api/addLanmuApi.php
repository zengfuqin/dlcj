<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addLanmu.class.php");
include("../Common/function.php");
$db=new Db();
$add=new Lanmu($db);
$res=$add->getMenu();
$tree=getTree($res);
if (isset($_POST['btn'])) {
	if ($_POST['menuID']==0) {
		echo "<script>alert('请选择导航菜单！');window.location.href='../View/addLanmu.php';</script>";
	}else{
		$l=$add->addLanmu();
		if ($_POST['lanmu']) {
			echo "<script>alert('".$l['msg']."');window.location.href='../View/addLanmu.php';;</script>";
		}else{
			echo "<script>alert('请输入栏目名称！');window.location.href='../View/addLanmu.php';</script>";
		}
		
	}
}






