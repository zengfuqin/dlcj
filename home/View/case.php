<html>
<head>
	<title>大连</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/nav_foot.css" /> 
	<style>
	*{
		padding:0;
		margin:0;
	}
	ul{
		list-style: none;
	}
	a{
		text-decoration: none;
	}
	#images{
		/*width: 100%;
		height: 200px;
		background: url(./images/6.png) no-repeat center center;*/
	}
	section{
		width: 1000px;
		/*height: 1000px;*/
		overflow: hidden;
		margin: 0 auto;
	}
	section aside{
		width: 190px;
		height: 500px;
		/*overflow: hidden;*/
		/*background: #6fcbf3;*/
		/*background: red;*/
		float: left;
	}
	section aside #title{
		width: 190px;
		padding-bottom: 10px;
		padding-top: 10px;
		background: #6fcbf3;
	}
	section aside #title span{
		margin-left: 20px;
		display: block;
		width: 100px;
		height: 40px;
		line-height: 40px;
		color: #fff;
		font-size: 24px;
		border-bottom: 1px solid #fff;
	}
	section aside .conte{
		width: 190px;
		line-height: 30px;
		
		padding-top: -10px;
		font-size: 18px;
		color: rgb(15, 169, 235);
		/*background: yellow;*/
	}
	section aside .cont{
		width: 190px;
		line-height: 25px;
		color: #000;
		font-size: 12px;
		
	}
	section article{
		width: 780px;
		overflow: hidden;
		float: right;
		padding: 10px 0;
	}
	section article #text{
		color: #0fa9eb;
		font-size: 18px;
		line-height: 32px;
		background: url(./images/bg2.jpg) no-repeat left bottom;
	}
	section article #main_box{
		width: 780px;
		/*height:500px;*/
		overflow: hidden;
		/*background: yellow;*/
		margin-top: 20px;
		margin-bottom: 30px;
	}
	section article #main_box dl{
		width: 780px;
		height: 140px;
		/*background: green;*/
		padding-top: 20px;
		padding-bottom: 20px;
		border-bottom: 1px dashed #e5e5e5;
	}
	section article #main_box dl dt{
		width: 190px;
		height: 140px;
		margin-right: 35px;
		/*background: purple;*/
		float: left;
	}
	section article #main_box dl dd{
		width: 555px;
		height: 140px;
		/*background: red;*/
		float: left;
	}
	section article #main_box dl dd .title a{
		width: 465px;
		text-decoration: none;
		color:#0fa9eb;
		font-size: 14px;
		font-weight: bolder;
		display: block;
		line-height: 20px;
		float: left;
	}
	section article #main_box dl dd .title .time{
		color: #333;
		font-size: 14px;
		line-height: 20px;
		float: left;
	}
	section article #main_box dl dd .main_p{
		min-height:83px;
		text-indent: 30px;
		color: #333;
		font-size: 14px;
	}
	section article #main_box dl dd .see{
		width: 80px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		border: 1px solid #0fa9eb;
	}
	section article #main_box dl dd .see a{
		text-decoration: none;
		color:#0fa9eb;
		font-size: 14px;
	}
	section article #yeshu_box{
		width: 780px;
		text-align: center;
		margin-bottom: 18px;
	}
	section article #yeshu_box .yeshu{
		background: #f3f3f3;
		padding: 6px 8px;
		margin: 3px;
		color: #666;
		font-size: 14px;
	}
	section article #yeshu_box .shuzi_1{
		background: #f3f3f3;
		padding: 6px 8px;
		margin: 3px;
		color: #333;
		font-size: 14px;
	}
	section article #yeshu_box .shuzi_2 {
		background: #0fa9eb;
		padding: 6px 8px;
		margin: 3px;
		color: #fff;
		font-size: 14px;
		text-decoration: none;
	}
	</style>
</head>
<body>
	<header>
		<div id="logo_box">
			<div id="logo">
				<div id="logo_left"></div>
				<div id="logo_right">
					<div id="logo_right_top">
						<a href="">设为首页</a>
						|
						<a href="">加入收藏</a>
					</div>
					<div id="logo_right_bottom">
						<input type="text" placeholder="请输入关键字……" id="search">
						<input type="submit" value="搜索" id="btn">
					</div>
				</div>
			</div>
		</div>
		<div id="nav_box">
			<nav>
				<ul>
					<li><a href="index.php">网站首页</a></li>
					<li><a href="about.php">关于诚技</a></li>
					<li><a href="news.php">新闻资讯</a></li>
					<li><a href="product.php">产品中心</a></li>
					<li><a href="case.php">成功案例</a></li>
					<li><a href="job.php">人才招聘</a></li>
					<li><a href="contact.php">联系我们</a></li>
				</ul>
			</nav>
			</div>
	</header>
	<div id="images"><img src="./images/6.png" alt="" width="100%" height="200px;"></div>
	<section>
		<aside>
			<div id="title"><span>成功案例</span></div>
			<div class="conte">
				 联系我们
			</div>
			<div class="cont">
				电 话：0411-62634264<br/>
				传 真：0411-62634263<br/>
				邮 箱：hr@dlcj.net<br/>
				网 址：http://www.dlcj.net<br/>
				地 址：辽宁省大连市开发区东北七街上品公馆A座1108 
			</div>
			
		</aside>
		<?php
		include("../Api/caseApi.php");
		$str='';
		$str.='<article>
			<div id="text">成功案例</div>
			<div id="main_box">';
			foreach ($res as $row) {
				
				$str.='<dl>
					<dt>
						<a href="./case_detail.php?id='.$row['id'].'">'.$row['titleImg'].'</a>
					</dt>
					<dd>
						<div class="title">
							<a href="">'.$row['cnttitle'].'</a>
							<span class="time">[ 2017-07-25 ]</span>
						</div>
						<p class="main_p">…</p>
						<div class="see"><a href="">+查看详情</a></div>
					</dd>
				</dl>';
			}
				
			$str.='</div>';
		
			$str.='<div id="yeshu_box">';
				$str.=$link;
			$str.='</div>';
			echo $str;
		?>
		</article>
		
	</section>
	<footer>
		<p>
			<a href="">关于诚技</a> |
			<a href="">新闻资讯 </a>|
			<a href="">产品中心 </a>|
			<a href="">成功案例 </a>|
			<a href="">人才招聘 </a>|
			<a href=""> 联系我们</a><br/>
			Copyright © 大连诚技机电设备有限公司 版权所有 辽ICP备13015234号-2<br/>
			网站设计：仟亿科技
		</p>
	</footer>
</body>
</html>