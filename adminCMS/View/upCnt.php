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
		<?php
		include("../Api/upCntApi.php");
		$str='';
		foreach ($res as $row) {
			if (isset($row['cnt'])) {
					$cnt=strip_tags($row['cnt']);
					$cntleng=strlen($cnt);
					if ($cntleng>100) {
						$cnts=mb_substr($cnt, 0,100,'utf-8').'...';
					}else{
						$cnts=$row['cnt'];
					}
				}
			$str.='<tr>
				<td style="width:110px;"><a href="./editCnt.php?id=" class="btn" style="width:50px;float:left;">更新</a><a href="" class="btn"style="width:50px;float:left;" >删除</a></td>
				<td style="width:100px;">'.$row['id'].'</td>
				<td style="width:100px;">'.$row['type'].'</td>
				<td style="width:100px;">'.time().'</td>
				<td width="330" align="left">'.str_replace('&nbsp;', '',$cnts).'</td>
			 </tr>';
			 echo $str;
		}
		?>
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
  	
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
