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
	section article #pro_main ul li{
		float: left;
		margin-right: 8px;
		padding-bottom: 10px;
	}
	section article #pro_main ul  .pro_li{
		float: left;
		margin-right: 0px;
		padding-bottom: 10px;
	}
	
	section article #pro_main ul li a:hover .pro_text{
		color: #6fcbf3;
	}
	section article #pro_main img{
		width:250px;
		 height:180px;
		 border: 1px solid #aaa;
	}
	section article #pro_main .pro_text{
		display: block;
		padding-top: 15px;
		width: 250px;
		text-align: center;
		font-size: 14px;
		color: #333;
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
					<li><a href="index.html">网站首页</a></li>
					<li><a href="about.html">关于诚技</a></li>
					<li><a href="news.html">新闻资讯</a></li>
					<li><a href="./product.php">产品中心</a></li>
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
	<?php
	include("../Api/productApi.php");
	$str='';
		$str.='<aside>
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
		</aside>';
		$str.='<article>';
			$str.='<div id="text">'.$type.'</div>';
			$str.='<div id="pro_main">';
				foreach ($rows as  $row) {
					$str.='<ul>';
						$str.='<li >
							<a href="./product_detail.php?type='.$row['type'].'&id='.$row['id'].'">
								<span>'.$row['titleImg'].'</span>
								<span class="pro_text">'.$row['cnttitle'].'</span>
							</a>
						</li>';
					$str.='</ul>';
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