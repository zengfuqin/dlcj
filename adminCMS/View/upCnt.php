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
    <div id="updata_lanmu"><!--管理文章-->
      	<div class="title">文章设置---&gt;管理文章</div>
<form action="" method="post">
	<table width="803" border="0" cellspacing="0" cellpadding="0">
		
		<tr>
		  <td width=100>操作</td>
		  <td width=100>文章编号</td>
		  <td width=100>所属栏目</td>
		  <td width=100>创建时间</td>
		  <td>主要内容</td>
		</tr>
		<volist name="rows" id='row'>
			<tr>
				<td style="width:110px;"><a href="{:U('Cnt/editCnt',array('id'=>$row['id']))}" class="btn" style="width:50px;float:left;">更新</a><a href="{:U('Cnt/delCnt',array('id'=>$row['id']))}" class="btn"style="width:50px;float:left;" >删除</a></td>
				<td style="width:100px;">{$row['id']}</td>
				<td style="width:100px;">{$row['lanmuname']}</td>
				<td style="width:100px;">{$row['time']|date='Y-m-d',###}</td>
				<td width="330" align="left">{$row['cnt']|htmlspecialchars_decode|strip_tags|mb_substr=###,0,50,'utf8'}...</td>
			 </tr>
		 </volist>
		<!---tr>
		  <td><input type="button" name="btn" id="btn" class="btn" value="更新信息" /></td>
		  <td>2</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td><input type="submit" name="btn" id="btn" class="btn" value="更新信息" /></td>
		  <td>3</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  </tr--->
	</table>
</form>
      </div><!---updatalanmu---->

    <!--------------------------------->  
  	</div>
  	<!--menu-->
  	{$href}
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
