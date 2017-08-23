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
		height: 200px;
		background: #6fcbf3;
		float: left;
		margin-bottom: 14px;
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
	section aside .conten{
		margin-left: -20px;
	}
	section aside .conten a{
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
	section article p{
		line-height: 36px;
		font-size: 12px;
		color: #333;
	}
	section article p span{
		color: red;
	}
	ul li{
		display: block;
		font-size: 16px;
		line-height: 50px;
		height: 50px;
		overflow: hidden;
		border-bottom: 1px dashed #aaaaaa;
	}
	ul li a{
		color: #000;
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
					<form id="logo_right_bottom" action="./search.php?keys=" method="get">
						<input type="text" name="keys" placeholder="请输入关键字……" id="search">
						<input type="submit" value="搜索" id="btn">
					</form>
				</div>
			</div>
		</div>
		<div id="nav_box">
			<nav>
				<ul>
					<li><a href="index.html">网站首页</a></li>
					<li><a href="about.html">关于诚技</a></li>
					<li><a href="news.html">新闻资讯</a></li>
					<li><a href="product.html">产品中心</a></li>
					<li><a href="case.html">成功案例</a></li>
					<li><a href="job.html">人才招聘</a></li>
					<li><a href="contact.html">联系我们</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="images">
		<img src="./images/1.jpg" alt="" width="100%" height="200px">
	</div>
	<section>
		<aside>
			<div id="title"><span>关于诚技</span</div>
			<div class="cont">
				<a href=""> > 公司简介</a>
			</div>
			<div class="cont">
				<a href=""> > 企业文化</a>
			</div>
			<div class="cont">
				<a href=""> > 合作伙伴</a>
			</div>
			<div class="cont">
				<a href="">> 我们的足迹</a>
			</div>
		</aside>
		<article>
		<?php
		include("../Api/searchApi.php");
		$str='';
		if ($res) {
			if (isset($_GET['keys']) ){
				$str.='<div id="text">搜索关键词：'.$_GET['keys'].'</div>';
			}
			foreach ($res as $row) {
				$str.='<ul>
					<li><a href="">'.$row['cnttitle'].'</a></li>
				</ul>';
			}
		}else{
			if (isset($_GET['keys']) ){
				$str.='<div id="text">搜索关键词：'.$_GET['keys'].'</div>';
				$str.='<p> 对不起，关键字<span>'.$_GET['keys'].'</span> 无任何记录 </p>';
			}
		}
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