<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addLanmu.class.php");
$db=new Db();
$add=new Lanmu($db);
if (isset($_GET['act'])) {
	$res=$add->deleteLanmuById();
	if ($res) {
		if ($res['code']==6) {
			echo "<script>alert('".$res['msg']."');window.location.href='../View/editLanmu.php';</script>";
		}else{
			echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
		}
	}
	
}else{
	$res=$add->getMenu();
}
		
		// echo "<script>alert('".$res['msg']."');window.location.href='../View/upLanmu.php';</script>";
	





