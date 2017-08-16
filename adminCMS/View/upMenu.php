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
      	<div class="title">导航菜单---&gt;管理菜单</div>
      <form action="" method="post">
     
<table width="803" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td>操作</td>
    <td>菜单编号</td>
    <td>菜单名称</td>
    <td>链接地址</td>
  </tr>
   <volist name='lists' id='row'>
       <?php
              include("../Api/upMenuApi.php");
              $td='';
              foreach ($res as $row) {
  		      $td.=' <tr>
				<td width="113"><a  class="btn" href="./editMenu.php?id='.$row['id'].'" >更新信息</a></td>
				<td width="95">'.$row['id'].'</td>
				<td width="266">'.$row['name'].'</td>
				<td width="330">'.$row['url'].'</td>
			</tr>';	
              }
              echo $td;
      ?>	
    </volist>
  <!---tr>
    <td width="113"><input type="button" name="btn" id="btn" class="btn" value="更新信息" /></td>
    <td width="95">1</td>
    <td width="266"><input type="text" name="zhulanmu" class="inputs" value="网站首页" title="单击修改信息"/></td>
    <td width="330"><input type="text" name="url" class="inputs" value="index.php" title="单击修改信息"/></td>
    </tr>
  <tr>
    <td><input type="button" name="btn" id="btn" class="btn" value="更新信息" /></td>
    <td>2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="button" name="btn" id="btn" class="btn" value="更新信息" /></td>
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
    </tr---->
</table>
</form>

      </div><!---updatamenu---->

		<!-- {$href} -->
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
