<?php
header("content-type:text/html;charset=utf-8");
if (!isset($_GET['btn'])) {
	echo "<script>alert('非法提交!');</script>";exit;
}
$user=$_GET['user'];
if (!(empty($user==''))) {
	echo "<script>alert('用户名不能为空！');window.location.href='../Home/contact _message.html'</script>";exit;
}
$email=$_GET['email'];
if (!(empty($email==''))) {
	echo "<script>alert('邮箱不能为空！');window.location.href='../Home/contact _message.html'</script>";exit;
	
}
$phone=$_GET['phone'];
if (!(empty($phone==''))) {
	echo "<script>alert('手机号码不能为空！');window.location.href='../Home/contact _message.html'</script>";exit;
	if (condition) {
		# code...
	}
}
$address=$_GET['address'];
if (!(empty($address==''))) {
	echo "<script>alert('地址不能为空！')</script>";exit;
}
