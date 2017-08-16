<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/addMenu.class.php");
$db=new Db();
$add=new AddMenu($db);
$res=$add->getData();
$name=$_POST['name'];
$url=$_POST['url'];
$re=$add->updataData($name,$url);
// prinr_r($res);