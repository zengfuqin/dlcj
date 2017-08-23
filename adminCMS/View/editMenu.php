<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="./js/company.js"></script>
</head>

<body>
  <?php
include('./head.php');
?>
<div id="list">
   <?php
include('./link.php');
?>
<!--link-->
  <div id="cnt"><!--cnt--->
  	<div class="menu" id="menu">
    <!----------------------->
    <div id="updata_menu"><!--管理菜单-->
    <?php
    include("../Api/ediMenuApi.php");
    ?>
      	<div class="title">导航菜单---&gt;管理菜单</div>
<form action="../Api/ediMenuApi.php?act=updata" method="post">    
	<table width="803" border="0" cellspacing="0" cellpadding="0">	 
		<tr>
		  <td>操作</td>
		  <td>菜单编号</td>
		  <td>菜单名称</td>
		  <td>链接地址</td>
		  <td>父id</td>
		</tr>
		<?php
		$str='';
		$str.='<tr>
			<td><input type="submit" name="editbtn" id="btn" class="btn" value="更新" /><a href="../Api/ediMenuApi.php?act=delete&id='.$row['id'].'">删除</a></td>
			<td>'.$row['id'].'<input style="width:80px;" type="hidden" value="'.$row['id'].'" name="id" ></td>
			<td><input style="width:80px;" type="text" value="'.$row['name'].'" name="name"></td>
			<td><input style="width:80px;" type="text" value="'.$row['url'].'" name="url"></td>
			<td>'.$row['fid'].'<input style="width:80px;" type="hidden" value="'.$row['fid'].'" name="fid" ></td>
			</tr>';
		
		echo $str;
		?>
		
	</table>
</form>
      </div><!---updatamenu---->


  	<!--------------------------------->  
  	</div>
  	<!--menu-->
  
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
