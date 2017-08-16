<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/job_detailForm.class.php");
$db=new Db();
$c=new Jobdetail($db);
$res=$c->addJobdetail();
echo $res;