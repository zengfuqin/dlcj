<?php
// header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/product.class.php");
$db=new Db();
$tab='product';
$p=new Product($db,$tab);
$type=$p->checkType();//产品类型
$rows=$p->getPage();
$link=$p->makeNumPageLinks();
if(isset($_GET['id'])){//获取详情页
	 $p->getIndexById();
	$link=$p->makeLinks();//生成链接
	$detail=$p->getDetailDate();
}

