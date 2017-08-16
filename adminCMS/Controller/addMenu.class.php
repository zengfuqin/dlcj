<?php
// header("content-type:text/html;charset=utf-8");
// include("../Model/Db.class.php");
class AddMenu{
	public $db;
	public $menuName;
	public $url;
	public $id;
	public function __construct($db){
		$this->db=$db;
		// $this->getFormData();
	}
	public function getFormData(){
		$this->menuName=$_GET['name'];
		$this->url=$_GET['url'];
		if (empty($this->menuName)) {return array('code'=>1,'msg'=>'请输入菜单名称！');exit;}
		if (empty($this->url)) {return array('code'=>1,'msg'=>'请输入链接地址！');exit;}
		
	}
	public function addFormData(){
		$sql="insert into adminAddMenu(name,url) values('{$this->name}','{$this->url}')";
		return $this->db-> otherData($sql);
	}
	public function getData(){
		$sql="select * from adminAddMenu";
		return $this->db->selectRow($sql);
	}
	public function getDatas(){
		$sql="select * from adminAddMenu";
		return $this->db->selectRows($sql);
	}
	public function updataData($name,$url){
		$sql="update  adminAddMenu set name='".$name."',url='".$url."' where id='2' ";
		return $this->db->otherData($sql);
	}
}
