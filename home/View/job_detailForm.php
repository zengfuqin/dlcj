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
		background: url(./images/5.jpg) no-repeat center center;
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
	section aside .conte{
		margin-left: -20px;
		width: 190px;
		height: 36px;
	}
	section aside .conte a{
		display: block;
		background: #eee;
		color: #000;
		text-indent: 20px;
		font-size: 16px;
		width: 190px;
		line-height: 36px;
		text-decoration: none;
	}
	section aside .conte a:hover{
		background: #0fa9eb;
		color: #fff;
	}
	section aside .cont{
		margin-left: -20px;
	}
	section aside .cont a{
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
	section article form{
		margin-left: 150px;
		margin-top: 30px;
	}
	section article form input{
		width: 457px;
		height: 38px;
		border: 1px solid #ddd;
		margin-bottom: 10px;
		padding-left: 10px;
		padding-right: 10px;
	}
	section article form textarea{
		border: 1px solid #ddd;
		padding-left: 10px;
		padding-right: 10px;
		width: 457px;
		height: 180px;
	}
	section article form #btn{
		width: 110px;
		line-height:36px;
		background: #0fa9eb; 
		margin-left: 166px;
		margin-top: 20px;
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
		<aside>
			<div id="title"><span>人才招聘</span</div>
			<div class="cont">
				<a href="job.html"> > 招聘位置</a>
			</div>
			<div class="conte">
				<a href="job_message.html"> > 在线留言</a>
			</div>
		</aside>
		<article>
			<div id="text">招聘位置</div>
			<form action="../Api/job_detailFormApi.php" method="post">
				<input type="text" name="position" placeholder="应聘职位">
				<input type="text" name="name" placeholder="姓名">
				<input type="text" name="sex" placeholder="性别">
				<input type="text" name="age" placeholder="年龄">
				<input type="text" name="domicile" placeholder="居住地">
				<input type="text" name="ctphone" placeholder="联系电话">
				<input type="text" name="educational" placeholder="学历">
				<input type="text" name="professional" placeholder="专业">
				<input type="text" name="school" placeholder="学校">
				<textarea name="jobContent" id="jobContent"  placeholder="工作内容"></textarea>
				<br/>
				<input type="submit" value="提交应聘" id="btn">
			</form>
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