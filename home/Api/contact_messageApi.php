<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
include("../Controller/contact_message.class.php");
// if (!isset($_GET['btn'])) {
// 	echo "<script>alert('非法提交!');</script>";exit;
// }

// if (!(empty($user==''))) {
// 	echo "<script>alert('用户名不能为空！');window.location.href='../View/contact _message.php'</script>";exit;
// }

// if (!(empty($email==''))) {
// 	echo "<script>alert('邮箱不能为空！');window.location.href='../View/contact _message.php'</script>";exit;
	
// }

// if (!(empty($phone==''))) {
// 	echo "<script>alert('手机号码不能为空！');window.location.href='../View/contact _message.php'</script>";exit;
	
// }
// if (!(empty($address==''))) {
// 	echo "<script>alert('地址不能为空！')</script>";exit;
// }
$db=new Db();
$c=new Contact($db);
$res=$c->addcontactMessage();
echo $res;

