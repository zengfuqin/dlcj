<?php
header("content-type:text/html;charset=utf-8");
include(dirname(__DIR__)."/Common/Fpage.class.php");
include("../Model/Db.class.php");
include("../Controller/addMenu.class.php");
$db=new Db();
$add=new AddMenu($db,'adminAddMenu');
$link=$add->makeNumLinks();
$res=$add->getCntByPage();


