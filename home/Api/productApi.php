<?php
// header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/product.class.php");
$db=new Db();
$p=new Product($db);
$type=$p->checkType();
$res=$p->listDate();
if(isset($_GET['cnttitle'])){
	$detail=$p->getDetailDate();
}
// $a=$p->getDateAll();
// $t=$p->getTree($a,1,0);
// echo "<pre>";
// print_r($t);
// echo $type;
// print_r($detail);
// echo "<br>";
// var_dump($detail);