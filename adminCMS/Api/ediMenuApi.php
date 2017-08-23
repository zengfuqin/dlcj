<?php
header("content-type:text/html;charset=utf-8");
include(dirname(__DIR__)."/Common/Fpage.class.php");
include("../Model/Db.class.php");
include("../Controller/addMenu.class.php");
$db=new Db();
$add=new AddMenu($db,'adminAddMenu');
if (isset($_GET['act'])) {
	if ($_GET['act']=='updata') {
		$res=$add->updataMenu();
		if ($res) {
			if ($res['code']==107||$res['code']==108) {
				echo "<script>alert('".$res['msg']."');window.location.href='../View/upMenu.php'</script>";
			}else{
				echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
			}
		}
	}
	if ($_GET['act']=='delete'){
		$res=$add->deleteMenuById();
		if ($res) {
			echo "<script>alert('".$res['msg']."');window.location.href='../View/upMenu.php';</script>";
		}

	}
}else{
	$row=$add->getMenu();
}
