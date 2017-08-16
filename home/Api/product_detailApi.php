<?php
include("../Model/Db.class.php");
include("../Controller/product.class.php");
$db=new Db();
$p=new Product($db);
$type=$p->checkType();
// $res=$p->listDate();
$detail=$p->getDetailDate();