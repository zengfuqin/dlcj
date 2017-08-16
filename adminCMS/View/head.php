
<div id="head"><!---head---->
	<h1 style="color:#fff;">通用简易CMS后台管理系统</h1>
	<div id="welcome">
      	<span>管理员:&nbsp;&nbsp;</span>
      	<span id="user" >
		<?php 
		/*if(!empty($_SESSION[user])){
		echo $_SESSION[user];
		}else{echo "<script>window.location.href='login.php';</script>";}*/
		?>
		<present name="Think.session.user" >
			{$Think.session.user}
		<else/>
		{:redirect(U('Index/reg'),'0')}			
		</present>
		</span>
      	<span>&nbsp;&nbsp;欢迎你!&nbsp;&nbsp;</span>		  
      	<span id="login_out" ><a style="color:#fff;text-decoration:none;" href="{:U('Index/safeOut')}" >[安全退出]</a></span>   
	</div>
</div><!---head---->
