<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/job.class.php");
$db=new Db();
$j=new Job($db);
$job=$j->getJob();
// print_r($job);