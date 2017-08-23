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
		width: 100%;
		height: 200px;
		background: url(./images/3.jpg) no-repeat center center;
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
		line-height: 26px;
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
		color: #666;
		font-size: 14px;
	}
	section article #yeshu_box .shuzi{
		background: #0fa9eb;
		padding: 6px 8px;
		color: #fff;
		font-size: 14px;
	}
	section article #yeshu_box .shuzi_2 a{
		background: #f3f3f3;
		padding: 6px 8px;
		color: #0fa9eb;
		font-size: 14px;
		text-decoration: none;
	}
	section article #yeshu_box .shuzi_2 a:hover{
		border:2px solid #ddd;
		padding: 4px 6px;
	}





	footer{
		width: 100%;
		height: 120px;
		background: #0fa9eb;
		padding: 10px 0px;
	}
	footer p{
		text-align: center;
		color: #fff;
		font-size: 14px;
		line-height: 40px;/*行高，*/
	}
	footer p a{
		text-decoration: none;
		color: #fff;
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
					<li><a href="news.php">新闻资讯</a></li>
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
		include("../Api/newApi.php");
		$str='';
		$str.='<aside>
			<div id="title"><span>新闻资讯</span</div>
			<div class="cont">
				<a href="./news.php?type=公司新闻"> > 公司新闻</a>
			</div>
			<div class="cont">
				<a href="./news.php?type=行业新闻"> > 行业新闻</a>
			</div>
			
		</aside>
		<article>';
			$str.='<div id="text">'.$type.'</div>
			<div id="main_box">';
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
				$str.='<dl>
					<dt>
						<a href="">'.$row['titleImg'].'</a>
					</dt>
					<dd>
						<div class="title">
							<a href="">'.$row['cnttitle'].'</a>
							<span class="time">[ 2017-07-25 ]</span>
						</div>
						<p class="main_p">'.str_replace('&nbsp;', '',$cnts).'</p>
						<div class="see"><a href="news_xiangqing.html">+查看详情</a></div>
					</dd>
				</dl>';
			}
				echo $str;
			?>
			</div>
			<div id="yeshu_box">
				<span class="yeshu">上一页</span>
				<span class="shuzi">1</span>
				<span class="shuzi_2"><a href="news_2.html">2</a></span>
				<span class="shuzi_2"><a href="">3</a></span>
				<span class="shuzi_2"><a href="news_4.html">4</a></span>
				<span class="shuzi_2"><a href="news_5.html">5</a></span>
				<span class="yeshu">上一页</span>
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