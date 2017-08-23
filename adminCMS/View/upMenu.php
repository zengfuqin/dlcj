<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<style>
#yeshu_box{
margin-top: 30px;
margin-left: 300px;
}
 #yeshu_box .yeshu{
    background: #f3f3f3;
    padding: 6px 8px;
    margin: 3px;
    color: #666;
    font-size: 14px;
  }
 #yeshu_box .shuzi_1{
    background: #f3f3f3;
    padding: 6px 8px;
    margin: 3px;
    color: #333;
    font-size: 14px;
  }
 #yeshu_box .shuzi_2 {
    background: #0fa9eb;
    padding: 6px 8px;
    margin: 3px;
    color: #fff;
    font-size: 14px;
    text-decoration: none;
  }
</style>
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
               $td.='</volist>
            </table>';
            $td.='<div id="yeshu_box">';
            $td.=$link;
            $td.= '</div>';
              echo $td;
      ?>
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
