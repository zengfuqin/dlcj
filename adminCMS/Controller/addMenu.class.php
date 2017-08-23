<?php
// header("content-type:text/html;charset=utf-8");
// include("../Model/Db.class.php");
class AddMenu extends Fpage{
	public $menuName;
	public $url;
	public function __construct($db,$tab,$pageSize=5,$showPage=3){
		parent::__construct($db,$tab,$pageSize,$showPage);
	}

	//检查表单
	public function checkForm(){
		$this->menuName=$_GET['menuName'];
		$this->url=$_GET['url'];
		if (empty($this->menuName)) {return array('code'=>103,'msg'=>"请输入菜单名称！");exit;}
		if (empty($this->url)) {return array('code'=>104,'msg'=>"请输入链接地址！");exit;}
		
	}
	//添加菜单到数据库
	public function addMenu(){
		$res=$this->checkForm();
		if ($res) {return $res;exit;}
		$sql="insert into adminAddMenu(name,url) values('{$this->menuName}','{$this->url}')";
		if ($this->db-> otherData($sql)>0) {
			return array('code'=>105,'msg'=>"添加菜单成功！");exit;
		}else{
			return array('code'=>106,'msg'=>"添加菜单失败！");exit;
		}
	}
	public function getMenu(){
		$id=$_GET['id'];
		$sql="select * from adminAddMenu where id=$id";
		return $this->db->selectRow($sql);
	}
	//选取全部菜单内容
	public function getMenus(){
		$sql="select * from adminAddMenu";
		return $this->db->selectRows($sql);
	}
	//根据id跟新菜单的 内容
	public function updataMenu(){
		// [id] => 1 [name] => 网站首页 [url] => index.html [fid] => 0
		$id=$_POST['id'];
		$name=$_POST['name'];
		$url=$_POST['url'];
		if (empty($name)) { return array('code'=>105,'msg'=>"菜单名不能为空！");exit;}
		if (empty($url)) { return array('code'=>106,'msg'=>"连接地址不能为空！");exit;}
		$sql="update adminAddMenu set name='{$name}',url='{$url}' where id={$id}";
		if ($this->db->otherData($sql)) {
			return array('code'=>107,'msg'=>"更新菜单成功！");exit;
		}else{
			return array('code'=>108,'msg'=>"更新菜单失败！");exit;
		}
	}
	//根据id删除菜单的 内容
	public function deleteMenuById(){
		$id=$_GET['id'];
		$sql="select * from adminAddMenu where fid={$id}";
		$res=$this->db-> selectRow($sql);
		 if ( $res) {
		 	return array('code'=>5,'msg'=>"请先删除子孙类！");exit;
		 }else{
		 	$sql="delete from adminAddMenu where id=$id";
		 	if($this->db->otherData($sql)>0){
		 		return array('code'=>6,'msg'=>"删除栏目成功！");exit;
		 	}else{
		 		return array('code'=>7,'msg'=>"删除栏目失败！");exit;
		 	}
		 	
		 }
	}

	
}
