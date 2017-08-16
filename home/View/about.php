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
		font-size: 14px;
		color: #333;
		text-indent: 20px;
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
	<div id="images">
		<img src="./images/2.jpg" alt="" width="100%" height="200px">
	</div>
	<section>
		<aside>
			<div id="title"><span>关于诚技</span</div>
			<div class="conten">
				<a href="about.html"> > 公司简介</a>
			</div>
			<div class="cont">
			<?php
				$arr=array('企业文化','合作伙伴','我们的足迹');
				for ($i=0; $i <3 ; $i++) { 
					echo '<a href="about _wenhua.html"> >'.$arr[$i].' </a>';
				}
			?>
			</div>
		</aside>
		<article>
			<div id="text">公司简介</div>
			<p> 大连诚技机电设备有限公司始创于2002年，始终本着“诚以为人，技以为业”的经营和服务理念，全心全力致力于国内外锻造和冲压压力机的维修、改造以及其配套生产线的非标设计制作，已经跻身于国内重型压力机维修改造的重要供应商行列。</p>
			<p>公司坐落在美丽的海滨城市大连，设有1个办公区和1个工厂区，现有职工100余人。拥有30多位机械、电气、工控、计算机等专业的技术人才。</p>
			<p>为了更好加强公司的管理，公司积极引进了一些现代化的企业管理手段，顺利通过了ISO9001质量管理体系认证，实施了计算机辅助设计系统、ERP、OA等管理，不但提高了工作效率，同时能够更好的为客户提供高效服务。</p>
			<p>公司主要生产成套液压站、平锻机及供应大型压力机、冲床、热模锻等设备备件，现主要产品有液压润滑站、换向阀、过载保护阀、双联泵、液压油缸。大修改造主要包括机械压力机大修改造、压力机搬迁、自动化设计改造、压力机备件、平锻机制造及维修、热模锻维修与改造等，并代理日本SR产品。</p>
			<p>公司业务范围遍及全国各地，并且与国内很多汽车制造厂、重型设备生产企业建立长期友好的合作关系。如神龙汽车、一汽解放、一汽大众、天津一汽丰田、郑州日产、南京依维柯、东风日产、东风乘用车、东风商用车、东风柳汽、一汽解放、一汽大众、一汽青岛、一汽云南红塔、一汽夏利、北京博萨、北汽福田、长安福特、长城汽车、吉利汽车、华晨汽车、奇瑞汽车、江淮汽车、江铃汽车、一汽模具、黄海汽车、庆铃汽车等。 </p>
			<div id="con_img">
				<img src="./images/1-1.jpg" >
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