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
	a{
		text-decoration: none;
	}
	ul{
		list-style: none;
	}
	#images{
		margin:0 auto;
	}
	section{
		width: 1000px;
		/*height: 1000px;*/
		overflow: hidden;
		margin: 0 auto;
	}
	section aside{
		width: 190px;
		height: 140px;
		/*overflow: hidden;*/
		background: #6fcbf3;
		float: left;
	}
	section aside #title{
		padding: 10px 20px 10px;
		width: 190px;
		height: 60px;

	}
	section aside #title span{
		font-size: 24px;
		color: #fff;
		line-height: 60px;
		width: 96px;
		height: 40px;
		border-bottom: 1px solid #fff;
	}
	section aside .cont{
		margin-left: -20px;
		width: 190px;
		height: 36px;
	}
	section aside .cont a{
		display: block;
		background: #eee;
		color: #000;
		text-indent: 20px;
		font-size: 16px;
		width: 190px;
		line-height: 36px;
		text-decoration: none;
	}
	section aside .cont a:hover{
		background: #0fa9eb;
		color: #fff;
	}
	section aside .conte{
		margin-left: -20px;
	}
	section aside .conte a{
		background: #0fa9eb;
		color: #fff;
		display: block;
		text-decoration: none;
		text-indent: 20px;
		width: 190px;
		line-height: 36px;
		font-size: 16px;
	}
	section article{
		width: 780px;
		/*background: yellow;*/
		/*height: 200px;*/
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
	section article #pro_main{
		width: 780px;
		padding-top: 30px;
		padding-bottom: 20px;
		overflow: hidden;
		/*background: yellow;*/

	}
	section article #pro_main .pro_text{
		display: block;
		padding-top: 15px;
		width: 250px;
		text-align: center;
		font-size: 14px;
		color: #333;
	}
	h1{
		color: #0fa9eb;
		text-align: center;
		width: 780px;
		line-height: 60px;
		border-bottom: 1px dashed #ddd;
		margin-bottom: 20px;
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
	<div id="images">
		<img src="./images/2.jpg" alt="" width="100%" height="200px">
	</div>
	<section>
		<aside>
			<div id="title"><span>产品中心</span</div>
			<div class="cont">
				<a href="./product.php?type=主要产品"> > 主要产品</a>
			</div>
			<div class="cont">
				<a href="./product.php?type=大修改造"> > 大修改造</a>
			</div>
			<div class="cont">
				<a href="./product.php?type=代理产品"> > 代理产品</a>
			</div>
		</aside>
		<?php
		include("../Api/productApi.php");
		$str='';
		$str.='<article>';
			$str.='<div id="text">'.$type.'</div>';
			$str.=$link;
			$str.='<div id="pro_main">';
				$str.='<h1>'.$detail['cnttitle'].'</h1>';
				$str.='<div class="detail">'.$detail['cnt'].'</div>';
			$str.='</div>';
		$str.='</article>';
		echo $str;
		?>
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