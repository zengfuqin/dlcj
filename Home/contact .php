

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
		width: 100%;
		height: 200px;
		background: url(./images/7.png) no-repeat center center;
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
		font-size: 14px;
		color: #333;
		margin-bottom: -10px;
	}
	section article #con_img{
		margin-top: 40px;
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
	<div id="images"></div>
		<section>
		<?php
		echo "<aside>
			<div id=\"title\"><span>联系我们</span</div>
			<div class=\"conte\">
				<a href=\"contact.html\"> > 联系我们</a>
			</div>
			<div class=\"cont\">
				<a href=\"contact _message.html\"> > 在线留言</a>
			</div>
			
		</aside>";?>
		<article>
			<div id="text">联系我们</div>
			<p> 办公区：辽宁省大连市开发区东北七街上品公馆18A1108</p>
			<p>电话：0411-62634264      传真：0411-62634263 </p>
			<div id="con_img">
				<img src="./images/map.jpg" >
			</div>
			<p>工厂区：辽宁省大连市开发区董家沟卧龙工业园一期铁山东路98-5-1</p>
			<p>电话：0411-87306696    传真：0411-87324028 </p>
			<div id="con_img">
				<img src="./images/map1.jpg" >
			</div>
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