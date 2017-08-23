<?php
// header("content-type:text/html;charset=utf-8");
// include("../Model/Db.class.php");
class Cnt{
	public $db;
	public $sel_lanmu;
	public $title;
	public $content;
	public $titleImg;
	public function __construct($db){
		$this->db=$db;
	}
	//检验表单
	public function getFormDate(){
		$this->sel_lanmu=$_POST['sel_lanmu'];
		$this->title=$_POST['title'];
		$this->content=$_POST['content'];
		$this->titleImg=$_POST['titleImg'];

	}
	//插入数据到数据库
	public function addCnt(){
		$this->getFormDate();
		if (empty($this->title)) {return array('code'=>0,'msg'=>'文章标题不能为空！');exit;}
		if (empty($this->content)) {return array('code'=>1,'msg'=>'文章内容不能为空！');exit;}
		$sql="insert into product(type,cnttitle,cnt,titleImg) values('{$this->sel_lanmu}','{$this->title}','{$this->content}','{$this->titleImg}')";
		if ($this->db->otherData($sql)>0) {
			 return array('code'=>3,'msg'=>'添加内容成功！');exit;
		 } else{
			 return array('code'=>4,'msg'=>'添加内容失败！');exit;
		 }
	}
	//获取全部菜单
	public function getMenu(){
		$sql="select * from adminAddMenu";
		return $this->db->selectRows($sql);
	}
	//获取全部数据从product
	public function getCnt(){
		$sql="select * from product";
		return $this->db->selectRows($sql);
	}
}
