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
<div id="add_menu"><!----add_menu---->
      	<div class="title">导航菜单---&gt;添加菜单</div>
<form action="../Api/addMenuApi.php" method="get">
	<table width="470" border="0" cellspacing="0" cellpadding="0">
	  
	  <tr>
	    <td width="129" class="align_r">菜单名称:</td>
	    <td width="673" class="align_l"><input type="text" name="menuName" id="menuName" /></td>
	    </tr>
	  <tr>
	    <td class="align_r">&nbsp;</td>
	    <td class="align_l">&nbsp;</td>
	  </tr>
	  <tr>
	    <td class="align_r">链接地址:</td>
	    <td class="align_l"><input type="text" name="url" id="url" /></td>
	    </tr>
	  <tr>
	    <td class="align_r">&nbsp;</td>
	    <td class="align_l">&nbsp;</td>
	  </tr>
	  <tr>
	    <td class="align_r"><input type="submit" name="btn" id="btn" class="btn" value="保存信息" /></td>
	    <td>&nbsp;</td>
	    </tr>
	</table>
</form>
      </div>
<!---addmenu---->

  	<!--------------------------------->  
  	</div><!--menu-->
  
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
